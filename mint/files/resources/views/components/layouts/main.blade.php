@props(['title' => 'Mint Family Dental', 'description' => 'Gentle, modern dentistry for the whole family in Springfield — check-ups, whitening, clear aligners, implants and same-day emergency care, with prices written down before we start.'])
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,500..700&family=Hanken+Grotesk:wght@400..600&display=swap">
@vite(['resources/css/site.css'])
</head>
<body class="bg-canvas font-sans text-ink antialiased" data-instant-navigation>
<!--
THESIS: A dental practice dressed like good toothpaste packaging — colour-blocked, cheerful, plain-spoken — refusing the category's blue-white stock-photo split hero.
OWN-WORLD: white carton canvas; aqua-mint fields own whole regions in rounded "carton" panels; deep ink-blue buttons; Bricolage Grotesque set huge and tight; Hanken Grotesk text; one coral dot for warmth; hairline rules.
STORY: a nervous or busy patient sees a bright, friendly practice, reads what each treatment costs, drags the smile compare to see real results, and books.
FIRST VIEWPORT: a full-width mint carton; the headline across the top at display scale; intro, Book a visit and the phone number bottom-left; a wide daylight photo of a laughing patient anchored bottom-right, bleeding off the carton's lower edge.
FORM: oral-care packaging (grounded list #5); signature is the drag-to-compare smile. Seed 0624d6a6.
-->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 focus:rounded-full focus:bg-canvas focus:px-4 focus:py-2 focus:font-medium focus:outline-2 focus:outline-offset-2 focus:outline-accent">Skip to content</a>
    <x-sections.nav :links="$site->nav_links"/>
    <main id="main-content">{{ $slot }}</main>
    <x-sections.footer :links="$site->nav_links" :hours="$hours"/>
    <script>
    (() => {
        const t = document.querySelector('[data-nav-toggle]'), p = document.getElementById('mobile-nav');
        if (t && p) t.addEventListener('click', () => { p.hidden = !p.hidden; t.setAttribute('aria-expanded', String(!p.hidden)); });
        document.querySelectorAll('[data-compare]').forEach((box) => {
            const input = box.querySelector('input[type="range"]');
            if (!input) return;
            const set = () => box.style.setProperty('--split', input.value + '%');
            input.addEventListener('input', set);
            set();
        });
        if ('IntersectionObserver' in window) {
            document.documentElement.classList.add('reveal-ready');
            const io = new IntersectionObserver((entries) => {
                for (const entry of entries) if (entry.isIntersecting) { entry.target.classList.add('is-visible'); io.unobserve(entry.target); }
            }, { rootMargin: '0px 0px -8% 0px' });
            document.querySelectorAll('[data-reveal]').forEach((el) => io.observe(el));
        }
    })();
    </script>
</body>
</html>
