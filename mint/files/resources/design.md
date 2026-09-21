# Mint — design system

## Atmosphere

A dental practice dressed like good toothpaste packaging: a white carton, colour-blocked
aqua-mint fields, deep ink type set big and tight, and one coral dot of warmth. Bright,
clean and cheerful without being childish; calm without being clinical. It refuses the
category's blue-and-white stock-photo split hero.

## Colors

| Token | Hex | Role |
|---|---|---|
| `canvas` | `#ffffff` | Page background — the white carton |
| `surface` | `#f3f7f6` | Quiet panels (footer, team, hour cards, secondary buttons) |
| `ink` | `#0d2230` | All headings and body text |
| `muted` | `#4b5c67` | Secondary text, captions, labels |
| `line` | `#dce5e3` | Hairline rules and card borders |
| `mint` | `#a9e5d8` | The committed field color — hero, page headers, closing booking band, membership card |
| `mint-soft` | `#e2f5f0` | Softer field for the dentist's note and checklist; hover wash on list rows |
| `accent` | `#16324a` | Primary buttons and the dark smile-compare panel |
| `accent-ink` | `#ffffff` | Text on `accent` |
| `pop` | `#f0644c` | Coral — ONLY small dots, stars, the quote mark and the compare knob. Never text. |

Mint owns whole regions; it is never used as small tints on text. Never add another color.

## Typography

- Display: **Bricolage Grotesque** 500–700 — every heading, weight 600, tracking −0.03em to
  −0.045em, leading 0.92–1.05. Hero `clamp(3rem, 8.4vw, 7.25rem)`; page headers
  `clamp(2.75rem, 6.4vw, 5.5rem)`; section headings `text-4xl`→`text-5xl`.
- Text: **Hanken Grotesk** 400–600 at 1rem/1.65; intros `text-lg/relaxed`; measures capped
  at 36–60ch. Numbers (prices, hours, phone) are `tabular-nums`.
- Eyebrows: small uppercase semibold with a coral dot before them.

## Spacing & Radius

- Sections: `py-20` mobile, `py-28`/`py-32` desktop; container `max-w-7xl`, gutters
  `px-5 sm:px-8`.
- Colour fields are inset "cartons": `px-3 sm:px-4` from the viewport edge, radius `2rem`.
  Photos and cards inside use `1.5rem`–`1.75rem`. Buttons and chips are fully rounded.

## Components

- **Buttons** — pill; primary `bg-accent text-accent-ink`, secondary `bg-canvas/60` on mint
  or `bg-surface` on white; hover darkens, active scales to 0.97, focus ring in `accent`.
- **Treatment rows** — name in display type, price right-aligned, one-line blurb, time;
  hairline dividers; mint-soft wash on hover.
- **Smile compare (signature)** — a before/after pair split by a draggable coral knob, on
  the dark accent carton, with a Treatment / Visits / Start-to-finish ledger beside it.
  Keep it on the homepage.
- **Numbered steps** — oversized mint numerals (01, 02, 03) beside a title and one line.
- **Hours cards** — white card inside the mint booking band; hairline rows.

## Voice

Warm, plain and reassuring. Short sentences. Say what happens and what it costs. No fear,
no jargon, no exclamation points. Prices are published, plans are written down.

## Anti-patterns

- No blue-white split hero with a floating card; no gradients, glass or glow.
- No coral text or coral buttons; no mint on small text.
- No three-equal-card grids for everything — vary list, ledger, carton and editorial rows.
- No emoji icons; icons are simple stroked SVG in `currentColor`.

## Tokens

```css
@theme {
    --color-canvas: #ffffff;
    --color-surface: #f3f7f6;
    --color-ink: #0d2230;
    --color-muted: #4b5c67;
    --color-line: #dce5e3;
    --color-mint: #a9e5d8;
    --color-mint-soft: #e2f5f0;
    --color-accent: #16324a;
    --color-accent-ink: #ffffff;
    --color-pop: #f0644c;
    --font-display: 'Bricolage Grotesque', ui-sans-serif, system-ui, sans-serif;
    --font-sans: 'Hanken Grotesk', ui-sans-serif, system-ui, -apple-system, sans-serif;
}
```
