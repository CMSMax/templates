@props([
    'items',
    'heading' => 'What the neighbours say.',
])
<section class="border-b border-line bg-surface py-20 lg:py-32">
    <div class="mx-auto max-w-6xl px-6">
        <div class="flex flex-wrap items-end justify-between gap-x-8 gap-y-4">
            <h2 class="max-w-[20ch] font-display text-[clamp(2rem,3.6vw,3rem)]/[1.05] font-semibold tracking-tight text-balance text-ink">{{ $heading }}</h2>
            <p class="flex items-center gap-2 text-base/6 text-muted sm:text-sm/6">
                <svg viewBox="0 0 16 16" fill="currentColor" class="size-4 shrink-0 text-accent" aria-hidden="true"><path d="m8 1.6 1.9 3.9 4.3.6-3.1 3 .7 4.3L8 11.4l-3.8 2 .7-4.3-3.1-3 4.3-.6L8 1.6Z"/></svg>
                <span class="font-medium text-ink tabular-nums">{{ $site->rating }}</span> across {{ $site->review_count }} reviews
            </p>
        </div>
        <ul role="list" class="mt-12 grid gap-8 lg:grid-cols-3">
            @foreach ($items as $review)
                <li class="flex flex-col justify-between gap-8 border-t border-line pt-6">
                    <p class="relative max-w-[42ch] text-[1.0625rem]/7 text-ink before:absolute before:inline before:-translate-x-full before:content-['\201C'] after:inline after:content-['\201D']">{{ $review->quote }}</p>
                    <div class="flex items-center gap-3">
                        <img src="{{ $review->avatar }}" alt="" aria-hidden="true" width="160" height="160" loading="lazy" decoding="async" class="size-10 shrink-0 rounded-full object-cover outline-1 -outline-offset-1 outline-ink/10">
                        <div>
                            <p class="font-medium text-ink">{{ $review->name }}</p>
                            <p class="text-base/6 text-muted sm:text-sm/6">{{ $review->trade }} — {{ $review->place }}</p>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>
