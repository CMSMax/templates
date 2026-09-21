# Ridge — design system

## Atmosphere

A roofing company's site written like a weather service bulletin after a hailstorm: cool
sky-paper canvas, storm-slate ink, deep storm-navy fields, and the colours of a radar map
used only where they carry data. Dated, measured and calm — the crew already knows the
storm. It refuses the category's dark photo hero, orange button and stat row.

## Colors

| Token | Hex | Role |
|---|---|---|
| `canvas` | `#eef2f5` | Page background — cool sky paper |
| `surface` | `#ffffff` | Raised panels: roof-layer band, cards, ticket, tables |
| `ink` | `#0e1a26` | All headings and body text; header button |
| `muted` | `#4b5b6a` | Secondary text, captions, bulletin labels |
| `line` | `#cfd8e0` | Hairline rules and borders |
| `storm` | `#12263a` | The committed field — advisory strip, storm log, footer |
| `storm-line` | `#2a4058` | Rules and map streets on the storm field |
| `storm-muted` | `#a9bacb` | Secondary text on the storm field |
| `primary` | `#3ecf7a` | Radar green — every primary button and one focal mark per section. A fill only, never text. |
| `radar-1…5` | `#3ecf7a` `#f2d335` `#f28c28` `#e0344c` `#b640c8` | ONLY the storm map swath and the hail legend |
| `shingle`, `vent`, `underlayment`, `chalk`, `membrane`, `deck` | — | ONLY the roof-layer cross-section drawing |

Text on `primary` is always `ink` (`primary-foreground`).

## Typography

- Display: **Familjen Grotesk** 600 — every heading, tracking −0.03em. Hero
  `clamp(3rem, 7.4vw, 6rem)` (`text-hero`); sections `clamp(2.25rem, 4.6vw, 3.75rem)`
  (`text-section`); card titles `text-xl`–`text-3xl` with `tracking-tight`.
- Text: **Figtree** 400–600 at 1rem/1.65; intros `text-lg`/`text-xl` in `muted`; measures
  capped at 40–52ch.
- Bulletin labels (`bulletin` utility): 0.8125rem, semibold, 0.04em tracking, tabular
  numerals — for locations, dates, times, and timings. Never uppercase.

## Spacing & Radius

- Sections `py-20` mobile, `py-32` desktop; container `max-w-7xl`, gutters `px-5 md:px-8`.
- Radius: photos and panels `rounded-lg`, buttons and readouts `rounded-md`, icon buttons
  round. Shadows are soft, offset, and rare (hero button, hero report, contact ticket).

## Components

- **Advisory strip** — storm-navy bar above the header with a pulsing green dot and the
  site-wide advisory line (`site.advisory`).
- **Storm log (signature)** — a drawn hail swath (five radar bands) over a street grid, white
  squares for inspected roofs, a slow radar sweep, the hail legend, and a 2×2 readout of the
  storm. Keep it on the homepage and the storm page.
- **Roof layers (signature)** — a pulled-apart, pitched stack of the roof's layers drawn in
  CSS; the numbered list beside it lights each slab.
- **Roof report** — every finished roof carries a ruled readout: material, size, days on site.
- **Service rows** — display-type name, bulletin timing on the right, one line of summary,
  hairline dividers, round arrow that fills green on hover.
- **Claim forecast** — the insurance timeline as a five-column forecast strip.

## Voice

A calm crew lead after a hailstorm. Plain facts, real numbers, dates and times. Say what
happens and when. No "quality craftsmanship", no exclamation points, never fear-selling.

## Anti-patterns

- No dark full-bleed photo hero, no orange or yellow buttons, no stat-row hero.
- No radar colours outside the map and legend; no green text.
- No three-equal-card grids — use ruled rows, readouts, and the forecast strip.
- No emoji icons; icons are stroked SVG in `currentColor` with one green stroke.

## Tokens

```css
@theme {
    --color-canvas: #eef2f5;
    --color-surface: #ffffff;
    --color-ink: #0e1a26;
    --color-muted: #4b5b6a;
    --color-line: #cfd8e0;
    --color-storm: #12263a;
    --color-storm-line: #2a4058;
    --color-storm-muted: #a9bacb;
    --color-primary: #3ecf7a;
    --color-primary-foreground: #0e1a26;
    --font-display: 'Familjen Grotesk', ui-sans-serif, system-ui, sans-serif;
    --font-sans: 'Figtree', ui-sans-serif, system-ui, sans-serif;
}
```
