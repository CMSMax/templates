@props(['title' => 'Balm Massage Studio', 'description' => '', 'header' => 'solid'])
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
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Hedvig+Letters+Serif:opsz@12..24&family=Manrope:wght@400..700&display=swap">
@vite(['resources/css/site.css'])
</head>
<body class="bg-canvas font-sans text-ink antialiased" data-header="{{ $header }}" data-instant-navigation>
    {{--
    THESIS: a massage therapist's own practice, told through the body — where it hurts, what to book, what the hour is like;
    refuses the candles-orchids-and-cream "spa sanctuary" template.
    OWN-WORLD: river-stone grey canvas, basalt ink, one massage-oil amber, Hedvig Letters Serif headings, Manrope text,
    hairline rules, golden-hour photographs of hands, linen and stones.
    STORY: a sore visitor finds their tension on the body map, sees what it costs by the hour, learns what the first visit
    is like, and books.
    FIRST VIEWPORT: the treatment room in low sun, edge to edge; "Put the week down." with one word looped in amber ink.
    SIGNATURE: the intake-form body map — numbered pins on a drawn back, each tied to what to book.
    --}}
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 focus:rounded-full focus:bg-surface focus:px-4 focus:py-2 focus:font-semibold focus:text-ink focus:outline-2 focus:outline-offset-2 focus:outline-ink">Skip to content</a>
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
