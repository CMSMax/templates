@props(['title' => 'Ridge Roofing Co. — Roof replacement, repair, and storm help in Fort Worth', 'description' => 'Roof replacement, leak repair, and hail damage help across Fort Worth and Tarrant County. Free roof checks within 48 hours of any storm.', 'image' => '/images/hero-roof.jpg'])
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
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:wght@500;600&family=Figtree:wght@400;500;600&display=swap">
@vite(['resources/css/site.css'])
</head>
<body class="isolate bg-canvas font-sans text-ink antialiased selection:bg-primary selection:text-primary-foreground" data-instant-navigation>
    <!--
    THESIS: A roofer's site written like a weather service bulletin — dated, measured, calm after the storm. Refuses the dark-photo hero, orange button, and stat row every roofing template ships.
    OWN-WORLD: cool sky-paper canvas, storm-slate ink, storm-navy fields, radar green as the one action colour, the five radar colours only where they carry data, hairline rules, small radii, bulletin timestamps in tabular numerals.
    STORY: a homeowner after a hailstorm sees the crew already knows the storm, understands what a new roof is made of and how a claim runs, and books a free roof check.
    FIRST VIEWPORT: the advisory strip, a large promise beside a tall daylight photo of a finished roof with a bulletin readout, the roof-check button and the phone number.
    SIGNATURE: the storm log — a drawn hail swath over the street grid with a bulletin readout.
    FORM: 4 of 7 (weather service bulletin), seed 66a3249c.
    -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:top-3 focus:left-3 focus:z-50 focus:rounded-md focus:bg-ink focus:px-4 focus:py-3 focus:font-medium focus:text-canvas">Skip to content</a>
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
            if (observer) {
                root.querySelectorAll('[data-reveal]:not(.is-visible)').forEach(function (el) { observer.observe(el); });
            }
            root.querySelectorAll('[data-layers]').forEach(function (group) {
                var items = group.querySelectorAll('[data-layer]');
                function pick(index) {
                    group.setAttribute('data-active', index);
                    items.forEach(function (item) { item.setAttribute('aria-pressed', String(item.getAttribute('data-layer') === index)); });
                    group.querySelectorAll('[data-slab]').forEach(function (slab) { slab.toggleAttribute('data-on', slab.getAttribute('data-slab') === index); });
                }
                items.forEach(function (item) {
                    item.addEventListener('click', function () { pick(item.getAttribute('data-layer')); });
                    item.addEventListener('mouseenter', function () { pick(item.getAttribute('data-layer')); });
                    item.addEventListener('focus', function () { pick(item.getAttribute('data-layer')); });
                });
                pick(group.getAttribute('data-active') || '1');
            });
        }
        setUp(document);
        document.addEventListener('mab:navigated', function (event) { closeNav(); setUp(event.detail.main); });
    })();
    </script>
</body>
</html>
