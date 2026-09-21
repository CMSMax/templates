@props(['title' => 'Grade Building Co. — Additions, remodels, and new builds in Portland', 'description' => 'Additions, kitchens, and backyard cottages in Portland. Fixed line-item quotes, one crew lead, and a job site swept every night.', 'image' => '/images/hero-framing.jpg'])
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
@if ($site->social_image)
<meta property="og:image" content="{{ $site->social_image }}">
@else
<meta property="og:image" content="{{ $image }}">
@endif
@if ($site->favicon)
<link rel="icon" href="{{ $site->favicon }}">
@else
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
@endif
@if ($site->apple_icon)
<link rel="apple-touch-icon" href="{{ $site->apple_icon }}">
@endif
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600&family=Big+Shoulders+Stencil:wght@800&display=swap">
@vite(['resources/css/site.css'])
</head>
<body class="isolate bg-canvas font-sans text-ink antialiased selection:bg-primary selection:text-primary-foreground" data-instant-navigation>
    <!--
    THESIS: A contractor's site written the way a job site is marked — stamped and spray-painted, not styled. Refuses the dark-hero-plus-stat-row builder page.
    OWN-WORLD: poured-concrete canvas, stamp-ink type, Big Shoulders Stencil set huge, square corners, hairline rules, locate-paint orange as the only colour, an inked grade stamp on every job photo.
    STORY: a homeowner sees real finished work, understands what the crew builds and how a job runs, and requests a quote.
    FIRST VIEWPORT: a stencilled promise across the full width, one paint swash, a short paragraph with the quote button, the job-site photo stamped below.
    SIGNATURE: the grade stamp logging job, year, scope, and weeks on site.
    -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:top-3 focus:left-3 focus:z-50 focus:bg-ink focus:px-4 focus:py-3 focus:font-medium focus:text-canvas">Skip to content</a>
    <x-sections.nav :links="$site->nav_links"/>
    <main id="main-content">{{ $slot }}</main>
    <x-sections.footer :links="$site->nav_links"/>
    <script>
    (function () {
        var toggle = document.querySelector('[data-nav-toggle]');
        var panel = document.getElementById('mobile-nav');
        function closeNav() {
            if (toggle && panel) { panel.hidden = true; toggle.setAttribute('aria-expanded', 'false'); }
        }
        if (toggle && panel) {
            toggle.addEventListener('click', function () {
                panel.hidden = !panel.hidden;
                toggle.setAttribute('aria-expanded', String(!panel.hidden));
            });
            panel.addEventListener('click', function (event) { if (event.target.closest('a')) closeNav(); });
        }
        var observer = null;
        if ('IntersectionObserver' in window) {
            document.documentElement.classList.add('reveal-ready');
            observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) { entry.target.classList.add('is-visible'); observer.unobserve(entry.target); }
                });
            }, { rootMargin: '0px 0px -8% 0px' });
        }
        function setUp(root) {
            if (!observer) return;
            root.querySelectorAll('[data-reveal]:not(.is-visible)').forEach(function (el) { observer.observe(el); });
        }
        setUp(document);
        document.addEventListener('mab:navigated', function (event) { closeNav(); setUp(event.detail.main); });
    })();
    </script>
</body>
</html>
