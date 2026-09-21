<aside aria-label="Emergencies" class="bg-surface">
    <div class="mx-auto flex max-w-6xl items-center justify-between gap-x-6 px-5 py-2.5 text-sm text-ink sm:px-8">
        <p class="flex items-start gap-2 sm:items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mt-0.5 size-4 shrink-0 text-primary sm:mt-0" aria-hidden="true"><path d="M7 18v-6a5 5 0 1 1 10 0v6M5 21a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-1a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2zm16-9h1m-3.5-7.5L18 5M2 12h1m9-10v1M4.929 4.929l.707.707M12 12v6"/></svg>
            <span>{{ $site->emergency_label }} · <a href="{{ $site->emergency_phone_href }}" class="rounded-sm font-semibold whitespace-nowrap underline decoration-ink/30 underline-offset-4 hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->emergency_phone }}</a></span>
        </p>
        <p class="shrink-0 text-muted max-md:hidden">{{ $site->hours_short }}</p>
    </div>
</aside>
<header class="relative z-40">
    <nav aria-label="Main" class="mx-auto flex h-20 max-w-6xl items-center justify-between gap-6 px-5 sm:px-8">
        <a href="/" aria-label="Homepage" class="rounded-lg text-ink hover:text-ink/80 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
            <x-brand/>
        </a>
        <div class="flex items-center gap-8 max-md:hidden">
            <a href="/services" class="rounded-sm text-[0.9375rem] font-medium text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">Services &amp; prices</a>
            <a href="/#approach" class="rounded-sm text-[0.9375rem] font-medium text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">Our approach</a>
            <a href="/services#faq" class="rounded-sm text-[0.9375rem] font-medium text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">New patients</a>
            <a href="/#visit" class="rounded-sm text-[0.9375rem] font-medium text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">Visit</a>
        </div>
        <div class="flex items-center gap-2">
            <span class="max-sm:hidden"><a href="{{ $site->phone_href }}" class="rounded-full px-5 py-2.5 text-sm font-semibold text-ink ring-1 ring-ink/15 ring-inset hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->phone }}</a></span>
            <button type="button" data-nav-toggle aria-expanded="false" aria-controls="mobile-nav" aria-label="Menu" class="group grid size-12 place-items-center rounded-full text-ink ring-1 ring-ink/15 ring-inset hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" class="size-5 group-aria-expanded:hidden" aria-hidden="true"><path d="M4 9h16M4 15h16"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" class="hidden size-5 group-aria-expanded:block" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
            </button>
        </div>
    </nav>
    <div id="mobile-nav" hidden class="border-y border-line bg-card md:hidden">
        <div class="mx-auto flex max-w-6xl flex-col gap-1 px-3 py-3 sm:px-6">
            <a href="/services" class="rounded-2xl px-4 py-3 text-lg font-medium text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Services &amp; prices</a>
            <a href="/#approach" class="rounded-2xl px-4 py-3 text-lg font-medium text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Our approach</a>
            <a href="/services#faq" class="rounded-2xl px-4 py-3 text-lg font-medium text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">New patients</a>
            <a href="/#visit" class="rounded-2xl px-4 py-3 text-lg font-medium text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Visit</a>
            <div class="mt-2 grid gap-2 sm:grid-cols-2">
                <a href="{{ $site->cta_link }}" class="rounded-full bg-primary px-5 py-3.5 text-center text-base font-semibold text-primary-foreground hover:bg-primary/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->cta_label }}</a>
                <a href="{{ $site->phone_href }}" class="rounded-full px-5 py-3.5 text-center text-base font-semibold text-ink ring-1 ring-ink/15 ring-inset hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Call {{ $site->phone }}</a>
            </div>
        </div>
    </div>
</header>
