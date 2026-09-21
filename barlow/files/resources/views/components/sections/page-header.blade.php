@props([
    'heading' => 'Services & prices',
    'body' => 'Cuts, shaves, and beard work, done properly and priced plainly.',
    'image' => '/images/tools.jpg',
    'imageAlt' => 'A straight razor, shaving brush, comb, and beard oil on dark walnut',
])
<section class="border-b border-line">
    <div class="mx-auto grid max-w-7xl lg:grid-cols-12">
        <div class="flex flex-col justify-end px-6 pt-20 pb-14 lg:col-span-7 lg:pt-32 lg:pr-16 lg:pb-20">
            <h1 data-rise class="max-w-[14ch] font-display text-[clamp(3.25rem,7vw,6rem)] leading-[0.9] font-semibold text-balance text-ink uppercase">{{ $heading }}</h1>
            <p data-rise class="mt-8 max-w-[46ch] text-lg/8 text-pretty text-muted [--i:1]">{{ $body }}</p>
        </div>
        <img src="{{ $image }}" alt="{{ $imageAlt }}" width="896" height="1120" fetchpriority="high" class="aspect-[16/10] w-full object-cover lg:col-span-5 lg:aspect-auto lg:h-full lg:max-h-[36rem]">
    </div>
</section>
