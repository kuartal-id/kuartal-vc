<?php

/**
 * kuartalventures.com — Kuartal Ventures (PT Kuartal Modal Ventura).
 *
 * The site for founders and co-investors: what Kuartal Ventures backs
 * (the investment thesis), how it works from idea to IPO, the Startup
 * Incubator, the portfolio, and who it is. Built on the shared Kuartal
 * design system (kuartal-id/kuartal-brand), same structure as
 * kuartalgroup.com.
 *
 * Kuartal Ventures advises and incubates; it is NOT a fund, asset
 * manager or discretionary investment vehicle (Manifesto, Clause 3.8).
 * Every page must keep saying so plainly.
 */
return [

    'site_name' => env('KUARTAL_SITE_NAME', 'Kuartal Ventures'),
    'site_tag' => env('KUARTAL_SITE_TAG', 'Ventures'),

    // [SUPPLY: a dedicated Kuartal Ventures address if one is set up —
    // until then, the Group address that's already public.]
    'contact_email' => env('KUARTAL_CONTACT_EMAIL', 'hello@kuartal.id'),

    /*
     * Mega menu. Each top-level item is either a plain link (label + url)
     * or a mega item with a flat 'links' array (see partials/nav.blade.php).
     * The search panel indexes these same links, so a new page only
     * needs adding here.
     */
    'nav' => [
        [
            'label' => 'Our Thesis',
            'url' => '/thesis',
            'links' => [
                ['label' => 'Why we exist', 'url' => '/thesis#why'],
                ['label' => 'Fix, not just modernise', 'url' => '/thesis#fix-test'],
                ['label' => 'What we back', 'url' => '/thesis#areas'],
                ['label' => "What we won't back", 'url' => '/thesis#exclusions'],
                ['label' => 'The case against us', 'url' => '/thesis#case-against'],
            ],
        ],
        [
            'label' => 'How We Work',
            'url' => '/approach',
            'links' => [
                ['label' => 'Idea to IPO', 'url' => '/approach#stages'],
                ['label' => 'Money that fits', 'url' => '/approach#capital'],
                ['label' => 'Who owns what', 'url' => '/approach#ownership'],
                ['label' => 'How we check a company', 'url' => '/approach#screen'],
                ['label' => 'Returns', 'url' => '/approach#returns'],
            ],
        ],
        [
            'label' => 'Incubator',
            'url' => '/incubator',
            'links' => [
                ['label' => "Who it's for", 'url' => '/incubator#who'],
                ['label' => 'What you get', 'url' => '/incubator#what-you-get'],
                ['label' => 'What we disclose', 'url' => '/incubator#disclosure'],
                ['label' => 'Apply', 'url' => '/incubator#apply'],
            ],
        ],
        [
            'label' => 'Portfolio',
            'url' => '/portfolio',
        ],
        [
            'label' => 'About',
            'url' => '/about',
            'links' => [
                ['label' => 'Who we are', 'url' => '/about#who'],
                ['label' => "What we are (and aren't)", 'url' => '/about#status'],
                ['label' => 'Keeping it honest', 'url' => '/about#governance'],
                ['label' => 'Team', 'url' => '/about#team'],
            ],
        ],
    ],

    'footer' => [
        [
            'heading' => 'Our Thesis',
            'links' => [
                ['label' => 'Why we exist', 'url' => '/thesis#why'],
                ['label' => 'What we back', 'url' => '/thesis#areas'],
                ['label' => "What we won't back", 'url' => '/thesis#exclusions'],
            ],
        ],
        [
            'heading' => 'How We Work',
            'links' => [
                ['label' => 'Idea to IPO', 'url' => '/approach#stages'],
                ['label' => 'Money that fits', 'url' => '/approach#capital'],
                ['label' => 'Returns', 'url' => '/approach#returns'],
            ],
        ],
        [
            'heading' => 'Founders',
            'links' => [
                ['label' => 'Startup Incubator', 'url' => '/incubator'],
                ['label' => 'Apply', 'url' => '/incubator#apply'],
                ['label' => 'Portfolio', 'url' => '/portfolio'],
            ],
        ],
        [
            'heading' => 'About',
            'links' => [
                ['label' => 'Who we are', 'url' => '/about#who'],
                ['label' => 'Keeping it honest', 'url' => '/about#governance'],
                ['label' => 'Team', 'url' => '/about#team'],
            ],
        ],
    ],

    'social' => [
        ['label' => 'Facebook',  'icon' => 'facebook',  'url' => 'https://facebook.com/kuartal.id'],
        ['label' => 'Instagram', 'icon' => 'instagram', 'url' => 'https://instagram.com/kuartal_id'],
        ['label' => 'LinkedIn',  'icon' => 'linkedin',  'url' => 'https://linkedin.com/company/kuartal'],
        ['label' => 'YouTube',   'icon' => 'youtube',   'url' => 'https://youtube.com/@kuartal'],
        ['label' => 'X',         'icon' => 'x',          'url' => 'https://x.com/kuartal_id'],
    ],

    /*
     * "Elsewhere at Kuartal" row on the homepage.
     */
    'information_centre' => [
        ['label' => 'Kuartal Group investor relations', 'url' => 'https://kuartalgroup.com', 'icon' => 'chart'],
        ['label' => 'News and analysis on Kuartal.id', 'url' => 'https://kuartal.id', 'icon' => 'megaphone'],
        ['label' => 'Kuartal Capital', 'url' => 'https://kuartalcapital.com', 'icon' => 'briefcase'],
        ['label' => 'Kuartal Impact', 'url' => 'https://kuartalimpact.org', 'icon' => 'leaf'],
    ],

];
