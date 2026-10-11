{{--
    /approach — how Kuartal Ventures works from idea to IPO: stages,
    kinds of money, ownership, the company check and returns.
    Source: thesis doc + Manifesto Clauses 7.2, 7.5 and Section 5.
    Regulatory references are flagged [VERIFY] until checked.
--}}
<x-layouts.app title="How We Work — Kuartal Ventures"
               description="How Kuartal Ventures works with companies from idea to IPO, the kinds of money it uses, and how it checks a company.">

    <x-page-hero
        eyebrow="How we work"
        title="The right money, at the right time, for the right ending"
        subtitle="We work with companies from the first idea to the public market. At each step we fit the money and the ownership to the business, not to a fund's exit date." />

    {{-- Stages --}}
    <section id="stages" class="k-section scroll-mt-28">
        <div class="k-container">
            <x-section-header
                eyebrow="Idea to IPO"
                title="Five stages, join at any of them"
                subtitle="Most companies start in the incubator, but you can come to us at any stage. What changes along the way is the kind of money that makes sense." />

            <ol class="relative space-y-5 md:before:absolute md:before:left-[18px] md:before:top-4 md:before:bottom-4 md:before:w-px md:before:bg-gray-border md:dark:before:bg-white/10">
                @foreach(config('ventures.stages') as $i => $stage)
                    <li class="relative md:pl-16">
                        <span class="hidden md:flex absolute left-0 top-6 h-9 w-9 items-center justify-center rounded-full bg-green-400 font-subhead text-sm font-semibold text-navy-900">{{ $i + 1 }}</span>
                        <div class="k-card md:p-8 grid gap-4 md:grid-cols-[200px_1fr_1fr]">
                            <div>
                                <p class="text-xs text-gray-muted dark:text-white/50 mb-1"><span class="md:hidden">{{ $i + 1 }} · </span>{{ $stage['stage'] }}</p>
                                <h3 class="text-xl leading-snug">{{ $stage['name'] }}</h3>
                            </div>
                            <div>
                                <p class="font-subhead text-sm font-semibold text-navy dark:text-white mb-1">What happens</p>
                                <p class="text-sm text-gray-muted dark:text-white/60">{{ $stage['what'] }}</p>
                            </div>
                            <div>
                                <p class="font-subhead text-sm font-semibold text-navy dark:text-white mb-1">Money that fits</p>
                                <p class="text-sm text-gray-muted dark:text-white/60">{{ $stage['money'] }}</p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    {{-- Capital --}}
    <section id="capital" class="k-section bg-gray-bg dark:bg-surface-dark-alt scroll-mt-28">
        <div class="k-container">
            <x-section-header
                eyebrow="Money that fits"
                title="Not every company should take venture equity"
                subtitle="Classic venture money expects a huge exit within about ten years. That suits some of our companies and badly hurts others. A housing cooperative, a farm network and an AI-audit firm need different deals, so we design each one." />

            <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                @foreach([
                    ['Patient and evergreen capital', 'Money with no fixed date it has to leave by, so a company can grow at the pace that suits it.'],
                    ['Revenue-based financing', 'You repay as a share of your revenue, so payments shrink in a slow month and you keep your ownership.'],
                    ['Redeemable equity', 'Investors buy shares the company can buy back over time from its profits, so founders and staff can take back control.'],
                    ['Blended finance', 'Grant or "first-loss" money takes the first hit if things go wrong, which brings in private investors who would otherwise stay away.'],
                    ['Employee ownership', 'Shares for your team from early on, or a buyout by staff when founders step back.'],
                    ['Classic venture equity', 'Still the right tool when a company needs to grow fast to work at all, on terms that protect the mission.'],
                ] as [$name, $detail])
                    <x-card>
                        <h3 class="text-lg mb-2">{{ $name }}</h3>
                        <p class="text-gray-muted dark:text-white/60">{{ $detail }}</p>
                    </x-card>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Ownership --}}
    <section id="ownership" class="k-section scroll-mt-28">
        <div class="k-container grid gap-12 lg:grid-cols-[1fr_1.4fr]">
            <div>
                <p class="k-eyebrow mb-3">Who owns what</p>
                <h2 class="text-3xl md:text-4xl">Decide ownership early, while it's cheap</h2>
            </div>
            <div class="space-y-5 text-lg text-navy/80 dark:text-white/75">
                <p>
                    At every stage we ask how ownership will change as the company grows, and we write the answer into its
                    documents early. Later it gets expensive and political.
                </p>
                <p>
                    That might be a share plan from the first hire, a class of shares for users or the community, or
                    steward-ownership, where voting control stays with people committed to the mission while the economic
                    rights can still be bought and sold.
                </p>
                <p>
                    Going public is where many mission-led companies lose their way, because new shareholders can vote the
                    mission out. Before a listing on the Indonesia Stock Exchange we help companies protect the mission in
                    their articles of association, adopt listed-company governance early, and keep reporting on people and
                    planet after they list. Indonesian rules allow some tools for this, such as multiple-voting shares for
                    certain innovative companies, though who qualifies is narrow
                    <span class="text-sm text-gray-muted">[VERIFY: current OJK rules on multiple-voting shares and eligibility]</span>.
                    Smaller companies may fit the exchange's board for small and medium issuers
                    <span class="text-sm text-gray-muted">[VERIFY: current name and listing criteria of that IDX board]</span>.
                </p>
            </div>
        </div>
    </section>

    {{-- Screen --}}
    <section id="screen" class="k-section bg-gray-bg dark:bg-surface-dark-alt scroll-mt-28">
        <div class="k-container">
            <x-section-header
                eyebrow="How we check a company"
                title="The usual checks, plus the ones most investors skip"
                subtitle="We look at team, market, unit economics and legal standing like anyone else. Alongside them, with equal weight, we look at the things below. A bad result here is a reason to say no, just like bad unit economics." />

            <div class="overflow-x-auto rounded-card border border-gray-border bg-white dark:border-white/10 dark:bg-surface-dark">
                <table class="w-full min-w-[640px] text-left text-sm">
                    <thead class="border-b border-gray-border dark:border-white/10">
                        <tr class="font-subhead text-navy dark:text-white">
                            <th class="px-5 py-4 font-semibold">What we look at</th>
                            <th class="px-5 py-4 font-semibold">What we ask at the start</th>
                            <th class="px-5 py-4 font-semibold">What we track after</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-border text-gray-muted dark:divide-white/10 dark:text-white/65">
                        @foreach([
                            ['Ownership and control', 'Who holds the shares and the votes? Is there a path to worker, user or community ownership?', 'Share of the company held by staff and community; who else gets a say'],
                            ['Pay', 'How does top pay compare with the middle? Is the lowest wage above a local living wage?', 'The same ratio each year; wage floors; benefits for contract workers'],
                            ['Emissions', 'Where do the main emissions come from, and what\'s the plan to cut them?', 'Measured emissions against the plan, with the method shown'],
                            ['Nature', 'How much does the business depend on, and affect, land, water and wildlife?', 'Land and water use, pollution and any restoration, with how sure the data is'],
                            ['Workers', 'Contracts, safety, a voice, training', 'Staff turnover, injuries, complaints raised and resolved'],
                            ['Communities and users', 'Who is affected beyond customers? Is there consent where land or livelihoods are involved?', 'Results that fit the area, such as the cost of care or households housed'],
                            ['Cost of money', 'Which kinds of money suit this business and its ownership?', 'What money costs under each ownership model, so we learn what works'],
                        ] as [$line, $start, $after])
                            <tr>
                                <td class="px-5 py-4 font-subhead font-medium text-navy dark:text-white">{{ $line }}</td>
                                <td class="px-5 py-4">{{ $start }}</td>
                                <td class="px-5 py-4">{{ $after }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <p class="mt-6 max-w-3xl text-gray-muted dark:text-white/60">
                Two rules for the numbers: every figure shows how it was measured and how sure we are of it, and an honest
                "we don't know yet, here's how we'll find out" beats a polished number nobody can check. Founders at the idea
                stage aren't expected to have this data, just to start the habit.
            </p>
        </div>
    </section>

    {{-- Returns --}}
    <section id="returns" class="k-section scroll-mt-28">
        <div class="k-container">
            <x-section-header
                eyebrow="Returns"
                title="We expect our companies to make money"
                subtitle="A thesis that dodges the return question isn't worth much to founders, co-investors or anyone else. So here's how we handle it." />

            <div class="grid gap-5 md:grid-cols-2">
                <x-card>
                    <p class="k-eyebrow mb-3">Market-rate</p>
                    <h3 class="text-xl mb-3">Normal returns for the risk</h3>
                    <p class="text-gray-muted dark:text-white/60">
                        Aiming for returns you'd expect from ordinary venture or private equity at the same risk. We think many
                        companies in our areas can do this, because a big unsolved problem is often a big market.
                    </p>
                </x-card>
                <x-card>
                    <p class="k-eyebrow mb-3">Concessionary</p>
                    <h3 class="text-xl mb-3">Lower return, on purpose</h3>
                    <p class="text-gray-muted dark:text-white/60">
                        Usually blended deals with grant or first-loss money, accepting a lower financial return for a result the
                        market won't pay for yet. We never pass one off as the other, and every co-investor knows which they're in.
                    </p>
                </x-card>
            </div>

            <div class="mt-10 max-w-3xl space-y-4 text-lg text-navy/80 dark:text-white/75">
                <p>
                    We report every company on both scorecards: the usual growth, margins and cash, and at exit the multiple and
                    the annual return; plus the people-and-planet measures above, each year, with methods.
                </p>
                <p>
                    You won't find a target return figure here. Until we have a track record, any number would be marketing,
                    not evidence. We'll publish what our companies actually achieve instead, failures included.
                </p>
                <p>
                    How we get paid: success fees, sweat equity or small ownership stakes, and grants for impact work. Not fees
                    that reward doing lots of deals.
                </p>
            </div>
        </div>
    </section>

</x-layouts.app>
