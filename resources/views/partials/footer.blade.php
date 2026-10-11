@php
    $kFooter = config('kuartal.footer', []);
    $kSocial = config('kuartal.social', []);
    $kSiteName = config('kuartal.site_name', 'Kuartal Ventures');
    $kContactEmail = config('kuartal.contact_email', 'hello@kuartal.id');
@endphp

<footer class="bg-white dark:bg-surface-dark">
    {{-- Same structure as kuartalgroup.com's footer: logo, line, social
         and contact on the left; link groups on the right. The newsletter
         form is left out on purpose: this site collects no personal data
         (see AGENTS.md). --}}
    <div class="k-container-wide py-14">
        <div class="flex flex-col gap-12 lg:flex-row lg:items-start">
            <div class="lg:w-[320px] lg:shrink-0">
                <img src="{{ asset('images/logo/kuartal-logo-black.png') }}" alt="{{ $kSiteName }}" class="h-28 w-auto dark:hidden">
                <img src="{{ asset('images/logo/kuartal-logo-white.png') }}" alt="{{ $kSiteName }}" class="hidden h-28 w-auto dark:block">

                <p class="mt-4 text-sm text-gray-muted dark:text-white/60 max-w-[280px]">
                    Backing founders who fix things, from the first idea to the stock exchange.
                </p>

                <div class="mt-6 flex items-center gap-5">
                    @foreach($kSocial as $social)
                        <a href="{{ $social['url'] }}" target="_blank" rel="noopener noreferrer"
                           aria-label="{{ $social['label'] }}"
                           class="text-navy/70 hover:text-green-400 transition-colors
                                  dark:text-white/70 dark:hover:text-green-400">
                            <x-social-icon :icon="$social['icon']" class="h-6 w-6" />
                        </a>
                    @endforeach
                </div>

                <a href="mailto:{{ $kContactEmail }}" class="k-navlink mt-6 inline-block">{{ $kContactEmail }}</a>
            </div>

            <div class="grid grid-cols-2 gap-x-10 gap-y-8 sm:grid-cols-4 lg:flex lg:ml-auto lg:justify-end lg:gap-x-14">
                @foreach($kFooter as $col)
                    <div class="lg:w-[170px]">
                        <div class="k-eyebrow mb-3">{{ $col['heading'] }}</div>
                        <ul class="space-y-2">
                            @foreach($col['links'] as $link)
                                <li>
                                    <a href="{{ $link['url'] }}" class="k-navlink">{{ $link['label'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Plain-words status line. Required on every page: Kuartal
             Ventures advises and incubates; it is not a fund (Manifesto,
             Clause 3.8). --}}
        <p class="mt-12 max-w-4xl text-xs leading-relaxed text-gray-muted dark:text-white/50">
            Kuartal Ventures (PT Kuartal Modal Ventura) gives advice and runs a startup incubator. It is not a fund,
            an asset manager or an investment vehicle, and it doesn't manage anyone's money today. Nothing on this
            site is an offer to buy or sell shares, or personal investment advice.
        </p>
    </div>

    <div class="k-rule">
        <div class="k-container-wide py-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <p class="text-xs text-gray-muted dark:text-white/50">&copy; {{ date('Y') }} PT Kuartal Modal Ventura, a Kuartal Group company.</p>

            <div class="flex flex-wrap items-center gap-4">
                <div class="flex flex-wrap items-center gap-x-4 gap-y-1 text-sm font-medium text-gray-muted dark:text-white/50">
                    <a href="https://kuartal.id/membership" class="hover:text-green-400">Manifesto</a>
                    <a href="https://kuartal.id/legal" class="hover:text-green-400">Corrections &middot; Privacy &middot; Terms</a>
                    <a href="https://kuartalgroup.com" class="hover:text-green-400">Kuartal Group</a>
                </div>

                <a href="https://kuartal.id" class="shrink-0">
                    <img src="{{ asset('images/logo/kuartal-logo-black.png') }}" alt="Kuartal" class="h-7 w-auto opacity-70 dark:hidden">
                    <img src="{{ asset('images/logo/kuartal-logo-white.png') }}" alt="Kuartal" class="hidden h-7 w-auto opacity-70 dark:block">
                </a>
            </div>
        </div>
    </div>
</footer>
