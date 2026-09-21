@props([
    'heading' => 'Cut this morning. On their table by five.',
    'body' => 'Seasonal flowers from small farms nearby, arranged by hand in our studio and delivered across town the same day.',
    'secondaryLabel' => 'See the arrangements',
    'image' => '/images/hero-still-life.jpg',
    'imageAlt' => 'A loose arrangement of coral garden roses, peonies, ranunculus, and flamed parrot tulips in a stone urn on a worn ledge.',
])
<section class="relative overflow-hidden lg:flex lg:min-h-[max(40rem,calc(100svh-4.5rem))] lg:items-center">
    <div class="relative lg:absolute lg:inset-0">
        <img data-surface src="{{ $image }}" alt="{{ $imageAlt }}" width="2400" height="1340" fetchpriority="high" class="aspect-square w-full object-cover object-[80%_50%] sm:aspect-16/9 lg:aspect-auto lg:h-full">
        <div class="absolute inset-0 bg-linear-to-t from-canvas via-canvas/10 to-transparent lg:bg-linear-to-r lg:from-canvas lg:via-canvas/75 lg:to-transparent" aria-hidden="true"></div>
        <div class="absolute inset-x-0 bottom-0 h-40 bg-linear-to-t from-canvas to-transparent max-lg:hidden" aria-hidden="true"></div>
    </div>
    <div class="relative mx-auto w-full max-w-7xl px-6 pb-16 max-lg:-mt-16 lg:px-8 lg:py-24">
        <div class="max-w-[38rem]">
            <h1 class="font-display text-[clamp(2.75rem,6.2vw,5.25rem)] leading-[1.02] tracking-tight text-balance text-ink">{{ $heading }}</h1>
            <p class="mt-6 max-w-[44ch] text-lg/8 text-muted">{{ $body }}</p>
            <div class="mt-10 flex flex-wrap items-center gap-x-8 gap-y-5">
                <a href="{{ $site->order_url }}" class="rounded-full bg-primary px-7 py-3.5 font-medium text-primary-foreground transition-colors duration-200 hover:bg-primary/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->cta_label }}</a>
                <a href="/arrangements" class="group inline-flex items-center gap-2 font-medium text-ink underline decoration-ink/30 underline-offset-8 transition-colors duration-200 hover:decoration-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                    {{ $secondaryLabel }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-4 transition-transform duration-200 group-hover:translate-x-0.5" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </a>
            </div>
            <p class="mt-12 flex items-center gap-3 border-t border-line pt-6 text-[0.9375rem] text-muted">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0 text-ink" aria-hidden="true"><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2m10 0H9m10 0h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14"/><circle cx="17" cy="18" r="2"/><circle cx="7" cy="18" r="2"/></svg>
                <span><span class="text-ink">{{ $site->delivery_cutoff }}</span>, {{ $site->delivery_days }}.</span>
            </p>
        </div>
    </div>
</section>
