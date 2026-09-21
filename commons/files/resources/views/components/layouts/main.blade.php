@props(['title' => 'Eastside Commons', 'description' => ''])
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
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Next:ital,wght@0,400..700;1,400&family=Funnel+Display:wght@500..800&display=swap">
@vite(['resources/css/site.css'])
</head>
<body class="bg-canvas font-sans text-ink antialiased" data-instant-navigation>
    {{--
    THESIS: a neighborhood nonprofit's website printed like its own flyer — a two-ink risograph
    poster from the copy shop; refuses the green-and-cream "hands holding a seedling" charity template.
    OWN-WORLD: paper-white stock, federal-blue ink for every word, one fluorescent-pink overprint
    that multiplies where it crosses the blue, halftone dots, Funnel Display poster type.
    STORY: a neighbor learns what happens on Alder Street, sees where a dollar goes, picks a gift
    they can picture, and finds the door.
    FIRST VIEWPORT: the poster headline set huge with a pink sun overprinted behind it.
    SIGNATURE: a dollar drawn as a ruler of a hundred cents.
    --}}
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 focus:rounded-full focus:bg-ink focus:px-4 focus:py-2 focus:font-bold focus:text-canvas focus:outline-2 focus:outline-offset-2 focus:outline-primary">Skip to content</a>
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
