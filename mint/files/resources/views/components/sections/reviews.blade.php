@props(['eyebrow' => 'Patient reviews', 'heading' => 'What people say on the way out.', 'rating' => '4.9', 'ratingNote' => 'average from 640 Google reviews', 'items' => []])
<section class="px-5 py-20 sm:px-8 lg:py-32">
    <div class="mx-auto max-w-7xl">
        <div data-reveal class="grid gap-8 lg:grid-cols-12 lg:items-end">
            <div class="lg:col-span-7">
                <p class="flex items-center gap-2.5 text-sm font-semibold tracking-wide text-muted uppercase"><span class="size-2 rounded-full bg-pop" aria-hidden="true"></span>{{ $eyebrow }}</p>
                <h2 class="mt-5 max-w-[16ch] font-display text-4xl leading-[1.02] font-semibold tracking-[-0.03em] text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
            </div>
            <p class="flex items-baseline gap-3 lg:col-span-5 lg:justify-end">
                <span class="font-display text-7xl leading-none font-semibold tracking-tight text-ink tabular-nums">{{ $rating }}</span>
                <span class="max-w-[16ch] text-muted">{{ $ratingNote }}</span>
            </p>
        </div>
        <ul role="list" data-reveal class="mt-14 grid gap-4 md:grid-cols-3">
            @foreach ($items as $review)
                <li class="flex flex-col justify-between gap-10 rounded-[1.5rem] border border-line p-7 transition-colors duration-200 hover:border-mint hover:bg-mint-soft">
                    <blockquote class="text-lg/relaxed text-pretty text-ink">“{{ $review->quote }}”</blockquote>
                    <p class="flex items-center justify-between gap-4 text-sm">
                        <span><span class="block font-semibold text-ink">{{ $review->name }}</span><span class="block text-muted">{{ $review->detail }}</span></span>
                        <span class="flex text-pop" aria-label="Five stars">
                            <svg viewBox="0 0 20 20" fill="currentColor" class="size-3.5" aria-hidden="true"><path d="M10 1.5l2.6 5.3 5.9.9-4.3 4.1 1 5.8L10 14.9l-5.2 2.7 1-5.8L1.5 7.7l5.9-.9z"/></svg>
                            <svg viewBox="0 0 20 20" fill="currentColor" class="size-3.5" aria-hidden="true"><path d="M10 1.5l2.6 5.3 5.9.9-4.3 4.1 1 5.8L10 14.9l-5.2 2.7 1-5.8L1.5 7.7l5.9-.9z"/></svg>
                            <svg viewBox="0 0 20 20" fill="currentColor" class="size-3.5" aria-hidden="true"><path d="M10 1.5l2.6 5.3 5.9.9-4.3 4.1 1 5.8L10 14.9l-5.2 2.7 1-5.8L1.5 7.7l5.9-.9z"/></svg>
                            <svg viewBox="0 0 20 20" fill="currentColor" class="size-3.5" aria-hidden="true"><path d="M10 1.5l2.6 5.3 5.9.9-4.3 4.1 1 5.8L10 14.9l-5.2 2.7 1-5.8L1.5 7.7l5.9-.9z"/></svg>
                            <svg viewBox="0 0 20 20" fill="currentColor" class="size-3.5" aria-hidden="true"><path d="M10 1.5l2.6 5.3 5.9.9-4.3 4.1 1 5.8L10 14.9l-5.2 2.7 1-5.8L1.5 7.7l5.9-.9z"/></svg>
                        </span>
                    </p>
                </li>
            @endforeach
        </ul>
    </div>
</section>
