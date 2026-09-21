<header class="sticky top-0 z-40 border-b border-ink bg-canvas">
    <nav aria-label="Main" class="mx-auto flex h-16 max-w-7xl items-center justify-between gap-8 px-5 sm:px-8">
        <a href="/" aria-label="Homepage" class="text-ink hover:text-ink/75 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">
            <x-brand/>
        </a>
        <div class="flex items-center gap-9 max-md:hidden">
            <a href="/#work" class="text-[0.9375rem] font-medium text-ink underline-offset-[6px] hover:underline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">Work</a>
            <a href="/flash" class="text-[0.9375rem] font-medium text-ink underline-offset-[6px] hover:underline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">Flash</a>
            <a href="/artists" class="text-[0.9375rem] font-medium text-ink underline-offset-[6px] hover:underline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">Artists</a>
            <a href="/#visit" class="text-[0.9375rem] font-medium text-ink underline-offset-[6px] hover:underline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">Visit</a>
        </div>
        <div class="flex items-center gap-3">
            <a href="{{ $site->booking_url }}" class="border-2 border-ink px-3.5 py-2 text-[0.9375rem] font-semibold whitespace-nowrap text-ink hover:bg-ink hover:text-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink max-[360px]:hidden">{{ $site->cta_label }}</a>
            <button type="button" data-nav-toggle aria-expanded="false" aria-controls="mobile-nav" aria-label="Menu" class="group grid size-12 place-items-center text-ink hover:bg-ink/5 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" class="size-6 group-aria-expanded:hidden" aria-hidden="true"><path d="M4 8h16M4 16h16"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" class="hidden size-6 group-aria-expanded:block" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
            </button>
        </div>
    </nav>
    <div id="mobile-nav" hidden class="border-t border-ink px-5 pt-2 pb-6 md:hidden">
        <div class="flex flex-col">
            <a href="/#work" class="border-b border-line py-4 font-display text-2xl text-ink uppercase hover:bg-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Work</a>
            <a href="/flash" class="border-b border-line py-4 font-display text-2xl text-ink uppercase hover:bg-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Flash</a>
            <a href="/artists" class="border-b border-line py-4 font-display text-2xl text-ink uppercase hover:bg-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Artists</a>
            <a href="/#visit" class="border-b border-line py-4 font-display text-2xl text-ink uppercase hover:bg-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Visit</a>
            <a href="{{ $site->booking_url }}" class="mt-6 bg-primary px-5 py-4 text-center text-lg font-semibold text-primary-foreground hover:bg-ink hover:text-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $site->cta_label }}</a>
            <a href="{{ $site->phone_href }}" class="py-4 text-center text-lg text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Call {{ $site->phone }}</a>
        </div>
    </div>
</header>
