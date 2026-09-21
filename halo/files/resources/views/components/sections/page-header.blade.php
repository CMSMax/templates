@props([
    'eyebrow' => 'The menu',
    'heading' => 'Hair, skin, nails',
    'headingAccent' => 'and body.',
    'body' => 'Every service we offer, with how long it takes and what it costs.',
    'showImage' => '1',
    'image' => '/images/colour.jpg',
    'imageAlt' => 'A colourist brushing honey balayage onto sections of long brown hair',
])
<section class="overflow-hidden pt-8 pb-16 sm:pt-12 lg:pb-20">
    <div class="mx-auto grid max-w-7xl items-end gap-12 px-5 sm:px-8 lg:grid-cols-12 lg:gap-10">
        <div class="lg:col-span-7">
            <p data-rise class="text-xs font-semibold tracking-[0.22em] text-muted uppercase">{{ $eyebrow }}</p>
            <h1 data-rise class="mt-6 font-display text-[clamp(3rem,7vw,6rem)] leading-[0.96] tracking-[-0.03em] text-ink [--i:1]">{{ $heading }} <em class="block text-primary italic">{{ $headingAccent }}</em></h1>
            <p data-rise class="mt-8 max-w-[48ch] text-lg/8 text-muted [--i:2]">{{ $body }}</p>
        </div>
        @if ($showImage == '1')
            <div data-rise class="lg:col-span-4 lg:col-start-9 [--i:2]">
                <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1000" height="1250" fetchpriority="high" class="arch aspect-[4/5] w-full object-cover max-lg:max-h-[26rem] max-lg:max-w-sm">
            </div>
        @endif
    </div>
</section>
