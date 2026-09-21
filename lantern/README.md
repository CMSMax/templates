# Lantern

An elegant, photo-led starter for the trades — HVAC, plumbing, electrical and
handyman work sold as one company with one phone number.

## The world

Warm bone canvas, espresso ink, one clay accent used as a spice, wide Archivo
signage lettering over Libre Franklin text, hairline rules instead of boxes,
two-pixel corners, and bright daylight photography that breaks the container.
Every colour and font lives once, in `files/resources/css/site.css`; markup
only ever names the token utilities (`bg-canvas`, `text-ink`, `border-line`,
`bg-accent`, `font-display`).

## The signature

**The house plan** — a drawn cutaway of a home with a numbered clay pin on the
room each trade actually lives in (attic air handler, kitchen stack, panel,
back deck) and the same numbers on the rows beside it. It is the one picture
that makes "we cover every trade" legible at a glance. Keep it wherever the
design evolves.

## Pages

| Path | File |
| --- | --- |
| `/` | `pages/index.blade.php` |
| `/services` | `pages/services.blade.php` |
| `/services/{slug}` | `pages/services/[service.slug].blade.php` — one dynamic page over `collections/service.json` |
| `/work` | `pages/work.blade.php` |
| `/about` | `pages/about.blade.php` |
| `/contact` | `pages/contact.blade.php` |
| miss | `pages/404.blade.php` |

## Collections

`service` (six trades, each with a body for its detail page), `jobs`,
`reviews`, `faqs`, `hours`. Each ships a `.yml` beside it so the Content
editor and the section repeaters know its column types.

## Editing

Every visible string, link, image and repeating list is a field: each section
component has a companion `.yml` next to it, so the whole site is editable in
the visual editor without touching code. Scalars live on the
`<x-sections.NAME>` tag; repeater rows live in `site.json` or the collection
the instance's bound attribute names.

## Notes

- There is no contact form. The platform's `@form` directive is expanded by
  the app tier, which the template gallery's preview does not run — ask Max
  for one after seeding and it will add it properly.
- `pocketknife lint` reports `undefined variable $entries` on the dynamic
  page. That is a lint limitation: `entries` is injected by the app tier at
  compile time. `SiteTemplatesTest` compiles the template for real and is the
  gate that matters.
