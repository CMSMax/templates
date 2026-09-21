@props([
    'eyebrow' => 'Daycare & preschool · 6 weeks to 5 years',
    'heading' => 'A joyful place to learn and grow',
    'stickerOne' => 'Safe',
    'stickerTwo' => 'Curious',
    'stickerThree' => 'Loved',
    'body' => 'Warm teachers, small groups, and days full of play, stories, and fresh air — so your little one grows in confidence and you go to work with peace of mind.',
    'secondaryLabel' => 'Explore programs',
    'secondaryLink' => '/programs',
    'image' => '/images/hero.jpg',
    'imageAlt' => 'Preschoolers painting with watercolors at a low wooden table while their teacher kneels beside them',
])
<section class="overflow-hidden pt-14 sm:pt-20">
    <div class="mx-auto max-w-6xl px-5 sm:px-8">
        <div class="flex flex-col items-center text-center">
            <p data-rise class="inline-flex items-center gap-2 rounded-full bg-surface px-4 py-2 text-sm font-medium text-ink">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0" aria-hidden="true"><path d="M14 9.536V7a4 4 0 0 1 4-4h1.5a.5.5 0 0 1 .5.5V5a4 4 0 0 1-4 4a4 4 0 0 0-4 4c0 2 1 3 1 5a5 5 0 0 1-1 3M4 9a5 5 0 0 1 8 4a5 5 0 0 1-8-4m1 12h14"/></svg>
                {{ $eyebrow }}
            </p>
            <div class="relative mt-12 px-2 sm:mt-8 sm:px-6">
                <h1 data-rise class="max-w-[14ch] font-display text-[clamp(2.75rem,7.2vw,5.75rem)] leading-[1.02] font-semibold tracking-tight text-balance text-ink [--i:1]">{{ $heading }}</h1>
                <span data-sticker aria-hidden="true" class="absolute -top-8 left-2 -rotate-12 rounded-full bg-primary px-3.5 py-1 font-display text-base font-semibold text-primary-foreground sm:-top-4 sm:px-4 sm:text-xl">{{ $stickerOne }}</span>
                <span data-sticker aria-hidden="true" class="absolute -top-7 right-4 rotate-6 rounded-full bg-secondary px-3.5 py-1 font-display text-base font-semibold text-secondary-foreground [--i:1] sm:top-1/2 sm:-right-4 sm:px-4 sm:text-xl">{{ $stickerTwo }}</span>
                <span data-sticker aria-hidden="true" class="absolute -bottom-9 left-1/2 -translate-x-1/2 -rotate-3 rounded-full bg-card px-3.5 py-1 font-display text-base font-semibold text-ink ring-1 ring-line [--i:2] sm:-bottom-5 sm:left-[18%] sm:translate-x-0 sm:px-4 sm:text-xl">{{ $stickerThree }}</span>
            </div>
            <p data-rise class="mt-14 max-w-[58ch] sm:mt-10 text-lg/8 text-muted [--i:2]">{{ $body }}</p>
            <div data-rise class="mt-9 flex flex-wrap items-center justify-center gap-3 [--i:3]">
                <a href="{{ $site->cta_link }}" class="inline-flex items-center gap-2 rounded-full bg-primary py-3.5 pr-4 pl-6 text-base font-semibold text-primary-foreground transition-colors duration-150 hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">
                    {{ $site->cta_label }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M7 7h10v10M7 17L17 7"/></svg>
                </a>
                <a href="{{ $secondaryLink }}" class="rounded-full px-6 py-3.5 text-base font-semibold text-ink ring-1 ring-ink/15 ring-inset transition-colors duration-150 hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $secondaryLabel }}</a>
            </div>
        </div>
    </div>
    <div data-rise class="mx-auto mt-14 max-w-7xl px-3 sm:mt-20 sm:px-6 [--i:4]">
        <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1344" height="752" fetchpriority="high" class="aspect-[4/3] w-full rounded-[1.75rem] object-cover sm:aspect-[16/8] sm:rounded-[2.5rem]">
    </div>
</section>
