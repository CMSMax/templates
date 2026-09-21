@props([
    'label' => 'Storm help',
    'heading' => 'Hail tonight. Someone on your roof by Thursday.',
    'body' => "After a storm we check your roof for free, photograph every hit, and deal with your insurance adjuster so you don't have to argue about shingles.",
    'ctaLabel' => 'Book a storm inspection',
    'ctaLink' => '/contact',
    'image' => '/images/inspection.jpg',
    'imageAlt' => 'A roof inspector holding a tablet over grey shingles with hail hits circled in white chalk and a tape measure laid across them.',
    'caption' => 'Every hit circled in chalk, measured, and photographed — the record your adjuster sees.',
])
<section class="pt-14 pb-20 md:pt-24 md:pb-28">
    <div class="mx-auto grid max-w-7xl gap-12 px-5 md:px-8 lg:grid-cols-12 lg:items-end lg:gap-10">
        <div class="lg:col-span-6">
            <p class="bulletin flex items-center gap-2 text-muted"><span class="size-2 rounded-full bg-primary" aria-hidden="true"></span>{{ $label }}</p>
            <h1 class="mt-6 max-w-[17ch] font-display text-hero font-semibold text-balance">{{ $heading }}</h1>
            <p class="mt-7 max-w-[46ch] text-lg text-pretty text-muted md:text-xl">{{ $body }}</p>
            <div class="mt-10 flex flex-wrap items-center gap-x-6 gap-y-4">
                <a href="{{ $ctaLink }}" class="group inline-flex min-h-13 items-center gap-3 rounded-md bg-primary py-3 pr-4 pl-5 text-base font-semibold text-primary-foreground shadow-lift hover:bg-primary/85 active:translate-y-px">
                    {{ $ctaLabel }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0 transition-transform duration-150 group-hover:translate-x-0.5" aria-hidden="true"><path d="M4 10h11M11 5l5 5-5 5"/></svg>
                </a>
                <a href="{{ $site->phone_href }}" class="inline-flex min-h-12 items-center gap-2 text-base font-semibold tabular-nums text-ink underline decoration-line decoration-2 underline-offset-6 hover:decoration-ink">Storm line {{ $site->phone }}</a>
            </div>
        </div>
        <figure class="lg:col-span-6" data-reveal>
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1600" height="1205" fetchpriority="high" class="aspect-[4/3] w-full rounded-lg object-cover">
            <figcaption class="mt-4 max-w-[52ch] text-sm text-pretty text-muted">{{ $caption }}</figcaption>
        </figure>
    </div>
</section>
