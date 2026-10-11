/**
 * Search panel: a rounded slide-over that opens from the right,
 * triggered by the magnifying-glass button(s) in the header (desktop,
 * to the left of the theme toggle, and mobile, next to the hamburger).
 *
 * Opens on: clicking either [data-search-toggle] button.
 * Closes on: [data-search-close], clicking the backdrop, or Escape.
 *
 * Like kuartalgroup.com, this site has no dynamic content
 * model (no articles/apps/store DB) to index server-side, so the search
 * is a small client-side filter over this site's own sections/pages —
 * see SEARCH_INDEX below. Keep it in sync with config/kuartal.php's
 * nav/footer links when pages are added or renamed.
 */
const SEARCH_INDEX = [
    { title: 'Home', category: 'Kuartal Ventures', url: '/' },
    { title: 'Our Thesis', category: 'Our Thesis', url: '/thesis' },
    { title: 'Why we exist', category: 'Our Thesis', url: '/thesis#why' },
    { title: 'Fix, not just modernise', category: 'Our Thesis', url: '/thesis#fix-test' },
    { title: 'What we back', category: 'Our Thesis', url: '/thesis#areas' },
    { title: "What we won't back", category: 'Our Thesis', url: '/thesis#exclusions' },
    { title: 'The case against us', category: 'Our Thesis', url: '/thesis#case-against' },
    { title: 'Idea to IPO', category: 'How We Work', url: '/approach#stages' },
    { title: 'Money that fits', category: 'How We Work', url: '/approach#capital' },
    { title: 'Who owns what', category: 'How We Work', url: '/approach#ownership' },
    { title: 'How we check a company', category: 'How We Work', url: '/approach#screen' },
    { title: 'Returns', category: 'How We Work', url: '/approach#returns' },
    { title: 'Startup Incubator', category: 'Incubator', url: '/incubator' },
    { title: "Who it's for", category: 'Incubator', url: '/incubator#who' },
    { title: 'What you get', category: 'Incubator', url: '/incubator#what-you-get' },
    { title: 'What we disclose', category: 'Incubator', url: '/incubator#disclosure' },
    { title: 'Apply', category: 'Incubator', url: '/incubator#apply' },
    { title: 'Portfolio', category: 'Portfolio', url: '/portfolio' },
    { title: 'Who we are', category: 'About', url: '/about#who' },
    { title: "What we are (and aren't)", category: 'About', url: '/about#status' },
    { title: 'Keeping it honest', category: 'About', url: '/about#governance' },
    { title: 'Team', category: 'About', url: '/about#team' },
];

document.addEventListener('DOMContentLoaded', function () {
    const triggers = Array.from(document.querySelectorAll('[data-search-toggle]'));
    const panel = document.querySelector('[data-search-panel]');
    const backdrop = document.querySelector('[data-search-backdrop]');
    const closeBtn = document.querySelector('[data-search-close]');
    const input = document.querySelector('[data-search-input]');
    const browse = document.querySelector('[data-search-browse]');
    const results = document.querySelector('[data-search-results]');
    const empty = document.querySelector('[data-search-empty]');

    if (!triggers.length || !panel || !backdrop) return;

    const CLOSED_TRANSFORM = 'translate-x-[calc(100%+0.75rem)]';

    function open() {
        backdrop.classList.remove('hidden');
        panel.classList.remove('hidden');
        requestAnimationFrame(() => {
            panel.classList.remove(CLOSED_TRANSFORM);
        });
        panel.setAttribute('aria-hidden', 'false');
        triggers.forEach((t) => t.setAttribute('aria-expanded', 'true'));
        document.body.classList.add('overflow-hidden');
        if (input) setTimeout(() => input.focus(), 150);
    }

    function close() {
        panel.classList.add(CLOSED_TRANSFORM);
        panel.setAttribute('aria-hidden', 'true');
        triggers.forEach((t) => t.setAttribute('aria-expanded', 'false'));
        document.body.classList.remove('overflow-hidden');
        setTimeout(() => {
            panel.classList.add('hidden');
            backdrop.classList.add('hidden');
        }, 300);
    }

    triggers.forEach((trigger) => trigger.addEventListener('click', open));
    if (closeBtn) closeBtn.addEventListener('click', close);
    backdrop.addEventListener('click', close);

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && !panel.classList.contains('hidden')) close();
    });

    if (!input || !browse || !results) return;

    function escapeHtml(str) {
        const div = document.createElement('div');
        div.textContent = str;
        return div.innerHTML;
    }

    function renderResults(items) {
        if (!items.length) {
            results.innerHTML = '';
            results.classList.add('hidden');
            empty.classList.remove('hidden');
            return;
        }

        empty.classList.add('hidden');
        results.classList.remove('hidden');
        results.innerHTML = items.map((item) => `
            <a href="${escapeHtml(item.url)}" class="group flex items-center justify-between gap-3 rounded-xl px-3 py-3 -mx-2 transition-colors hover:bg-gray-bg dark:hover:bg-white/5">
                <span class="block truncate font-subhead text-sm text-navy/90 transition-colors group-hover:text-green-400 dark:text-white/90">${escapeHtml(item.title)}</span>
                <span class="shrink-0 text-xs text-gray-muted dark:text-white/50">${escapeHtml(item.category)}</span>
            </a>
        `).join('');
    }

    function showBrowse() {
        browse.classList.remove('hidden');
        results.classList.add('hidden');
        empty.classList.add('hidden');
    }

    function showResultsMode() {
        browse.classList.add('hidden');
    }

    input.addEventListener('input', function () {
        const query = input.value.trim().toLowerCase();

        if (query === '') {
            showBrowse();
            return;
        }

        showResultsMode();
        renderResults(SEARCH_INDEX.filter((item) =>
            item.title.toLowerCase().includes(query) || item.category.toLowerCase().includes(query)
        ));
    });

    triggers.forEach((trigger) => trigger.addEventListener('click', function () {
        input.value = '';
        showBrowse();
    }));
});
