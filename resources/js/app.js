import './theme-toggle';
import './mega-menu';
import './search-panel';

/**
 * Mobile nav toggle — shared across all Kuartal properties.
 * Expects a trigger [data-nav-toggle] and a panel [data-nav-panel].
 */
document.addEventListener('DOMContentLoaded', function () {
    const trigger = document.querySelector('[data-nav-toggle]');
    const panel = document.querySelector('[data-nav-panel]');
    if (!trigger || !panel) return;

    trigger.addEventListener('click', function () {
        const isOpen = panel.classList.toggle('hidden');
        trigger.setAttribute('aria-expanded', isOpen ? 'false' : 'true');
    });
});
