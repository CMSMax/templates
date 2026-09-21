@props([
    'label' => 'Questions',
    'heading' => 'Before your first class.',
    'items' => [],
])
<section class="border-b border-line py-20 lg:py-32">
    <div class="mx-auto grid max-w-7xl gap-10 px-5 sm:px-8 lg:grid-cols-12 lg:gap-8">
        <div class="lg:col-span-4">
            <p class="font-display text-[0.9375rem] font-bold tracking-[0.14em] text-muted uppercase">{{ $label }}</p>
            <h2 class="mt-5 max-w-[12ch] font-display text-[clamp(2.5rem,5vw,4.25rem)] leading-[0.9] font-black text-ink uppercase">{{ $heading }}</h2>
        </div>
        <div class="lg:col-span-7 lg:col-start-6">
            @foreach ($items as $faq)
                <details class="group border-t border-line last:border-b">
                    <summary class="flex min-h-12 cursor-pointer list-none items-center justify-between gap-6 py-5 font-display text-2xl leading-tight font-extrabold tracking-wide text-ink uppercase transition-colors duration-150 hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary [&::-webkit-details-marker]:hidden">
                        {{ $faq->question }}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="square" class="size-5 shrink-0 text-muted transition-transform duration-200 group-open:rotate-45" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
                    </summary>
                    <p class="max-w-[60ch] pb-6 text-base/7 text-muted">{{ $faq->answer }}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>
