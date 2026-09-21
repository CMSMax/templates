<header class="relative z-40">
    <nav aria-label="Main" class="mx-auto flex h-20 max-w-6xl items-center justify-between gap-6 px-5 sm:px-8">
        <a href="/" aria-label="Homepage" class="rounded-lg text-ink hover:text-ink/80 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">
            <x-brand/>
        </a>
        <div class="flex items-center gap-8 max-lg:hidden">
            <a href="/#conditions" class="rounded-sm text-[0.9375rem] font-medium text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">What we treat</a>
            <a href="/#plan" class="rounded-sm text-[0.9375rem] font-medium text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">How it works</a>
            <a href="/services" class="rounded-sm text-[0.9375rem] font-medium text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">Services &amp; pricing</a>
            <a href="/services#faq" class="rounded-sm text-[0.9375rem] font-medium text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">New patients</a>
        </div>
        <div class="flex items-center gap-2">
            <span class="max-sm:hidden"><a href="{{ $site->phone_href }}" class="rounded-full px-4 py-2.5 text-sm font-semibold text-ink tabular-nums hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $site->phone }}</a></span>
            <span class="max-sm:hidden"><a href="{{ $site->cta_link }}" class="rounded-full bg-primary px-5 py-2.5 text-sm font-semibold text-primary-foreground ring-1 ring-ink/10 ring-inset hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $site->cta_label }}</a></span>
            <button type="button" data-nav-toggle aria-expanded="false" aria-controls="mobile-nav" aria-label="Menu" class="group grid size-12 place-items-center rounded-full text-ink ring-1 ring-ink/15 ring-inset hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" class="size-5 group-aria-expanded:hidden" aria-hidden="true"><path d="M4 9h16M4 15h16"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" class="hidden size-5 group-aria-expanded:block" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
            </button>
        </div>
    </nav>
    <div id="mobile-nav" hidden class="border-y border-line bg-card lg:hidden">
        <div class="mx-auto flex max-w-6xl flex-col gap-1 px-3 py-3 sm:px-6">
            <a href="/#conditions" class="rounded-2xl px-4 py-3 text-lg font-medium text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">What we treat</a>
            <a href="/#plan" class="rounded-2xl px-4 py-3 text-lg font-medium text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">How it works</a>
            <a href="/services" class="rounded-2xl px-4 py-3 text-lg font-medium text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Services &amp; pricing</a>
            <a href="/services#faq" class="rounded-2xl px-4 py-3 text-lg font-medium text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">New patients</a>
            <div class="mt-2 grid gap-2 sm:grid-cols-2">
                <a href="{{ $site->cta_link }}" class="rounded-full bg-primary px-5 py-3.5 text-center text-base font-semibold text-primary-foreground hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $site->cta_label }}</a>
                <a href="{{ $site->phone_href }}" class="rounded-full px-5 py-3.5 text-center text-base font-semibold text-ink ring-1 ring-ink/15 ring-inset hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Call {{ $site->phone }}</a>
            </div>
        </div>
    </div>
</header>
