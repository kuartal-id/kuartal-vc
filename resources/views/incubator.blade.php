{{--
    /incubator — the Startup Incubator, run jointly by Kuartal Ventures
    and Kuartal.id (Manifesto Clauses 3.5, 7.7). Programme specifics
    (length, cohort size, dates, cost) are not yet decided and are left
    as [SUPPLY] flags. Applications go by email on purpose: this site
    has no forms that collect personal data (AGENTS.md).
--}}
@php
    $kContactEmail = config('kuartal.contact_email', 'hello@kuartal.id');
    $applySubject = rawurlencode('Startup Incubator application: [your company name]');
    $applyBody = rawurlencode("1. The problem you're fixing, in plain words:\n\n2. Why your fix works:\n\n3. How it makes money (and does it earn more as the problem shrinks?):\n\n4. Who owns the company today:\n\n5. Your stage and where you're based:\n\n6. Anything else we should know:\n");
@endphp
<x-layouts.app title="Startup Incubator — Kuartal Ventures"
               description="The Startup Incubator run by Kuartal Ventures and Kuartal.id: who it's for, what you get, what we disclose, and how to apply.">

    <x-page-hero
        eyebrow="Startup Incubator"
        title="Where companies that fix things get started"
        subtitle="Run by Kuartal Ventures together with Kuartal.id. Early is fine. A clear problem and an honest plan matter more than a polished deck.">
        <div class="mt-10 flex flex-wrap gap-3">
            <a href="#apply" class="k-btn-white">How to apply</a>
            <a href="/thesis" class="k-btn-outline-white">Read our thesis first</a>
        </div>
    </x-page-hero>

    {{-- Who it's for --}}
    <section id="who" class="k-section scroll-mt-28">
        <div class="k-container">
            <x-section-header
                eyebrow="Who it's for"
                title="Founders working on one of our eight problems"
                subtitle="If you can answer our six questions honestly, even with some “not yet” answers, you're the kind of founder we want to meet." />

            <div class="grid gap-5 md:grid-cols-3">
                <x-card>
                    <h3 class="text-lg mb-2">At the idea or early stage</h3>
                    <p class="text-gray-muted dark:text-white/60">From a tested idea to your first paying customers. Later-stage companies can talk to us directly instead.</p>
                </x-card>
                <x-card>
                    <h3 class="text-lg mb-2">Fixing, not just modernising</h3>
                    <p class="text-gray-muted dark:text-white/60">Your business earns more as the problem gets smaller. <a href="/thesis#fix-test" class="text-green-500 hover:underline dark:text-green-400">The six questions &rarr;</a></p>
                </x-card>
                <x-card>
                    <h3 class="text-lg mb-2">Indonesia and Southeast Asia first</h3>
                    <p class="text-gray-muted dark:text-white/60">Building for people here, from Jakarta to Mataram and across the region.</p>
                </x-card>
            </div>
        </div>
    </section>

    {{-- What you get --}}
    <section id="what-you-get" class="k-section bg-gray-bg dark:bg-surface-dark-alt scroll-mt-28">
        <div class="k-container grid gap-12 lg:grid-cols-[1fr_1.4fr]">
            <div>
                <p class="k-eyebrow mb-3">What you get</p>
                <h2 class="text-3xl md:text-4xl">Help with the hard, unglamorous parts</h2>
            </div>
            <div>
                <ul class="space-y-5">
                    @foreach([
                        ['A business model that lines up', 'Working through how you make money so that it grows as the problem shrinks, not the other way round.'],
                        ['Ownership set up early', 'Share plans for your team, community or user shares, or steward-ownership, written in while it\'s cheap to do.'],
                        ['The right kind of money', 'Advice on whether grants, revenue-based financing, blended finance or equity fits you, and when.'],
                        ['Measuring what matters', 'A simple, honest way to start tracking pay, emissions and your effect on people and places.'],
                    ] as [$name, $detail])
                        <li class="flex gap-4">
                            <span class="mt-1 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-green-400 text-navy-900">
                                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="m5 12 5 5L20 7"/></svg>
                            </span>
                            <p><span class="font-subhead font-semibold text-navy dark:text-white">{{ $name }}.</span>
                                <span class="text-gray-muted dark:text-white/60">{{ $detail }}</span></p>
                        </li>
                    @endforeach
                </ul>

                <div class="mt-8 rounded-card border border-dashed border-gray-border p-5 text-sm text-gray-muted dark:border-white/15 dark:text-white/50">
                    [SUPPLY: programme length, cohort size, next intake dates, any cost to founders, and what Kuartal may take in return (fees, sweat equity or both)]
                </div>
            </div>
        </div>
    </section>

    {{-- Disclosure --}}
    <section id="disclosure" class="k-section scroll-mt-28">
        <div class="k-container grid gap-12 lg:grid-cols-[1fr_1.4fr]">
            <div>
                <p class="k-eyebrow mb-3">What we disclose</p>
                <h2 class="text-3xl md:text-4xl">Everything about our stake in you, in public</h2>
            </div>
            <div class="space-y-5 text-lg text-navy/80 dark:text-white/75">
                <p>
                    For every company in the incubator we publish whether Kuartal holds shares, gets paid fees, or both. We also
                    publish each company's ownership structure and how it treats its workers. You'll find it on our
                    <a href="/portfolio" class="text-green-500 hover:underline dark:text-green-400">portfolio page</a>.
                </p>
                <p>
                    Being in the incubator doesn't buy you coverage on Kuartal.id. Its newsroom decides what to write on its own,
                    and it can and will report critically on companies we work with, including any greenwashing it finds.
                </p>
            </div>
        </div>
    </section>

    {{-- Apply --}}
    <section id="apply" class="k-section bg-navy-900 scroll-mt-28">
        <div class="k-container grid gap-10 lg:grid-cols-2 lg:items-start">
            <div>
                <p class="k-eyebrow mb-3">Apply</p>
                <h2 class="text-3xl md:text-4xl !text-white">Send us a short email</h2>
                <p class="mt-4 text-white/75 text-lg">
                    No deck needed to start. Answer these in a few lines each and we'll get back to you.
                </p>
                <a href="mailto:{{ $kContactEmail }}?subject={{ $applySubject }}&body={{ $applyBody }}" class="k-btn-white mt-8">
                    Email {{ $kContactEmail }}
                </a>
                <p class="mt-4 text-sm text-white/50">
                    The button opens your email app with the questions filled in.
                    [SUPPLY: expected reply time]
                </p>
            </div>
            <ol class="space-y-4">
                @foreach([
                    'The problem you\'re fixing, in plain words',
                    'Why your fix works',
                    'How it makes money, and whether it earns more as the problem shrinks',
                    'Who owns the company today',
                    'Your stage and where you\'re based',
                ] as $i => $q)
                    <li class="flex gap-4 rounded-card border border-white/10 bg-white/5 p-5">
                        <span class="font-subhead text-sm font-semibold text-green-400">{{ $i + 1 }}</span>
                        <span class="text-white/85">{{ $q }}</span>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

</x-layouts.app>
