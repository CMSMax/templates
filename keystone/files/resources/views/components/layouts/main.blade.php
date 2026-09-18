@props(['title' => 'Keystone Home Services', 'description' => ''])
{{--
THESIS: Software-company clarity applied to the trades — calm, monochrome, trustworthy.
OWN-WORLD: white canvas, near-black ink, black primary CTA, hairline `border-line`
dividers, Inter set tight at display sizes, warm neutral photography, and floating
white dispatch cards. Star amber only on stars, green only on the availability dot.
STORY: a homeowner lands, understands the offer in one line, sees proof they can
book without a phone tree, and taps "Get a free estimate" or the phone number.
FIRST VIEWPORT: split hero — copy and CTAs left, photo with the dispatch card right.
FORM: pinned by the client's comps (Linear/Stripe-grade home-services pages).
--}}
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400..700&display=swap">
@vite(['resources/css/site.css'])
</head>
<body class="bg-canvas font-sans text-ink antialiased">
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 focus:rounded-lg focus:bg-canvas focus:px-4 focus:py-2 focus:font-medium focus:outline-2 focus:outline-offset-2 focus:outline-accent">Skip to content</a>
    <x-sections.nav/>
    <main id="main-content">{{ $slot }}</main>
    <x-sections.footer/>
    <script>
    const t = document.querySelector('[data-nav-toggle]'), p = document.getElementById('mobile-nav');
    if (t && p) t.addEventListener('click', () => { p.hidden = !p.hidden; t.setAttribute('aria-expanded', String(!p.hidden)); });
    if ('IntersectionObserver' in window) {
        document.documentElement.classList.add('reveal-ready');
        const io = new IntersectionObserver((entries) => {
            for (const entry of entries) if (entry.isIntersecting) { entry.target.classList.add('is-visible'); io.unobserve(entry.target); }
        }, { rootMargin: '0px 0px -8% 0px' });
        document.querySelectorAll('[data-reveal]').forEach((el) => io.observe(el));
    }
    </script>
</body>
</html>
