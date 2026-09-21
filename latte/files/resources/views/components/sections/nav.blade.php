<header class="sticky top-0 z-40 bg-canvas/90 backdrop-blur-md">
    <nav aria-label="Main" class="mx-auto grid h-18 max-w-6xl grid-cols-[1fr_auto_1fr] items-center gap-8 px-6 max-md:grid-cols-[1fr_auto]">
        <a href="/" aria-label="Homepage" class="justify-self-start rounded-md text-ink hover:text-ink/75 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
            <x-brand/>
        </a>
        <div class="flex items-center gap-8 max-md:hidden">
            <a href="/menu" class="rounded-sm text-[0.9375rem] font-medium text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">Menu</a>
            <a href="/#story" class="rounded-sm text-[0.9375rem] font-medium text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">Our story</a>
            <a href="/#visit" class="rounded-sm text-[0.9375rem] font-medium text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">Visit</a>
        </div>
        <div class="flex items-center gap-3 justify-self-end">
            <a href="{{ $site->directions_url }}" class="rounded-full bg-primary px-4 py-2 text-sm font-medium text-primary-foreground hover:bg-primary/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->cta_label }}</a>
            <button type="button" data-nav-toggle aria-expanded="false" aria-controls="mobile-nav" aria-label="Menu" class="group grid size-12 place-items-center rounded-full text-ink ring-1 ring-line ring-inset hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" class="size-5 group-aria-expanded:hidden" aria-hidden="true"><path d="M4 9h16M4 15h16"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" class="hidden size-5 group-aria-expanded:block" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
            </button>
        </div>
    </nav>
    <div id="mobile-nav" hidden class="border-t border-line px-6 pt-3 pb-6 md:hidden">
        <div class="flex flex-col gap-1">
            <a href="/menu" class="rounded-xl px-3 py-3 text-lg font-medium text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Menu</a>
            <a href="/#story" class="rounded-xl px-3 py-3 text-lg font-medium text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Our story</a>
            <a href="/#visit" class="rounded-xl px-3 py-3 text-lg font-medium text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Visit</a>
        </div>
    </div>
</header>
