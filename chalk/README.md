# Chalk

A bright, schedule-first starter for strength gyms, CrossFit boxes, barbell
clubs and coached fitness studios — anywhere people train in classes.

## The world

Rubber-floor graphite walls, chalk-white type, hairline rules, square
corners, bright daylight photography, and one chalk-white band (the first
class) that turns the page inside out. Sofia Sans Extra Condensed set
heavy and uppercase for headings, numbers and tracked labels; Rethink Sans
for everything else. One plate-red accent — the Start a free trial button,
the "Today" marker and the highlighted plan. Every colour and font lives
once, in `files/resources/css/site.css`.

## The signature

**The timetable board** — the whole week as a real table, times down the
side and days across, every class edged in its program's bumper-plate colour
(red, blue, yellow, green, white — the IWF plate colours, used as data), and
today's column lit by a few lines of script. On phones the week folds by day
and opens on today. It is built from three sources: the `sessions` and
`programs` collections and `time_slots`/`days` in `site.json`.

## Pages

| Path | File |
| --- | --- |
| `/` | `pages/index.blade.php` — hero, programs, timetable, first hour, memberships, visit |
| `/schedule` | `pages/schedule.blade.php` — timetable, class notes, FAQ, visit |
| miss | `pages/404.blade.php` |

## Collections

- `programs` — number, name, plate colour, summary, length, frequency, level.
- `sessions` — one row per class: day (`Mon`…`Sun`), time (must match a
  `time_slots` entry), program (must match a program name), coach.
- `plans` — the memberships compared side by side; `featured` marks one.

Hours, stats, the first-hour steps and FAQs are lists in `site.json`, each
bound to its section through a repeater.

## Notes

- There is no booking form; the call to action goes to the Visit section's
  phone and email. Ask Max for a form or point `cta_link` at a booking app.
- Imagery (`public/images/`) was generated for this template with GPT Image
  via Higgsfield; no real people or places.
