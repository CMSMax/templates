@props(['title' => 'Tulle', 'description' => ''])
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
<meta name="theme-color" content="#fbf9fb">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
@if ($site->social_image)<meta property="og:image" content="{{ $site->social_image }}">@endif
@if ($site->favicon)
<link rel="icon" href="{{ $site->favicon }}">
@else
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
@endif
@if ($site->apple_icon)<link rel="apple-touch-icon" href="{{ $site->apple_icon }}">@endif
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..500;1,6..96,400..500&family=Jost:wght@400;500&display=swap">
@vite(['resources/css/site.css'])
</head>
<body class="bg-canvas font-sans text-ink antialiased" data-instant-navigation>
    <!--
    THESIS: the planner's design board — each wedding shown as a photograph beside the palette it was built from; refuses the blush-script, couple-close-up hero.
    OWN-WORLD: foam-board white, one heather-plum field (hero panel, inquiry band), hairlines, Bodoni Moda over Jost with tracked caps labels, paint-chip swatches.
    STORY: see the kind of wedding they make, understand the three ways to work with them, send a date.
    FIRST VIEWPORT: plum panel left with the didone headline and the one filled button; a photograph right with this season's swatches pinned across the seam.
    SIGNATURE: sections/weddings — weddings, by palette.
    -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 focus:bg-ink focus:px-4 focus:py-2 focus:font-medium focus:text-canvas focus:outline-2 focus:outline-offset-2 focus:outline-primary">Skip to content</a>
    <div class="isolate">
        <x-sections.nav/>
        <main id="main-content">{{ $slot }}</main>
        <x-sections.footer/>
    </div>
    <script>
    const t = document.querySelector('[data-nav-toggle]'), p = document.getElementById('mobile-nav');
    if (t && p) {
        const close = () => { p.hidden = true; t.setAttribute('aria-expanded', 'false'); };
        t.addEventListener('click', () => { p.hidden = !p.hidden; t.setAttribute('aria-expanded', String(!p.hidden)); });
        p.addEventListener('click', (e) => { if (e.target.closest('a')) close(); });
        document.addEventListener('mab:navigated', close);
    }
    </script>
</body>
</html>
