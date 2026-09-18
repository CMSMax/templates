<header class="sticky top-0 z-40 border-b border-line bg-canvas/85 backdrop-blur-md">
    <nav aria-label="Main" class="mx-auto grid h-16 max-w-6xl grid-cols-[1fr_auto_1fr] items-center gap-8 px-6 max-md:grid-cols-[1fr_auto]">
        <a href="/" aria-label="Homepage" class="flex items-center gap-2.5 justify-self-start font-display font-semibold tracking-tight text-ink hover:text-ink/70">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 110.8 156" fill="currentColor" class="h-5 w-auto shrink-0" aria-hidden="true"><path d="m79 136-45.3-56.4 46.1-56.1h29.9l-47 56.1 45.8 56.4h-29.8"/><path d="M2.7 20.9 28.6 2v152L2.7 135Z"/></svg>
            <span>{{ $site->short_name }}</span>
        </a>
        <div data-nav-links class="flex items-center gap-6 max-md:hidden">
            <a href="/services" class="text-sm font-medium text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">Services</a>
            <a href="/about" class="text-sm font-medium text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">About</a>
            <a href="/reviews" class="text-sm font-medium text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">Reviews</a>
            <a href="/contact" class="text-sm font-medium text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">Contact</a>
        </div>
        <div class="flex items-center gap-3 justify-self-end">
            <a href="/contact" class="rounded-lg bg-accent px-3 py-1.5 text-sm font-medium text-accent-ink transition-transform duration-200 ease-[cubic-bezier(0.22,1,0.36,1)] hover:bg-accent/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent active:scale-[0.98] max-md:hidden">{{ $site->cta_label }}</a>
            <button type="button" data-nav-toggle aria-expanded="false" aria-controls="mobile-nav" aria-label="Menu" class="group grid size-10 place-items-center rounded-lg border border-line text-ink hover:border-ink/30 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" class="size-5 group-aria-expanded:hidden" aria-hidden="true"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" class="hidden size-5 group-aria-expanded:block" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
            </button>
        </div>
    </nav>
    <div id="mobile-nav" hidden class="border-t border-line px-6 py-4 md:hidden">
        <div class="flex flex-col gap-1">
            <a href="/services" class="rounded-lg px-3 py-2.5 text-base font-medium text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">Services</a>
            <a href="/about" class="rounded-lg px-3 py-2.5 text-base font-medium text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">About</a>
            <a href="/reviews" class="rounded-lg px-3 py-2.5 text-base font-medium text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">Reviews</a>
            <a href="/contact" class="rounded-lg px-3 py-2.5 text-base font-medium text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">Contact</a>
            <a href="/contact" class="mt-2 rounded-lg bg-accent px-3 py-2.5 text-center text-base font-medium text-accent-ink transition-transform duration-200 ease-[cubic-bezier(0.22,1,0.36,1)] active:scale-[0.98] hover:bg-accent/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ $site->cta_label }}</a>
        </div>
    </div>
</header>
