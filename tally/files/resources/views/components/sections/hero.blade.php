@props([
    'heading' => 'Your numbers, kept in order.',
    'body' => 'A small accounting practice for owner-run businesses and the families behind them. Fixed monthly fees, books closed by the fifth, and a person who picks up the phone.',
    'secondaryLabel' => 'See services and fees',
    'nextLabel' => 'Next deadline',
    'image' => '/images/hero-partner.jpg',
    'imageAlt' => 'Margaret Hale, the founding partner, smiling at her desk in a bright office while reviewing a client’s papers.',
    'caption' => 'Margaret Hale, CPA — founding partner',
])
<section class="mx-auto max-w-7xl px-6 pt-12 pb-20 sm:pt-16 lg:px-8 lg:pt-20 lg:pb-28">
    <div class="grid items-end gap-x-16 gap-y-12 lg:grid-cols-12">
        <div class="lg:col-span-7 lg:pb-4">
            <p class="inline-flex items-center gap-2.5 rounded-md border border-line bg-surface py-1.5 pr-3 pl-2.5 text-sm text-muted">
                <span class="relative flex size-2" aria-hidden="true"><span class="absolute inset-0 rounded-full bg-primary/40 motion-safe:animate-ping"></span><span class="relative size-2 rounded-full bg-primary"></span></span>
                <span>{{ $nextLabel }}: <span class="font-mono text-ink">{{ $site->next_deadline }}</span></span>
            </p>
            <h1 class="mt-8 max-w-[14ch] font-display text-[clamp(2.75rem,7vw,5.25rem)] leading-[1.02] font-medium tracking-[-0.035em] text-balance text-ink">{{ $heading }}</h1>
            <p class="mt-7 max-w-[46ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
            <div class="mt-10 flex flex-wrap items-center gap-x-8 gap-y-4">
                <a href="/contact" class="rounded-md bg-primary px-6 py-3.5 font-medium text-primary-foreground transition duration-150 hover:bg-primary/88 active:translate-y-px focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->cta_label }}</a>
                <a href="/services" class="group inline-flex items-center gap-2 py-2 font-medium text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                    <span class="underline decoration-ink/25 underline-offset-[6px] transition-colors duration-150 group-hover:decoration-primary">{{ $secondaryLabel }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0 transition-transform duration-200 group-hover:translate-x-0.5" aria-hidden="true"><path d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>
        <figure class="lg:col-span-5">
            <div class="overflow-hidden rounded-lg bg-surface">
                <img data-settle src="{{ $image }}" alt="{{ $imageAlt }}" width="1280" height="1600" fetchpriority="high" class="aspect-[4/5] w-full object-cover">
            </div>
            <figcaption class="mt-3 flex items-center justify-between gap-4 border-t border-line pt-3 text-sm text-muted">
                <span>{{ $caption }}</span>
                <span class="font-mono tabular-nums">Est. {{ $site->founded }}</span>
            </figcaption>
        </figure>
    </div>
</section>
