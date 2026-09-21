<header class="relative z-40">
    <p class="bg-secondary px-5 py-2.5 text-center text-sm font-medium text-secondary-foreground">{{ $site->enrollment_note }}</p>
    <div class="px-3 pt-3 sm:px-6 sm:pt-4">
        <nav aria-label="Main" class="mx-auto flex h-16 max-w-6xl items-center justify-between gap-6 rounded-full bg-card pr-2 pl-5 shadow-xs shadow-ink/5 ring-1 ring-line sm:h-[4.5rem] sm:pr-3 sm:pl-6">
            <a href="/" aria-label="Homepage" class="rounded-lg text-ink hover:text-ink/80 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">
                <x-brand/>
            </a>
            <div class="flex items-center gap-8 max-md:hidden">
                <a href="/programs" class="rounded-sm text-[0.9375rem] font-medium text-muted transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">Programs</a>
                <a href="/#day" class="rounded-sm text-[0.9375rem] font-medium text-muted transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">Our day</a>
                <a href="/#approach" class="rounded-sm text-[0.9375rem] font-medium text-muted transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">Approach</a>
                <a href="/#faq" class="rounded-sm text-[0.9375rem] font-medium text-muted transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">FAQ</a>
            </div>
            <div class="flex items-center gap-2">
                <span class="hidden sm:block"><a href="{{ $site->cta_link }}" class="rounded-full bg-primary px-5 py-3 text-sm font-semibold text-primary-foreground transition-colors duration-150 hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $site->cta_label }}</a></span>
                <button type="button" data-nav-toggle aria-expanded="false" aria-controls="mobile-nav" aria-label="Menu" class="group grid size-12 place-items-center rounded-full text-ink ring-1 ring-line ring-inset transition-colors duration-150 hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" class="size-5 group-aria-expanded:hidden" aria-hidden="true"><path d="M4 9h16M4 15h16"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" class="hidden size-5 group-aria-expanded:block" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
                </button>
            </div>
        </nav>
        <div id="mobile-nav" hidden class="mx-auto mt-2 max-w-6xl rounded-[1.75rem] bg-card p-3 ring-1 ring-line md:hidden">
            <div class="flex flex-col gap-1">
                <a href="/programs" class="rounded-2xl px-4 py-3 text-lg font-medium text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Programs</a>
                <a href="/#day" class="rounded-2xl px-4 py-3 text-lg font-medium text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Our day</a>
                <a href="/#approach" class="rounded-2xl px-4 py-3 text-lg font-medium text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Approach</a>
                <a href="/#faq" class="rounded-2xl px-4 py-3 text-lg font-medium text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">FAQ</a>
                <a href="{{ $site->cta_link }}" class="mt-2 rounded-full bg-primary px-5 py-3.5 text-center text-base font-semibold text-primary-foreground hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $site->cta_label }}</a>
            </div>
        </div>
    </div>
</header>
