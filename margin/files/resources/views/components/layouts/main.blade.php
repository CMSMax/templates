@props(['title' => 'Margin Tutoring', 'description' => ''])
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&family=DM+Sans:opsz,wght@9..40,400..600&family=Fraunces:ital,opsz,wght,SOFT,WONK@0,9..144,400..600,0..100,0..1;1,9..144,400..500,0..100,0..1&display=swap">
@vite(['resources/css/site.css'])
</head>
<body class="bg-canvas font-sans text-ink antialiased">
<!--
THESIS: a tutoring centre sold the way a good teacher reports — by showing the
marks moving. It refuses the education template's stock-photo campus, pastel
icon cards and "unlock your potential".
OWN-WORLD: exercise-book paper, blue-black ink, one red pen, Fraunces set like
a school book, faint ruled lines and a red margin rule running down the page.
STORY: a parent worried about a grade sees in one line what is taught and to
whom, reads a real term report, meets the tutors by name, and books the free
assessment.
SIGNATURE: the report card — a typeset term report with the new grades
circled in red pen and a note in the margin.
-->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 focus:rounded-xs focus:bg-surface focus:px-4 focus:py-2 focus:font-medium focus:outline-2 focus:outline-offset-2 focus:outline-accent">Skip to content</a>
    <x-sections.nav :links="$site->nav_links"/>
    <main id="main-content" class="isolate">{{ $slot }}</main>
    <x-sections.footer :links="$site->footer_links"/>
    <script>
    const toggle = document.querySelector('[data-nav-toggle]'), panel = document.getElementById('mobile-nav');
    if (toggle && panel) toggle.addEventListener('click', () => {
        panel.hidden = !panel.hidden;
        toggle.setAttribute('aria-expanded', String(!panel.hidden));
    });
    // Red-pen marks below the fold wait until they are on screen to draw.
    const marks = document.querySelectorAll('[data-pen-later]');
    if (marks.length && 'IntersectionObserver' in window && !matchMedia('(prefers-reduced-motion: reduce)').matches) {
        marks.forEach((mark) => mark.style.animationPlayState = 'paused');
        const seen = new IntersectionObserver((entries) => entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.style.animationPlayState = 'running';
                seen.unobserve(entry.target);
            }
        }), { threshold: 0.6 });
        marks.forEach((mark) => seen.observe(mark));
    }
    </script>
</body>
</html>
