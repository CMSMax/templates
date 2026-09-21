@props([
    'heading' => 'Slow coffee,',
    'headingAccent' => 'good company.',
    'body' => 'Small-batch espresso, pastries baked at dawn, and an all-day kitchen on the corner of Linden Avenue.',
    'secondaryLabel' => 'See the menu',
    'secondaryLink' => '/menu',
    'imageLeft' => '/images/croissant.jpg',
    'imageLeftAlt' => 'A golden butter croissant on a wooden table',
    'imageCenter' => '/images/latte.jpg',
    'imageCenterAlt' => 'A flat white with rosetta latte art, seen from above',
    'imageRight' => '/images/iced.jpg',
    'imageRightAlt' => 'An iced latte with milk swirling through cold espresso',
])
<section class="overflow-hidden pt-10 pb-20 sm:pt-16 lg:pb-28">
    <div class="mx-auto max-w-6xl px-6">
        <div class="flex flex-col items-center text-center">
            <p data-rise class="inline-flex items-center gap-2.5 rounded-full bg-surface px-4 py-2 text-sm font-medium text-ink">
                <span class="size-1.5 shrink-0 rounded-full bg-primary" aria-hidden="true"></span>
                {{ $site->hours_short }} · {{ $site->address }}
            </p>
            <h1 data-rise class="mt-7 max-w-[16ch] font-display text-[clamp(2.75rem,7.5vw,5.5rem)] leading-[1.02] font-medium tracking-tighter text-balance text-ink [--i:1]">{{ $heading }} <em class="font-serif font-normal tracking-normal italic">{{ $headingAccent }}</em></h1>
            <p data-rise class="mt-6 max-w-[44ch] text-lg/8 text-pretty text-muted [--i:2]">{{ $body }}</p>
            <div data-rise class="mt-9 flex flex-wrap items-center justify-center gap-3 [--i:3]">
                <a href="{{ $site->directions_url }}" class="inline-flex items-center gap-2 rounded-full bg-primary py-3.5 pr-4 pl-6 text-base font-medium text-primary-foreground hover:bg-primary/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                    {{ $site->cta_label }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 0 0 1.06 0l7.22-7.22v5.69a.75.75 0 0 0 1.5 0v-7.5a.75.75 0 0 0-.75-.75h-7.5a.75.75 0 0 0 0 1.5h5.69l-7.22 7.22a.75.75 0 0 0 0 1.06Z" clip-rule="evenodd"/></svg>
                </a>
                <a href="{{ $secondaryLink }}" class="rounded-full px-6 py-3.5 text-base font-medium text-ink ring-1 ring-line ring-inset hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $secondaryLabel }}</a>
            </div>
        </div>
        <div class="mt-14 grid grid-cols-[5fr_6fr_5fr] items-center gap-3 sm:mt-20 sm:gap-6">
            <img data-rise src="{{ $imageLeft }}" alt="{{ $imageLeftAlt }}" width="880" height="1168" fetchpriority="high" class="aspect-[3/4] w-full translate-y-6 rounded-[min(3vw,28px)] object-cover [--i:4] sm:translate-y-12">
            <img data-rise src="{{ $imageCenter }}" alt="{{ $imageCenterAlt }}" width="880" height="1168" fetchpriority="high" class="aspect-[3/4] w-full rounded-[min(3vw,28px)] object-cover [--i:3]">
            <img data-rise src="{{ $imageRight }}" alt="{{ $imageRightAlt }}" width="880" height="1168" fetchpriority="high" class="aspect-[3/4] w-full translate-y-6 rounded-[min(3vw,28px)] object-cover [--i:5] sm:translate-y-12">
        </div>
    </div>
</section>
