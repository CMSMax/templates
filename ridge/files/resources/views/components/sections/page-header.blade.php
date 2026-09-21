@props([
    'label' => 'Roofing',
    'heading' => 'New roofs, built from the deck up.',
    'body' => 'Replacement, repair, metal, and gutters — quoted from photos of your actual roof, built by our own crews.',
])
<section class="pt-14 pb-16 md:pt-24 md:pb-20">
    <div class="mx-auto max-w-7xl px-5 md:px-8">
        <p class="bulletin flex items-center gap-2 text-muted"><span class="size-2 rounded-full bg-primary" aria-hidden="true"></span>{{ $label }}</p>
        <h1 class="mt-6 max-w-[18ch] font-display text-hero font-semibold text-balance">{{ $heading }}</h1>
        <p class="mt-7 max-w-[52ch] text-lg text-pretty text-muted md:text-xl">{{ $body }}</p>
    </div>
</section>
