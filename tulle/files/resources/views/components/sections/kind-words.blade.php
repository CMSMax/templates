@props([
    'quote' => 'We met Tulle with a date and a vague idea about a meadow. Eighteen months later we had the wedding we would have planned ourselves, if we had known how, and we did not look at a clock once all day.',
    'name' => 'Priya & Theo',
    'detail' => 'Married at Millbrook Vineyard, August',
    'image' => '/images/place-card.jpg',
    'imageAlt' => 'A planner’s hands setting a handwritten place card with a sprig of lavender on a folded linen napkin.',
])
<section class="py-24 sm:py-32">
    <div class="mx-auto grid max-w-7xl items-center gap-x-16 gap-y-12 px-6 lg:grid-cols-12 lg:px-8">
        <img src="{{ $image }}" alt="{{ $imageAlt }}" width="960" height="1200" loading="lazy" decoding="async" class="aspect-4/5 w-full max-w-sm bg-surface object-cover lg:col-span-4 lg:max-w-none">
        <figure class="lg:col-span-7 lg:col-start-6">
            <blockquote class="font-display text-[clamp(1.75rem,3.2vw,2.75rem)] leading-[1.25] tracking-tight text-ink">
                <p class="relative before:absolute before:-translate-x-full before:content-['\201C'] after:content-['\201D']">{{ $quote }}</p>
            </blockquote>
            <figcaption class="mt-10 flex flex-wrap items-baseline gap-x-4 gap-y-1 border-t border-ink/15 pt-6">
                <span class="font-display text-xl text-ink">{{ $name }}</span>
                <span class="label-caps text-muted">{{ $detail }}</span>
            </figcaption>
        </figure>
    </div>
</section>
