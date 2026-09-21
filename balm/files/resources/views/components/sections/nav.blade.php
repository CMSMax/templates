<header class="sticky top-0 z-40 border-b border-line bg-canvas/90 backdrop-blur-md overlay:absolute overlay:inset-x-0 overlay:border-canvas/20 overlay:bg-transparent overlay:backdrop-blur-none">
    <nav aria-label="Main" class="mx-auto flex h-20 max-w-7xl items-center justify-between gap-8 px-6 lg:px-8">
        <div class="flex flex-1 items-center">
            <a href="/" aria-label="Homepage" class="rounded-md text-ink hover:opacity-80 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink overlay:text-canvas overlay:focus-visible:outline-canvas">
                <x-brand/>
            </a>
        </div>
        <div class="flex items-center gap-9 max-lg:hidden">
            <a href="/treatments" class="rounded-sm text-[0.9375rem] font-medium text-muted transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink overlay:text-canvas/85 overlay:hover:text-canvas overlay:focus-visible:outline-canvas">Treatments</a>
            <a href="/#body-map" class="rounded-sm text-[0.9375rem] font-medium text-muted transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink overlay:text-canvas/85 overlay:hover:text-canvas overlay:focus-visible:outline-canvas">Body map</a>
            <a href="/#first-visit" class="rounded-sm text-[0.9375rem] font-medium text-muted transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink overlay:text-canvas/85 overlay:hover:text-canvas overlay:focus-visible:outline-canvas">First visit</a>
            <a href="/#visit" class="rounded-sm text-[0.9375rem] font-medium text-muted transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink overlay:text-canvas/85 overlay:hover:text-canvas overlay:focus-visible:outline-canvas">Hours</a>
        </div>
        <div class="flex flex-1 items-center justify-end gap-3">
            <span class="max-sm:hidden"><a href="{{ $site->booking_url }}" class="inline-flex rounded-full bg-primary px-5 py-2.5 text-sm font-semibold text-primary-foreground transition-colors duration-150 hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink overlay:focus-visible:outline-canvas">{{ $site->cta_label }}</a></span>
            <button type="button" data-nav-toggle aria-expanded="false" aria-controls="mobile-nav" aria-label="Menu" class="group grid size-12 place-items-center rounded-full text-ink ring-1 ring-line ring-inset transition-colors duration-150 hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink lg:hidden overlay:text-canvas overlay:ring-canvas/40 overlay:hover:bg-canvas/10 overlay:focus-visible:outline-canvas">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" class="size-5 group-aria-expanded:hidden" aria-hidden="true"><path d="M4 9h16M4 15h16"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" class="hidden size-5 group-aria-expanded:block" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
            </button>
        </div>
    </nav>
    <div id="mobile-nav" hidden class="border-t border-line bg-surface px-6 pt-3 pb-6 lg:hidden overlay:mx-4 overlay:rounded-3xl overlay:border-0 overlay:shadow-xl overlay:shadow-ink/20">
        <div class="flex flex-col gap-1">
            <a href="/treatments" class="rounded-xl px-3 py-3 font-display text-2xl text-ink hover:bg-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Treatments</a>
            <a href="/#body-map" class="rounded-xl px-3 py-3 font-display text-2xl text-ink hover:bg-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Body map</a>
            <a href="/#first-visit" class="rounded-xl px-3 py-3 font-display text-2xl text-ink hover:bg-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">First visit</a>
            <a href="/#visit" class="rounded-xl px-3 py-3 font-display text-2xl text-ink hover:bg-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Hours</a>
        </div>
        <a href="{{ $site->booking_url }}" class="mt-4 flex justify-center rounded-full bg-primary px-5 py-3.5 text-base font-semibold text-primary-foreground hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $site->cta_label }}</a>
    </div>
</header>
