{{--
    /portfolio — companies Kuartal Ventures works with, with the
    disclosure the Manifesto requires for each (Clause 7.7): Kuartal's
    position (equity, fees or both), ownership structure, and how the
    company treats its workers. No company is listed until its details
    are confirmed — never fill these rows with guesses.
--}}
<x-layouts.app title="Portfolio — Kuartal Ventures"
               description="The companies Kuartal Ventures works with, and exactly what Kuartal holds in each.">

    <x-page-hero
        eyebrow="Portfolio"
        title="Who we work with, and what we hold"
        subtitle="Every company, with the area it works on, its stage, what Kuartal gets from it, who owns it and how it treats its people. No small print." />

    <section class="k-section">
        <div class="k-container">
            <div class="overflow-x-auto rounded-card border border-gray-border bg-white dark:border-white/10 dark:bg-surface-dark-alt">
                <table class="w-full min-w-[820px] text-left text-sm">
                    <thead class="border-b border-gray-border dark:border-white/10">
                        <tr class="font-subhead text-navy dark:text-white">
                            <th class="px-5 py-4 font-semibold">Company</th>
                            <th class="px-5 py-4 font-semibold">Area</th>
                            <th class="px-5 py-4 font-semibold">Stage</th>
                            <th class="px-5 py-4 font-semibold">Kuartal holds</th>
                            <th class="px-5 py-4 font-semibold">Who owns it</th>
                            <th class="px-5 py-4 font-semibold">How it treats workers</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-border text-gray-muted dark:divide-white/10 dark:text-white/60">
                        @for ($i = 0; $i < 3; $i++)
                            <tr>
                                <td class="px-5 py-4 font-subhead font-medium text-navy dark:text-white">[SUPPLY: company]</td>
                                <td class="px-5 py-4">[SUPPLY: thesis area]</td>
                                <td class="px-5 py-4">[SUPPLY: stage]</td>
                                <td class="px-5 py-4">[SUPPLY: equity, fees or both]</td>
                                <td class="px-5 py-4">[SUPPLY: ownership structure]</td>
                                <td class="px-5 py-4">[SUPPLY: pay, contracts, staff ownership]</td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>

            <div class="mt-10 grid gap-5 md:grid-cols-2">
                <x-card>
                    <h3 class="text-lg mb-2">Failures get reported too</h3>
                    <p class="text-gray-muted dark:text-white/60">
                        We'll publish how our companies actually do, including the ones that don't work out. A portfolio page
                        that only shows winners tells you nothing.
                    </p>
                </x-card>
                <x-card>
                    <h3 class="text-lg mb-2">Results, once a year</h3>
                    <p class="text-gray-muted dark:text-white/60">
                        Each company's money results and people-and-planet measures, with the methods behind them.
                        [SUPPLY: link to the first annual results report once published]
                    </p>
                </x-card>
            </div>
        </div>
    </section>

</x-layouts.app>
