@props(['links' => [], 'showAdvisory' => '1'])
<header class="sticky top-0 z-40">
    @if ($showAdvisory)
        <div class="bg-storm text-secondary-foreground">
            <div class="mx-auto flex max-w-7xl items-center gap-3 px-5 py-2.5 md:px-8">
                <span class="relative flex size-2.5 shrink-0" aria-hidden="true">
                    <span class="absolute inset-0 animate-ping rounded-full bg-primary opacity-60 motion-reduce:hidden"></span>
                    <span class="relative size-2.5 rounded-full bg-primary"></span>
                </span>
                <p class="min-w-0 truncate text-sm text-storm-muted"><span class="font-semibold text-secondary-foreground">Advisory</span> · {{ $site->advisory }}</p>
                <a href="{{ $site->phone_href }}" class="ml-auto shrink-0 text-sm font-semibold tabular-nums text-secondary-foreground underline-offset-4 hover:underline max-sm:hidden">{{ $site->phone }}</a>
            </div>
        </div>
    @endif
    <div class="border-b border-line bg-canvas/95 backdrop-blur-sm">
        <nav aria-label="Main" class="mx-auto flex h-16 max-w-7xl items-center justify-between gap-6 px-5 md:h-18 md:px-8">
            <a href="/" aria-label="Homepage" class="flex min-h-11 items-center gap-2.5 text-ink">
                @if ($site->logo)
                    <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-8 w-auto">
                @else
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="size-7 shrink-0" aria-hidden="true"><path fill="currentColor" d="M1 21 16 6l15 15h-5.2L16 11.2 6.2 21Z"/><path class="fill-primary" d="M1 25h30v3.5H1Z"/></svg>
                    <span class="font-display text-xl font-semibold tracking-tight">{{ $site->short_name }}</span>
                @endif
            </a>
            <div class="flex items-center gap-1 max-md:hidden">
                @foreach ($links as $link)
                    <a href="{{ $link->href }}" class="rounded-md px-3 py-2 text-[0.9375rem] font-medium text-muted hover:text-ink">{{ $link->label }}</a>
                @endforeach
                <a href="{{ $site->cta_link }}" class="ml-3 rounded-md bg-ink px-4 py-2.5 text-[0.9375rem] font-semibold text-canvas hover:bg-storm focus-visible:outline-offset-2 active:translate-y-px">{{ $site->cta_label }}</a>
            </div>
            <button type="button" data-nav-toggle aria-expanded="false" aria-controls="mobile-nav" class="group -mr-2 flex min-h-12 items-center gap-2 px-2 text-sm font-semibold text-ink md:hidden">
                <span class="group-aria-expanded:hidden">Menu</span>
                <span class="not-group-aria-expanded:hidden">Close</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" class="size-5 group-aria-expanded:hidden" aria-hidden="true"><path d="M4 8h16M4 16h16"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" class="size-5 not-group-aria-expanded:hidden" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
            </button>
        </nav>
        <div id="mobile-nav" hidden class="border-t border-line bg-canvas md:hidden">
            <ul role="list" class="mx-auto flex max-w-7xl flex-col px-5 py-3">
                @foreach ($links as $link)
                    <li class="border-b border-line">
                        <a href="{{ $link->href }}" class="flex min-h-14 items-center font-display text-2xl font-semibold tracking-tight text-ink">{{ $link->label }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="mx-auto flex max-w-7xl flex-col gap-3 px-5 pb-6">
                <a href="{{ $site->cta_link }}" class="flex min-h-12 items-center justify-center rounded-md bg-primary px-4 text-base font-semibold text-primary-foreground">{{ $site->cta_label }}</a>
                <a href="{{ $site->phone_href }}" class="flex min-h-12 items-center justify-center rounded-md border border-ink/20 px-4 text-base font-semibold tabular-nums text-ink">Call {{ $site->phone }}</a>
            </div>
        </div>
    </div>
</header>
