@props(['servicesLabel' => 'Services', 'includedLabel' => 'What’s included', 'reviewsLabel' => 'Reviews'])
<header class="sticky top-0 z-40 border-b border-line/80 bg-canvas/90 backdrop-blur-md">
    <nav aria-label="Main" class="mx-auto flex h-18 max-w-7xl items-center justify-between gap-8 px-6 lg:px-8">
        <a href="/" aria-label="Homepage" class="flex items-center gap-2.5 rounded-md text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">
            @if ($site->logo)
                <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-8 w-auto">
            @else
                <span class="grid size-7 shrink-0"><x-sections.mark/></span>
                <span class="font-display text-2xl font-semibold tracking-tight">{{ $site->wordmark }}</span>
            @endif
        </a>
        <div class="flex items-center gap-8">
            <div class="flex items-center gap-8 max-md:hidden">
                <a href="/services" class="text-[0.9375rem] text-ink/75 transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $servicesLabel }}</a>
                <a href="/#clean-facts" class="text-[0.9375rem] text-ink/75 transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $includedLabel }}</a>
                <a href="/#reviews" class="text-[0.9375rem] text-ink/75 transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $reviewsLabel }}</a>
            </div>
            <div class="flex items-center gap-5 max-md:hidden">
                <a href="{{ $site->phone_href }}" class="text-[0.9375rem] font-medium text-ink tabular-nums transition-colors duration-150 hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink max-lg:hidden">{{ $site->phone }}</a>
                <a href="{{ $site->cta_href }}" class="rounded-full bg-ink px-4 py-2 text-[0.9375rem] font-medium text-canvas transition-colors duration-150 hover:bg-ink/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $site->cta_label }}</a>
            </div>
            <button type="button" data-nav-toggle aria-expanded="false" aria-controls="mobile-nav" class="group relative grid size-11 place-items-center rounded-full border border-ink/15 text-ink hover:border-ink/40 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink md:hidden">
                <span class="sr-only">Menu</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" class="size-5 group-aria-expanded:hidden" aria-hidden="true"><path d="M4 9h16M4 15h16"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" class="hidden size-5 group-aria-expanded:block" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
            </button>
        </div>
    </nav>
    <div id="mobile-nav" hidden class="border-t border-line px-6 pt-4 pb-6 md:hidden">
        <div class="flex flex-col gap-1">
            <a href="/services" class="rounded-lg px-3 py-3 font-display text-2xl font-semibold tracking-tight text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $servicesLabel }}</a>
            <a href="/#clean-facts" class="rounded-lg px-3 py-3 font-display text-2xl font-semibold tracking-tight text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $includedLabel }}</a>
            <a href="/#reviews" class="rounded-lg px-3 py-3 font-display text-2xl font-semibold tracking-tight text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $reviewsLabel }}</a>
            <a href="{{ $site->phone_href }}" class="rounded-lg px-3 py-3 text-lg font-medium text-ink tabular-nums hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Call {{ $site->phone }}</a>
            <a href="{{ $site->cta_href }}" class="mt-3 rounded-full bg-primary px-5 py-3.5 text-center font-medium text-primary-foreground hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $site->cta_label }}</a>
        </div>
    </div>
</header>
