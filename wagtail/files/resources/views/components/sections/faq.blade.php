@props([
    'heading' => 'New to the clinic?',
    'body' => 'The questions people ask before their first visit. Anything else, just call — a real person picks up.',
])
<section id="faq" aria-labelledby="faq-heading" class="scroll-mt-8 border-t border-line py-20 lg:py-28">
    <div class="mx-auto grid max-w-6xl gap-10 px-5 sm:px-8 lg:grid-cols-[5fr_7fr] lg:gap-16">
        <div class="lg:sticky lg:top-10 lg:self-start">
            <h2 id="faq-heading" class="font-display text-[clamp(2rem,4vw,3.25rem)] leading-[1.05] font-semibold tracking-[-0.03em] text-balance text-ink">{{ $heading }}</h2>
            <p class="mt-5 max-w-[40ch] text-lg/8 text-muted">{{ $body }}</p>
        </div>
        <div class="border-t border-ink">
            @foreach ($faqs as $faq)
                <details class="group border-b border-line">
                    <summary class="flex min-h-12 cursor-pointer list-none items-center justify-between gap-6 rounded-lg py-6 font-display text-lg font-semibold tracking-tight text-ink hover:text-ink/75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:text-xl [&::-webkit-details-marker]:hidden">
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
