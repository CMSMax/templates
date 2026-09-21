@props(['title' => 'Pose Yoga Studio', 'description' => ''])
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
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Funnel+Display:wght@400..600&family=Funnel+Sans:wght@400..600&display=swap">
@vite(['resources/css/site.css'])
</head>
<body class="bg-canvas font-sans text-ink antialiased" data-instant-navigation>
    <!--
    THESIS: a yoga studio drawn as a notation system. Every pose is a numbered pictogram plate, the way practice charts and
    stadium signage draw the body. Refuses the category default: no beige, no sage and terracotta, no serif italics, no lotus.
    OWN-WORLD: chalk-white canvas, mist-teal panels, deep teal ink, studio-teal buttons and figures, one chartreuse spark for
    the pose being held. Funnel Display over Funnel Sans. Round-capped geometric figures on a 48-unit grid.
    STORY: a visitor sees a real body in a real pose, watches the sequence breathe, finds a class that fits, books the week.
    FIRST VIEWPORT: headline and intro offer left; a wide daylight photo right, labelled like a plate with its pictogram.
    FORM: asana sequence plates / pictogram notation, grounded list position 4, seed 565ca28d.
    -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 focus:rounded-full focus:bg-card focus:px-4 focus:py-2 focus:font-semibold focus:outline-2 focus:outline-offset-2 focus:outline-primary">Skip to content</a>
    <div class="isolate">
        <x-sections.nav/>
        <main id="main-content">{{ $slot }}</main>
        <x-sections.footer/>
    </div>
    <script>
    (function () {
        const toggle = document.querySelector('[data-nav-toggle]'), panel = document.getElementById('mobile-nav');
        if (toggle && panel) {
            const set = (open) => { panel.hidden = !open; toggle.setAttribute('aria-expanded', String(open)); };
            toggle.addEventListener('click', () => set(panel.hidden));
            panel.addEventListener('click', (event) => { if (event.target.closest('a')) set(false); });
            document.addEventListener('mab:navigated', () => set(false));
        }

        // The sequence: hold one plate at a time, at the pace of a breath.
        let timer = null;
        const startSequence = () => {
            clearInterval(timer);
            const root = document.querySelector('[data-sequence]');
            if (!root) return;
            const plates = Array.from(root.querySelectorAll('[data-plate]'));
            const cue = root.querySelector('[data-cue]'), step = root.querySelector('[data-cue-step]'), ring = root.querySelector('[data-breath-ring]');
            if (!plates.length) return;
            let index = 0, held = null;
            const show = (i) => {
                plates.forEach((plate, n) => plate.toggleAttribute('data-active', n === i));
                const breath = plates[i].dataset.breath || '';
                if (ring) ring.dataset.breath = breath;
                if (step) step.textContent = String(i + 1).padStart(2, '0') + ' / ' + String(plates.length).padStart(2, '0');
                if (cue && cue.textContent !== breath) {
                    cue.setAttribute('data-fading', '');
                    setTimeout(() => { cue.textContent = breath; cue.removeAttribute('data-fading'); }, 250);
                }
            };
            plates.forEach((plate, n) => {
                const hold = () => { held = n; index = n; show(n); };
                const release = () => { held = null; };
                plate.addEventListener('mouseenter', hold);
                plate.addEventListener('focus', hold);
                plate.addEventListener('mouseleave', release);
                plate.addEventListener('blur', release);
            });
            show(0);
            if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
            timer = setInterval(() => {
                if (held !== null || document.hidden) return;
                index = (index + 1) % plates.length;
                show(index);
            }, 2600);
        };
        startSequence();
        document.addEventListener('mab:navigated', startSequence);
    })();
    </script>
</body>
</html>
