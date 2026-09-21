@props(['items', 'heading' => 'Questions parents ask first.', 'note' => 'Anything else, call or email. We would rather answer it now than after the first session.'])
<section class="border-b border-line py-20 lg:py-32">
    <div class="mx-auto grid max-w-6xl items-start gap-10 px-6 lg:grid-cols-[minmax(0,22rem)_minmax(0,1fr)] lg:gap-16">
        <div class="lg:sticky lg:top-32">
            <h2 class="max-w-[14ch] font-display text-[clamp(2rem,3.6vw,3.25rem)]/[1.05] font-normal tracking-[-0.015em] text-balance text-ink">{{ $heading }}</h2>
            <p class="mt-5 max-w-[38ch] text-base/7 text-muted">{{ $note }}</p>
        </div>
        <div class="flex flex-col">
            @foreach ($items as $faq)
                <details class="group border-t border-line last:border-b">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 py-6 font-display text-xl font-normal text-ink transition-colors duration-150 hover:text-accent focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent [&::-webkit-details-marker]:hidden">
                        {{ $faq->question }}
                        <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" class="size-5 shrink-0 text-muted transition-transform duration-200 ease-out group-open:rotate-45" aria-hidden="true"><path d="M10 4v12M4 10h12"/></svg>
                    </summary>
                    <p class="max-w-[62ch] pb-7 text-base/7 text-muted">{{ $faq->answer }}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>
