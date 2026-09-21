@props([
    'heading' => 'Good questions',
    'body' => 'The things people most often ask before their first Sunday. Anything else, call the office — a real person answers.',
])
<section aria-labelledby="faq-heading" class="py-24 sm:py-28 lg:py-32">
    <div class="mx-auto grid max-w-6xl gap-12 px-5 sm:px-8 lg:grid-cols-[5fr_7fr] lg:gap-20">
        <div>
            <h2 id="faq-heading" class="font-display text-[clamp(2.25rem,4.4vw,3.5rem)] leading-[1.05] font-normal tracking-[-0.02em] text-balance text-ink">{{ $heading }}</h2>
            <p class="mt-5 max-w-[40ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
        </div>
        <div class="border-b border-line">
            @foreach ($site->faqs as $faq)
                <details class="group border-t border-line">
                    <summary class="flex min-h-12 cursor-pointer list-none items-center justify-between gap-6 rounded-sm py-6 font-display text-2xl text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary [&::-webkit-details-marker]:hidden">
                        {{ $faq->question }}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" class="size-5 shrink-0 text-primary transition-transform duration-200 group-open:rotate-45" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
                    </summary>
                    <p class="max-w-[56ch] pb-7 text-base/7 text-pretty text-muted">{{ $faq->answer }}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>
