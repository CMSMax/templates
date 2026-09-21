@props(['image' => '', 'alt' => ''])
{{-- A photograph printed the riso way: the one blue ink on the paper stock,
     with the pink drum's block slipped out of register behind it. Any
     photograph dropped in comes out in the poster's two inks. --}}
<div class="relative mr-3 mb-3">
    <div class="absolute inset-0 translate-x-3 translate-y-3 bg-primary" aria-hidden="true"></div>
    <div class="riso-ink relative overflow-hidden ring-2 ring-ink">
        <img src="{{ $image }}" alt="{{ $alt }}" width="1200" height="896" loading="lazy" decoding="async" class="aspect-[4/3] w-full object-cover">
    </div>
</div>
