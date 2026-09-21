<header class="sticky top-0 z-40 border-b border-line bg-canvas/95 backdrop-blur-sm">
    <nav aria-label="Main" class="mx-auto flex h-20 max-w-7xl items-center justify-between gap-8 px-5 sm:px-6 lg:px-8">
        <a href="/" aria-label="{{ $site->name }} — home" class="rounded-md text-ink transition-opacity duration-150 hover:opacity-80 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">
            <x-brand/>
        </a>
        <div class="flex items-center gap-8 max-lg:hidden">
            <a href="/#programs" class="rounded-sm text-[0.9375rem] font-medium text-muted underline-offset-[6px] transition-colors duration-150 hover:text-ink hover:underline hover:decoration-primary hover:decoration-2 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">What we do</a>
            <a href="/#dollar" class="rounded-sm text-[0.9375rem] font-medium text-muted underline-offset-[6px] transition-colors duration-150 hover:text-ink hover:underline hover:decoration-primary hover:decoration-2 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">Where it goes</a>
            <a href="/get-involved" class="rounded-sm text-[0.9375rem] font-medium text-muted underline-offset-[6px] transition-colors duration-150 hover:text-ink hover:underline hover:decoration-primary hover:decoration-2 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">Get involved</a>
            <a href="/#visit" class="rounded-sm text-[0.9375rem] font-medium text-muted underline-offset-[6px] transition-colors duration-150 hover:text-ink hover:underline hover:decoration-primary hover:decoration-2 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">Visit</a>
        </div>
        <div class="flex items-center gap-3">
            <span class="max-sm:hidden"><a href="{{ $site->donate_url }}" class="inline-flex min-h-12 items-center gap-2 rounded-full bg-primary px-6 text-base font-bold text-primary-foreground transition-[background-color,transform] duration-150 hover:-translate-y-0.5 hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $site->cta_label }}<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-4" aria-hidden="true"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.25" d="M7 7h10v10M7 17L17 7"/></svg></a></span>
            <button type="button" data-nav-toggle aria-expanded="false" aria-controls="mobile-nav" aria-label="Menu" class="group grid size-12 place-items-center rounded-full text-ink ring-1 ring-ink/25 ring-inset transition-colors duration-150 hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" class="size-5 group-aria-expanded:hidden" aria-hidden="true"><path d="M4 9h16M4 15h16"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" class="hidden size-5 group-aria-expanded:block" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
            </button>
        </div>
    </nav>
    <div id="mobile-nav" hidden class="border-t border-line bg-canvas px-5 pt-3 pb-6 sm:px-6 lg:hidden">
        <div class="flex flex-col">
            <a href="/#programs" class="rounded-lg border-b border-line px-2 py-4 font-display text-2xl font-bold text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">What we do</a>
            <a href="/#dollar" class="rounded-lg border-b border-line px-2 py-4 font-display text-2xl font-bold text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Where it goes</a>
            <a href="/get-involved" class="rounded-lg border-b border-line px-2 py-4 font-display text-2xl font-bold text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Get involved</a>
            <a href="/#visit" class="rounded-lg px-2 py-4 font-display text-2xl font-bold text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Visit</a>
        </div>
        <a href="{{ $site->donate_url }}" class="mt-4 flex min-h-12 items-center justify-center rounded-full bg-primary px-5 py-3.5 text-base font-bold text-primary-foreground hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $site->cta_label }}</a>
    </div>
</header>
