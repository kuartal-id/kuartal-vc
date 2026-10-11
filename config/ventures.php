<?php

/**
 * Kuartal Ventures thesis content, shared by the homepage and /thesis
 * (and /approach for the stages) so the two can't drift apart.
 *
 * Source: "Kuartal Ventures — Investment Thesis" (draft, 12 Oct 2026),
 * itself drawn from the Kuartal Group Manifesto, Mission 2027, 2nd ed.
 * Website tone: plain words, short sentences (see the Kuartal house
 * style). Edit the thesis doc first, then mirror changes here.
 */
return [

    'areas' => [
        [
            'slug' => 'energy',
            'name' => 'Energy and climate',
            'short' => 'Clean power people can own, and help for places already feeling the heat.',
            'problem' => 'Emissions, dependence on fossil fuels, and floods, droughts and heat now reaching homes, farms and coasts.',
            'back' => 'Community and rooftop renewables, storage, energy savings, grid tools for islands, climate adaptation, and risk data and insurance for people who currently have none.',
            'trap' => 'Offsets sold as cutting emissions, and "green" labels with no measured cut behind them.',
        ],
        [
            'slug' => 'food',
            'name' => 'Food, land and nature',
            'short' => 'Better food, healthier soils and seas, and fair deals for small farmers.',
            'problem' => 'Worn-out soils and fisheries, poor-quality food, the carbon footprint of what we eat, and pollution.',
            'back' => 'Smallholder and soil-restoring farming, fair supply chains, traceability, alternative proteins, cutting waste and pollution, and nature restoration that local people own.',
            'trap' => 'Land-hungry models that push communities out, and traceability that is really just marketing.',
        ],
        [
            'slug' => 'health',
            'name' => 'Health and care',
            'short' => 'Care that ordinary families can afford, for body and mind.',
            'problem' => 'Care that costs too much, a mental-health crisis, and too little support for the people who need looking after.',
            'back' => 'Low-cost everyday and preventive care, mental-health services, care for older and disabled people, and tools that help health workers rather than replace them.',
            'trap' => 'Apps that earn more the longer you scroll, and businesses built on selling patient data.',
        ],
        [
            'slug' => 'homes',
            'name' => 'Homes and places',
            'short' => 'Affordable, low-carbon homes, and real places for people to meet.',
            'problem' => 'Homes priced out of reach, buildings exposed to heat and floods, and fewer shared spaces where people actually meet.',
            'back' => 'Affordable and low-carbon housing, community land trusts and housing cooperatives, retrofits, and public and "third" places that bring people together.',
            'trap' => 'Property speculation dressed up as making housing affordable.',
        ],
        [
            'slug' => 'information',
            'name' => 'Information and civic life',
            'short' => 'News you can trust and online spaces that leave people better off.',
            'problem' => 'Misinformation, polarisation, democracies sliding backwards, and online spaces that leave people lonelier.',
            'back' => 'Credible, accountable media, fact-checking and content-origin tools, tools for taking part in civic life, and social platforms designed for wellbeing instead of attention.',
            'trap' => 'Feeds built to maximise engagement, with a "trust and safety" page stuck on top.',
        ],
        [
            'slug' => 'ai',
            'name' => 'Responsible AI and technology',
            'short' => 'AI that answers to people, and the tools to keep it in check.',
            'problem' => 'AI rolled out with nobody accountable, and real harms to safety, privacy and people\'s jobs.',
            'back' => 'AI aimed at public problems, AI governance, auditing, testing and safety tools, privacy-protecting infrastructure, and tools that protect the rights of creators and workers.',
            'trap' => '"AI for good" branding on products that cut people out of decisions about their own lives.',
        ],
        [
            'slug' => 'work',
            'name' => 'Learning and work',
            'short' => 'Skills for the jobs that are coming, and work that pays fairly.',
            'problem' => 'Education that lags behind the job market, and automation that removes jobs without a way forward.',
            'back' => 'Affordable learning and credentials, skills for the shift to a cleaner economy, worker-owned and cooperative platforms, and tools that raise the income and bargaining power of workers and small businesses.',
            'trap' => 'Certificate mills, and platforms that treat workers as "partners" to avoid paying them properly.',
        ],
        [
            'slug' => 'creative',
            'name' => 'The creative economy',
            'short' => 'Writers, artists and makers who own their work and get paid for it.',
            'problem' => 'Books, art and culture squeezed by big platforms and by AI trained on work nobody paid for.',
            'back' => 'Platforms owned by creators, fair licensing and royalty systems, publishing, independent studios, and cultural businesses rooted in their place.',
            'trap' => 'Content farms, and models built on creative work taken without pay.',
        ],
    ],

    // The six questions every company has to pass.
    'fix_test' => [
        ['q' => 'What problem?', 'a' => 'It works on one of our eight areas, and can explain the harm it reduces in words anyone would understand.'],
        ['q' => 'Why does it work?', 'a' => 'The founders can tell us why their product changes the outcome, not just that customers like it. We want a story we can test.'],
        ['q' => 'Does the money line up?', 'a' => 'The company earns more as the problem gets smaller. A wellbeing app paid by screen time, or a loan that makes money when borrowers fall behind, fails this one.'],
        ['q' => 'Who owns it?', 'a' => 'Who owns the company, who decides, and how that changes as it grows. We favour setups where workers, users or communities get a real say and a real share.'],
        ['q' => 'What does growth cost?', 'a' => 'What happens to pay, emissions, nature, workers and nearby communities as it scales. No data yet? Then a plan to start measuring.'],
        ['q' => 'Would it happen anyway?', 'a' => 'We prefer founders tackling problems the market is leaving alone, where our help actually changes something.'],
    ],

    // Idea-to-IPO stages (homepage strip and /approach#stages).
    'stages' => [
        [
            'name' => 'Incubate',
            'stage' => 'Idea stage',
            'what' => 'Join the Startup Incubator, run with Kuartal.id. Test the problem, why your fix works, and how it makes money.',
            'money' => 'Grants, advice, and sweat equity, with what Kuartal holds published for every company.',
        ],
        [
            'name' => 'Accelerate',
            'stage' => 'Early stage',
            'what' => 'Win your first paying customers and start measuring what your growth does to people and the planet.',
            'money' => 'Revenue-based financing, convertible notes, blended finance with a first-loss layer, and securities crowdfunding.',
        ],
        [
            'name' => 'Scale',
            'stage' => 'Growth stage',
            'what' => 'Grow at a pace your governance can keep up with, and put a share plan for your team in place.',
            'money' => 'Patient and evergreen capital, redeemable equity, and co-investors who share the mission.',
        ],
        [
            'name' => 'Prepare',
            'stage' => 'Late stage',
            'what' => 'Run like a listed company before you are one: proper governance, audited reporting on people and planet, the mission written into your articles.',
            'money' => 'Growth and pre-IPO rounds from investors who accept the mission protections.',
        ],
        [
            'name' => 'List, or exit another way',
            'stage' => 'Exit',
            'what' => 'A listing on the Indonesia Stock Exchange with the mission protected, or an exit that keeps the company in the right hands.',
            'money' => 'IPO, employee or cooperative buyout, steward-ownership, or a revenue-share buyback of early investors.',
        ],
    ],

];
