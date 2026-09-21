@props([
    'heading' => 'Before you come in',
    'body' => 'Anything else, call the shop — whoever answers will know.',
    'items' => [],
])
<section class="border-t border-line py-20 sm:py-28">
    <div class="mx-auto grid max-w-7xl gap-x-10 gap-y-10 px-5 sm:px-8 lg:grid-cols-12">
        <div class="lg:col-span-4">
            <h2 class="font-display text-[clamp(2rem,3.6vw,3rem)] leading-none font-semibold tracking-[-0.03em] text-balance text-ink">{{ $heading }}</h2>
            <p class="mt-5 max-w-[34ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
            <a href="{{ $site->phone_href }}" class="mt-6 inline-flex border-b border-ink pb-1 font-medium text-ink tabular-nums focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $site->phone }}</a>
        </div>
        <div class="border-t border-ink lg:col-span-7 lg:col-start-6">
            @foreach ($items as $faq)
                <details class="group border-b border-line">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 py-5 font-display text-xl font-medium tracking-tight text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink [&::-webkit-details-marker]:hidden">
                        {{ $faq->question }}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" class="size-5 shrink-0 transition-transform duration-200 group-open:rotate-45" aria-hidden="true"><path d="M10 4v12M4 10h12"/></svg>
                    </summary>
                    <p class="max-w-[60ch] pb-6 text-base/7 text-pretty text-muted">{{ $faq->answer }}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>
