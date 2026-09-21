@props(['links' => []])
<header class="sticky top-0 z-40 bg-canvas/90 backdrop-blur-md">
    <nav aria-label="Main" class="mx-auto flex h-18 max-w-7xl items-center justify-between gap-6 px-5 sm:px-8">
        <a href="/" aria-label="{{ $site->name }} — home" class="group flex items-center gap-2.5 rounded-full font-display text-xl font-semibold tracking-tight text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">
            <span class="grid size-9 place-items-center rounded-full bg-mint text-accent transition-transform duration-200 group-hover:-rotate-6">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5" aria-hidden="true"><path d="M7.2 2.5c-3 0-5 2.3-5 5.6 0 2.6 1 4.4 1.7 7.2.6 2.5 1 6.2 3.1 6.2 1.7 0 2-3.1 2.6-5.1.4-1.3.8-1.9 1.4-1.9s1 .6 1.4 1.9c.6 2 .9 5.1 2.6 5.1 2.1 0 2.5-3.7 3.1-6.2.7-2.8 1.7-4.6 1.7-7.2 0-3.3-2-5.6-5-5.6-2.1 0-3.3 1.1-4.8 1.1s-2.7-1.1-4.8-1.1z"/></svg>
            </span>
            <span>{{ $site->short_name }}</span>
        </a>
        <div class="flex items-center gap-1 max-lg:hidden">
            @foreach ($links as $link)
                <a href="{{ $link->href }}" class="rounded-full px-4 py-2 text-[0.9375rem] font-medium text-muted transition-colors duration-150 hover:bg-surface hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ $link->label }}</a>
            @endforeach
        </div>
        <div class="flex items-center gap-2">
            <a href="{{ $site->phone_href }}" class="rounded-full px-3 py-2 text-[0.9375rem] font-medium text-ink tabular-nums transition-colors duration-150 hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent max-md:hidden">{{ $site->phone }}</a>
            <a href="/contact" class="rounded-full bg-accent px-5 py-2.5 text-[0.9375rem] font-semibold text-accent-ink transition duration-200 hover:bg-ink active:scale-[0.97] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent max-sm:hidden">{{ $site->cta_label }}</a>
            <button type="button" data-nav-toggle aria-expanded="false" aria-controls="mobile-nav" aria-label="Menu" class="group grid size-11 place-items-center rounded-full bg-surface text-ink transition-colors hover:bg-mint-soft focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" class="size-5 group-aria-expanded:hidden" aria-hidden="true"><path d="M4 8h16M4 16h16"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" class="hidden size-5 group-aria-expanded:block" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
            </button>
        </div>
    </nav>
    <div id="mobile-nav" hidden class="border-t border-line px-5 pt-3 pb-6 lg:hidden">
        <div class="flex flex-col">
            @foreach ($links as $link)
                <a href="{{ $link->href }}" class="border-b border-line py-4 font-display text-2xl font-semibold tracking-tight text-ink hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ $link->label }}</a>
            @endforeach
            <a href="/contact" class="mt-6 rounded-full bg-accent px-5 py-3.5 text-center font-semibold text-accent-ink transition active:scale-[0.98] hover:bg-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ $site->cta_label }}</a>
            <a href="{{ $site->phone_href }}" class="mt-2 rounded-full bg-surface px-5 py-3.5 text-center font-semibold text-ink tabular-nums hover:bg-mint-soft focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">Call {{ $site->phone }}</a>
        </div>
    </div>
</header>
