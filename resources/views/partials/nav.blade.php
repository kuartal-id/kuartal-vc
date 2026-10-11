@php
    $kNav = config('kuartal.nav', []);
    $kSiteName = config('kuartal.site_name', 'Kuartal Ventures');
    $kSiteTag = config('kuartal.site_tag');

    // Picks a column count that divides a link list into rows as evenly
    // as possible (preferring a clean divisor, 4 columns max per row),
    // so every dropdown reads as a balanced grid rather than lopsided
    // columns of differing length.
    $kMegaCols = function (int $count): int {
        if ($count <= 4) {
            return max($count, 1);
        }
        foreach ([4, 3, 2] as $try) {
            if ($count % $try === 0) {
                return $try;
            }
        }
        return 4;
    };
@endphp

<header class="sticky top-0 z-50 border-b border-gray-border bg-white/90 backdrop-blur
               dark:border-white/10 dark:bg-surface-dark/90"
        data-mega-nav>
    <div class="k-container-wide flex h-24 items-center justify-between">

        <a href="/" class="flex flex-col items-start -space-y-0.5">
            <img src="{{ asset('images/logo/kuartal-logo-black.png') }}" alt="{{ $kSiteName }}" class="h-12 w-auto dark:hidden">
            <img src="{{ asset('images/logo/kuartal-logo-white.png') }}" alt="{{ $kSiteName }}" class="hidden h-12 w-auto dark:block">
            @if($kSiteTag)
                <span class="font-sans text-sm font-normal text-green-400 leading-none">{{ $kSiteTag }}</span>
            @endif
        </a>

        <nav class="hidden xl:flex items-center gap-0.5">
            @foreach($kNav as $i => $item)
                @if(!empty($item['links']))
                    <div class="flex items-center whitespace-nowrap rounded-full hover:bg-gray-bg dark:hover:bg-white/5"
                         data-mega-trigger="{{ $i }}">
                        <a href="{{ $item['url'] }}" class="k-navlink text-[13px] rounded-full py-2 pl-3 pr-0.5">
                            {{ $item['label'] }}
                        </a>
                        <button type="button"
                                class="k-navlink flex items-center rounded-full py-2 pl-0.5 pr-2"
                                data-mega-caret-btn="{{ $i }}"
                                aria-expanded="false"
                                aria-label="Show {{ $item['label'] }} menu">
                            <svg class="h-3.5 w-3.5 transition-transform" data-mega-caret viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6"/>
                            </svg>
                        </button>
                    </div>
                @else
                    <a href="{{ $item['url'] }}" class="k-navlink text-[13px] whitespace-nowrap rounded-full px-3 py-2 hover:bg-gray-bg dark:hover:bg-white/5">{{ $item['label'] }}</a>
                @endif
            @endforeach
        </nav>

        <div class="hidden xl:flex items-center gap-3">
            <button type="button" data-search-toggle aria-expanded="false"
                    class="flex h-9 w-9 items-center justify-center rounded-full border border-gray-border
                           text-navy hover:border-green-400 hover:text-green-400 transition-colors
                           dark:border-white/15 dark:text-white dark:hover:border-green-400 dark:hover:text-green-400"
                    aria-label="Search Kuartal Ventures">
                <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="7"/>
                    <path d="m21 21-4.3-4.3"/>
                </svg>
            </button>

            <button type="button" data-theme-toggle aria-pressed="false"
                    class="flex h-9 w-9 items-center justify-center rounded-full border border-gray-border
                           text-navy hover:border-green-400 hover:text-green-400 transition-colors
                           dark:border-white/15 dark:text-white dark:hover:border-green-400 dark:hover:text-green-400"
                    aria-label="Toggle dark mode">
                {{-- sun icon (shown in dark mode) --}}
                <svg class="hidden h-[18px] w-[18px] dark:block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                    <circle cx="12" cy="12" r="4"/>
                    <path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41"/>
                </svg>
                {{-- moon icon (shown in light mode) --}}
                <svg class="h-[18px] w-[18px] dark:hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
                </svg>
            </button>
        </div>

        {{-- Mobile --}}
        <div class="xl:hidden flex items-center gap-1">
            <button type="button" data-search-toggle aria-expanded="false" aria-label="Search Kuartal Ventures"
                    class="flex h-9 w-9 items-center justify-center text-navy dark:text-white">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="7"/>
                    <path d="m21 21-4.3-4.3"/>
                </svg>
            </button>
            <button type="button" data-nav-toggle aria-expanded="false" aria-label="Open menu"
                    class="flex h-9 w-9 items-center justify-center text-navy dark:text-white">
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                    <path d="M4 7h16M4 12h16M4 17h16"/>
                </svg>
            </button>
        </div>
    </div>

    {{-- Mega menu panels (desktop) --}}
    <div class="hidden xl:block">
        <div data-mega-backdrop class="hidden fixed inset-x-0 top-24 z-40 bg-navy-900/30 backdrop-blur-[1px]" style="bottom: 25vh;"></div>

        @foreach($kNav as $i => $item)
            @if(!empty($item['links']))
                <div data-mega-panel="{{ $i }}"
                     class="hidden absolute inset-x-0 top-24 z-50 border-b border-gray-border bg-white shadow-card
                            dark:border-white/10 dark:bg-surface-dark">
                    <div class="k-container-wide flex justify-center py-8">
                        <ul class="grid gap-x-10 gap-y-3" style="grid-template-columns: repeat({{ $kMegaCols(count($item['links'])) }}, minmax(0, 1fr)); max-width: 520px;">
                            @foreach($item['links'] as $link)
                                <li>
                                    <a href="{{ $link['url'] }}" class="block font-subhead text-[15px] text-navy/80 hover:text-green-400 transition-colors dark:text-white/80 dark:hover:text-green-400">
                                        {{ $link['label'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    {{-- Mobile panel: flat list, mega items shown as expandable groups --}}
    <div data-nav-panel class="hidden xl:hidden border-t border-gray-border dark:border-white/10 bg-white dark:bg-surface-dark">
        <nav class="k-container flex flex-col gap-1 py-4">
            @foreach($kNav as $item)
                <a href="{{ $item['url'] }}" class="k-navlink py-2">{{ $item['label'] }}</a>
                @if(!empty($item['links']))
                    <div class="ml-3 flex flex-col gap-1 border-l border-gray-border pl-3 mb-2 dark:border-white/10">
                        @foreach($item['links'] as $link)
                            <a href="{{ $link['url'] }}" class="font-subhead text-sm text-gray-muted py-1 dark:text-white/60">{{ $link['label'] }}</a>
                        @endforeach
                    </div>
                @endif
            @endforeach
            <button type="button" data-theme-toggle aria-pressed="false" class="k-navlink py-2 text-left">
                Toggle dark mode
            </button>
        </nav>
    </div>

</header>

{{-- Search panel — see resources/js/search-panel.js for the open/close and filter behaviour. --}}
<div data-search-backdrop class="hidden fixed inset-0 z-[70] bg-navy-900/40 backdrop-blur-[1px]"></div>

<aside data-search-panel
       class="hidden fixed right-3 top-3 bottom-3 z-[80] flex w-[calc(100%-1.5rem)] md:w-1/3 md:min-w-[380px]
              translate-x-[calc(100%+0.75rem)] flex-col overflow-hidden rounded-2xl bg-white shadow-2xl
              transition-transform duration-300 ease-out dark:bg-surface-dark"
       aria-hidden="true">
    <div class="flex-1 overflow-y-auto p-6 md:p-8">
        <div class="mb-6 flex items-center justify-between">
            <h2 class="font-display text-2xl font-semibold text-navy dark:text-white">Search Kuartal Ventures</h2>
            <button type="button" data-search-close aria-label="Close search"
                    class="flex h-9 w-9 items-center justify-center rounded-full text-navy/60 hover:text-navy dark:text-white/60 dark:hover:text-white">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                    <path d="M18 6 6 18M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <div class="relative mb-8">
            <svg class="pointer-events-none absolute left-4 top-1/2 h-4 w-4 -translate-y-1/2 text-gray-muted dark:text-white/40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="7"/>
                <path d="m21 21-4.3-4.3"/>
            </svg>
            <input type="text" data-search-input placeholder="Search the thesis, incubator, portfolio..."
                   class="w-full rounded-full border border-gray-border bg-gray-bg py-3 pl-11 pr-4 text-sm text-navy
                          placeholder:text-gray-muted focus:border-green-400 focus:outline-none
                          dark:border-white/15 dark:bg-white/5 dark:text-white dark:placeholder:text-white/40">
        </div>

        {{-- Browse state: shown while the search box is empty --}}
        <div data-search-browse>
            @foreach($kNav as $item)
                <div class="mb-8 last:mb-0">
                    <p class="k-eyebrow mb-4">{{ $item['label'] }}</p>
                    <ul class="space-y-2">
                        @if(!empty($item['links']))
                            @foreach($item['links'] as $link)
                                <li>
                                    <a href="{{ $link['url'] }}" class="font-subhead text-sm text-navy/80 hover:text-green-400 transition-colors dark:text-white/80 dark:hover:text-green-400">{{ $link['label'] }}</a>
                                </li>
                            @endforeach
                        @else
                            <li>
                                <a href="{{ $item['url'] }}" class="font-subhead text-sm text-navy/80 hover:text-green-400 transition-colors dark:text-white/80 dark:hover:text-green-400">{{ $item['label'] }}</a>
                            </li>
                        @endif
                    </ul>
                </div>
            @endforeach
        </div>

        {{-- Results state: populated client-side by resources/js/search-panel.js --}}
        <div data-search-results class="hidden space-y-1"></div>

        <p data-search-empty class="hidden text-sm text-gray-muted dark:text-white/50">
            Nothing matched that search. Try a different word.
        </p>
    </div>
</aside>
