@props([
    'heading' => 'The hot towel shave.',
    'body' => 'The oldest service in the shop, and still the one people remember. Forty-five minutes, flat on your back, nothing to do but let us work.',
    'image' => '/images/hot-towel.jpg',
    'imageAlt' => 'A client reclined in a leather chair with a steaming towel over his face',
    'stepOne' => 'Hot towels open the pores and soften the beard.',
    'stepTwo' => 'Pre-shave oil and a warm lather, worked in with a badger brush.',
    'stepThree' => 'Two slow passes with a straight razor — with the grain, then across.',
    'stepFour' => 'A cold towel to close, then a balm that does not sting.',
])
<section class="py-20 lg:py-32">
    <div class="mx-auto grid max-w-7xl items-center gap-16 px-6 lg:grid-cols-2 lg:gap-24">
        <img src="{{ $image }}" alt="{{ $imageAlt }}" width="896" height="1120" loading="lazy" decoding="async" class="aspect-[4/5] w-full object-cover max-lg:aspect-[4/3]">
        <div>
            <h2 class="max-w-[12ch] font-display text-5xl leading-[0.95] font-semibold text-balance text-ink uppercase sm:text-6xl">{{ $heading }}</h2>
            <p class="mt-8 max-w-[46ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
            <ol role="list" class="mt-12 divide-y divide-line border-y border-line">
                <li class="flex gap-6 py-5">
                    <span class="font-display text-2xl font-semibold text-primary tabular-nums">1</span>
                    <p class="text-base/7 text-pretty text-ink">{{ $stepOne }}</p>
                </li>
                <li class="flex gap-6 py-5">
                    <span class="font-display text-2xl font-semibold text-primary tabular-nums">2</span>
                    <p class="text-base/7 text-pretty text-ink">{{ $stepTwo }}</p>
                </li>
                <li class="flex gap-6 py-5">
                    <span class="font-display text-2xl font-semibold text-primary tabular-nums">3</span>
                    <p class="text-base/7 text-pretty text-ink">{{ $stepThree }}</p>
                </li>
                <li class="flex gap-6 py-5">
                    <span class="font-display text-2xl font-semibold text-primary tabular-nums">4</span>
                    <p class="text-base/7 text-pretty text-ink">{{ $stepFour }}</p>
                </li>
            </ol>
        </div>
    </div>
</section>
