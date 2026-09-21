@props(['title' => 'Chapel Street Church', 'description' => ''])
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
@if ($site->favicon)<link rel="icon" href="{{ $site->favicon }}">@else<link rel="icon" href="/favicon.svg" type="image/svg+xml">@endif
@if ($site->apple_icon)<link rel="apple-touch-icon" href="{{ $site->apple_icon }}">@endif
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..600;1,400..500&family=Instrument+Sans:wght@400..600&display=swap">
@vite(['resources/css/site.css'])
</head>
<body class="bg-canvas font-sans text-ink antialiased" data-instant-navigation>
    {{--
    THESIS: a parish church printed like its own prayer book — the welcome of an open red door, the calm of a quiet nave.
    Refuses the concert-lighting, hands-in-the-air, three-ministry-cards church site.
    OWN-WORLD: lime-washed paper canvas, stone panels, hymnal-black ink, vermilion rubrics, one evening-slate band,
    EB Garamond headings with italic second phrases and small-caps labels over Instrument Sans text.
    STORY: a visitor learns when to come and what happens, sees this Sunday's service, and plans a visit.
    FIRST VIEWPORT: split hero — big Garamond headline and Plan your visit left, the arched window right;
    the service-times ledger beneath.
    SIGNATURE: the order of worship — this Sunday printed like the bulletin card, red italic rubrics under each part.
    --}}
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 focus:rounded-full focus:bg-card focus:px-4 focus:py-2 focus:font-medium focus:outline-2 focus:outline-offset-2 focus:outline-primary">Skip to content</a>
    <div class="isolate">
        <x-sections.nav/>
        <main id="main-content">{{ $slot }}</main>
        <x-sections.footer/>
    </div>
    <script>
    (function () {
        const toggle = document.querySelector('[data-nav-toggle]'), panel = document.getElementById('mobile-nav');
        if (!toggle || !panel) return;
        const set = (open) => { panel.hidden = !open; toggle.setAttribute('aria-expanded', String(open)); };
        toggle.addEventListener('click', () => set(panel.hidden));
        panel.addEventListener('click', (event) => { if (event.target.closest('a')) set(false); });
        document.addEventListener('mab:navigated', () => set(false));
    })();
    </script>
</body>
</html>
