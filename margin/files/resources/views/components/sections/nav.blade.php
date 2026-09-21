@props(['links', 'ctaLabel' => 'Book a free assessment', 'ctaUrl' => '/contact'])
<header class="sticky top-0 z-40 border-b border-line bg-canvas/90 backdrop-blur-md">
    <nav aria-label="Main" class="mx-auto flex h-18 max-w-6xl items-center gap-8 px-6">
        <div class="flex flex-1 items-center">
            <a href="/" aria-label="Homepage" class="flex items-center gap-2.5 font-display text-xl font-medium tracking-tight text-ink hover:text-accent focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">
                <svg viewBox="0 0 28 32" class="h-6 w-auto shrink-0" aria-hidden="true"><path fill="currentColor" fill-rule="evenodd" d="M2 1h21a4 4 0 0 1 4 4v22a4 4 0 0 1-4 4H2V1Zm10 8.25h10v1.5H12v-1.5Zm0 6h10v1.5H12v-1.5Zm0 6h7v1.5h-7v-1.5Z"/><path class="text-accent" fill="currentColor" d="M7.5 1H10v30H7.5z"/></svg>
                {{ $site->short_name }}
            </a>
        </div>
        <div class="flex items-center gap-8 max-lg:hidden">
            @foreach ($links as $link)
                <a href="{{ $link->url }}" class="text-[0.9375rem] font-medium text-muted transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">{{ $link->label }}</a>
            @endforeach
        </div>
        <div class="flex flex-1 items-center justify-end gap-5">
            <a href="{{ $site->phone_href }}" class="text-[0.9375rem] font-medium text-ink tabular-nums hover:text-accent focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent max-md:hidden">{{ $site->phone }}</a>
            <a href="{{ $ctaUrl }}" class="rounded-xs bg-accent px-4 py-2.5 text-[0.9375rem] font-medium text-accent-ink transition duration-150 ease-out hover:bg-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent active:scale-[0.98] max-md:hidden">{{ $ctaLabel }}</a>
            <button type="button" data-nav-toggle aria-expanded="false" aria-controls="mobile-nav" aria-label="Menu" class="group grid size-11 place-items-center rounded-xs border border-line text-ink hover:border-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent lg:hidden">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" class="size-6 group-aria-expanded:hidden" aria-hidden="true"><path d="M3.75 7h16.5M3.75 12h16.5M3.75 17h16.5"/></svg>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" class="hidden size-6 group-aria-expanded:block" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
            </button>
        </div>
    </nav>
    <div id="mobile-nav" hidden class="border-t border-line px-6 py-4 lg:hidden">
        <div class="flex flex-col gap-1">
            @foreach ($links as $link)
                <a href="{{ $link->url }}" class="rounded-xs px-3 py-3 text-base font-medium text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ $link->label }}</a>
            @endforeach
            <a href="{{ $site->phone_href }}" class="mt-2 rounded-xs border border-line px-3 py-3 text-center text-base font-medium text-ink tabular-nums hover:border-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">Call {{ $site->phone }}</a>
            <a href="{{ $ctaUrl }}" class="rounded-xs bg-accent px-3 py-3 text-center text-base font-medium text-accent-ink hover:bg-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ $ctaLabel }}</a>
        </div>
    </div>
</header>
