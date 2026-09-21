@props([
    'eyebrow' => 'From the mats',
    'rating' => '4.9',
    'ratingNote' => 'from 380 reviews',
])
<section id="reviews" aria-labelledby="reviews-heading" class="scroll-mt-8 bg-surface py-20 sm:py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <h2 id="reviews-heading" class="text-sm font-semibold text-primary">{{ $eyebrow }}</h2>
            <p class="text-sm text-muted"><span class="font-semibold text-ink tabular-nums">{{ $rating }}</span> {{ $ratingNote }}</p>
        </div>
        <div class="mt-10 grid gap-12 lg:grid-cols-12 lg:gap-10">
            @foreach ($reviews as $review)
                @if ($loop->first)
                    <figure class="flex flex-col justify-between gap-10 lg:col-span-7">
                        <blockquote class="font-display text-[clamp(1.875rem,3.6vw,3rem)] leading-[1.1] font-medium tracking-[-0.03em] text-ink">
                            <p class="relative before:absolute before:-translate-x-full before:content-['\201C'] after:content-['\201D']">{{ $review->quote }}</p>
                        </blockquote>
                        <figcaption class="text-base"><span class="font-semibold text-ink">{{ $review->name }}</span> <span class="text-muted">· {{ $review->detail }}</span></figcaption>
                    </figure>
                @endif
            @endforeach
            <div class="flex flex-col gap-4 lg:col-span-5">
                @foreach ($reviews as $review)
                    @if (! $loop->first)
                        <figure class="flex flex-col justify-between gap-6 rounded-3xl bg-card p-7 ring-1 ring-ink/5">
                            <blockquote class="text-lg/8 text-ink">
                                <p class="relative before:absolute before:-translate-x-full before:content-['\201C'] after:content-['\201D']">{{ $review->quote }}</p>
                            </blockquote>
                            <figcaption class="text-sm"><span class="font-semibold text-ink">{{ $review->name }}</span> <span class="text-muted">· {{ $review->detail }}</span></figcaption>
                        </figure>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
