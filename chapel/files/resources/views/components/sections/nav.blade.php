<header class="relative z-40 border-b border-line">
    <nav aria-label="Main" class="mx-auto flex h-20 max-w-6xl items-center justify-between gap-6 px-5 sm:px-8">
        <a href="/" aria-label="Homepage" class="rounded-lg text-ink hover:text-ink/80 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
            <x-brand/>
        </a>
        <div class="flex items-center gap-8 max-md:hidden">
            @foreach ($site->nav_links as $item)
                <a href="{{ $item->link }}" class="rounded-sm text-[0.9375rem] font-medium text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $item->label }}</a>
            @endforeach
        </div>
        <div class="flex items-center gap-2">
            <span class="max-sm:hidden"><a href="{{ $site->cta_link }}" class="inline-flex rounded-full px-5 py-2.5 text-sm font-semibold text-ink ring-1 ring-ink/20 ring-inset hover:bg-ink hover:text-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->cta_label }}</a></span>
            <button type="button" data-nav-toggle aria-expanded="false" aria-controls="mobile-nav" aria-label="Menu" class="group grid size-12 place-items-center rounded-full text-ink ring-1 ring-ink/20 ring-inset hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" class="size-5 group-aria-expanded:hidden" aria-hidden="true"><path d="M4 9h16M4 15h16"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" class="hidden size-5 group-aria-expanded:block" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
            </button>
        </div>
    </nav>
    <div id="mobile-nav" hidden class="border-t border-line bg-card md:hidden">
        <div class="mx-auto flex max-w-6xl flex-col gap-1 px-3 py-3 sm:px-6">
            @foreach ($site->nav_links as $item)
                <a href="{{ $item->link }}" class="rounded-2xl px-4 py-3 font-display text-2xl text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $item->label }}</a>
            @endforeach
            <a href="{{ $site->cta_link }}" class="mt-2 rounded-full bg-primary px-5 py-3.5 text-center text-base font-semibold text-primary-foreground hover:bg-primary/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->cta_label }}</a>
        </div>
    </div>
</header>
