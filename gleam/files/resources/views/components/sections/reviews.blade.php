@props([
    'eyebrow' => 'Reviews',
    'heading' => 'What regulars say after a year or two.',
    'items' => [],
    'stars' => [1, 2, 3, 4, 5],
])
<section id="reviews" class="border-t border-line py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <p class="text-[0.9375rem] font-medium text-muted">{{ $eyebrow }}</p>
                <h2 class="mt-4 max-w-[18ch] font-display text-4xl font-semibold tracking-tight text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
            </div>
            <div class="flex items-center gap-4">
                <p class="font-display text-5xl font-semibold tracking-tight text-ink tabular-nums">{{ $site->rating }}</p>
                <div>
                    <div class="flex gap-0.5 text-ink" aria-hidden="true">
                        @foreach ($stars as $star)
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.12 2.12 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.12 2.12 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.12 2.12 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.12 2.12 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.12 2.12 0 0 0 1.597-1.16z"/></svg>
                        @endforeach
                    </div>
                    <p class="mt-1 text-[0.9375rem] text-muted">Average of {{ $site->review_count }} reviews</p>
                </div>
            </div>
        </div>
        <div class="mt-14 grid gap-y-12 lg:grid-cols-12 lg:gap-x-16">
            @foreach ($items as $review)
                @if ($loop->first)
                    <figure class="border-t-2 border-ink pt-8 lg:col-span-7">
                        <blockquote class="font-display text-2xl font-medium tracking-tight text-ink sm:text-3xl">
                            <p class="relative before:absolute before:-translate-x-full before:content-['\201C'] after:content-['\201D']">{{ $review->quote }}</p>
                        </blockquote>
                        <figcaption class="mt-8 text-[0.9375rem]">
                            <span class="font-semibold text-ink">{{ $review->name }}</span>
                            <span class="text-muted"> — {{ $review->detail }}</span>
                        </figcaption>
                    </figure>
                @endif
            @endforeach
            <div class="flex flex-col gap-10 lg:col-span-5">
                @foreach ($items as $review)
                    @if (! $loop->first)
                        <figure class="border-t border-line pt-8">
                            <blockquote class="text-lg/8 text-ink">
                                <p class="relative before:absolute before:-translate-x-full before:content-['\201C'] after:content-['\201D']">{{ $review->quote }}</p>
                            </blockquote>
                            <figcaption class="mt-5 text-[0.9375rem]">
                                <span class="font-semibold text-ink">{{ $review->name }}</span>
                                <span class="text-muted"> — {{ $review->detail }}</span>
                            </figcaption>
                        </figure>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
