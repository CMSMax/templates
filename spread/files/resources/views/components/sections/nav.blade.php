<header class="sticky top-0 z-40 bg-secondary text-on-plum">
    <nav aria-label="Main" class="mx-auto flex h-18 max-w-7xl items-center justify-between gap-8 px-5 sm:px-8">
        <a href="/" aria-label="Homepage" class="rounded-sm hover:text-on-plum-muted focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
            <x-brand/>
        </a>
        <div class="flex items-center gap-8 max-lg:hidden">
            <a href="/menus" class="rounded-sm text-[0.9375rem] text-on-plum-muted hover:text-on-plum focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">Menus</a>
            <a href="/#included" class="rounded-sm text-[0.9375rem] text-on-plum-muted hover:text-on-plum focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">What we bring</a>
            <a href="/#booking" class="rounded-sm text-[0.9375rem] text-on-plum-muted hover:text-on-plum focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">How booking works</a>
            <a href="/#contact" class="rounded-sm text-[0.9375rem] text-on-plum-muted hover:text-on-plum focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">Contact</a>
        </div>
        <div class="flex items-center gap-3">
            <div class="max-sm:hidden">
                <a href="{{ $site->quote_link }}" class="inline-flex rounded-full px-4 py-2 text-sm font-medium text-on-plum ring-1 ring-on-plum/40 ring-inset hover:bg-on-plum hover:text-secondary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->cta_label }}</a>
            </div>
            <button type="button" data-nav-toggle aria-expanded="false" aria-controls="mobile-nav" aria-label="Menu" class="group grid size-12 place-items-center rounded-full text-on-plum ring-1 ring-on-plum/25 ring-inset hover:bg-on-plum/10 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" class="size-5 group-aria-expanded:hidden" aria-hidden="true"><path d="M4 9h16M4 15h16"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" class="hidden size-5 group-aria-expanded:block" aria-hidden="true"><path d="M18 6 6 18M6 6l12 12"/></svg>
            </button>
        </div>
    </nav>
    <div id="mobile-nav" hidden class="border-t border-on-plum/15 px-5 pt-2 pb-6 sm:px-8 lg:hidden">
        <div class="flex flex-col divide-y divide-on-plum/15">
            <a href="/menus" class="py-3.5 font-display text-2xl text-on-plum hover:text-on-plum-muted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Menus</a>
            <a href="/#included" class="py-3.5 font-display text-2xl text-on-plum hover:text-on-plum-muted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">What we bring</a>
            <a href="/#booking" class="py-3.5 font-display text-2xl text-on-plum hover:text-on-plum-muted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">How booking works</a>
            <a href="/#contact" class="py-3.5 font-display text-2xl text-on-plum hover:text-on-plum-muted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Contact</a>
        </div>
        <div class="mt-5 sm:hidden">
            <a href="{{ $site->quote_link }}" class="flex justify-center rounded-full bg-primary px-5 py-3.5 text-base font-medium text-primary-foreground hover:bg-on-plum focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-on-plum">{{ $site->cta_label }}</a>
        </div>
    </div>
</header>
