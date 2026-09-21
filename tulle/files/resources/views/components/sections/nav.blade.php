@props(['servicesLabel' => 'Services', 'weddingsLabel' => 'Weddings', 'processLabel' => 'How we work', 'contactLabel' => 'Contact'])
<header class="sticky top-0 z-40 border-b border-ink/10 bg-canvas/90 backdrop-blur-md">
    <nav aria-label="Main" class="mx-auto flex h-18 max-w-7xl items-center justify-between gap-8 px-6 lg:px-8">
        <a href="/" aria-label="Homepage" class="flex items-center gap-3 text-ink transition-colors duration-200 hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
            @if ($site->logo)
                <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-8 w-auto">
            @else
                <span class="grid size-6 shrink-0 text-primary"><x-sections.mark/></span>
                <span class="font-display text-2xl tracking-[0.18em] uppercase">{{ $site->name }}</span>
            @endif
        </a>
        <div class="flex items-center gap-8">
            <div class="flex items-center gap-9 max-lg:hidden">
                <a href="/services" class="label-caps text-ink/75 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $servicesLabel }}</a>
                <a href="/#weddings" class="label-caps text-ink/75 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $weddingsLabel }}</a>
                <a href="/#process" class="label-caps text-ink/75 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $processLabel }}</a>
                <a href="/#inquire" class="label-caps text-ink/75 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $contactLabel }}</a>
            </div>
            <div class="max-sm:hidden"><a href="{{ $site->inquire_url }}" class="inline-flex min-h-11 items-center border border-ink/30 px-4 text-[0.9375rem] font-medium text-ink hover:border-primary hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->cta_label }}</a></div>
            <button type="button" data-nav-toggle aria-expanded="false" aria-controls="mobile-nav" class="group grid size-11 place-items-center border border-ink/25 text-ink hover:border-ink/60 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary lg:hidden">
                <span class="sr-only">Menu</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" class="size-5 group-aria-expanded:hidden" aria-hidden="true"><path d="M4 9h16M4 15h16"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" class="hidden size-5 group-aria-expanded:block" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
            </button>
        </div>
    </nav>
    <div id="mobile-nav" hidden class="border-t border-ink/10 px-6 pt-4 pb-8 lg:hidden">
        <div class="flex flex-col gap-1">
            <a href="/services" class="px-2 py-3 font-display text-3xl text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $servicesLabel }}</a>
            <a href="/#weddings" class="px-2 py-3 font-display text-3xl text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $weddingsLabel }}</a>
            <a href="/#process" class="px-2 py-3 font-display text-3xl text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $processLabel }}</a>
            <a href="/#inquire" class="px-2 py-3 font-display text-3xl text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $contactLabel }}</a>
            <a href="{{ $site->inquire_url }}" class="mt-4 bg-primary px-5 py-3.5 text-center font-medium text-primary-foreground hover:bg-primary/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->cta_label }}</a>
            <p class="mt-3 text-center text-sm text-muted">{{ $site->booking_note }} {{ $site->booking_years }}</p>
        </div>
    </div>
</header>
