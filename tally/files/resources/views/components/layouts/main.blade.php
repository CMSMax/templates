@props(['title' => 'Tally Accounting', 'description' => ''])
{{--
THESIS: a small accounting practice that keeps things in order — calm, exact, human.
OWN-WORLD: warm paper canvas, near-black ink, hairline rules, IBM Plex Sans headings
and body, IBM Plex Mono for figures only (dates, fees, hours), bright daylight
photography of real desks, and one ballpoint-blue accent.
SIGNATURE: the tax-year calendar (sections/calendar) — a blue band with a twelve-month
rail, every deadline marked where it falls, a today line, and the next deadline lit.
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
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500&family=IBM+Plex+Sans:wght@400;500;600&display=swap">
@vite(['resources/css/site.css'])
</head>
<body class="bg-canvas font-sans text-ink antialiased" data-instant-navigation>
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 focus:rounded-md focus:bg-surface focus:px-4 focus:py-2 focus:font-medium focus:outline-2 focus:outline-offset-2 focus:outline-primary">Skip to content</a>
    <div class="isolate">
        <x-sections.nav/>
        <main id="main-content">{{ $slot }}</main>
        <x-sections.footer/>
    </div>
    <script>
    (() => {
        const t = document.querySelector('[data-nav-toggle]'), p = document.getElementById('mobile-nav');
        if (t && p) t.addEventListener('click', () => { p.hidden = !p.hidden; t.setAttribute('aria-expanded', String(!p.hidden)); });
    })();
    </script>
</body>
</html>
