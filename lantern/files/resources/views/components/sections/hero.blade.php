@props([
    'heading' => 'The whole house, one phone number.',
    'intro' => 'Heating, cooling, plumbing, electrical and the small repairs in between — handled by one licensed crew that works this side of the river.',
    'ctaLabel' => 'Book a visit',
    'ctaUrl' => '/contact',
    'image' => '/images/hero.jpg',
    'imageAlt' => 'A Lantern technician on the front steps of a brick house on a bright morning',
    'captionPlace' => 'Fairbank Road',
    'captionNote' => 'Furnace replaced before lunch',
])
<section class="@@container relative border-b border-line lg:grid lg:grid-cols-[1fr_minmax(0,42%)] lg:items-stretch">
    <div class="px-6 pt-14 pb-12 lg:py-28 lg:pr-16 lg:pl-[max(1.5rem,calc((100cqw-72rem)/2+1.5rem))]">
        <h1 data-rise class="max-w-[18ch] font-display text-[clamp(2.5rem,4.6vw,4.25rem)]/[1.02] font-semibold tracking-tight text-balance text-ink">{{ $heading }}</h1>
        <p data-rise class="mt-6 max-w-[46ch] text-[1.0625rem]/7 text-muted [--i:1]">{{ $intro }}</p>
        <div data-rise class="mt-9 flex flex-wrap items-center gap-x-6 gap-y-3 max-sm:flex-col max-sm:items-stretch [--i:2]">
            <a href="{{ $ctaUrl }}" class="rounded-xs bg-accent px-5 py-3 text-center font-medium text-accent-ink transition-transform duration-150 ease-out hover:bg-accent/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent active:scale-[0.98]">{{ $ctaLabel }}</a>
            <a href="{{ $site->phone_href }}" class="flex items-center justify-center gap-2 py-3 font-medium text-ink underline decoration-line underline-offset-4 tabular-nums hover:decoration-accent focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">
                <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0" aria-hidden="true"><path d="M4.2 2.5h2l1 2.5-1.3 1a8.5 8.5 0 0 0 4.1 4.1l1-1.3 2.5 1v2a1 1 0 0 1-1.1 1A11.5 11.5 0 0 1 3.2 3.6a1 1 0 0 1 1-1.1Z"/></svg>
                {{ $site->phone }}
            </a>
        </div>
        <dl data-rise class="mt-12 grid max-w-lg grid-cols-2 border-t border-line pt-5 [--i:3]">
            <div class="pr-5">
                <dt class="flex items-center gap-1.5 font-display text-2xl font-semibold text-ink tabular-nums">
                    <svg viewBox="0 0 16 16" fill="currentColor" class="size-4 shrink-0 text-accent" aria-hidden="true"><path d="m8 1.6 1.9 3.9 4.3.6-3.1 3 .7 4.3L8 11.4l-3.8 2 .7-4.3-3.1-3 4.3-.6L8 1.6Z"/></svg>
                    {{ $site->rating }}
                </dt>
                <dd class="mt-1 text-base/6 text-muted sm:text-sm/6">From {{ $site->review_count }} neighbours</dd>
            </div>
            <div class="border-l border-line pl-5">
                <dt class="font-display text-2xl font-semibold text-ink">Today</dt>
                <dd class="mt-1 text-base/6 text-muted sm:text-sm/6">Same-day slots most weekdays</dd>
            </div>
        </dl>
    </div>
    <div class="relative overflow-hidden max-lg:h-[24rem]">
        <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1200" height="1600" fetchpriority="high" data-settle class="size-full object-cover">
        <figcaption class="absolute bottom-0 left-0 max-w-[24ch] bg-canvas px-5 py-4 lg:bottom-10 lg:left-0">
            <p class="font-display text-base font-semibold text-ink">{{ $captionPlace }}</p>
            <p class="mt-0.5 text-base/6 text-muted sm:text-sm/6">{{ $captionNote }}</p>
        </figcaption>
    </div>
</section>
