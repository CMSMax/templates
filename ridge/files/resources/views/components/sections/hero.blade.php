@props([
    'location' => 'Fort Worth, TX',
    'status' => 'Booking roof checks this week',
    'heading' => 'A roof ready for the next storm.',
    'body' => 'Ridge replaces, repairs, and storm-proofs roofs across Tarrant County. Free roof checks, photos of everything we find, and most new roofs finished in one day.',
    'ctaLabel' => 'Book a free roof check',
    'ctaLink' => '/contact',
    'rating' => '4.9',
    'ratingNote' => 'from 612 Google reviews',
    'image' => '/images/hero-roof.jpg',
    'imageAlt' => 'A craftsman house with a new charcoal shingle roof, a roofer finishing the ridge under a clearing blue sky.',
    'reportTitle' => 'Roof report',
    'reportPlace' => 'Ryan Place',
    'reportJob' => 'Full replacement after the June 14 hail',
    'reportSize' => '28 squares',
    'reportTime' => '1 day',
])
<section class="overflow-hidden pt-10 pb-20 md:pt-16 md:pb-28">
    <div class="mx-auto grid max-w-7xl gap-12 px-5 md:px-8 lg:grid-cols-12 lg:items-center lg:gap-10">
        <div class="lg:col-span-6">
            <p class="bulletin flex flex-wrap items-center gap-x-3 gap-y-1 text-muted">
                <span>{{ $location }}</span>
                <span class="h-3 w-px bg-line" aria-hidden="true"></span>
                <span class="inline-flex items-center gap-2 text-ink"><span class="size-2 rounded-full bg-primary" aria-hidden="true"></span>{{ $status }}</span>
            </p>
            <h1 class="mt-6 max-w-[15ch] font-display text-hero font-semibold text-balance">{{ $heading }}</h1>
            <p class="mt-7 max-w-[46ch] text-lg text-pretty text-muted md:text-xl">{{ $body }}</p>
            <div class="mt-10 flex flex-wrap items-center gap-x-6 gap-y-4">
                <a href="{{ $ctaLink }}" class="group inline-flex min-h-13 items-center gap-3 rounded-md bg-primary py-3 pr-4 pl-5 text-base font-semibold text-primary-foreground shadow-lift hover:bg-primary/85 active:translate-y-px">
                    {{ $ctaLabel }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0 transition-transform duration-150 group-hover:translate-x-0.5" aria-hidden="true"><path d="M4 10h11M11 5l5 5-5 5"/></svg>
                </a>
                <a href="{{ $site->phone_href }}" class="inline-flex min-h-12 items-center gap-2 text-base font-semibold tabular-nums text-ink underline decoration-line decoration-2 underline-offset-6 hover:decoration-ink">or call {{ $site->phone }}</a>
            </div>
            <p class="mt-10 flex items-center gap-3 text-sm text-muted">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 20" fill="currentColor" class="h-4 w-auto shrink-0 text-ink" aria-hidden="true"><path transform="translate(0 0)" d="M10 1.8l2.5 5.3 5.7.7-4.2 4 1.1 5.7L10 14.7l-5.1 2.8 1.1-5.7-4.2-4 5.7-.7Z"/><path transform="translate(21 0)" d="M10 1.8l2.5 5.3 5.7.7-4.2 4 1.1 5.7L10 14.7l-5.1 2.8 1.1-5.7-4.2-4 5.7-.7Z"/><path transform="translate(42 0)" d="M10 1.8l2.5 5.3 5.7.7-4.2 4 1.1 5.7L10 14.7l-5.1 2.8 1.1-5.7-4.2-4 5.7-.7Z"/><path transform="translate(63 0)" d="M10 1.8l2.5 5.3 5.7.7-4.2 4 1.1 5.7L10 14.7l-5.1 2.8 1.1-5.7-4.2-4 5.7-.7Z"/><path transform="translate(84 0)" d="M10 1.8l2.5 5.3 5.7.7-4.2 4 1.1 5.7L10 14.7l-5.1 2.8 1.1-5.7-4.2-4 5.7-.7Z"/></svg>
                <span><span class="font-semibold tabular-nums text-ink">{{ $rating }}</span> {{ $ratingNote }}</span>
            </p>
        </div>
        <figure class="relative lg:col-span-6" data-reveal>
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1600" height="1075" fetchpriority="high" class="aspect-[4/3] w-full rounded-lg object-cover lg:aspect-[5/6]">
            <figcaption class="mt-3 rounded-md border border-line sm:absolute sm:mt-0 sm:border-0 bg-surface/95 p-4 shadow-float backdrop-blur-sm sm:right-auto sm:bottom-5 sm:left-5 sm:w-80 lg:-left-10">
                <p class="bulletin flex items-center justify-between gap-3 text-muted">
                    <span>{{ $reportTitle }}</span>
                    <span class="inline-flex items-center gap-1.5 text-ink"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-3.5" aria-hidden="true"><path d="m4 10.5 4 4 8-9"/></svg>Done</span>
                </p>
                <p class="mt-2 font-display text-lg font-semibold tracking-tight">{{ $reportPlace }}</p>
                <p class="text-sm text-muted">{{ $reportJob }}</p>
                <dl class="mt-3 grid grid-cols-2 border-t border-line pt-3 text-sm">
                    <div>
                        <dt class="text-muted">Roof size</dt>
                        <dd class="font-semibold tabular-nums">{{ $reportSize }}</dd>
                    </div>
                    <div>
                        <dt class="text-muted">On site</dt>
                        <dd class="font-semibold tabular-nums">{{ $reportTime }}</dd>
                    </div>
                </dl>
            </figcaption>
        </figure>
    </div>
</section>
