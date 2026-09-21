@props([
    'heading' => 'Your chair is waiting.',
    'body' => 'Book ahead for Fridays and Saturdays. Walk-ins welcome whenever a chair is free.',
])
<section class="border-t border-line bg-surface py-20 lg:py-28">
    <div class="mx-auto flex max-w-7xl flex-col items-start justify-between gap-10 px-6 lg:flex-row lg:items-end">
        <div>
            <h2 class="max-w-[16ch] font-display text-5xl leading-[0.95] font-semibold text-balance text-ink uppercase sm:text-6xl lg:text-7xl">{{ $heading }}</h2>
            <p class="mt-6 max-w-[48ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
        </div>
        <div class="flex flex-wrap items-center gap-3">
            <a href="{{ $site->phone_href }}" class="rounded-xs px-6 py-3.5 text-base font-medium text-ink ring-1 ring-ink/25 ring-inset hover:bg-ink/5 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Call {{ $site->phone }}</a>
            <a href="{{ $site->booking_url }}" class="inline-flex items-center gap-2 rounded-xs bg-primary py-3.5 pr-4 pl-6 font-display text-lg font-semibold tracking-[0.08em] text-primary-foreground uppercase hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                {{ $site->cta_label }}
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>
