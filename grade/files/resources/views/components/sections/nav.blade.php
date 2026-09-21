@props(['links' => []])
<header class="sticky top-0 z-40 border-b border-line bg-canvas/95 backdrop-blur-sm">
    <nav aria-label="Main" class="mx-auto flex h-16 max-w-7xl items-center justify-between gap-6 px-5 md:h-18 md:px-8">
        <a href="/" aria-label="Homepage" class="group flex min-h-11 items-center gap-2.5 text-ink">
            @if ($site->logo)
                <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-8 w-auto">
            @else
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" class="size-7 shrink-0 transition-transform duration-200 group-hover:-rotate-6" aria-hidden="true"><path fill-rule="evenodd" d="M2 2h28v28H2Zm5 23h18V9Z"/></svg>
                <span class="font-display text-2xl font-extrabold uppercase">{{ $site->short_name }}</span>
            @endif
        </a>
        <div class="flex items-center gap-1 max-md:hidden">
            @foreach ($links as $link)
                <a href="{{ $link->href }}" class="px-3 py-2 text-[0.9375rem] font-medium text-muted transition-colors duration-150 hover:text-ink">{{ $link->label }}</a>
            @endforeach
            <a href="{{ $site->phone_href }}" class="ml-3 px-3 py-2 text-[0.9375rem] font-semibold tabular-nums text-ink transition-colors duration-150 hover:text-muted max-lg:hidden">{{ $site->phone }}</a>
            <a href="{{ $site->cta_link }}" class="ml-2 bg-ink px-4 py-2.5 text-[0.9375rem] font-semibold text-canvas transition-colors duration-150 hover:bg-ink/85 active:translate-y-px">{{ $site->cta_label }}</a>
        </div>
        <button type="button" data-nav-toggle aria-expanded="false" aria-controls="mobile-nav" class="group -mr-2 flex min-h-12 items-center gap-2 px-2 text-sm font-semibold uppercase tracking-wide text-ink md:hidden">
            <span class="group-aria-expanded:hidden">Menu</span>
            <span class="not-group-aria-expanded:hidden">Close</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="square" class="size-5 group-aria-expanded:hidden" aria-hidden="true"><path d="M4 8h16M4 16h16"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="square" class="size-5 not-group-aria-expanded:hidden" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
        </button>
    </nav>
    <div id="mobile-nav" hidden class="border-t border-line bg-canvas md:hidden">
        <ul role="list" class="mx-auto flex max-w-7xl flex-col px-5 py-3">
            @foreach ($links as $link)
                <li class="border-b border-line">
                    <a href="{{ $link->href }}" class="flex min-h-14 items-center font-display text-3xl font-extrabold uppercase text-ink">{{ $link->label }}</a>
                </li>
            @endforeach
        </ul>
        <div class="mx-auto flex max-w-7xl flex-col gap-3 px-5 pb-6">
            <a href="{{ $site->cta_link }}" class="flex min-h-12 items-center justify-center bg-primary px-4 text-base font-semibold text-primary-foreground">{{ $site->cta_label }}</a>
            <a href="{{ $site->phone_href }}" class="flex min-h-12 items-center justify-center border border-ink px-4 text-base font-semibold tabular-nums text-ink">Call {{ $site->phone }}</a>
        </div>
    </div>
</header>
