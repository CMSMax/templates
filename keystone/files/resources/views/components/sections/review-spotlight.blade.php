<section class="bg-surface py-16 lg:py-24">
    <div data-reveal class="mx-auto max-w-6xl px-6">
        <figure class="max-w-3xl">
            <x-sections.stars/>
            @foreach ($reviews as $review)
                <blockquote class="mt-6">
                    <p class="relative font-display text-2xl font-medium tracking-tight text-pretty text-ink before:absolute before:inline before:-translate-x-full before:content-['\201C'] after:inline after:content-['\201D'] sm:text-3xl">{{ $review->quote }}</p>
                </blockquote>
                <figcaption class="mt-6 flex items-center gap-3">
                    <span class="grid size-10 shrink-0 place-items-center rounded-full bg-canvas font-semibold text-ink ring-1 ring-ink/10" aria-hidden="true">{{ $review->initial }}</span>
                    <span>
                        <span class="block text-sm font-semibold text-ink">{{ $review->name }}</span>
                        <span class="block text-sm text-muted">Homeowner in {{ $review->area }}</span>
                    </span>
                </figcaption>
                @break
            @endforeach
        </figure>
        <a href="/reviews" class="mt-10 inline-flex items-center gap-1.5 font-medium text-ink hover:text-ink/70 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">
            Read more reviews
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0" aria-hidden="true"><path d="M5 12h14m-7-7l7 7l-7 7"/></svg>
        </a>
    </div>
</section>
