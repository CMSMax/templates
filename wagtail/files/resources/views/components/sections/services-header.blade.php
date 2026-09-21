@props([
    'heading' => 'Services and prices, printed plainly.',
    'body' => 'Everything we do for dogs and cats, and what it costs to start. If a visit needs more, you’ll see an itemized estimate before anything happens.',
    'image' => '/images/services.jpg',
    'imageAlt' => 'A puppy and a ginger kitten resting together on a folded blue blanket on a wooden bench',
])
<section class="pt-10 pb-16 sm:pt-14 lg:pb-20">
    <div class="mx-auto max-w-6xl px-5 sm:px-8">
        <div class="grid gap-6 lg:grid-cols-[7fr_5fr] lg:items-end lg:gap-16">
            <h1 data-rise class="max-w-[16ch] font-display text-[clamp(2.5rem,5.6vw,4.5rem)] leading-[1.02] font-semibold tracking-[-0.035em] text-balance text-ink">{{ $heading }}</h1>
            <p data-rise class="max-w-[48ch] text-lg/8 text-muted [--i:1]">{{ $body }}</p>
        </div>
        <img data-rise src="{{ $image }}" alt="{{ $imageAlt }}" width="1344" height="752" fetchpriority="high" class="mt-12 aspect-[16/9] w-full rounded-[1.75rem] object-cover outline-1 -outline-offset-1 outline-ink/5 [--i:2] sm:aspect-[21/9]">
    </div>
</section>
