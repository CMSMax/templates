# Max AI Builder site templates

Every industry starter template Max AI Builder ships, one folder per template.

```
keystone/
  template.json   # the manifest: name, description, industry, pages
  files/          # the website itself — a drop-in Max AI Builder site
  variants/       # optional alternate homepage looks
  screenshot.png  # optional full-page shot the gallery card is cut from
```

The platform clones this repository into its gitignored
`resources/site-templates/` during `composer install`
(`php artisan site-templates:sync`) and reads whatever folders it finds:
a directory holding a valid `template.json` and a `files/` directory is a
template. **Pushing a folder to `main` publishes it** — the gallery at
maxaibuilder.com/templates picks it up on the next deploy.

A folder name is the template's slug and must be lowercase
`a-z`, `0-9` and hyphens.
