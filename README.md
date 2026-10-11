# Kuartal Ventures (kuartalventures.com)

The site for Kuartal Ventures (PT Kuartal Modal Ventura): the investment thesis, how it works from
idea to IPO, the Startup Incubator, the portfolio and the team.

Laravel 13 + Tailwind v4 + Vite, built on the shared Kuartal design system
([kuartal-id/kuartal-brand](https://github.com/kuartal-id/kuartal-brand)) with the same structure
as kuartalgroup.com. No login, no database, no forms that collect personal data.

**Read `AGENTS.md` before changing anything.**

## Pages

| URL | View | What's on it |
|---|---|---|
| `/` | `home` | Hero, status note, why we exist, the eight areas, idea-to-IPO, case against, incubator, Kuartal links |
| `/thesis` | `thesis` | Why we exist, the six-question fix test, the eight areas, the no list, the case against us |
| `/approach` | `approach` | Stages, kinds of money, ownership, the company check, returns |
| `/incubator` | `incubator` | Who it's for, what you get, disclosure, apply by email |
| `/portfolio` | `portfolio` | Disclosure table (empty until companies are confirmed) |
| `/about` | `about` | Who we are, status in plain words, governance rules, team |

Thesis content (areas, fix test, stages) lives in `config/ventures.php`; site name, nav and footer in
`config/kuartal.php`.

## Content still to supply

Search `resources/views` for `[SUPPLY` and `[VERIFY` — team, portfolio companies, incubator programme
details, the published exclusion list, the Partner who signs off the thesis, and two regulatory checks
(OJK multiple-voting shares; the IDX board for smaller issuers) plus the PT Kuartal Modal Ventura licence wording.

## Going live on Hostinger (one time, all in the browser — no SSH)

1. Merge the pull request into `main`. GitHub Actions builds the site and creates the **`deploy`** branch
   (check the **Actions** tab shows a green tick).
2. In hPanel, add the domain **kuartalventures.com** (if it isn't there yet), and set its PHP version to
   **8.3 or newer** (Website → Advanced → PHP Configuration).
3. Make sure that site's `public_html` folder is empty (File Manager), as Hostinger's Git tool requires.
4. hPanel → Website → Advanced → **Git**: repository `https://github.com/kuartal-id/kuartal-vc.git`,
   branch **`deploy`**, directory left blank (installs into `public_html`). Click **Create**, then **Deploy**.
5. Still on that page, turn on **Auto Deployment** and copy the webhook URL. On GitHub: repo
   **Settings → Webhooks → Add webhook**, paste the URL, content type `application/json`, "Just the push event".

From then on, every merge to `main` rebuilds `deploy` and Hostinger pulls it within a minute or two.
No `.env` and no keys are needed on the server.

## Local setup (optional)

```
composer install
npm install
npm run build      # or `npm run dev` while working
php artisan serve
php artisan test
```
