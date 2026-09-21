<header class="sticky top-0 z-40 border-b border-line bg-canvas/85 backdrop-blur-md">
    <nav aria-label="Main" class="mx-auto flex h-18 max-w-7xl items-center justify-between gap-8 px-6">
        <a href="/" aria-label="Homepage" class="text-ink hover:text-ink/80 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
            <x-brand/>
        </a>
        <div class="flex items-center gap-10 max-md:hidden">
            <a href="/services" class="text-[0.9375rem] font-medium text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">Services</a>
            <a href="/about" class="text-[0.9375rem] font-medium text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">About</a>
            <a href="/#visit" class="text-[0.9375rem] font-medium text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">Visit</a>
        </div>
        <div class="flex items-center gap-3">
            <a href="{{ $site->booking_url }}" class="rounded-xs px-3.5 py-2.5 font-display text-base font-semibold tracking-[0.08em] whitespace-nowrap text-primary uppercase ring-1 ring-primary/60 ring-inset hover:bg-primary hover:text-primary-foreground focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary max-[360px]:hidden">{{ $site->cta_label }}</a>
            <button type="button" data-nav-toggle aria-expanded="false" aria-controls="mobile-nav" aria-label="Menu" class="group grid size-12 place-items-center rounded-xs text-ink ring-1 ring-line ring-inset hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" class="size-5 group-aria-expanded:hidden" aria-hidden="true"><path d="M4 9h16M4 15h16"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" class="hidden size-5 group-aria-expanded:block" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
            </button>
        </div>
    </nav>
    <div id="mobile-nav" hidden class="border-t border-line px-6 pt-3 pb-6 md:hidden">
        <div class="flex flex-col">
            <a href="/services" class="border-b border-line py-4 font-display text-2xl font-semibold tracking-wide text-ink uppercase hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Services</a>
            <a href="/about" class="border-b border-line py-4 font-display text-2xl font-semibold tracking-wide text-ink uppercase hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">About</a>
            <a href="/#visit" class="border-b border-line py-4 font-display text-2xl font-semibold tracking-wide text-ink uppercase hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Visit</a>
            <a href="{{ $site->booking_url }}" class="border-b border-line py-4 font-display text-2xl font-semibold tracking-wide text-primary uppercase hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->cta_label }}</a>
            <a href="{{ $site->phone_href }}" class="py-4 text-lg text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Call {{ $site->phone }}</a>
        </div>
    </div>
</header>
