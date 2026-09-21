@props([
    'heading' => 'This season: plum and almond galette.',
    'body' => 'Every few weeks one bake takes the front of the counter. Right now it’s Italian prune plums, roasted until they go jammy, on a brown-butter rye crust.',
    'image' => '/images/galette.jpg',
    'imageAlt' => 'A rustic plum and almond galette with fanned roasted plum slices on a white plate, whole plums beside it',
    'fruitLabel' => 'The fruit',
    'fruit' => 'Prune plums from Hollis Orchard, twelve miles north, picked the week we bake them.',
    'pastryLabel' => 'The pastry',
    'pastry' => 'Rye and brown-butter crust over a thin layer of almond frangipane, folded by hand.',
    'seasonLabel' => 'Around until',
    'season' => 'Late October, or whenever the last crate of plums runs out.',
    'priceLabel' => 'Price',
    'price' => '$6 a slice. $34 whole, which serves eight.',
    'linkLabel' => 'Call to reserve a whole one',
])
<section class="border-b border-line bg-surface">
    <div class="grid grid-cols-1 gap-x-12 gap-y-6 px-5 py-14 sm:px-8 lg:grid-cols-12 lg:px-12 lg:py-20">
        <h2 class="max-w-[18ch] font-display text-[clamp(2.25rem,3.6vw,3.25rem)] leading-[1.04] tracking-[-0.02em] text-balance text-ink lg:col-span-7">{{ $heading }}</h2>
        <div class="flex flex-col items-start gap-6 lg:col-span-5 lg:pt-2">
            <p class="max-w-[46ch] text-lg/8 text-muted">{{ $body }}</p>
            <a href="{{ $site->cta_link }}" class="py-1 text-base font-semibold text-primary underline decoration-primary/40 underline-offset-8 transition-colors duration-150 hover:decoration-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $linkLabel }}</a>
        </div>
    </div>
    <div class="grid grid-cols-1 gap-px border-t border-line bg-line sm:grid-cols-2 lg:grid-cols-[1fr_minmax(0,36rem)_1fr]">
        <div class="grid gap-px bg-line max-lg:order-2 sm:max-lg:col-span-2 sm:max-lg:grid-cols-2 lg:grid-rows-2">
            <div class="bg-surface px-5 py-8 sm:px-8 lg:px-12 lg:py-12">
                <span class="block h-0.5 w-10 bg-primary" aria-hidden="true"></span>
                <h3 class="mt-5 text-sm font-semibold text-muted">{{ $fruitLabel }}</h3>
                <p class="mt-2 font-display text-2xl/9 text-ink">{{ $fruit }}</p>
            </div>
            <div class="bg-surface px-5 py-8 sm:px-8 lg:px-12 lg:py-12">
                <span class="block h-0.5 w-10 bg-primary" aria-hidden="true"></span>
                <h3 class="mt-5 text-sm font-semibold text-muted">{{ $pastryLabel }}</h3>
                <p class="mt-2 font-display text-2xl/9 text-ink">{{ $pastry }}</p>
            </div>
        </div>
        <div class="bg-surface max-lg:order-1 sm:max-lg:col-span-2">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1024" height="1024" loading="lazy" decoding="async" class="aspect-square size-full object-cover">
        </div>
        <div class="grid gap-px bg-line max-lg:order-3 sm:max-lg:col-span-2 sm:max-lg:grid-cols-2 lg:grid-rows-2">
            <div class="bg-surface px-5 py-8 sm:px-8 lg:px-12 lg:py-12">
                <span class="block h-0.5 w-10 bg-primary" aria-hidden="true"></span>
                <h3 class="mt-5 text-sm font-semibold text-muted">{{ $seasonLabel }}</h3>
                <p class="mt-2 font-display text-2xl/9 text-ink">{{ $season }}</p>
            </div>
            <div class="bg-surface px-5 py-8 sm:px-8 lg:px-12 lg:py-12">
                <span class="block h-0.5 w-10 bg-primary" aria-hidden="true"></span>
                <h3 class="mt-5 text-sm font-semibold text-muted">{{ $priceLabel }}</h3>
                <p class="mt-2 font-display text-2xl/9 text-ink tabular-nums">{{ $price }}</p>
            </div>
        </div>
    </div>
</section>
