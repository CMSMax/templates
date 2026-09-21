@props([
    'image' => '/images/market-produce.jpg',
    'imageAlt' => 'The morning delivery on the kitchen table: heirloom tomatoes, carrots, fennel, herbs, cheese, and sourdough.',
    'heading' => 'A short menu, and a long list of growers',
    'paragraphOne' => 'Juniper opened in a narrow room on Linden Street with twelve tables, one oven, and a promise to cook from what was close by. It still works that way. The menu is short on purpose, so every plate can be made from scratch the day it is served.',
    'paragraphTwo' => 'We buy whole animals and whole harvests from a handful of farms we know by name, bake our bread every morning, and pour wine from small growers who farm the way we cook — carefully, and without shortcuts.',
    'paragraphThree' => 'Come for a plate at the bar or stay for three courses. Either way, the table is yours for the evening.',
    'quote' => 'We would rather cook six things beautifully than twenty things well enough.',
    'quoteImage' => '/images/roast-chicken.jpg',
    'quoteImageAlt' => 'Roast half chicken with thyme, juniper berries, and charred lemon.',
])
<section class="pt-12 pb-20 sm:pt-16 lg:pb-28">
    <div class="mx-auto max-w-6xl px-6">
        <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1400" height="939" fetchpriority="high" class="aspect-4/3 w-full rounded-[min(3vw,1.75rem)] bg-line object-cover sm:aspect-2/1">
        <div class="mt-16 grid gap-10 lg:mt-24 lg:grid-cols-[5fr_7fr] lg:gap-20">
            <h2 class="max-w-[16ch] font-display text-4xl text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
            <div class="flex max-w-[60ch] flex-col gap-6 text-lg/8 text-pretty text-muted">
                <p>{{ $paragraphOne }}</p>
                <p>{{ $paragraphTwo }}</p>
                <p>{{ $paragraphThree }}</p>
            </div>
        </div>
        <figure class="mt-20 grid items-center gap-12 lg:mt-28 lg:grid-cols-[7fr_5fr] lg:gap-20">
            <blockquote class="font-display text-4xl text-balance text-ink italic sm:text-5xl lg:order-last">
                <p>“{{ $quote }}”</p>
            </blockquote>
            <img src="{{ $quoteImage }}" alt="{{ $quoteImageAlt }}" width="960" height="1191" loading="lazy" class="aspect-4/5 w-full rounded-[min(3vw,1.75rem)] bg-line object-cover max-lg:max-h-[34rem]">
        </figure>
    </div>
</section>
