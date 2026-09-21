@props([
    'heading' => 'What the neighbours say.',
    'rating' => '4.9',
    'ratingNote' => 'across 612 Google reviews',
    'items' => [],
])
<section class="border-t border-line py-20 md:py-32">
    <div class="mx-auto max-w-7xl px-5 md:px-8">
        <div class="flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
            <h2 class="font-display text-section font-semibold text-balance">{{ $heading }}</h2>
            <p class="flex items-center gap-3 text-base text-muted">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 20" fill="currentColor" class="h-4 w-auto shrink-0 text-ink" aria-hidden="true"><path transform="translate(0 0)" d="M10 1.8l2.5 5.3 5.7.7-4.2 4 1.1 5.7L10 14.7l-5.1 2.8 1.1-5.7-4.2-4 5.7-.7Z"/><path transform="translate(21 0)" d="M10 1.8l2.5 5.3 5.7.7-4.2 4 1.1 5.7L10 14.7l-5.1 2.8 1.1-5.7-4.2-4 5.7-.7Z"/><path transform="translate(42 0)" d="M10 1.8l2.5 5.3 5.7.7-4.2 4 1.1 5.7L10 14.7l-5.1 2.8 1.1-5.7-4.2-4 5.7-.7Z"/><path transform="translate(63 0)" d="M10 1.8l2.5 5.3 5.7.7-4.2 4 1.1 5.7L10 14.7l-5.1 2.8 1.1-5.7-4.2-4 5.7-.7Z"/><path transform="translate(84 0)" d="M10 1.8l2.5 5.3 5.7.7-4.2 4 1.1 5.7L10 14.7l-5.1 2.8 1.1-5.7-4.2-4 5.7-.7Z"/></svg>
                <span><span class="font-semibold tabular-nums text-ink">{{ $rating }}</span> {{ $ratingNote }}</span>
            </p>
        </div>
        <ul role="list" class="mt-14 grid gap-x-10 gap-y-12 md:mt-16 md:grid-cols-3">
            @foreach ($items as $review)
                <li class="flex flex-col justify-between gap-8 border-t border-ink pt-6" data-reveal>
                    <blockquote>
                        <p class="relative text-lg text-pretty before:absolute before:-translate-x-full before:content-['\201C'] after:content-['\201D']">{{ $review->quote }}</p>
                    </blockquote>
                    <p class="text-sm"><span class="font-semibold">{{ $review->name }}</span> <span class="text-muted">· {{ $review->place }}</span></p>
                </li>
            @endforeach
        </ul>
    </div>
</section>
