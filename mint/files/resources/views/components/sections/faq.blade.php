@props(['eyebrow' => 'Questions', 'heading' => 'Asked every week.', 'intro' => 'Something else on your mind? Call us — we’d rather answer it now than in the chair.', 'items' => []])
<section class="px-5 py-20 sm:px-8 lg:py-32">
    <div class="mx-auto grid max-w-7xl gap-10 lg:grid-cols-12 lg:gap-8">
        <div data-reveal class="lg:col-span-4">
            <p class="flex items-center gap-2.5 text-sm font-semibold tracking-wide text-muted uppercase"><span class="size-2 rounded-full bg-pop" aria-hidden="true"></span>{{ $eyebrow }}</p>
            <h2 class="mt-5 font-display text-4xl leading-[1.02] font-semibold tracking-[-0.03em] text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
            <p class="mt-5 max-w-[32ch] text-lg/relaxed text-pretty text-muted">{{ $intro }}</p>
        </div>
        <div data-reveal class="border-t border-line lg:col-span-7 lg:col-start-6">
            @foreach ($items as $faq)
                <details class="group border-b border-line">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 py-6 font-display text-xl font-semibold tracking-tight text-ink transition-colors hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent [&::-webkit-details-marker]:hidden">
                        {{ $faq->question }}
                        <span class="grid size-9 shrink-0 place-items-center rounded-full bg-surface text-ink transition-transform duration-200 group-open:rotate-45 group-open:bg-mint" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" class="size-4"><path d="M12 5v14M5 12h14"/></svg></span>
                    </summary>
                    <p class="max-w-[60ch] pb-6 text-lg/relaxed text-pretty text-muted">{{ $faq->answer }}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>
