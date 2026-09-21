@props([
    'heading' => 'Questions we hear first',
    'body' => 'If yours isn’t here, ask it on the phone. There is no charge for the first call.',
    'items' => [],
])
<section class="bg-surface py-24 lg:py-36">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-y-12 lg:grid-cols-12 lg:gap-x-16">
            <div class="lg:col-span-4">
                <h2 class="font-display text-4xl font-light tracking-tight text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
                <p class="mt-6 max-w-[40ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
            </div>
            <div class="divide-y divide-line border-y border-line lg:col-span-7 lg:col-start-6">
                @foreach ($items as $faq)
                    <details class="group">
                        <summary class="flex cursor-pointer list-none items-center justify-between gap-6 py-6 font-display text-xl tracking-tight text-ink transition-colors duration-150 hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary sm:text-2xl [&::-webkit-details-marker]:hidden">
                            {{ $faq->question }}
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" class="size-5 shrink-0 text-muted transition-transform duration-200 group-open:rotate-45" aria-hidden="true"><path d="M12 4.5v15m7.5-7.5h-15"/></svg>
                        </summary>
                        <p class="max-w-[60ch] pb-7 text-base/7 text-pretty text-muted">{{ $faq->answer }}</p>
                    </details>
                @endforeach
            </div>
        </div>
    </div>
</section>
