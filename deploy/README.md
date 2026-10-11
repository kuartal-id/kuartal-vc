# Deploy files

`root.htaccess` is copied to the root of the `deploy` branch as `.htaccess`
by `.github/workflows/build-and-deploy.yml`. It sends every request into
`public/`, which is what lets Hostinger's Git integration pull the whole
built app straight into `public_html` with no SSH and no file moving.
See "How deploys work" in AGENTS.md.
