# Hem

A bright, cloth-first starter for clothing boutiques and concept stores — a
local shop with a handful of makers, a rail that changes weekly, and a counter
where things get altered.

## The world

Cool card-stock grey canvas, ink text, one committed lilac field cut with
pinking-shear (zig-zag) edges, square corners everywhere, Funnel Display over
Funnel Sans, and garments photographed on wooden hangers in daylight. A
chartreuse thread marks only the smallest things (the "new" dot, the selected
chip). Every colour and font lives once, in `files/resources/css/site.css`;
`files/resources/design.md` is the full system.

## The signature

**The colour card** — numbered fabric chips on an ink band. Choosing one shows
the piece made from that cloth, with its composition, maker and price. It is a
plain CSS radio group (`.swatch-input:checked + label + .swatch-panel`), so it
works with any number of chips and no script. Keep it on the homepage and
change the chips with the season.

## Pages

| Path | File |
| --- | --- |
| `/` | `pages/index.blade.php` |
| `/shop` | `pages/shop.blade.php` |
| `/shop/{slug}` | `pages/shop/[piece.slug].blade.php` — one dynamic page over `collections/piece.json` |
| `/about` | `pages/about.blade.php` |
| `/visit` | `pages/visit.blade.php` |
| miss | `pages/404.blade.php` |

## Collections

`piece` (eight pieces, each with a body for its own page), `swatches` (the
colour card), `makers`, `hours`, `faqs`. Each ships a `.yml` beside it. The
announcement strip, services, marquee words and buying principles live in
`site.json`.

## Notes

- The gallery preview (`/template-previews/hem`) does not resolve dynamic
  pages, so `/shop/{slug}` 404s there; a seeded site compiles all eight
  (`SiteTemplatesTest` exports them).
- `pocketknife lint` reports `undefined variable $entries` on the dynamic
  page. `entries` is injected by the app tier at compile time.
- There is no online checkout: pieces send people to call and hold, or to
  visit. Point `shop_url` in `site.json` at an existing online store if the
  shop has one.
