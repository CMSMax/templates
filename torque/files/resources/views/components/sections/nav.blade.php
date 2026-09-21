<header class="sticky top-0 z-40 border-b border-line bg-canvas/92 backdrop-blur-md">
    <nav aria-label="Main" class="mx-auto flex h-18 max-w-7xl items-center justify-between gap-8 px-5 sm:px-8">
        <a href="/" aria-label="Homepage" class="rounded-sm text-ink transition-colors duration-150 hover:text-ink/80 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
            <x-brand/>
        </a>
        <div class="flex items-center gap-8 max-lg:hidden">
            <a href="/services" class="rounded-sm text-[0.9375rem] font-medium text-muted transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">Services &amp; prices</a>
            <a href="/#lights" class="rounded-sm text-[0.9375rem] font-medium text-muted transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">Warning lights</a>
            <a href="/#process" class="rounded-sm text-[0.9375rem] font-medium text-muted transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">How it works</a>
            <a href="/#book" class="rounded-sm text-[0.9375rem] font-medium text-muted transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">Hours &amp; location</a>
        </div>
        <div class="flex items-center gap-5">
            <a href="{{ $site->phone_href }}" class="rounded-sm font-display text-lg font-semibold tracking-wide text-ink tabular-nums transition-colors duration-150 hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary max-xl:hidden">{{ $site->phone }}</a>
            <div class="max-sm:hidden">
                <a href="{{ $site->cta_link }}" class="inline-flex rounded-md px-4 py-2.5 text-sm font-semibold text-ink ring-1 ring-ink/30 transition-colors duration-150 ring-inset hover:bg-ink hover:text-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->cta_label }}</a>
            </div>
            <button type="button" data-nav-toggle aria-expanded="false" aria-controls="mobile-nav" aria-label="Menu" class="group grid size-12 place-items-center rounded-md text-ink ring-1 ring-ink/25 transition-colors duration-150 ring-inset hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" class="size-5 group-aria-expanded:hidden" aria-hidden="true"><path d="M4 9h16M4 15h16"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" class="hidden size-5 group-aria-expanded:block" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
            </button>
        </div>
    </nav>
    <div id="mobile-nav" hidden class="border-t border-line px-5 pt-2 pb-6 sm:px-8 lg:hidden">
        <div class="flex flex-col divide-y divide-line">
            <a href="/services" class="py-4 font-display text-2xl font-bold text-ink uppercase hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Services &amp; prices</a>
            <a href="/#lights" class="py-4 font-display text-2xl font-bold text-ink uppercase hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Warning lights</a>
            <a href="/#process" class="py-4 font-display text-2xl font-bold text-ink uppercase hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">How it works</a>
            <a href="/#book" class="py-4 font-display text-2xl font-bold text-ink uppercase hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Hours &amp; location</a>
        </div>
        <div class="mt-5 grid gap-3 sm:grid-cols-2">
            <a href="{{ $site->cta_link }}" class="flex justify-center rounded-md bg-primary px-5 py-3.5 text-base font-semibold text-primary-foreground hover:bg-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $site->cta_label }}</a>
            <a href="{{ $site->phone_href }}" class="flex justify-center rounded-md px-5 py-3.5 text-base font-semibold text-ink ring-1 ring-ink/30 ring-inset hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Call {{ $site->phone }}</a>
        </div>
    </div>
</header>
