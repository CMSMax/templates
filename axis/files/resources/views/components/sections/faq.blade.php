@props([
    'items' => [],
    'heading' => 'Questions, answered plainly.',
    'body' => 'Anything else, call the front desk — the person who answers can book you, too.',
])
<section id="questions" aria-labelledby="questions-heading" class="scroll-mt-8 pb-20 sm:pb-28">
    <div class="mx-auto grid max-w-7xl gap-10 px-5 sm:px-8 lg:grid-cols-12 lg:gap-8">
        <div class="lg:col-span-4">
            <h2 id="questions-heading" class="max-w-[12ch] font-display text-[clamp(2.75rem,5vw,4.25rem)] leading-[0.95] font-semibold tracking-[-0.02em] text-balance text-ink">{{ $heading }}</h2>
            <p class="mt-5 max-w-[40ch] text-lg/8 text-muted">{{ $body }}</p>
        </div>
        <div class="border-b border-line lg:col-span-8">
            @foreach ($items as $faq)
                <details class="group border-t border-line">
                    <summary class="flex min-h-12 cursor-pointer list-none items-center justify-between gap-6 rounded-lg py-5 text-lg/7 font-semibold text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary [&::-webkit-details-marker]:hidden">
                        {{ $faq->question }}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-6 shrink-0 text-primary transition-transform duration-200 group-open:rotate-45" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
                    </summary>
                    <p class="max-w-[60ch] pb-6 text-base/7 text-muted">{{ $faq->answer }}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>
