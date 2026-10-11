{{--
    /thesis — the Kuartal Ventures Investment Thesis in website words.
    Source: the thesis doc (draft, Oct 2026) and the Kuartal Group
    Manifesto, Mission 2027 (2nd ed.). Area and test content lives in
    config/ventures.php.
--}}
<x-layouts.app title="Our Thesis — Kuartal Ventures"
               description="What Kuartal Ventures backs, what it won't, how it decides, and the strongest case against its own approach.">

    <x-page-hero
        eyebrow="Our thesis"
        title="Fix the problem, not just the app"
        subtitle="Here's what we back, what we won't, how we decide, and why we might be wrong. All of it in one place, so you can judge us on it." />

    {{-- Why --}}
    <section id="why" class="k-section scroll-mt-28">
        <div class="k-container grid gap-12 lg:grid-cols-[1fr_1.4fr]">
            <div>
                <p class="k-eyebrow mb-3">Why we exist</p>
                <h2 class="text-3xl md:text-4xl">Make disruption fairer, more responsible and more measured</h2>
            </div>
            <div class="space-y-5 text-lg text-navy/80 dark:text-white/75">
                <p>
                    The last twenty years of startups gave us useful things. They also gave us feeds designed to keep us
                    scrolling, gig work that moved the risk onto workers, and growth that treated land, water and the climate
                    as free. None of that was inevitable. It came from how venture money is set up: funds that need a huge
                    exit inside ten years, and a scorecard that counts returns but not what it cost to earn them.
                </p>
                <p>
                    We keep a fuller scorecard. Money, people and the planet are counted together. A company that can't
                    pay its own way can't fix anything for long, so we expect real returns. But we also look at who owns
                    the company, how fairly it pays, what it emits, and what happens to the places around it.
                </p>
                <p>
                    AI is already reshaping work, news and creativity, and nobody can put it back in the box. So we don't stand
                    aside from technology. We back the companies steering it towards accountability, safety and broad benefit,
                    and protecting the human work markets tend to undervalue.
                </p>
                <p>
                    This is an Indonesian idea, not an imported one. Article 33 of the 1945 Constitution describes the economy as
                    a shared effort, and Mohammad Hatta argued that the people who do the work should own and run it. We're trying
                    to give that tradition modern venture tools.
                </p>
            </div>
        </div>
    </section>

    {{-- Fix test --}}
    <section id="fix-test" class="k-section bg-gray-bg dark:bg-surface-dark-alt scroll-mt-28">
        <div class="k-container">
            <x-section-header
                eyebrow="Fix, not just modernise"
                title="Six questions every company has to pass"
                subtitle="A telemedicine app that adds a booking screen to a clinic nobody can afford modernises it. A model that brings a doctor within reach of a district that had none fixes something. Miss any one of these and it's a no, however fast the company is growing." />

            <ol class="grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                @foreach(config('ventures.fix_test') as $i => $item)
                    <li class="k-card">
                        <span class="flex h-9 w-9 items-center justify-center rounded-full bg-green-400 font-subhead text-sm font-semibold text-navy-900 mb-4">{{ $i + 1 }}</span>
                        <h3 class="text-lg mb-2">{{ $item['q'] }}</h3>
                        <p class="text-gray-muted dark:text-white/60">{{ $item['a'] }}</p>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    {{-- Areas --}}
    <section id="areas" class="k-section scroll-mt-28">
        <div class="k-container">
            <x-section-header
                eyebrow="What we back"
                title="Eight areas, each with a trap to avoid"
                subtitle="For each one: the problem, the kind of company we look for, and the version that looks like a fix but makes things worse. The areas overlap on purpose. Be excellent at fixing one, and don't make the others worse." />

            <div class="space-y-5">
                @foreach(config('ventures.areas') as $i => $area)
                    <article id="{{ $area['slug'] }}" class="k-card scroll-mt-28 md:p-8">
                        <div class="grid gap-6 lg:grid-cols-[220px_1fr]">
                            <div>
                                <p class="font-subhead text-xs font-semibold text-green-500 dark:text-green-400 mb-2">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</p>
                                <h3 class="text-xl leading-snug">{{ $area['name'] }}</h3>
                            </div>
                            <dl class="grid gap-5 md:grid-cols-3">
                                <div>
                                    <dt class="font-subhead text-sm font-semibold text-navy dark:text-white mb-1">The problem</dt>
                                    <dd class="text-sm text-gray-muted dark:text-white/60">{{ $area['problem'] }}</dd>
                                </div>
                                <div>
                                    <dt class="font-subhead text-sm font-semibold text-navy dark:text-white mb-1">What we back</dt>
                                    <dd class="text-sm text-gray-muted dark:text-white/60">{{ $area['back'] }}</dd>
                                </div>
                                <div>
                                    <dt class="font-subhead text-sm font-semibold text-navy dark:text-white mb-1">The trap</dt>
                                    <dd class="text-sm text-gray-muted dark:text-white/60">{{ $area['trap'] }}</dd>
                                </div>
                            </dl>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Exclusions --}}
    <section id="exclusions" class="k-section bg-gray-bg dark:bg-surface-dark-alt scroll-mt-28">
        <div class="k-container grid gap-12 lg:grid-cols-[1fr_1.4fr]">
            <div>
                <p class="k-eyebrow mb-3">What we won't back</p>
                <h2 class="text-3xl md:text-4xl">Our no list</h2>
                <p class="mt-4 text-gray-muted dark:text-white/60">
                    These are the principles. We'll publish the full exclusion list, with specific activities, limits and our
                    reasons, and review it every year.
                </p>
                {{-- [SUPPLY: link to the published exclusion list once drafted (Manifesto Clause 7.4)] --}}
                <p class="mt-4 text-sm text-gray-muted dark:text-white/50">[SUPPLY: link to the published exclusion list]</p>
            </div>
            <ul class="divide-y divide-gray-border dark:divide-white/10">
                @foreach([
                    ['New fossil fuel extraction', 'and businesses that depend on it. Where we advise a heavy-emitting company on a genuine transition, we say so publicly.'],
                    ['Clearing forests and land', 'including supply chains that can\'t show they\'re free of it.'],
                    ['Selling attention', 'products that earn more the more compulsively you use them, including predatory game mechanics and feeds you can\'t control.'],
                    ['Predatory lending', 'credit or pay-later products that profit from people falling behind, late fees or hidden pricing.'],
                    ['Surveillance and manipulation', 'AI or data products built to watch people at scale, profile them in secret, or manipulate voters or users.'],
                    ['Cheap-labour tricks', 'models that only work by misclassifying workers or paying below a living wage for where they live.'],
                    ['Weapons, gambling and tobacco', 'and companies whose main customers are in those industries.'],
                    ['Greenwashing', 'claiming environmental or social benefits you can\'t prove. If we find it in a company we back, it gets published as prominently as anything else.'],
                ] as [$name, $detail])
                    <li class="py-5 first:pt-0">
                        <p><span class="font-subhead font-semibold text-navy dark:text-white">{{ $name }}</span>
                            <span class="text-gray-muted dark:text-white/60">— {{ $detail }}</span></p>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- Case against --}}
    <section id="case-against" class="k-section scroll-mt-28">
        <div class="k-container">
            <x-section-header
                eyebrow="The case against us"
                title="Four good reasons we might be wrong"
                subtitle="We publish the strongest objections to our own approach, in the words their best supporters would use, and what evidence would settle each one." />

            <div class="grid gap-5 md:grid-cols-2">
                @foreach([
                    ['"Rules cost returns."', 'Venture returns come from a few huge winners, and many of them grew by doing exactly what our no list rules out. Screen those out and you may screen out the companies that would have paid for everything else.', 'What would settle it: how our companies actually perform against a fair benchmark of Indonesian and Southeast Asian venture, over a full cycle.'],
                    ['"Fixing is in the eye of the beholder."', 'Whether a company fixes or just modernises is a judgment call, and judgment bends to enthusiasm, friendships and fashion. Impact investing has a history of calling ordinary businesses transformative.', 'What would settle it: publishing who we said yes and no to and why, then showing over time that the yeses really moved the numbers.'],
                    ['"Wrong medicine for a growing economy."', 'Indonesia still needs fast growth, jobs and cheap services. Caution and "measured growth" are ideas mostly from rich countries, and they could slow the companies that would raise incomes fastest.', 'What would settle it: whether our companies create jobs and raise pay at least as well as ordinary competitors.'],
                    ['"The mission won\'t survive the IPO."', 'Public markets reward short-term profit, and protections written into company rules can be changed or ignored. Mission-led companies often drift after they list or get bought.', 'What would settle it: tracking our companies for years after they exit, and reporting any drift we see.'],
                ] as [$claim, $detail, $settle])
                    <x-card>
                        <h3 class="text-xl mb-3">{{ $claim }}</h3>
                        <p class="text-gray-muted dark:text-white/60">{{ $detail }}</p>
                        <p class="mt-4 text-sm font-medium text-navy dark:text-white/85">{{ $settle }}</p>
                    </x-card>
                @endforeach
            </div>

            <div class="mt-10 max-w-3xl space-y-4 text-lg text-navy/80 dark:text-white/75">
                <p>
                    Honestly? We think the first and third are the toughest, and both are still open. We believe big unsolved
                    problems are big markets, and that sharing ownership makes companies stronger, not weaker. But we don't have
                    our own track record yet. Judge this thesis on the results we publish, not on how well it's written.
                </p>
            </div>

            {{-- Manifesto Clause 10.2: final judgment attributable to a named person. --}}
            <p class="mt-10 text-sm text-gray-muted dark:text-white/50">
                Thesis approved by [SUPPLY: name and role of the Partner who signs off the thesis] · Last reviewed [SUPPLY: date].
                Drafted with AI assistance and reviewed by people, as the Kuartal Manifesto requires.
            </p>
        </div>
    </section>

</x-layouts.app>
