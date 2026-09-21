<header class="sticky top-0 z-40 border-b border-line bg-canvas/92 backdrop-blur-md">
    <nav aria-label="Main" class="mx-auto flex h-18 max-w-7xl items-center justify-between gap-8 px-5 sm:px-8">
        <a href="/" aria-label="{{ $site->name }} — homepage" class="rounded-sm text-ink hover:text-ink/75 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
            <x-brand/>
        </a>
        <div class="flex items-center gap-8 max-lg:hidden">
            <a href="/#programs" class="rounded-sm text-[0.9375rem] font-medium text-muted transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">Programs</a>
            <a href="/schedule" class="rounded-sm text-[0.9375rem] font-medium text-muted transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">Schedule</a>
            <a href="/#memberships" class="rounded-sm text-[0.9375rem] font-medium text-muted transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">Memberships</a>
            <a href="/#visit" class="rounded-sm text-[0.9375rem] font-medium text-muted transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">Visit</a>
        </div>
        <div class="flex items-center gap-3">
            <div class="max-sm:hidden">
                <a href="{{ $site->cta_link }}" class="inline-flex items-center rounded-sm bg-ink px-4 py-2.5 font-display text-lg leading-none font-extrabold tracking-[0.06em] text-canvas uppercase transition-colors duration-150 hover:bg-primary hover:text-primary-foreground focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->cta_label }}</a>
            </div>
            <button type="button" data-nav-toggle aria-expanded="false" aria-controls="mobile-nav" aria-label="Menu" class="group grid size-12 place-items-center rounded-sm text-ink ring-1 ring-line ring-inset hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="square" class="size-5 group-aria-expanded:hidden" aria-hidden="true"><path d="M4 9h16M4 15h16"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="square" class="hidden size-5 group-aria-expanded:block" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
            </button>
        </div>
    </nav>
    <div id="mobile-nav" hidden class="border-t border-line px-5 pt-2 pb-6 sm:px-8 lg:hidden">
        <div class="flex flex-col divide-y divide-line">
            <a href="/#programs" class="py-4 font-display text-3xl font-black tracking-wide text-ink uppercase hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Programs</a>
            <a href="/schedule" class="py-4 font-display text-3xl font-black tracking-wide text-ink uppercase hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Schedule</a>
            <a href="/#memberships" class="py-4 font-display text-3xl font-black tracking-wide text-ink uppercase hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Memberships</a>
            <a href="/#visit" class="py-4 font-display text-3xl font-black tracking-wide text-ink uppercase hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Visit</a>
        </div>
        <div class="mt-5 sm:hidden">
            <a href="{{ $site->cta_link }}" class="flex justify-center rounded-sm bg-primary px-5 py-4 font-display text-xl leading-none font-extrabold tracking-[0.06em] text-primary-foreground uppercase hover:bg-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->cta_label }}</a>
        </div>
    </div>
</header>
