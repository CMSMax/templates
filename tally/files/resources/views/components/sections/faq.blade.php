@props([
    'heading' => 'Questions we hear every week',
    'body' => 'Anything else, ask us on the call — it’s free.',
    'items' => [],
])
<section class="py-24 lg:py-32">
    <div class="mx-auto grid max-w-7xl gap-y-12 px-6 lg:grid-cols-12 lg:gap-x-16 lg:px-8">
        <div class="lg:col-span-5">
            <h2 class="max-w-[14ch] font-display text-4xl leading-[1.08] font-medium tracking-[-0.03em] text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
            <p class="mt-6 max-w-[36ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
        </div>
        <div class="divide-y divide-line border-y border-line lg:col-span-7">
            @foreach ($items as $faq)
                <details class="group">
                    <summary class="flex cursor-pointer items-center justify-between gap-6 py-6 text-lg font-medium text-ink transition-colors duration-150 hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                        {{ $faq->question }}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" class="size-5 shrink-0 text-muted transition-transform duration-200 group-open:rotate-45" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
                    </summary>
                    <p class="max-w-[60ch] pb-7 text-base/7 text-pretty text-muted">{{ $faq->answer }}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>
