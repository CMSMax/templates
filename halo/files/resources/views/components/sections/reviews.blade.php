@props([
    'eyebrow' => 'In their words',
])
<section aria-labelledby="reviews-heading" class="border-t border-line py-20 sm:py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <h2 id="reviews-heading" class="text-center text-xs font-semibold tracking-[0.22em] text-muted uppercase">{{ $eyebrow }}</h2>
        @foreach ($reviews as $review)
            @if ($loop->first)
                <figure class="mx-auto mt-10 max-w-4xl text-center">
                    <blockquote class="font-display text-[clamp(1.75rem,3.4vw,2.875rem)] leading-[1.2] tracking-[-0.015em] text-balance text-ink italic">“{{ $review->quote }}”</blockquote>
                    <figcaption class="mt-8 text-sm text-muted"><span class="font-semibold text-ink">{{ $review->name }}</span> · {{ $review->service }}</figcaption>
                </figure>
            @endif
        @endforeach
        <div class="mt-16 grid gap-10 border-t border-line pt-10 md:grid-cols-3 md:gap-12 lg:mt-20">
            @foreach ($reviews as $review)
                @if ($loop->first)
                @else
                    <figure>
                        <blockquote class="text-base/7 text-ink">“{{ $review->quote }}”</blockquote>
                        <figcaption class="mt-4 text-sm text-muted"><span class="font-semibold text-ink">{{ $review->name }}</span> · {{ $review->service }}</figcaption>
                    </figure>
                @endif
            @endforeach
        </div>
    </div>
</section>
