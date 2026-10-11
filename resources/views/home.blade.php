{{--
    kuartalventures.com homepage. Content follows the Kuartal Ventures
    Investment Thesis (draft, Oct 2026); the eight areas and the stages
    come from config/ventures.php so this page and /thesis stay in sync.
--}}
<x-layouts.app title="Kuartal Ventures — Backing founders who fix things">

    {{-- Hero --}}
    <section class="relative isolate flex min-h-[88vh] items-center overflow-hidden">
        <div class="k-hero-bg"></div>
        <div class="k-hero-overlay"></div>

        <div class="k-container relative py-24">
            <p class="font-subhead text-sm font-semibold text-green-400 mb-6">Kuartal Ventures</p>
            <h1 class="max-w-4xl text-4xl md:text-6xl lg:text-7xl leading-[1.08] font-display font-semibold !text-white">
                We back founders who <span class="text-green-400">fix things</span>.
            </h1>
            <p class="mt-6 max-w-2xl text-white/80 text-lg">
                Not apps that make a broken system a bit faster. Companies that make the problem smaller:
                climate, health, housing, food, trustworthy news, AI that answers to people. We help them
                grow from a first idea to a public listing, with Indonesia and Southeast Asia first.
            </p>
            <div class="mt-10 flex flex-wrap gap-3">
                <a href="/thesis" class="k-btn-white">Read our thesis</a>
                <a href="/incubator#apply" class="k-btn-outline-white">Apply to the incubator</a>
            </div>
        </div>
    </section>

    {{-- Straight talk on status --}}
    <section class="border-b border-gray-border bg-white dark:border-white/10 dark:bg-surface-dark">
        <div class="k-container py-6 flex flex-col gap-2 md:flex-row md:items-center md:gap-6">
            <p class="font-subhead text-sm font-semibold text-navy dark:text-white shrink-0">Good to know</p>
            <p class="text-sm text-gray-muted dark:text-white/60">
                Today we advise founders and run a startup incubator. We're not a fund and we don't manage anyone's money.
                Our roadmap plans for direct investing in 2029–2031, once the groundwork is done, and we'll say so loudly if and when it starts.
                <a href="/about#status" class="text-green-500 hover:underline dark:text-green-400">What that means &rarr;</a>
            </p>
        </div>
    </section>

    {{-- Why we exist --}}
    <section class="k-section">
        <div class="k-container">
            <x-section-header
                eyebrow="Why we exist"
                title="Startups changed the world. Not always for the better."
                subtitle="Venture money is great at speed and bad at consequences. We think that's a choice, not a law of nature, so we're making a different one."
            />

            <div class="grid gap-6 md:grid-cols-3">
                <x-card>
                    <p class="k-eyebrow mb-3">Fairer</p>
                    <h3 class="text-xl mb-3">Share what you build</h3>
                    <p class="text-gray-muted dark:text-white/60">
                        When a startup wins, the cap table wins. The drivers, couriers, creators and teachers who helped build it
                        usually don't. We back companies that share ownership and pay more widely.
                    </p>
                </x-card>
                <x-card>
                    <p class="k-eyebrow mb-3">Responsible</p>
                    <h3 class="text-xl mb-3">No hidden bills</h3>
                    <p class="text-gray-muted dark:text-white/60">
                        A lot of growth came from pushing costs onto someone else: our attention, workers' security, cities, the climate.
                        We won't back a business that only works because someone else quietly pays.
                    </p>
                </x-card>
                <x-card>
                    <p class="k-eyebrow mb-3">Measured</p>
                    <h3 class="text-xl mb-3">Grow at a pace you can handle</h3>
                    <p class="text-gray-muted dark:text-white/60">
                        "Move fast and break things" breaks people too. Growth that outruns a company's ability to run itself well
                        tends to hurt its workers, its users or the company. We hold ourselves to the same rule.
                    </p>
                </x-card>
            </div>
        </div>
    </section>

    {{-- The eight areas --}}
    <section class="k-section bg-gray-bg dark:bg-surface-dark-alt">
        <div class="k-container">
            <x-section-header
                eyebrow="What we back"
                title="Eight problems worth a career"
                subtitle="We start from the problem, not the sector. If you're making one of these smaller, without making the others worse, we want to talk."
            />

            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                @foreach(config('ventures.areas') as $i => $area)
                    <a href="/thesis#{{ $area['slug'] }}" class="k-card block transition-all duration-200 hover:-translate-y-1 hover:border-green-400">
                        <p class="font-subhead text-xs font-semibold text-green-500 dark:text-green-400 mb-3">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</p>
                        <h3 class="text-lg leading-snug mb-2">{{ $area['name'] }}</h3>
                        <p class="text-sm text-gray-muted dark:text-white/60">{{ $area['short'] }}</p>
                    </a>
                @endforeach
            </div>

            <a href="/thesis#areas" class="k-navlink mt-8 inline-block">What we look for in each area &rarr;</a>
        </div>
    </section>

    {{-- Idea to IPO --}}
    <section class="k-section">
        <div class="k-container">
            <x-section-header
                eyebrow="How we work"
                title="From a first idea to the stock exchange"
                subtitle="We stay with companies the whole way, and match the money to the business at each step instead of forcing everyone onto the same ten-year clock."
            />

            <ol class="grid gap-5 md:grid-cols-5">
                @foreach(config('ventures.stages') as $i => $stage)
                    <li class="relative k-card">
                        <span class="flex h-9 w-9 items-center justify-center rounded-full bg-green-400 font-subhead text-sm font-semibold text-navy-900 mb-4">{{ $i + 1 }}</span>
                        <p class="text-xs text-gray-muted dark:text-white/50 mb-1">{{ $stage['stage'] }}</p>
                        <h3 class="text-lg leading-snug">{{ $stage['name'] }}</h3>
                    </li>
                @endforeach
            </ol>

            <p class="mt-8 max-w-3xl text-gray-muted dark:text-white/60">
                An IPO is one good ending, not the only one. Some companies are better off owned by their staff, a cooperative
                or a steward trust. We'll help you pick the ending that keeps the company doing what it's for.
            </p>
            <a href="/approach" class="k-navlink mt-4 inline-block">How each stage works &rarr;</a>
        </div>
    </section>

    {{-- The case against us --}}
    <section class="k-section bg-navy-900 text-white">
        <div class="k-container grid gap-10 lg:grid-cols-2 lg:items-center">
            <div>
                <p class="k-eyebrow mb-3">Show your working</p>
                <h2 class="text-3xl md:text-4xl !text-white">We publish the best case against us</h2>
            </div>
            <div>
                <p class="text-white/80 text-lg">
                    Maybe rules like ours cost returns. Maybe "fixing, not modernising" is too fuzzy to judge.
                    Maybe a growing economy like Indonesia's needs speed more than caution. We take these arguments
                    seriously, say what evidence would settle them, and promise to publish our results, including
                    the companies that fail.
                </p>
                <a href="/thesis#case-against" class="k-btn-outline-white mt-8">Read the case against</a>
            </div>
        </div>
    </section>

    {{-- Incubator CTA --}}
    <section class="k-section">
        <div class="k-container">
            <div class="k-card md:p-12 grid gap-8 md:grid-cols-[1fr_auto] md:items-center">
                <div>
                    <p class="k-eyebrow mb-3">For founders</p>
                    <h2 class="text-3xl">Got an idea that fixes something?</h2>
                    <p class="mt-4 max-w-2xl text-gray-muted dark:text-white/60">
                        The Startup Incubator, run by Kuartal Ventures with Kuartal.id, is where most of our companies start.
                        Early is fine. Unsure is fine. A clear problem and an honest plan is what counts.
                    </p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="/incubator#apply" class="k-btn-primary">How to apply</a>
                    <a href="/incubator" class="k-btn-outline">About the incubator</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Elsewhere at Kuartal --}}
    <section class="k-section pt-0">
        <div class="k-container">
            <x-section-header eyebrow="Elsewhere at Kuartal" title="Part of a bigger group" align="center" />

            <div class="grid grid-cols-2 gap-5 sm:grid-cols-4">
                @foreach(config('kuartal.information_centre', []) as $item)
                    <a href="{{ $item['url'] }}" target="_blank" rel="noopener noreferrer" class="k-info-tile">
                        <span class="k-info-tile-icon">
                            <x-info-icon :icon="$item['icon']" class="h-6 w-6" />
                        </span>
                        <span class="k-info-tile-label">{{ $item['label'] }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

</x-layouts.app>
