@props(['title' => 'Juniper', 'description' => ''])
{{--
THESIS: a printed menu on a linen tablecloth — calm, warm, unhurried.
OWN-WORLD: linen canvas, green-black ink, hairline lines, Instrument Serif headings
over Figtree text, soft natural-light food photography with rounded corners,
pill buttons, and one juniper-green accent kept for the Reserve button.
SIGNATURE: the printed menu card (sections/menu-card) — keep it wherever the menu appears.
--}}
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
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
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Figtree:wght@400..600&family=Instrument+Serif:ital@0;1&display=swap">
@vite(['resources/css/site.css'])
</head>
<body class="bg-canvas font-sans text-ink antialiased" data-instant-navigation>
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 focus:rounded-full focus:bg-surface focus:px-4 focus:py-2 focus:font-medium focus:outline-2 focus:outline-offset-2 focus:outline-primary">Skip to content</a>
    <div class="isolate">
        <x-sections.nav/>
        <main id="main-content">{{ $slot }}</main>
        <x-sections.footer/>
    </div>
    <script>
    const t = document.querySelector('[data-nav-toggle]'), p = document.getElementById('mobile-nav');
    if (t && p) t.addEventListener('click', () => { p.hidden = !p.hidden; t.setAttribute('aria-expanded', String(!p.hidden)); });
    </script>
</body>
</html>
