{{--
    /about — who Kuartal Ventures is, its legal status in plain words,
    governance and conflicts, and the team.
    Status wording must stay consistent with Manifesto Clause 3.8 and
    the Roadmap (Sections 14–15): advisory today; discretionary
    venture capital planned for Phase II (2029–2031), conditional on
    Phase I being complete. Team is [SUPPLY] until confirmed.
--}}
<x-layouts.app title="About — Kuartal Ventures"
               description="Who Kuartal Ventures is, what it is and isn't, how it keeps itself honest, and the team.">

    <x-page-hero
        eyebrow="About"
        title="Part of Kuartal Group, built to back a better kind of startup"
        subtitle="Kuartal Ventures is the venture arm of Kuartal Group, an Indonesian group of media, research, advisory and impact businesses, based in Mataram, Lombok." />

    {{-- Who --}}
    <section id="who" class="k-section scroll-mt-28">
        <div class="k-container grid gap-12 lg:grid-cols-[1fr_1.4fr]">
            <div>
                <p class="k-eyebrow mb-3">Who we are</p>
                <h2 class="text-3xl md:text-4xl">The venture side of Kuartal</h2>
            </div>
            <div class="space-y-5 text-lg text-navy/80 dark:text-white/75">
                <p>
                    Kuartal Ventures is PT Kuartal Modal Ventura, a subsidiary of PT Kuartal Technologies Indonesia, which is
                    wholly owned by PT Kuartal Financial Group. Kuartal Group itself is owned equally by its Partners, with no
                    single controlling shareholder.
                </p>
                <p>
                    Our sister business, Kuartal Capital, advises on public markets, commodities and private equity. Kuartal Impact,
                    under the Group's foundation, works on social enterprise and impact investing. Together with Kuartal.id we run
                    the Startup Incubator.
                </p>
                <p>
                    Everything we do follows the Kuartal Group Manifesto, Mission 2027: the rules the whole Group signs up to on
                    independence, disclosure and counting people and the planet alongside money.
                    <a href="https://kuartal.id/membership" class="text-green-500 hover:underline dark:text-green-400">Read the Manifesto &rarr;</a>
                </p>
            </div>
        </div>
    </section>

    {{-- Status --}}
    <section id="status" class="k-section bg-gray-bg dark:bg-surface-dark-alt scroll-mt-28">
        <div class="k-container">
            <x-section-header
                eyebrow="What we are (and aren't)"
                title="Straight answers about our status"
                subtitle="Venture firms often blur what they actually are. Here's ours, plainly." />

            <div class="grid gap-5 md:grid-cols-3">
                <x-card>
                    <p class="k-eyebrow mb-3">Today</p>
                    <h3 class="text-xl mb-3">Advice and an incubator</h3>
                    <p class="text-gray-muted dark:text-white/60">
                        We advise founders and companies and run the Startup Incubator. We're not a fund, an asset manager or an
                        investment vehicle, and we don't manage anyone's money.
                    </p>
                </x-card>
                <x-card>
                    <p class="k-eyebrow mb-3">How we're paid</p>
                    <h3 class="text-xl mb-3">When you do well</h3>
                    <p class="text-gray-muted dark:text-white/60">
                        Success fees, sweat equity or small ownership stakes, and grants for impact work. Not fees that reward
                        doing lots of deals. Any change to this is told to clients first.
                    </p>
                </x-card>
                <x-card>
                    <p class="k-eyebrow mb-3">Next</p>
                    <h3 class="text-xl mb-3">Direct investing, later</h3>
                    <p class="text-gray-muted dark:text-white/60">
                        PT Kuartal Modal Ventura is set up as an Indonesian venture capital company. Kuartal Group's roadmap plans for
                        it to start investing directly in 2029–2031, but only once the groundwork is done. That's a plan, not a promise.
                    </p>
                </x-card>
            </div>

            <p class="mt-8 max-w-3xl text-sm text-gray-muted dark:text-white/50">
                Nothing on this site is an offer to buy or sell shares, or personal investment advice.
                [VERIFY: current OJK licence details for PT Kuartal Modal Ventura before publishing]
            </p>
        </div>
    </section>

    {{-- Governance --}}
    <section id="governance" class="k-section scroll-mt-28">
        <div class="k-container">
            <x-section-header
                eyebrow="Keeping it honest"
                title="Rules we hold ourselves to"
                subtitle="An investor that asks companies to be open has to be open itself. These come straight from the Kuartal Manifesto." />

            <div class="grid gap-5 md:grid-cols-2">
                @foreach([
                    ['No buying coverage', 'Companies we advise or back get no say over how Kuartal.id or Kuartal Publishing covers them, their sector or their competitors. If the newsroom finds greenwashing at one of ours, it publishes it as prominently as anywhere else.'],
                    ['Conflicts out in the open', 'Some of our areas overlap with Kuartal\'s own products, like Kuartalspace (online community) and Klassroom (learning), and with businesses linked to our Partners. When that happens we disclose it, and the Partner involved steps out of the decision.'],
                    ['No trading on what we learn', 'Nobody may use private information from an advisory or incubator relationship to trade, or to help another client.'],
                    ['Our own numbers too', 'Our pay gap and our own footprint, including the computing behind the AI tools we use, are reported in Kuartal Group\'s public disclosures.'],
                    ['A published no list', 'We publish what we won\'t advise on or back, with our reasons, and review it every year.'],
                    ['Mistakes corrected in public', 'If we get something wrong in a way that could mislead you, we correct it openly and say what changed. Write to us anytime.'],
                ] as [$name, $detail])
                    <x-card>
                        <h3 class="text-lg mb-2">{{ $name }}</h3>
                        <p class="text-gray-muted dark:text-white/60">{{ $detail }}</p>
                    </x-card>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Team --}}
    <section id="team" class="k-section bg-gray-bg dark:bg-surface-dark-alt scroll-mt-28">
        <div class="k-container">
            <x-section-header
                eyebrow="Team"
                title="The people behind Kuartal Ventures" />

            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                @for ($i = 0; $i < 4; $i++)
                    <x-card>
                        <div class="mb-4 h-16 w-16 rounded-full bg-gray-border dark:bg-white/10"></div>
                        <h3 class="text-lg">[SUPPLY: name]</h3>
                        <p class="text-sm text-gray-muted dark:text-white/60">[SUPPLY: role]</p>
                    </x-card>
                @endfor
            </div>

            <p class="mt-8 text-gray-muted dark:text-white/60">
                Want to talk? <a href="mailto:{{ config('kuartal.contact_email', 'hello@kuartal.id') }}" class="text-green-500 hover:underline dark:text-green-400">{{ config('kuartal.contact_email', 'hello@kuartal.id') }}</a>
            </p>
        </div>
    </section>

</x-layouts.app>
