<header class="relative z-40">
    <nav aria-label="Main" class="mx-auto flex h-20 max-w-6xl items-center justify-between gap-6 px-5 sm:px-8">
        <a href="/" aria-label="{{ $site->name }} home" class="rounded-lg text-ink transition-opacity duration-150 hover:opacity-80 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-secondary">
            <x-brand/>
        </a>
        <div class="flex items-center gap-8 max-md:hidden">
            <a href="/services" class="rounded-sm text-[0.9375rem] font-bold text-muted transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-secondary">Services &amp; prices</a>
            <a href="/#day" class="rounded-sm text-[0.9375rem] font-bold text-muted transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-secondary">A day here</a>
            <a href="/#first-visit" class="rounded-sm text-[0.9375rem] font-bold text-muted transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-secondary">First visit</a>
            <a href="/#visit" class="rounded-sm text-[0.9375rem] font-bold text-muted transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-secondary">Find us</a>
        </div>
        <div class="flex items-center gap-2">
            <span class="max-sm:hidden"><a href="{{ $site->cta_link }}" class="rounded-full bg-primary px-5 py-3 font-display text-[0.9375rem] font-extrabold text-primary-foreground transition-colors duration-150 hover:bg-primary/80 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary">{{ $site->cta_label }}</a></span>
            <button type="button" data-nav-toggle aria-expanded="false" aria-controls="mobile-nav" aria-label="Menu" class="group grid size-12 place-items-center rounded-full text-ink ring-1 ring-ink/20 ring-inset transition-colors duration-150 hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" class="size-5 group-aria-expanded:hidden" aria-hidden="true"><path d="M4 9h16M4 15h16"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" class="hidden size-5 group-aria-expanded:block" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
            </button>
        </div>
    </nav>
    <div id="mobile-nav" hidden class="border-y border-line bg-card md:hidden">
        <div class="mx-auto flex max-w-6xl flex-col gap-1 px-3 py-3 sm:px-6">
            <a href="/services" class="rounded-2xl px-4 py-3 font-display text-lg font-bold text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary">Services &amp; prices</a>
            <a href="/#day" class="rounded-2xl px-4 py-3 font-display text-lg font-bold text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary">A day here</a>
            <a href="/#first-visit" class="rounded-2xl px-4 py-3 font-display text-lg font-bold text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary">First visit</a>
            <a href="/#visit" class="rounded-2xl px-4 py-3 font-display text-lg font-bold text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary">Find us</a>
            <div class="mt-2 grid gap-2 sm:grid-cols-2">
                <a href="{{ $site->cta_link }}" class="rounded-full bg-primary px-5 py-3.5 text-center font-display text-base font-extrabold text-primary-foreground hover:bg-primary/80 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary">{{ $site->cta_label }}</a>
                <a href="{{ $site->phone_href }}" class="rounded-full px-5 py-3.5 text-center text-base font-bold text-ink ring-1 ring-ink/20 ring-inset hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary">Call {{ $site->phone }}</a>
            </div>
        </div>
    </div>
</header>
