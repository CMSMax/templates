@props(['title' => 'Chalk Strength Club', 'description' => ''])
<!doctype html>
<html lang="en" class="scheme-only-dark">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
<meta name="theme-color" content="#121315">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:type" content="website">
@if ($site->social_image)<meta property="og:image" content="{{ $site->social_image }}">@endif
@if ($site->favicon)<link rel="icon" href="{{ $site->favicon }}">@else<link rel="icon" href="/favicon.svg" type="image/svg+xml">@endif
@if ($site->apple_icon)<link rel="apple-touch-icon" href="{{ $site->apple_icon }}">@endif
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rethink+Sans:wght@400..700&family=Sofia+Sans+Extra+Condensed:wght@600..900&display=swap">
@vite(['resources/css/site.css'])
</head>
<body class="bg-canvas font-sans text-ink antialiased" data-instant-navigation>
    {{--
    THESIS: a strength gym's website is its week — what runs, when, and with whom; refuses the dark-neon stock-photo hero → cards → testimonials stack.
    OWN-WORLD: a rubber-floor graphite gym with chalk-white type, hairline rules and square corners (Sofia Sans Extra Condensed + Rethink Sans), one plate-red accent, bumper-plate colors as the programs' data, and one chalk-white band.
    STORY: someone thinking about joining sees the programs, the whole week at a glance, exactly what their first hour looks like, and what it costs.
    FIRST VIEWPORT: a huge condensed three-line headline beside a tall daylight photo tagged with the next class; Start a free trial under it, the week's numbers along the bottom.
    SIGNATURE: the timetable board — times down, days across, every class edged in its program's plate color, today's column lit.
    --}}
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 focus:bg-primary focus:px-4 focus:py-2 focus:font-semibold focus:text-primary-foreground focus:outline-2 focus:outline-offset-2 focus:outline-ink">Skip to content</a>
    <div class="isolate">
        <x-sections.nav/>
        <main id="main-content">{{ $slot }}</main>
        <x-sections.footer/>
    </div>
    <script>
    (function () {
        const toggle = document.querySelector('[data-nav-toggle]'), panel = document.getElementById('mobile-nav');
        const set = (open) => { if (!toggle || !panel) return; panel.hidden = !open; toggle.setAttribute('aria-expanded', String(open)); };
        if (toggle && panel) {
            toggle.addEventListener('click', () => set(panel.hidden));
            panel.addEventListener('click', (event) => { if (event.target.closest('a')) set(false); });
        }
        // Light today's column on the timetable. Without the script the board
        // simply shows the whole week, unmarked.
        const days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
        function markToday(root) {
            const today = days[new Date().getDay()];
            root.querySelectorAll('[data-day]').forEach((el) => {
                const isToday = el.getAttribute('data-day') === today;
                if (isToday) el.setAttribute('data-today', '');
                // On phones the week folds by day: open today's, close the rest.
                if (el.tagName === 'DETAILS') el.open = isToday;
            });
        }
        markToday(document);
        document.addEventListener('mab:navigated', (event) => { set(false); markToday(event.detail.main); });
    })();
    </script>
</body>
</html>
