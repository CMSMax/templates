@props([
    'heading' => 'Straight answers',
    'body' => 'The questions we hear on the phone most weeks.',
    'items' => [],
])
<section class="border-t border-line py-24 md:py-32">
    <div class="mx-auto grid max-w-7xl gap-12 px-5 md:px-8 lg:grid-cols-12 lg:gap-10">
        <div class="lg:col-span-4">
            <h2 class="font-display text-section font-extrabold text-balance">{{ $heading }}</h2>
            <p class="mt-5 max-w-[36ch] text-lg text-pretty text-muted">{{ $body }}</p>
        </div>
        <div class="border-t border-line lg:col-span-8">
            @foreach ($items as $faq)
                <details class="group border-b border-line">
                    <summary class="flex min-h-16 cursor-pointer list-none items-center justify-between gap-6 py-5 text-lg font-semibold hover:text-primary [&::-webkit-details-marker]:hidden">
                        {{ $faq->question }}
                        <span class="flex size-9 shrink-0 items-center justify-center rounded-full bg-tint text-primary" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" class="size-4 transition-transform duration-200 group-open:rotate-45"><path d="M10 4v12M4 10h12"/></svg>
                        </span>
                    </summary>
                    <p class="max-w-[62ch] pb-6 text-base/7 text-pretty text-muted">{{ $faq->answer }}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>
