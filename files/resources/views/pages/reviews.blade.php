<x-layouts.main title="Reviews — Keystone Home Services" description="What homeowners across the neighborhood say about working with Keystone Home Services.">
    <section class="py-16 lg:py-24">
        <div class="mx-auto max-w-6xl px-6">
            <x-sections.stars/>
            <h1 class="mt-4 max-w-[24ch] font-display text-4xl font-semibold tracking-tight text-balance text-ink sm:text-5xl">Five stars, earned the slow way</h1>
            <p class="mt-5 max-w-[52ch] text-lg text-pretty text-muted">No incentives, no cherry-picking scripts — just what neighbors wrote after we packed up the van.</p>
        </div>
    </section>
    <section class="pb-16 lg:pb-24">
        <div class="mx-auto max-w-6xl px-6">
            <ul role="list" class="columns-1 gap-8 sm:columns-2 lg:columns-3">
                @foreach ($reviews as $review)
                    <li class="mb-8 break-inside-avoid">
                        <figure class="rounded-2xl border border-line p-6">
                            <x-sections.stars/>
                            <blockquote class="mt-4">
                                <p class="relative text-base/7 text-pretty text-ink before:absolute before:inline before:-translate-x-full before:content-['\201C'] after:inline after:content-['\201D']">{{ $review->quote }}</p>
                            </blockquote>
                            <figcaption class="mt-5 flex items-center gap-3 border-t border-line pt-4">
                                <span class="grid size-9 shrink-0 place-items-center rounded-full bg-surface text-sm font-semibold text-ink ring-1 ring-ink/10" aria-hidden="true">{{ $review->initial }}</span>
                                <span class="min-w-0">
                                    <span class="block truncate text-sm font-semibold text-ink">{{ $review->name }} <span class="font-normal text-muted">· {{ $review->area }}</span></span>
                                    <span class="block text-sm text-muted">{{ $review->service }}</span>
                                </span>
                            </figcaption>
                        </figure>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
    <x-sections.cta/>
</x-layouts.main>
