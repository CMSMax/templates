@props(['title' => 'Flash Tattoo Co.', 'description' => ''])
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
<meta name="theme-color" content="#f5f5f2">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:type" content="website">
@if ($site->social_image)<meta property="og:image" content="{{ $site->social_image }}">@endif
@if ($site->favicon)<link rel="icon" href="{{ $site->favicon }}">@else<link rel="icon" href="/favicon.svg" type="image/svg+xml">@endif
@if ($site->apple_icon)<link rel="apple-touch-icon" href="{{ $site->apple_icon }}">@endif
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@400..600&family=Dela+Gothic+One&display=swap">
@vite(['resources/css/site.css'])
</head>
<body class="bg-canvas font-sans text-ink antialiased" data-instant-navigation>
    {{--
    THESIS: a tattoo studio's site as its own photocopied flyer — refuses the moody black photo-grid every tattoo template ships.
    OWN-WORLD: copier-paper white, toner-black Dela Gothic One over Albert Sans, one hot-pink paper field, taped-in prints, rubber stamps.
    STORY: a visitor sees healed work, picks a piece off the flash wall or asks for a custom one, and books a consult.
    FIRST VIEWPORT: a stacked heavy headline beside a taped, tilted photo of a tattoo in progress; a pink ribbon of styles runs under both.
    SIGNATURE: the flash wall — numbered paper tags with the design, size and price, and a TAKEN stamp once a piece is claimed.
    --}}
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 focus:bg-surface focus:px-4 focus:py-2 focus:font-medium focus:outline-2 focus:outline-offset-2 focus:outline-ink">Skip to content</a>
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
