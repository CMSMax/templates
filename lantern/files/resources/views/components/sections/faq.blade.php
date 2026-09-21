@props([
    'items',
    'heading' => 'Questions before you book.',
    'note' => 'Anything else, call and ask. We would rather answer it now than on the driveway.',
])
<section class="border-b border-line py-20 lg:py-32">
    <div class="mx-auto grid max-w-6xl items-start gap-8 px-6 lg:grid-cols-[minmax(0,24rem)_minmax(0,1fr)]">
        <div class="lg:sticky lg:top-32">
            <h2 class="max-w-[18ch] font-display text-[clamp(2rem,3.6vw,3rem)]/[1.05] font-semibold tracking-tight text-balance text-ink">{{ $heading }}</h2>
            <p class="mt-5 max-w-[40ch] text-base/7 text-muted">{{ $note }}</p>
        </div>
        <div class="flex flex-col">
            @foreach ($items as $faq)
                <details class="group border-t border-line last:border-b">
                    <summary class="flex cursor-pointer items-center justify-between gap-6 py-5 font-display text-lg font-semibold tracking-tight text-ink hover:text-accent focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">
                        {{ $faq->question }}
                        <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0 text-muted transition-transform duration-150 ease-out group-open:rotate-180" aria-hidden="true"><path d="m4 6 4 4 4-4"/></svg>
                    </summary>
                    <p class="max-w-[62ch] pb-6 text-base/7 text-muted">{{ $faq->answer }}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>
