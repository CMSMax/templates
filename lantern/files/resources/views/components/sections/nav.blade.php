@props(['links', 'ctaLabel' => 'Book a visit', 'ctaUrl' => '/contact'])
<header class="sticky top-0 z-40 border-b border-line bg-canvas/85 backdrop-blur-md">
    <nav aria-label="Main" class="mx-auto flex h-18 max-w-6xl items-center gap-8 px-6">
        <div class="flex flex-1 items-center">
            <a href="/" aria-label="Homepage" class="flex items-center gap-2.5 font-display text-lg font-semibold tracking-tight text-ink hover:text-accent focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">
                <svg viewBox="0 0 28 32" fill="currentColor" class="h-6 w-auto shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="M14 1.5 27.5 13.5H.5L14 1.5ZM5.5 16h17L20 31H8L5.5 16Zm5.5 4h6v6h-6v-6Z"/></svg>
                {{ $site->short_name }}
            </a>
        </div>
        <div data-nav-links class="flex items-center gap-8 max-lg:hidden">
            @foreach ($links as $link)
                <a href="{{ $link->url }}" class="text-sm font-medium text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">{{ $link->label }}</a>
            @endforeach
        </div>
        <div class="flex flex-1 items-center justify-end gap-5">
            <div class="flex items-center gap-5 max-md:hidden">
                <a href="{{ $site->phone_href }}" class="flex items-center gap-2 text-sm font-medium text-ink tabular-nums hover:text-accent focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">
                    <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0" aria-hidden="true"><path d="M4.2 2.5h2l1 2.5-1.3 1a8.5 8.5 0 0 0 4.1 4.1l1-1.3 2.5 1v2a1 1 0 0 1-1.1 1A11.5 11.5 0 0 1 3.2 3.6a1 1 0 0 1 1-1.1Z"/></svg>
                    {{ $site->phone }}
                </a>
                <a href="{{ $ctaUrl }}" class="rounded-xs border border-ink px-3.5 py-2 text-sm font-medium text-ink transition-transform duration-150 ease-out hover:bg-ink hover:text-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent active:scale-[0.98]">{{ $ctaLabel }}</a>
            </div>
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
            <a href="{{ $ctaUrl }}" class="rounded-xs border border-ink px-3 py-3 text-center text-base font-medium text-ink hover:bg-ink hover:text-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ $ctaLabel }}</a>
        </div>
    </div>
</header>
