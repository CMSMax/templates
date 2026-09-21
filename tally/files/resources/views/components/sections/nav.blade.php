@props(['servicesLabel' => 'Services', 'aboutLabel' => 'About', 'contactLabel' => 'Contact'])
<header class="sticky top-0 z-40 border-b border-line bg-canvas/90 backdrop-blur-md">
    <nav aria-label="Main" class="mx-auto flex h-18 max-w-7xl items-center justify-between gap-8 px-6 lg:px-8">
        <a href="/" aria-label="Homepage" class="flex items-center gap-2.5 rounded-md text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
            @if ($site->logo)
                <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-8 w-auto">
            @else
                <span class="grid size-7 shrink-0 text-primary"><x-sections.mark/></span>
                <span class="font-display text-xl font-semibold tracking-tight">{{ $site->wordmark }}</span>
            @endif
        </a>
        <div data-nav-links class="flex items-center gap-8 max-md:hidden">
            <a href="/services" class="text-[0.9375rem] text-ink/75 transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $servicesLabel }}</a>
            <a href="/about" class="text-[0.9375rem] text-ink/75 transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $aboutLabel }}</a>
            <a href="/contact" class="text-[0.9375rem] text-ink/75 transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $contactLabel }}</a>
        </div>
        <div class="flex items-center gap-6">
            <a href="{{ $site->phone_href }}" class="font-mono text-sm text-ink/75 tabular-nums transition-colors duration-150 hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary max-lg:hidden">{{ $site->phone }}</a>
            <a href="/contact" class="rounded-md bg-primary px-4 py-2.5 text-[0.9375rem] font-medium text-primary-foreground transition duration-150 hover:bg-primary/88 active:translate-y-px focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary max-md:hidden">{{ $site->cta_label }}</a>
            <button type="button" data-nav-toggle aria-expanded="false" aria-controls="mobile-nav" class="group grid size-11 place-items-center rounded-md border border-ink/15 text-ink hover:border-ink/40 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary md:hidden">
                <span class="sr-only">Menu</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" class="size-5 group-aria-expanded:hidden" aria-hidden="true"><path d="M4 8h16M4 16h16"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" class="hidden size-5 group-aria-expanded:block" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
            </button>
        </div>
    </nav>
    <div id="mobile-nav" hidden class="border-t border-line px-6 pt-3 pb-6 md:hidden">
        <div class="flex flex-col">
            <a href="/services" class="border-b border-line py-4 text-xl font-medium text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $servicesLabel }}</a>
            <a href="/about" class="border-b border-line py-4 text-xl font-medium text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $aboutLabel }}</a>
            <a href="/contact" class="border-b border-line py-4 text-xl font-medium text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $contactLabel }}</a>
            <a href="/contact" class="mt-5 rounded-md bg-primary px-5 py-3.5 text-center font-medium text-primary-foreground hover:bg-primary/88 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->cta_label }}</a>
            <a href="{{ $site->phone_href }}" class="mt-3 py-2 text-center font-mono text-ink/75 tabular-nums hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->phone }}</a>
        </div>
    </div>
</header>
