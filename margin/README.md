# Margin

A report-card starter for tutoring centres, learning centres and small
independent schools — maths, English, the sciences, entrance exams and study
skills sold the way a good teacher reports: by showing the marks move.

## The world

Exercise-book paper, blue-black ink and one red pen. Fraunces headlines at a
soft optical size over DM Sans text, faint ruled lines, a red margin rule down
the page, and Caveat only for the short notes a teacher writes in the margin.
Every colour, font and shadow lives once, in `files/resources/css/site.css`;
markup only ever names the token utilities (`bg-canvas`, `text-ink`,
`border-line`, `bg-accent`, `font-display`, `font-hand`, `shadow-sheet`).

## The signature

**The report card** — a typeset term report of real students (shared with
their families' permission): the grade they started on, and the grade they
reached, circled in red pen that draws itself as it scrolls into view. The
hero carries its companion, a marked algebra worksheet with ticks, a
correction and a circled grade. Keep both wherever the design evolves.

## Pages

| Path | File |
| --- | --- |
| `/` | `pages/index.blade.php` |
| `/programs` | `pages/programs.blade.php` |
| `/programs/{slug}` | `pages/programs/[program.slug].blade.php` — one dynamic page over `collections/program.json` |
| `/tutors` | `pages/tutors.blade.php` |
| `/pricing` | `pages/pricing.blade.php` |
| `/contact` | `pages/contact.blade.php` |
| miss | `pages/404.blade.php` |

## Collections

`program` (five subjects, each with a body for its detail page), `tutors`,
`results` (the report card), `testimonials`, `steps` (how a term runs),
`plans`, `schedule`, `faqs`. Each ships a `.yml` beside it. The worksheet
lines and the free-assessment slip live in `site.json` (`worksheet`,
`assessment`).

## Editing

Every visible string, link, image and repeating list is a field: each section
component has a companion `.yml`, so the whole site is editable in the visual
editor. Scalars live on the `<x-sections.NAME>` tag; repeater rows live in
`site.json` or the collection the instance's bound attribute names.

## Notes

- Results and testimonials are demonstration content. A real centre should
  publish only what families have agreed to share.
- There is no contact form. Ask Max for one after seeding and it will add it
  with the platform's `@form` directive.
- `pocketknife lint` reports `undefined variable $entries` on the dynamic page;
  `entries` is injected by the app tier at compile time. `SiteTemplatesTest`
  compiles the template for real and is the gate that matters.
- The template-preview route cannot open a bracketed dynamic page, so
  `/template-previews/margin/programs/maths` 404s in the gallery viewer; the
  seeded site and its published pages serve them normally.
