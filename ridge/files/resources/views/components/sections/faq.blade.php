@props([
    'heading' => 'Asked after every storm.',
    'body' => "Something else on your mind? Call the storm line — we'd rather answer it now than after the next one.",
    'items' => [],
])
<section class="border-t border-line py-20 md:py-32">
    <div class="mx-auto grid max-w-7xl gap-10 px-5 md:px-8 lg:grid-cols-12">
        <div class="lg:col-span-4">
            <h2 class="max-w-[14ch] font-display text-section font-semibold text-balance">{{ $heading }}</h2>
            <p class="mt-5 max-w-[34ch] text-lg text-pretty text-muted">{{ $body }}</p>
        </div>
        <div class="border-t border-ink lg:col-span-7 lg:col-start-6">
            @foreach ($items as $faq)
                <details class="group border-b border-line">
                    <summary class="flex min-h-16 cursor-pointer list-none items-center justify-between gap-6 py-5 font-display text-lg font-semibold tracking-tight hover:text-muted md:text-xl [&::-webkit-details-marker]:hidden">
                        {{ $faq->question }}
                        <span class="flex size-8 shrink-0 items-center justify-center rounded-full border border-line transition-transform duration-200 group-open:rotate-45 group-open:border-primary group-open:bg-primary" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" class="size-4"><path d="M10 4v12M4 10h12"/></svg></span>
                    </summary>
                    <p class="max-w-[60ch] pb-6 text-base text-pretty text-muted md:text-lg">{{ $faq->answer }}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>
