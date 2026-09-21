<header class="relative z-40">
    <nav aria-label="Main" class="mx-auto flex h-20 max-w-7xl items-center justify-between gap-6 px-5 sm:h-24 sm:px-8">
        <a href="/" aria-label="Homepage" class="rounded-xl text-ink hover:text-ink/80 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
            <x-brand/>
        </a>
        <div data-nav-links class="flex items-center gap-1 max-lg:hidden">
            @foreach ($site->nav as $link)
                <a href="{{ $link->href }}" class="rounded-full px-4 py-2.5 text-[0.9375rem] font-medium text-muted hover:bg-surface hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $link->label }}</a>
            @endforeach
        </div>
        <div class="flex items-center gap-2">
            <a href="{{ $site->cta_link }}" class="rounded-full bg-ink px-5 py-3 text-sm font-semibold text-canvas hover:bg-ink/85 active:bg-ink/75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary max-sm:hidden">{{ $site->cta_label }}</a>
            <button type="button" data-nav-toggle aria-expanded="false" aria-controls="mobile-nav" aria-label="Menu" class="group grid size-12 place-items-center rounded-full text-ink ring-1 ring-ink/15 ring-inset hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" class="size-5 group-aria-expanded:hidden" aria-hidden="true"><path d="M4 9h16M4 15h16"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" class="hidden size-5 group-aria-expanded:block" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
            </button>
        </div>
    </nav>
    <div id="mobile-nav" hidden class="border-y border-line bg-card lg:hidden">
        <div class="mx-auto flex max-w-7xl flex-col gap-1 px-3 py-3 sm:px-6">
            @foreach ($site->nav as $link)
                <a href="{{ $link->href }}" class="rounded-2xl px-4 py-3 font-display text-2xl font-medium tracking-tight text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $link->label }}</a>
            @endforeach
            <div class="mt-2 grid gap-2 sm:grid-cols-2">
                <a href="{{ $site->cta_link }}" class="rounded-full bg-primary px-5 py-3.5 text-center text-base font-semibold text-primary-foreground hover:bg-primary/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->cta_label }}</a>
                <a href="{{ $site->phone_href }}" class="rounded-full px-5 py-3.5 text-center text-base font-semibold text-ink ring-1 ring-ink/15 ring-inset hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Call {{ $site->phone }}</a>
            </div>
        </div>
    </div>
</header>
