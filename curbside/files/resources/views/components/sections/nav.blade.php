<header class="sticky top-0 z-40 border-b border-ink/10 bg-canvas/92 backdrop-blur-md">
    <nav aria-label="Main" class="mx-auto flex h-18 max-w-7xl items-center justify-between gap-8 px-5 sm:px-8">
        <a href="/" aria-label="Homepage" class="rounded-sm text-ink hover:text-ink/75 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">
            <x-brand/>
        </a>
        <div class="flex items-center gap-8 max-lg:hidden">
            <a href="/menu" class="rounded-sm text-[0.9375rem] font-medium text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">Menu</a>
            <a href="/#stops" class="rounded-sm text-[0.9375rem] font-medium text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">This week</a>
            <a href="/#story" class="rounded-sm text-[0.9375rem] font-medium text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">Our story</a>
            <a href="/#catering" class="rounded-sm text-[0.9375rem] font-medium text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">Catering</a>
        </div>
        <div class="flex items-center gap-3">
            <div class="max-sm:hidden">
                <a href="{{ $site->cta_link }}" class="border-2 border-ink bg-primary px-4 py-2 text-sm font-semibold text-primary-foreground hover:bg-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $site->cta_label }}</a>
            </div>
            <button type="button" data-nav-toggle aria-expanded="false" aria-controls="mobile-nav" aria-label="Menu" class="group grid size-12 place-items-center text-ink ring-1 ring-ink/15 ring-inset hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="square" class="size-5 group-aria-expanded:hidden" aria-hidden="true"><path d="M4 8h16M4 16h16"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="square" class="hidden size-5 group-aria-expanded:block" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
            </button>
        </div>
    </nav>
    <div id="mobile-nav" hidden class="border-t border-ink/10 px-5 pt-2 pb-6 sm:px-8 lg:hidden">
        <div class="flex flex-col divide-y divide-ink/10">
            <a href="/menu" class="py-3.5 font-display text-3xl font-extrabold text-ink uppercase hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Menu</a>
            <a href="/#stops" class="py-3.5 font-display text-3xl font-extrabold text-ink uppercase hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">This week</a>
            <a href="/#story" class="py-3.5 font-display text-3xl font-extrabold text-ink uppercase hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Our story</a>
            <a href="/#catering" class="py-3.5 font-display text-3xl font-extrabold text-ink uppercase hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Catering</a>
        </div>
        <div class="mt-5 sm:hidden">
            <a href="{{ $site->cta_link }}" class="flex justify-center border-2 border-ink bg-primary px-5 py-3.5 text-base font-semibold text-primary-foreground hover:bg-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $site->cta_label }}</a>
        </div>
    </div>
</header>
