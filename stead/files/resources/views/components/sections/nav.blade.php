@props(['servicesLabel' => 'Services', 'feesLabel' => 'Fees', 'rentalsLabel' => 'Rentals', 'residentsLabel' => 'Residents'])
<header class="sticky top-0 z-40 border-b border-ink/8 bg-canvas/90 backdrop-blur-md">
    <nav aria-label="Main" class="mx-auto flex h-18 max-w-7xl items-center justify-between gap-8 px-6 lg:px-8">
        <a href="/" aria-label="Homepage" class="flex items-center gap-2.5 rounded-md text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">
            @if ($site->logo)
                <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-8 w-auto">
            @else
                <span class="grid size-7 shrink-0"><x-sections.mark/></span>
                <span class="font-display text-2xl font-medium tracking-tight">{{ $site->wordmark }}</span>
            @endif
        </a>
        <div class="flex items-center gap-8">
            <div class="flex items-center gap-7 max-md:hidden">
                <a href="/#services" class="text-[0.9375rem] text-ink/70 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $servicesLabel }}</a>
                <a href="/#fees" class="text-[0.9375rem] text-ink/70 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $feesLabel }}</a>
                <a href="/rentals" class="text-[0.9375rem] text-ink/70 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $rentalsLabel }}</a>
                <a href="/#residents" class="text-[0.9375rem] text-ink/70 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $residentsLabel }}</a>
            </div>
            <div class="max-md:hidden"><a href="{{ $site->cta_link }}" class="block rounded-full bg-ink px-4 py-2.5 text-[0.9375rem] font-medium text-canvas hover:bg-ink/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $site->cta_label }}</a></div>
            <button type="button" data-nav-toggle aria-expanded="false" aria-controls="mobile-nav" class="group grid size-11 place-items-center rounded-full border border-ink/15 text-ink hover:border-ink/40 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink md:hidden">
                <span class="sr-only">Menu</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" class="size-5 group-aria-expanded:hidden" aria-hidden="true"><path d="M4 9h16M4 15h16"/></svg>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" class="hidden size-5 group-aria-expanded:block" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
            </button>
        </div>
    </nav>
    <div id="mobile-nav" hidden class="border-t border-ink/8 px-6 pt-3 pb-6 md:hidden">
        <div class="flex flex-col">
            <a href="/#services" class="border-b border-ink/8 py-4 font-display text-2xl font-medium tracking-tight text-ink focus-visible:outline-2 focus-visible:outline-ink">{{ $servicesLabel }}</a>
            <a href="/#fees" class="border-b border-ink/8 py-4 font-display text-2xl font-medium tracking-tight text-ink focus-visible:outline-2 focus-visible:outline-ink">{{ $feesLabel }}</a>
            <a href="/rentals" class="border-b border-ink/8 py-4 font-display text-2xl font-medium tracking-tight text-ink focus-visible:outline-2 focus-visible:outline-ink">{{ $rentalsLabel }}</a>
            <a href="/#residents" class="py-4 font-display text-2xl font-medium tracking-tight text-ink focus-visible:outline-2 focus-visible:outline-ink">{{ $residentsLabel }}</a>
            <a href="{{ $site->cta_link }}" class="mt-3 rounded-full bg-primary px-5 py-3.5 text-center font-medium text-primary-foreground hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $site->cta_label }}</a>
        </div>
    </div>
</header>
