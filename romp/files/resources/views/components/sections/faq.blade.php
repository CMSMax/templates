@props([
    'heading' => 'Good to know',
    'body' => 'Still wondering about something? Call us. A real person who works the yard picks up.',
])
<section id="faq" aria-labelledby="faq-heading" class="border-t border-line py-20 lg:py-28">
    <div class="mx-auto grid max-w-6xl gap-10 px-5 sm:px-8 lg:grid-cols-12 lg:gap-16">
        <div class="flex flex-col gap-5 lg:col-span-5">
            <h2 id="faq-heading" class="font-display text-[clamp(2.25rem,4.5vw,3.5rem)] leading-[1.02] font-extrabold tracking-[-0.03em] text-balance">{{ $heading }}</h2>
            <p class="text-lg/8 text-muted">{{ $body }}</p>
        </div>
        <div class="flex flex-col divide-y divide-ink/15 border-y border-ink/15 lg:col-span-7">
            @foreach ($faqs as $faq)
                <details class="group">
                    <summary class="flex min-h-12 cursor-pointer list-none items-center justify-between gap-6 rounded-sm py-5 font-display text-lg font-bold tracking-tight transition-colors duration-150 hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary">
                        {{ $faq->question }}
                        <span class="grid size-8 shrink-0 place-items-center rounded-full ring-1 ring-ink/20 transition-transform duration-200 group-open:rotate-45" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" class="size-4"><path d="M12 5v14M5 12h14"/></svg>
                        </span>
                    </summary>
                    <p class="pr-12 pb-6 text-base/7 text-muted">{{ $faq->answer }}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>
