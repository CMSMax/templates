@props(['title' => 'Stead Property Management', 'description' => ''])
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:type" content="website">
@if ($site->social_image)<meta property="og:image" content="{{ $site->social_image }}">@endif
@if ($site->favicon)
<link rel="icon" href="{{ $site->favicon }}">
@else
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
@endif
@if ($site->apple_icon)<link rel="apple-touch-icon" href="{{ $site->apple_icon }}">@endif
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400..600&family=Geist:wght@400..600&display=swap">
@vite(['resources/css/site.css'])
</head>
<body class="bg-canvas font-sans text-ink antialiased" data-instant-navigation>
    {{--
    THESIS: a property manager who shows the numbers — calm, plain, numerate.
    OWN-WORLD: mineral blue-gray canvas, navy ink, hairline lines, Bricolage Grotesque
    headings over Geist text, dusk architecture photography with soft corners, navy
    bands, and one brass accent kept for the main button, the net line and day markers.
    SIGNATURE: the owner statement (sections/statement) — a sample monthly statement
    typeset like a ledger, laid over the hero photograph. Keep it in the hero.
    --}}
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 focus:rounded-full focus:bg-surface focus:px-4 focus:py-2 focus:font-medium focus:outline-2 focus:outline-offset-2 focus:outline-ink">Skip to content</a>
    <div class="isolate">
        <x-sections.nav/>
        <main id="main-content">{{ $slot }}</main>
        <x-sections.footer/>
    </div>
    <script>
    const t = document.querySelector('[data-nav-toggle]'), p = document.getElementById('mobile-nav');
    if (t && p) {
        t.addEventListener('click', () => { p.hidden = !p.hidden; t.setAttribute('aria-expanded', String(!p.hidden)); });
        p.addEventListener('click', (e) => { if (e.target.closest('a')) { p.hidden = true; t.setAttribute('aria-expanded', 'false'); } });
        document.addEventListener('mab:navigated', () => { p.hidden = true; t.setAttribute('aria-expanded', 'false'); });
    }
    </script>
</body>
</html>
