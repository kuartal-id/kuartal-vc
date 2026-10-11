/**
 * Full-width mega menu.
 *
 * Each top-level item with a dropdown is a real link to its own page —
 * clicking the label navigates there, same as any other nav item — plus
 * a small caret button beside it that opens/closes the dropdown without
 * navigating.
 *
 * On hover-capable devices (real mouse/trackpad), the panel also opens
 * as soon as the pointer enters the trigger — no click needed — and
 * stays open while the pointer is over the trigger OR the panel, closing
 * shortly after it leaves both (a small delay so crossing the gap between
 * the nav bar and the panel doesn't close it).
 *
 * The caret button's click still works everywhere (touch devices, and
 * anyone who prefers clicking to open the menu instead of the page), as
 * does keyboard focus. Closes on: Escape, clicking the backdrop, clicking
 * outside the header, or moving focus outside it.
 */
document.addEventListener('DOMContentLoaded', function () {
    const header = document.querySelector('[data-mega-nav]');
    if (!header) return;

    const triggers = Array.from(header.querySelectorAll('[data-mega-trigger]'));
    const caretButtons = Array.from(header.querySelectorAll('[data-mega-caret-btn]'));
    const backdrop = header.querySelector('[data-mega-backdrop]');
    const canHover = window.matchMedia && window.matchMedia('(hover: hover) and (pointer: fine)').matches;
    let openIndex = null;
    let closeTimer = null;

    function panelFor(index) {
        return header.querySelector(`[data-mega-panel="${index}"]`);
    }

    function triggerFor(index) {
        return triggers.find((t) => t.dataset.megaTrigger === String(index));
    }

    function clearCloseTimer() {
        if (closeTimer) {
            clearTimeout(closeTimer);
            closeTimer = null;
        }
    }

    function closeAll() {
        clearCloseTimer();
        caretButtons.forEach((b) => {
            b.setAttribute('aria-expanded', 'false');
            const caret = b.querySelector('[data-mega-caret]');
            if (caret) caret.classList.remove('rotate-180');
        });
        header.querySelectorAll('[data-mega-panel]').forEach((p) => p.classList.add('hidden'));
        if (backdrop) backdrop.classList.add('hidden');
        openIndex = null;
    }

    function open(index) {
        clearCloseTimer();
        if (openIndex === index) return;
        closeAll();
        const panel = panelFor(index);
        if (!panel) return;
        panel.classList.remove('hidden');
        if (backdrop) backdrop.classList.remove('hidden');
        const caretBtn = caretButtons.find((b) => b.dataset.megaCaretBtn === String(index));
        if (caretBtn) {
            caretBtn.setAttribute('aria-expanded', 'true');
            const caret = caretBtn.querySelector('[data-mega-caret]');
            if (caret) caret.classList.add('rotate-180');
        }
        openIndex = index;
    }

    function scheduleClose() {
        clearCloseTimer();
        closeTimer = setTimeout(closeAll, 150);
    }

    caretButtons.forEach((btn) => {
        const index = btn.dataset.megaCaretBtn;

        // Click: works on every device, and toggles if it's already open
        // (covers touch, and anyone who just prefers clicking to browse
        // the menu instead of following the label link).
        btn.addEventListener('click', function () {
            if (openIndex === index) {
                closeAll();
            } else {
                open(index);
            }
        });
    });

    if (canHover) {
        triggers.forEach((trigger) => {
            const index = trigger.dataset.megaTrigger;
            trigger.addEventListener('mouseenter', () => open(index));
            trigger.addEventListener('mouseleave', scheduleClose);
        });
        // Focusing the label link (e.g. via Tab) also opens the panel,
        // so keyboard users can see the dropdown before deciding whether
        // to follow the link or tab into the panel.
        header.querySelectorAll('[data-mega-trigger] > a').forEach((link) => {
            const index = link.closest('[data-mega-trigger]').dataset.megaTrigger;
            link.addEventListener('focus', () => open(index));
        });
    }

    if (canHover) {
        header.querySelectorAll('[data-mega-panel]').forEach((panel) => {
            panel.addEventListener('mouseenter', clearCloseTimer);
            panel.addEventListener('mouseleave', scheduleClose);
        });
    }

    if (backdrop) {
        backdrop.addEventListener('click', closeAll);
        backdrop.addEventListener('mouseenter', scheduleClose);
    }

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closeAll();
    });

    document.addEventListener('click', function (e) {
        if (openIndex === null) return;
        if (!header.contains(e.target)) closeAll();
    });

    document.addEventListener('focusin', function (e) {
        if (openIndex !== null && !header.contains(e.target)) closeAll();
    });
});
