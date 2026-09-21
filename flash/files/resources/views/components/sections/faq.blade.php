@props([
    'items' => [],
    'heading' => 'House rules, plainly.',
    'body' => 'Anything else, call the studio. Whoever is not mid-tattoo will pick up.',
])
<section class="py-20 lg:py-32">
    <div class="mx-auto grid max-w-7xl gap-12 px-5 sm:px-8 lg:grid-cols-[5fr_7fr] lg:gap-24">
        <div>
            <h2 class="max-w-[12ch] font-display text-[clamp(2.25rem,5vw,4rem)] leading-[1] tracking-[-0.02em] text-balance text-ink uppercase">{{ $heading }}</h2>
            <p class="mt-6 max-w-[40ch] text-lg/8 text-muted">{{ $body }}</p>
        </div>
        <div class="border-t-2 border-ink">
            @foreach ($items as $faq)
                <details class="group border-b border-ink">
                    <summary class="flex min-h-12 cursor-pointer list-none items-center justify-between gap-6 py-6 text-lg font-semibold text-ink hover:bg-primary/15 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink [&::-webkit-details-marker]:hidden">
                        {{ $faq->question }}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" class="size-5 shrink-0 transition-transform duration-200 group-open:rotate-45" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
                    </summary>
                    <p class="max-w-[60ch] pb-6 text-base/7 text-muted">{{ $faq->answer }}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>
