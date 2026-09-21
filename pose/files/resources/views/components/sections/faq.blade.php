@props([
    'eyebrow' => 'Questions',
    'heading' => 'Before your first class.',
    'body' => 'The things people ask at the desk. Anything else, call or email — a teacher will answer.',
])
<section id="faq" aria-labelledby="faq-heading" class="scroll-mt-8 py-20 sm:py-24 lg:py-32">
    <div class="mx-auto grid max-w-7xl gap-10 px-5 sm:px-8 lg:grid-cols-12 lg:gap-10">
        <div class="lg:sticky lg:top-10 lg:col-span-5 lg:self-start">
            <p class="text-sm font-semibold text-primary">{{ $eyebrow }}</p>
            <h2 id="faq-heading" class="mt-4 max-w-[14ch] font-display text-[clamp(2.25rem,4.5vw,3.75rem)] leading-[1.02] font-medium tracking-[-0.035em] text-ink">{{ $heading }}</h2>
            <p class="mt-6 max-w-[40ch] text-lg/8 text-muted">{{ $body }}</p>
        </div>
        <div class="border-t border-ink lg:col-span-7">
            @foreach ($faqs as $faq)
                <details class="group border-b border-line">
                    <summary class="flex min-h-12 cursor-pointer list-none items-center justify-between gap-6 rounded-lg py-6 font-display text-xl font-medium tracking-tight text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:text-2xl [&::-webkit-details-marker]:hidden">
                        {{ $faq->question }}
                        <span class="grid size-9 shrink-0 place-items-center rounded-full bg-surface text-ink transition-transform duration-200 group-open:rotate-45" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" class="size-4"><path d="M5 12h14m-7-7v14"/></svg>
                        </span>
                    </summary>
                    <p class="max-w-[60ch] pr-12 pb-7 text-base/7 text-muted">{{ $faq->answer }}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>
