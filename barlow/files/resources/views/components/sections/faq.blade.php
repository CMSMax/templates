@props([
    'items' => [],
    'heading' => 'Good to know.',
    'body' => 'Anything else, just call. Whoever is not mid-cut will pick up.',
])
<section class="border-t border-line py-20 lg:py-32">
    <div class="mx-auto grid max-w-7xl gap-12 px-6 lg:grid-cols-[5fr_7fr] lg:gap-24">
        <div>
            <h2 class="max-w-[12ch] font-display text-5xl leading-[0.95] font-semibold text-balance text-ink uppercase sm:text-6xl">{{ $heading }}</h2>
            <p class="mt-8 max-w-[40ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
        </div>
        <div class="divide-y divide-line border-y border-line">
            @foreach ($items as $faq)
                <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 py-6 text-lg font-medium text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary [&::-webkit-details-marker]:hidden">
                        {{ $faq->question }}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" class="size-5 shrink-0 text-primary transition-transform duration-200 group-open:rotate-45" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
                    </summary>
                    <p class="max-w-[60ch] pb-6 text-base/7 text-pretty text-muted">{{ $faq->answer }}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>
