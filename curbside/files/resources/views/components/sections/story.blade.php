@props([
    'heading' => 'One truck. One griddle. No shortcuts.',
    'body' => 'It started with a used bread truck and a tortilla press from our aunt’s kitchen. The pork still marinates overnight, the salsas still get made every morning, and the menu still fits on one side of the truck.',
    'bodyMore' => 'If you have questions about what’s in anything, ask at the window. Whoever is on the flat-top will tell you.',
    'image' => '/images/griddle.jpg',
    'imageAlt' => 'Marinated pork and corn tortillas sizzling on a flat-top griddle, steam rising in the sunlight',
    'imageSecond' => '/images/window.jpg',
    'imageSecondAlt' => 'A paper boat of tacos handed through the truck window to a customer',
])
<section id="story" class="scroll-mt-18 border-t-2 border-ink bg-surface">
    <div class="grid lg:grid-cols-2">
        <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1168" height="880" loading="lazy" decoding="async" class="aspect-[4/3] size-full object-cover lg:aspect-auto">
        <div class="flex items-center px-5 py-16 sm:px-8 lg:px-16 lg:py-24">
            <div>
                <h2 class="max-w-[14ch] font-display text-[clamp(2.75rem,5.5vw,4.5rem)] leading-[0.95] font-black text-balance text-ink uppercase">{{ $heading }}</h2>
                <p class="mt-7 max-w-[52ch] text-lg/8 text-pretty text-ink">{{ $body }}</p>
                <p class="mt-5 max-w-[52ch] text-lg/8 text-pretty text-muted">{{ $bodyMore }}</p>
                <img src="{{ $imageSecond }}" alt="{{ $imageSecondAlt }}" width="1168" height="880" loading="lazy" decoding="async" class="mt-10 aspect-[4/3] w-full max-w-sm border-2 border-ink object-cover">
            </div>
        </div>
    </div>
</section>
