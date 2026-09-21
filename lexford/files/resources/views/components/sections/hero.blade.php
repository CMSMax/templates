@props([
    'heading' => 'Clear counsel for the moments that matter',
    'body' => 'A small firm for businesses, families and individuals. We tell you where you stand, what it will cost, and what we would do in your place.',
    'secondaryLabel' => 'Our practice areas',
    'image' => '/images/hero-attorney.jpg',
    'imageAlt' => 'A partner of the firm in a dark suit, standing in a wood-panelled office lined with law books.',
    'values' => [],
])
<section class="grid lg:min-h-[calc(100svh-5rem)] lg:grid-cols-2">
    <div class="relative flex overflow-hidden bg-primary text-primary-foreground">
        <x-sections.arcs/>
        <div class="relative mt-auto w-full px-6 pt-24 pb-14 sm:px-10 sm:pt-32 sm:pb-16 lg:px-[max(2rem,calc(50vw-38rem))] lg:pb-20">
            <h1 class="max-w-[13ch] font-display text-5xl font-light tracking-tight text-balance sm:text-6xl xl:text-7xl">{{ $heading }}</h1>
            <p class="mt-7 max-w-[42ch] text-lg/8 text-pretty text-primary-foreground/80">{{ $body }}</p>
            <div class="mt-10 flex flex-wrap items-center gap-x-8 gap-y-4">
                <a href="/contact" class="rounded-full bg-canvas px-6 py-3.5 font-medium text-ink transition-colors duration-150 hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-canvas">{{ $site->cta_label }}</a>
                <a href="/practice-areas" class="group inline-flex items-center gap-2 py-2 font-medium text-primary-foreground focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-canvas">
                    <span class="underline decoration-primary-foreground/30 underline-offset-[6px] transition-colors duration-150 group-hover:decoration-primary-foreground">{{ $secondaryLabel }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0 transition-transform duration-200 group-hover:translate-x-0.5" aria-hidden="true"><path d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>
    </div>
    <div class="relative min-h-[34rem] overflow-hidden bg-ink sm:min-h-[40rem] lg:min-h-0">
        <img data-settle src="{{ $image }}" alt="{{ $imageAlt }}" width="1600" height="2000" fetchpriority="high" class="absolute inset-0 size-full object-cover object-[42%_20%]">
        <div class="absolute inset-x-0 bottom-0 h-1/2 bg-linear-to-t from-ink/55 to-transparent" aria-hidden="true"></div>
        <ul role="list" aria-label="What we stand for" class="absolute bottom-6 left-6 flex flex-col items-start gap-2.5 sm:bottom-10 sm:left-10">
            @foreach ($values as $value)
                <li class="flex items-center gap-3 rounded-full border border-canvas/25 bg-ink/35 py-2 pr-5 pl-4 font-display text-xl text-canvas backdrop-blur-sm sm:text-2xl">
                    <span class="size-1.5 shrink-0 rounded-full bg-canvas/70" aria-hidden="true"></span>{{ $value->name }}
                </li>
            @endforeach
        </ul>
    </div>
</section>
