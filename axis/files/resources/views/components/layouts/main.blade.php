@props(['title' => 'Axis Chiropractic', 'description' => ''])
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
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400&family=Sofia+Sans+Condensed:wght@500..700&display=swap">
@vite(['resources/css/site.css'])
</head>
<body class="bg-canvas font-sans text-ink antialiased" data-instant-navigation>
    {{--
    THESIS: the chiropractor who shows you where it hurts — on a real spine — before asking you to book.
    Refuses the stock teal-and-white clinic site: no stock skeleton, no three service cards, no "wellness journey".
    OWN-WORLD: bone-paper canvas, deep indigo ink, one vermilion accent, tall Sofia Sans Condensed headlines
    over Instrument Sans, hairline rules, calm daylight studio photography.
    STORY: someone in pain finds their problem on the spine, sees exactly what the first hour holds and costs,
    meets the doctor, and books.
    FIRST VIEWPORT: a full-width condensed headline with a pill-shaped photo set into the line; below it the
    supporting copy and Book your first visit on the left, a wide treatment photo on the right, and a hairline
    strip of phone, hours and address.
    SIGNATURE: the spine map — an S-curved spine of stacked vertebrae beside the conditions treated; pointing
    at a condition lights the vertebrae of its region.
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
