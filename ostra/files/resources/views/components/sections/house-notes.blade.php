@props([
    'eyebrow' => 'Before you arrive',
    'heading' => 'House notes',
    'body' => 'The small print, in plain words. Anything missing, write to us and ask.',
])
<section class="bg-surface py-24 lg:py-32">
    <div class="mx-auto grid max-w-7xl gap-12 px-6 lg:grid-cols-[5fr_7fr] lg:gap-24 lg:px-8">
        <div>
            <p class="text-xs font-medium tracking-[0.24em] text-primary uppercase">{{ $eyebrow }}</p>
            <h2 class="mt-6 font-display text-[clamp(2.25rem,4.5vw,3.75rem)] leading-[1.05] font-normal tracking-tight text-balance text-ink">{{ $heading }}</h2>
            <p class="mt-6 max-w-[40ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
        </div>
        <div class="border-t border-ink">
            @foreach ($site->policies as $policy)
                <details class="group border-b border-ink/15">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-6 rounded-sm py-6 font-display text-xl text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:text-2xl [&::-webkit-details-marker]:hidden">
                        {{ $policy->question }}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" class="size-5 shrink-0 text-primary transition-transform duration-200 group-open:rotate-45" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
                    </summary>
                    <p class="max-w-[60ch] pb-7 text-base/7 text-pretty text-muted">{{ $policy->answer }}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>
