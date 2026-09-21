@props(['title' => 'Hem', 'description' => ''])
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
<meta name="theme-color" content="#efeeea">
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
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Funnel+Display:wght@400..600&family=Funnel+Sans:wght@400..600&display=swap">
@vite(['resources/css/site.css'])
</head>
<body class="bg-canvas font-sans text-ink antialiased" data-instant-navigation>
    <!--
    THESIS: an independent clothing boutique presented as a mill swatch book.
    OWN-WORLD: cool card-stock grey, ink text in two tiers, one committed lilac field cut with
    pinking-shear (zig-zag) edges, square corners, Funnel Display over Funnel Sans, garments on
    wooden hangers in daylight, a chartreuse thread for the smallest marks only.
    SIGNATURE: the colour card (sections/colour-card) — numbered fabric chips; choose one and the
    piece made in that cloth appears with its composition, maker and price.
    -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 focus:bg-ink focus:px-4 focus:py-2 focus:font-medium focus:text-canvas focus:outline-2 focus:outline-offset-2 focus:outline-ink">Skip to content</a>
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
