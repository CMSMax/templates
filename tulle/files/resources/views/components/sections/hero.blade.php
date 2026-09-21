@props([
    'kicker' => 'Wedding planning and design',
    'heading' => 'Every detail,',
    'headingEmphasis' => 'chosen with you.',
    'body' => 'A small studio in the Hudson Valley planning fourteen weddings a year, from the first venue visit to the last song of the night.',
    'secondaryLabel' => 'See the services',
    'image' => '/images/meadow-table.jpg',
    'imageAlt' => 'A long reception table under an open sailcloth tent in a meadow, set with white linen, ivory taper candles, and low arrangements of plum and blush roses and sweet peas.',
    'showPalette' => '1',
    'palette' => [],
])
<section class="grid lg:min-h-[min(max(42rem,calc(100svh-4.5rem)),60rem)] lg:grid-cols-2">
    <div class="flex flex-col justify-between gap-16 bg-primary px-6 pt-14 pb-10 text-primary-foreground sm:px-10 lg:py-14 lg:pr-16 lg:pl-[max(2rem,calc((100vw-80rem)/2+2rem))]">
        <p class="label-caps text-primary-foreground/80">{{ $kicker }}</p>
        <div>
            <h1 class="max-w-[14ch] font-display text-[clamp(2.75rem,5.6vw,5rem)] leading-[1.04] tracking-tight text-balance">{{ $heading }} <em class="italic">{{ $headingEmphasis }}</em></h1>
            <p class="mt-7 max-w-[42ch] text-lg/8 text-primary-foreground/85">{{ $body }}</p>
            <div class="mt-10 flex flex-wrap items-center gap-x-8 gap-y-5">
                <a href="{{ $site->inquire_url }}" class="inline-flex min-h-12 items-center bg-primary-foreground px-7 font-medium text-primary hover:bg-primary-foreground/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-foreground">{{ $site->cta_label }}</a>
                <a href="/services" class="group inline-flex min-h-12 items-center gap-2 font-medium underline decoration-primary-foreground/40 underline-offset-8 hover:decoration-primary-foreground focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary-foreground">
                    {{ $secondaryLabel }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-4 transition-transform duration-200 group-hover:translate-x-0.5" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </a>
            </div>
        </div>
        <div class="flex items-end justify-between gap-6 border-t border-primary-foreground/25 pt-6">
            <p class="label-caps text-primary-foreground/80">{{ $site->booking_note }}</p>
            <p class="font-display text-[clamp(1.75rem,3.4vw,3rem)] leading-none tracking-wide tabular-nums">{{ $site->booking_years }}</p>
        </div>
    </div>
    <div class="relative min-h-[28rem] overflow-hidden bg-surface sm:min-h-[36rem] lg:min-h-0">
        <img data-settle src="{{ $image }}" alt="{{ $imageAlt }}" width="1200" height="1600" fetchpriority="high" class="absolute inset-0 size-full object-cover">
        @if ($showPalette == '1')
            <figure class="absolute bottom-6 left-6 bg-canvas p-3 shadow-lg shadow-ink/10 ring-1 ring-ink/10 sm:bottom-8 sm:left-8">
                <figcaption class="label-caps px-1 pb-3 text-muted">{{ $site->palette_label }}</figcaption>
                <ul role="list" class="flex gap-2">
                    @foreach ($palette as $chip)
                        <li class="w-16 sm:w-20">
                            <span class="block aspect-square w-full ring-1 ring-ink/10 ring-inset" style="background-color: {{ $chip->hex }}" aria-hidden="true"></span>
                            <p class="mt-2 text-[0.8125rem]/4 text-ink">{{ $chip->name }}</p>
                        </li>
                    @endforeach
                </ul>
            </figure>
        @endif
    </div>
</section>
