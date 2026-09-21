@props([
    'kicker' => 'Questions',
    'heading' => 'Before you write',
    'items' => [],
])
<section class="py-24 sm:py-32">
    <div class="mx-auto grid max-w-7xl gap-x-16 gap-y-10 px-6 lg:grid-cols-12 lg:px-8">
        <div class="lg:col-span-5">
            <p class="label-caps text-muted">{{ $kicker }}</p>
            <h2 class="mt-5 font-display text-4xl tracking-tight text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
        </div>
        <div class="border-t border-ink/15 lg:col-span-7">
            @foreach ($items as $faq)
                <details class="group border-b border-ink/15">
                    <summary class="flex min-h-12 cursor-pointer list-none items-center justify-between gap-6 py-6 font-display text-2xl tracking-tight text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary [&::-webkit-details-marker]:hidden">
                        {{ $faq->question }}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" class="size-5 shrink-0 transition-transform duration-200 group-open:rotate-45" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
                    </summary>
                    <p class="max-w-[56ch] pb-7 text-base/7 text-muted">{{ $faq->answer }}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>
