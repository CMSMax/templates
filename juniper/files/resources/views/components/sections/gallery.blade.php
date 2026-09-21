@props([
    'imageOne' => '/images/pappardelle.jpg',
    'imageOneAlt' => 'Hand-cut pappardelle with brown butter, crispy sage, and shaved parmesan.',
    'imageTwo' => '/images/market-produce.jpg',
    'imageTwoAlt' => 'Heirloom tomatoes, carrots, fennel, herbs, and sourdough from the morning delivery.',
    'imageThree' => '/images/olive-oil-cake.jpg',
    'imageThreeAlt' => 'A slice of olive oil cake with crème fraîche and roasted figs.',
    'imageFour' => '/images/juniper-tonic.jpg',
    'imageFourAlt' => 'A gin and tonic with cucumber, rosemary, and juniper berries on the marble bar.',
])
<section aria-label="Photographs from the kitchen and the table" class="pb-20 lg:pb-28">
    <div class="mx-auto grid max-w-6xl grid-cols-2 gap-3 px-6 sm:gap-4 lg:h-[42rem] lg:grid-cols-12 lg:grid-rows-2">
        <img src="{{ $imageOne }}" alt="{{ $imageOneAlt }}" width="1100" height="1100" loading="lazy" class="col-span-2 aspect-square size-full rounded-[min(3vw,1.75rem)] bg-line object-cover lg:col-span-5 lg:row-span-2 lg:aspect-auto">
        <img src="{{ $imageTwo }}" alt="{{ $imageTwoAlt }}" width="1400" height="939" loading="lazy" class="col-span-2 aspect-3/2 size-full rounded-[min(3vw,1.75rem)] bg-line object-cover lg:col-span-7 lg:aspect-auto">
        <img src="{{ $imageThree }}" alt="{{ $imageThreeAlt }}" width="960" height="1191" loading="lazy" class="aspect-4/5 size-full rounded-[min(3vw,1.75rem)] bg-line object-cover lg:col-span-4 lg:aspect-auto">
        <img src="{{ $imageFour }}" alt="{{ $imageFourAlt }}" width="1000" height="1241" loading="lazy" class="aspect-4/5 size-full rounded-[min(3vw,1.75rem)] bg-line object-cover lg:col-span-3 lg:aspect-auto">
    </div>
</section>
