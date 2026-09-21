<header class="relative z-40">
    <nav aria-label="Main" class="mx-auto flex h-20 max-w-6xl items-center justify-between gap-6 px-5 sm:px-8">
        <a href="/" aria-label="Homepage" class="rounded-lg text-ink hover:text-ink/75 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">
            <x-brand/>
        </a>
        <div class="flex items-center gap-8 max-md:hidden">
            <a href="/#specialties" class="rounded-sm text-[0.9375rem] font-medium text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">What I help with</a>
            <a href="/#about" class="rounded-sm text-[0.9375rem] font-medium text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">About</a>
            <a href="/fees" class="rounded-sm text-[0.9375rem] font-medium text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">Fees &amp; insurance</a>
            <a href="/fees#faq" class="rounded-sm text-[0.9375rem] font-medium text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">FAQ</a>
        </div>
        <div class="flex items-center gap-2">
            <span class="max-sm:hidden"><a href="{{ $site->cta_link }}" class="inline-flex items-center gap-2 rounded-full bg-ink px-5 py-2.5 text-sm font-semibold text-canvas hover:bg-ink/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">
                <span class="size-1.5 rounded-full bg-primary" aria-hidden="true"></span>
                Free consultation
            </a></span>
            <button type="button" data-nav-toggle aria-expanded="false" aria-controls="mobile-nav" aria-label="Menu" class="group grid size-12 place-items-center rounded-full text-ink ring-1 ring-ink/15 ring-inset hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" class="size-5 group-aria-expanded:hidden" aria-hidden="true"><path d="M4 9h16M4 15h16"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" class="hidden size-5 group-aria-expanded:block" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
            </button>
        </div>
    </nav>
    <div id="mobile-nav" hidden class="border-y border-line bg-card md:hidden">
        <div class="mx-auto flex max-w-6xl flex-col gap-1 px-3 py-3 sm:px-6">
            <a href="/#specialties" class="rounded-2xl px-4 py-3 text-lg font-medium text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">What I help with</a>
            <a href="/#about" class="rounded-2xl px-4 py-3 text-lg font-medium text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">About</a>
            <a href="/fees" class="rounded-2xl px-4 py-3 text-lg font-medium text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Fees &amp; insurance</a>
            <a href="/fees#faq" class="rounded-2xl px-4 py-3 text-lg font-medium text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">FAQ</a>
            <a href="{{ $site->cta_link }}" class="mt-2 rounded-full bg-primary px-5 py-3.5 text-center text-base font-semibold text-primary-foreground hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $site->cta_label }}</a>
        </div>
    </div>
</header>
