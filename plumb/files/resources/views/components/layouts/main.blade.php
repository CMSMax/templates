@props(['title' => 'Plumb Line Plumbing — Licensed plumbers in Denver, flat prices', 'description' => 'Drains, water heaters, leaks and fixtures across Denver. A flat price quoted before we start, a one-year guarantee, and a 24/7 emergency line.', 'image' => '/images/hero-sink.jpg'])
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
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Anybody:wdth,wght@125,800&family=Geist:wght@400;500;600&display=swap">
@vite(['resources/css/site.css'])
</head>
<body class="isolate bg-canvas font-sans text-ink antialiased selection:bg-primary selection:text-primary-foreground" data-instant-navigation>
    <!--
    THESIS: A plumber's site that answers the three questions a homeowner has with water on the floor — what is it, what will it cost, when can you come — before they pick up the phone.
    OWN-WORLD: the city water department's graphics: porcelain-white canvas, one committed field of enamel blue, cast-iron ink, wide heavy cast lettering, hairline rules, a meter-lid roundel for a badge.
    STORY: a homeowner names the problem, sees the likely cause and the flat price, trusts the guarantee and the reviews, and books or calls.
    FIRST VIEWPORT: the blue field with a wide cast headline, the on-call line, the booking button and the phone number, a bright photograph of a plumber at work with the lid pressed on its edge.
    SIGNATURE: the fault finder's work ticket; the pipe that fills with water through the four steps.
    -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:top-3 focus:left-3 focus:z-50 focus:rounded-lg focus:bg-ink focus:px-4 focus:py-3 focus:font-medium focus:text-canvas">Skip to content</a>
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
        // The fault finder: one tab per fault, one work ticket per tab. With no
        // script every ticket stays visible, one under the other.
        function setUpFinder(finder) {
            var tabs = Array.prototype.slice.call(finder.querySelectorAll('[role="tab"]'));
            var panels = Array.prototype.slice.call(finder.querySelectorAll('[data-finder-panel]'));
            function select(index, focus) {
                tabs.forEach(function (tab, i) {
                    var on = i === index;
                    tab.setAttribute('aria-selected', String(on));
                    tab.tabIndex = on ? 0 : -1;
                    if (panels[i]) { panels[i].hidden = !on; }
                });
                if (focus && tabs[index]) { tabs[index].focus(); }
            }
            tabs.forEach(function (tab, i) {
                tab.addEventListener('click', function () {
                    select(i, false);
                    // Stacked on a phone, the ticket sits below the list: bring it up.
                    if (window.matchMedia('(max-width: 1023px)').matches && panels[i]) {
                        var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
                        panels[i].scrollIntoView({ behavior: reduce ? 'auto' : 'smooth', block: 'nearest' });
                    }
                });
                tab.addEventListener('keydown', function (event) {
                    var next = null;
                    if (event.key === 'ArrowDown' || event.key === 'ArrowRight') { next = (i + 1) % tabs.length; }
                    if (event.key === 'ArrowUp' || event.key === 'ArrowLeft') { next = (i - 1 + tabs.length) % tabs.length; }
                    if (event.key === 'Home') { next = 0; }
                    if (event.key === 'End') { next = tabs.length - 1; }
                    if (next !== null) { event.preventDefault(); select(next, true); }
                });
            });
            finder.setAttribute('data-finder-ready', '');
            select(0, false);
        }
        function setUp(root) {
            root.querySelectorAll('[data-finder]:not([data-finder-ready])').forEach(setUpFinder);
            if (!observer) return;
            root.querySelectorAll('[data-reveal]:not(.is-visible)').forEach(function (el) { observer.observe(el); });
        }
        setUp(document);
        document.addEventListener('mab:navigated', function (event) { closeNav(); setUp(event.detail.main); });
    })();
    </script>
</body>
</html>
