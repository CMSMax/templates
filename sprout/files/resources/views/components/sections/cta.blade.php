@props([
    'heading' => 'The best way to know is to visit',
    'body' => 'Meet the teachers, see the rooms, and ask us anything. Tours run weekday mornings.',
])
<section aria-labelledby="cta-heading" class="py-20 lg:py-28">
    <div class="mx-auto max-w-6xl px-5 sm:px-8">
        <div class="flex flex-col items-center rounded-[2.5rem] bg-secondary px-6 py-16 text-center text-secondary-foreground sm:px-12 lg:py-24">
            <h2 id="cta-heading" class="max-w-[18ch] font-display text-[clamp(2.25rem,4.4vw,3.5rem)] leading-[1.05] font-semibold tracking-tight text-balance">{{ $heading }}</h2>
            <p class="mt-5 max-w-[48ch] text-lg/8 text-secondary-foreground/80">{{ $body }}</p>
            <div class="mt-9 flex flex-wrap items-center justify-center gap-3">
                <a href="{{ $site->cta_link }}" class="inline-flex items-center gap-2 rounded-full bg-primary py-3.5 pr-4 pl-6 text-base font-semibold text-primary-foreground transition-colors duration-150 hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                    {{ $site->cta_label }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M7 7h10v10M7 17L17 7"/></svg>
                </a>
                <a href="{{ $site->phone_href }}" class="rounded-full px-6 py-3.5 text-base font-semibold ring-1 ring-secondary-foreground/25 ring-inset transition-colors duration-150 hover:bg-secondary-foreground/10 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Call {{ $site->phone }}</a>
            </div>
        </div>
    </div>
</section>
