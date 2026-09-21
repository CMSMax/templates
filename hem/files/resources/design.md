# Hem — design system

## Atmosphere

An independent clothing shop dressed as a mill swatch book: cool card-stock grey pages,
cloth cut with pinking shears, numbered colourways, and garments photographed on a wooden
hanger against a pale wall in daylight. One committed lilac field carries the opening and
the close; the photographs carry every other colour. Bright, precise and warm without cream,
serifs or lamplight.

## Colors

| Token | Hex | Role |
|---|---|---|
| `canvas` | `#efeeea` | Page background — card-stock grey, the dominant neutral |
| `surface` | `#f8f8f6` | Lifted cards (the shop card, the swing ticket) and image wells |
| `ink` | `#1c1b20` | Headings, body text, the colour card band, principles band and footer |
| `muted` | `#5c5a63` | Secondary text, captions, labels on canvas |
| `line` | `#d6d4ce` | Hairline rules |
| `field` | `#cbbcf2` | Lilac — owns whole regions: hero, page headers, marquee, closing band, footer wordmark |
| `field-muted` | `#4a4458` | Secondary text when it sits on lilac |
| `primary` | `#1c1b20` | Solid buttons (the customer's Branding colour replaces it) |
| `primary-foreground` | `#f8f8f6` | Text on `primary` |
| `spot` | `#d9f36a` | Chartreuse thread — ONLY the "new" dot, the announcement dot and the selected-chip tick. Never text. |

Lilac is never a text tint on canvas. On ink bands, text is `canvas` at 100% / 70% / 60%.
Never add another colour.

## Typography

- Display: **Funnel Display** 500–600 — every heading, piece name and price. Weight 600,
  tracking −0.035em to −0.045em on large sizes, leading 0.9–1.0. Hero
  `clamp(3.5rem, 9.5vw, 8.25rem)`; page headers `clamp(2.75rem, 7vw, 6rem)`; section headings
  `clamp(2.25rem, 4.4vw, 3.75rem)`; piece names `text-lg`, weight 500.
- Text: **Funnel Sans** 400–600 at 1rem/1.65; intros `text-lg/8`; measures 40–48ch.
- Small labels (eyebrows, makers, sizes) are `text-sm` sentence case — never uppercase or mono.
- Prices, colour numbers, hours and phone numbers are `tabular-nums`.

## Spacing & Radius

- Sections: `py-20` mobile, `py-28` desktop; container `max-w-7xl`, gutters `px-5 sm:px-8`.
- **No rounded corners.** Cloth is cut, not rounded: fields and chips take pinked (zig-zag)
  edges through the `pinked`, `pinked-b` and `pinked-t` utilities (`--tooth` sets the size).
  Only dots are round.

## Components

- **Buttons** — square; primary `bg-primary text-primary-foreground`, `px-6 py-3.5`; the
  secondary is a text link with a 1px ink underline and an arrow that nudges on hover.
  Header button is outlined ink.
- **Piece card** — 4:5 photo on `surface`, maker in `muted`, name in display type, price
  right-aligned; image scales 3% on hover; a black "New" tag with a chartreuse dot.
- **Colour card (signature)** — on ink: numbered pinked chips as a CSS-only radio group;
  the checked chip's panel shows a pinked photo of the piece, its number huge, and a
  Piece / Cloth / Made by / Price ledger. Keep it on the homepage; change the chips with the season.
- **Swing ticket** — a small tilted surface card with a punched hole, pinned to the hero photo.
- **Makers index** — numbered hairline rows: name in large display type, what they make, where.
- **Marquee** — a lilac band tilted −2°, drifting sideways under motion-safe only.
- **Footer** — ink, four columns, and the shop name as a giant lilac wordmark cut off at the bottom.

## Voice

Plain, warm and specific about cloth, fit and where things are made. Short sentences.
Name the maker, the mill, the town. No exclamation marks, no "curated", no "elevate",
no "timeless pieces".

## Anti-patterns

- No cream or beige canvas, no serif display, no rounded cards or pill buttons.
- No lilac text on canvas, no chartreuse text, no gradients, glass or glow.
- No three-equal-card grids for everything — vary rails, ledgers, indexes and full-bleed photo.
- No emoji icons; icons are simple stroked SVG in `currentColor`.
- Photographs stay bright daylight on a pale wall — never graded, tinted or grained.

## Tokens

```css
@theme {
    --color-canvas: #efeeea;
    --color-surface: #f8f8f6;
    --color-ink: #1c1b20;
    --color-muted: #5c5a63;
    --color-line: #d6d4ce;
    --color-field: #cbbcf2;
    --color-field-muted: #4a4458;
    --color-primary: #1c1b20;
    --color-primary-foreground: #f8f8f6;
    --color-secondary: #1c1b20;
    --color-secondary-foreground: #f8f8f6;
    --color-spot: #d9f36a;
    --font-display: 'Funnel Display', ui-sans-serif, system-ui, -apple-system, sans-serif;
    --font-sans: 'Funnel Sans', ui-sans-serif, system-ui, -apple-system, sans-serif;
}
```
