@props([
    'heading' => 'Questions we hear first',
    'body' => 'If yours is not here, call us — the person who answers is the person who books your clean.',
    'items' => [],
])
<section id="questions" class="border-t border-line py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-y-12 lg:grid-cols-12 lg:gap-x-16">
            <div class="lg:col-span-4">
                <h2 class="max-w-[14ch] font-display text-4xl font-semibold tracking-tight text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
                <p class="mt-6 max-w-[40ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
            </div>
            <div class="divide-y divide-line border-y border-line lg:col-span-8">
                @foreach ($items as $faq)
                    <details class="group">
                        <summary class="flex cursor-pointer list-none items-center justify-between gap-6 py-6 font-display text-lg font-semibold tracking-tight text-ink transition-colors duration-150 hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink sm:text-xl [&::-webkit-details-marker]:hidden">
                            {{ $faq->question }}
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" class="size-5 shrink-0 text-muted transition-transform duration-200 group-open:rotate-45" aria-hidden="true"><path d="M12 4.5v15m7.5-7.5h-15"/></svg>
                        </summary>
                        <p class="max-w-[62ch] pb-7 text-base/7 text-pretty text-muted">{{ $faq->answer }}</p>
                    </details>
                @endforeach
            </div>
        </div>
    </div>
</section>
