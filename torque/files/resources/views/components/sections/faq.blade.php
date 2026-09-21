@props([
    'heading' => 'Questions people ask at the counter.',
    'body' => 'Anything else, call — the person who answers can actually tell you.',
])
<section id="questions" class="scroll-mt-18 border-t border-line bg-surface py-20 lg:py-28">
    <div class="mx-auto grid max-w-7xl grid-cols-1 gap-12 px-5 sm:px-8 lg:grid-cols-12">
        <div class="lg:col-span-4">
            <h2 class="max-w-[14ch] font-display text-[clamp(2.25rem,4.5vw,3.5rem)] leading-[0.95] font-bold text-balance text-ink uppercase">{{ $heading }}</h2>
            <p class="mt-5 max-w-[40ch] text-lg/8 text-muted">{{ $body }}</p>
        </div>
        <div class="divide-y divide-line border-y border-line lg:col-span-8">
            @foreach ($site->faqs as $faq)
                <details class="group">
                    <summary class="flex min-h-12 cursor-pointer items-center justify-between gap-6 rounded-sm py-5 text-lg font-semibold text-ink transition-colors duration-150 hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                        {{ $faq->question }}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0 text-muted transition-transform duration-200 group-open:rotate-45" aria-hidden="true"><path d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z"/></svg>
                    </summary>
                    <p class="max-w-[64ch] pb-6 text-base/7 text-muted">{{ $faq->answer }}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>
