@props(['title' => 'Stride Physical Therapy', 'description' => ''])
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
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Epilogue:wght@500..700&family=Rethink+Sans:ital,wght@0,400..700;1,400&display=swap">
@vite(['resources/css/site.css'])
</head>
<body class="bg-canvas font-sans text-ink antialiased" data-instant-navigation>
    {{--
    THESIS: physical therapy as a plan you can see — degrees won back, loads going up, a date you graduate.
    Refuses the clinical-blue, stock-smile, three-service-cards physio site and the soft spa version of it.
    OWN-WORLD: cool gym-floor canvas, moss-black ink, one lime accent used as a fill, bright natural-light
    photography of real movement, hairline rules, Epilogue headings over Rethink Sans text.
    STORY: someone in pain finds their body part, sees how the plan works and what the first visit is, and books.
    FIRST VIEWPORT: split hero — big headline and Book an evaluation left; tall movement photo right with the
    range-of-motion card (a goniometer arc, 92° to 131°) overlapping its lower edge.
    SIGNATURE: the recovery plan drawn as four resistance bands, longer and deeper lime as the load goes up.
    --}}
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 focus:rounded-full focus:bg-card focus:px-4 focus:py-2 focus:font-semibold focus:outline-2 focus:outline-offset-2 focus:outline-ink">Skip to content</a>
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
