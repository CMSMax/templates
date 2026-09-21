@props(['arrangementsLabel' => 'Arrangements', 'seasonLabel' => 'In season', 'occasionsLabel' => 'Weddings & events', 'visitLabel' => 'Visit'])
<header class="sticky top-0 z-40 border-b border-line/70 bg-canvas/85 backdrop-blur-md">
    <nav aria-label="Main" class="mx-auto flex h-18 max-w-7xl items-center justify-between gap-8 px-6 lg:px-8">
        <a href="/" aria-label="Homepage" class="flex items-center gap-2.5 rounded-sm text-ink transition-colors duration-200 hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
            @if ($site->logo)
                <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-8 w-auto">
            @else
                <span class="grid size-6 shrink-0 text-primary"><x-sections.mark/></span>
                <span class="font-display text-[1.75rem]">{{ $site->name }}</span>
            @endif
        </a>
        <div class="flex items-center gap-8">
            <div class="flex items-center gap-8 max-lg:hidden">
                <a href="/arrangements" class="text-[0.9375rem] text-ink/80 transition-colors duration-200 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $arrangementsLabel }}</a>
                <a href="/#in-season" class="text-[0.9375rem] text-ink/80 transition-colors duration-200 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $seasonLabel }}</a>
                <a href="/#occasions" class="text-[0.9375rem] text-ink/80 transition-colors duration-200 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $occasionsLabel }}</a>
                <a href="/#visit" class="text-[0.9375rem] text-ink/80 transition-colors duration-200 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $visitLabel }}</a>
            </div>
            <div class="max-sm:hidden"><a href="{{ $site->order_url }}" class="rounded-full border border-ink/25 px-4 py-2 text-[0.9375rem] font-medium text-ink transition-colors duration-200 hover:border-primary hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->cta_label }}</a></div>
            <button type="button" data-nav-toggle aria-expanded="false" aria-controls="mobile-nav" class="group grid size-11 place-items-center rounded-full border border-ink/25 text-ink transition-colors duration-200 hover:border-ink/60 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary lg:hidden">
                <span class="sr-only">Menu</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" class="size-5 group-aria-expanded:hidden" aria-hidden="true"><path d="M4 9h16M4 15h16"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" class="hidden size-5 group-aria-expanded:block" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
            </button>
        </div>
    </nav>
    <div id="mobile-nav" hidden class="border-t border-line px-6 pt-4 pb-8 lg:hidden">
        <div class="flex flex-col gap-1">
            <a href="/arrangements" class="rounded-sm px-2 py-3 font-display text-3xl text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $arrangementsLabel }}</a>
            <a href="/#in-season" class="rounded-sm px-2 py-3 font-display text-3xl text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $seasonLabel }}</a>
            <a href="/#occasions" class="rounded-sm px-2 py-3 font-display text-3xl text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $occasionsLabel }}</a>
            <a href="/#visit" class="rounded-sm px-2 py-3 font-display text-3xl text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $visitLabel }}</a>
            <a href="{{ $site->order_url }}" class="mt-4 justify-center rounded-full bg-primary px-5 py-3.5 text-center font-medium text-primary-foreground hover:bg-primary/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->cta_label }}</a>
            <p class="mt-3 text-center text-sm text-muted">{{ $site->delivery_cutoff }}</p>
        </div>
    </div>
</header>
