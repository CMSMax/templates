<header class="sticky top-0 z-40 border-b border-line bg-canvas">
    <nav aria-label="Main" class="flex h-18 items-center justify-between gap-8 px-5 sm:px-8 lg:px-12">
        <a href="/" aria-label="Homepage" class="text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">
            <x-brand/>
        </a>
        <div class="flex items-center gap-9 max-md:hidden">
            <a href="/menu" class="text-[0.9375rem] font-medium text-ink underline-offset-8 transition-colors duration-150 hover:text-primary hover:underline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">Menu</a>
            <a href="/#oven" class="text-[0.9375rem] font-medium text-ink underline-offset-8 transition-colors duration-150 hover:text-primary hover:underline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">Oven times</a>
            <a href="/#visit" class="text-[0.9375rem] font-medium text-ink underline-offset-8 transition-colors duration-150 hover:text-primary hover:underline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">Visit</a>
        </div>
        <div class="flex items-center gap-3">
            <a href="{{ $site->cta_link }}" class="border border-ink px-4 py-2.5 text-sm font-semibold text-ink transition-colors duration-150 hover:bg-ink hover:text-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $site->cta_label }}</a>
            <button type="button" data-nav-toggle aria-expanded="false" aria-controls="mobile-nav" aria-label="Menu" class="group grid size-12 place-items-center border border-line text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" class="size-5 group-aria-expanded:hidden" aria-hidden="true"><path d="M4 9h16M4 15h16"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" class="hidden size-5 group-aria-expanded:block" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
            </button>
        </div>
    </nav>
    <div id="mobile-nav" hidden class="border-t border-line px-5 pt-2 pb-6 sm:px-8 md:hidden">
        <div class="flex flex-col divide-y divide-line">
            <a href="/menu" class="py-4 font-display text-3xl text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Menu</a>
            <a href="/#oven" class="py-4 font-display text-3xl text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Oven times</a>
            <a href="/#visit" class="py-4 font-display text-3xl text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Visit</a>
        </div>
    </div>
</header>
