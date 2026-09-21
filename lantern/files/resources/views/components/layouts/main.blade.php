@props(['title' => 'Lantern Home Services', 'description' => ''])
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Archivo:wdth,wght@100..125,400..700&family=Libre+Franklin:wght@400..600&display=swap">
@vite(['resources/css/site.css'])
</head>
<body class="bg-canvas font-sans text-ink antialiased">
<!--
THESIS: one local company for the whole house, sold the way a good contractor
actually sells — by showing the work. It refuses the trades template's siren
hero, screaming orange and three identical icon cards.
OWN-WORLD: warm bone canvas, espresso ink, a single clay accent, wide Archivo
signage lettering, hairline rules instead of boxes, two-pixel corners, bright
daylight photography that breaks the container.
STORY: a homeowner with a dead furnace or a leak understands in one line that
this company covers every trade, sees the work and the neighbours' names, and
calls or books a visit.
FIRST VIEWPORT: copy slab left on bone with the headline at 4.75rem and a clay
primary button; the photograph bleeds off the right edge of the screen with a
bone availability strip low over it.
FORM: photo-led editorial asymmetry, pinned by the client's three references.
FINISH: unreviewed and undocumented is unfinished; this build ends with the
finish review, the verdict, and DESIGN.md.
-->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 focus:rounded-xs focus:bg-surface focus:px-4 focus:py-2 focus:font-medium focus:outline-2 focus:outline-offset-2 focus:outline-accent">Skip to content</a>
    <x-sections.nav :links="$site->nav_links"/>
    <main id="main-content" class="isolate">{{ $slot }}</main>
    <x-sections.footer :links="$site->footer_links"/>
    <script>
    const toggle = document.querySelector('[data-nav-toggle]'), panel = document.getElementById('mobile-nav');
    if (toggle && panel) toggle.addEventListener('click', () => {
        panel.hidden = !panel.hidden;
        toggle.setAttribute('aria-expanded', String(!panel.hidden));
    });
    </script>
</body>
</html>
