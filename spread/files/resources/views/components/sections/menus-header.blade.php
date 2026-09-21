@props([
    'heading' => 'Our menus',
    'body' => 'Four ways to feed a room, each cooked from what the Hudson Valley is growing this season. Every price is per guest and includes the food, the cooks and the servers.',
    'image' => '/images/market.jpg',
    'imageAlt' => 'A still life of autumn produce — persimmons, figs, squash, pears, beets and chestnuts — against a plum wall',
])
<section class="bg-secondary text-on-plum">
    <div class="mx-auto grid max-w-7xl grid-cols-1 items-end gap-12 px-5 pt-12 pb-16 sm:px-8 lg:grid-cols-[6fr_6fr] lg:gap-16 lg:pt-20 lg:pb-24">
        <div>
            <h1 data-rise class="font-display text-[clamp(2.75rem,7vw,5.5rem)] leading-[1] tracking-tight text-balance">{{ $heading }}</h1>
            <p data-rise class="mt-7 max-w-[48ch] text-lg/8 text-on-plum-muted [--i:1]">{{ $body }}</p>
            <p data-rise class="mt-8 text-sm text-on-plum-muted [--i:2]">{{ $site->season }}</p>
        </div>
        <img data-rise src="{{ $image }}" alt="{{ $imageAlt }}" width="1024" height="688" fetchpriority="high" class="aspect-[3/2] w-full rounded-t-[10rem] object-cover [--i:1]">
    </div>
</section>
