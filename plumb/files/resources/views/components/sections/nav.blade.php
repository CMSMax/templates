@props(['links' => [], 'stripLabel' => '24/7 emergency line'])
<header class="sticky top-0 z-40">
    <div class="bg-ink text-canvas">
        <div class="mx-auto flex min-h-10 max-w-7xl items-center justify-between gap-4 px-5 py-2 text-sm md:px-8">
            <p class="flex min-w-0 items-center gap-2.5">
                <span class="relative flex size-2 shrink-0" aria-hidden="true">
                    <span class="absolute inset-0 animate-ping rounded-full bg-primary opacity-75 motion-reduce:animate-none"></span>
                    <span class="relative size-2 rounded-full bg-primary ring-2 ring-primary/40"></span>
                </span>
                <span class="font-semibold">{{ $stripLabel }}</span>
                <span class="truncate text-canvas/70 max-md:hidden">{{ $site->emergency_note }}</span>
            </p>
            <a href="{{ $site->phone_href }}" class="shrink-0 font-semibold tabular-nums underline decoration-canvas/30 underline-offset-4 hover:decoration-canvas">{{ $site->phone }}</a>
        </div>
    </div>
    <div class="border-b border-line bg-canvas/95 backdrop-blur-sm">
        <nav aria-label="Main" class="mx-auto flex h-16 max-w-7xl items-center justify-between gap-6 px-5 md:h-18 md:px-8">
            <a href="/" aria-label="Homepage" class="group flex min-h-11 items-center gap-2.5 text-ink">
                @if ($site->logo)
                    <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-8 w-auto">
                @else
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="size-8 shrink-0 text-primary transition-transform duration-300 group-hover:rotate-6" aria-hidden="true"><path fill="currentColor" d="M15 1h2v7h-2Z"/><rect width="12" height="4" x="10" y="8" fill="currentColor" rx="1"/><path fill="currentColor" d="M9.5 13.5h13c0 5.2-2.6 11.3-6.5 17.5-3.9-6.2-6.5-12.3-6.5-17.5Z"/></svg>
                    <span class="font-display text-[1.375rem] font-extrabold tracking-tight [font-stretch:125%]">{{ $site->short_name }}</span>
                @endif
            </a>
            <div class="flex items-center gap-1 max-md:hidden">
                @foreach ($links as $link)
                    <a href="{{ $link->href }}" class="rounded-lg px-3 py-2 text-[0.9375rem] font-medium text-muted hover:bg-ink/5 hover:text-ink">{{ $link->label }}</a>
                @endforeach
                <a href="{{ $site->cta_link }}" class="ml-3 rounded-full bg-ink px-4 py-2.5 text-[0.9375rem] font-semibold text-canvas hover:bg-primary active:translate-y-px">{{ $site->cta_label }}</a>
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
                        <a href="{{ $link->href }}" class="flex min-h-14 items-center font-display text-2xl font-extrabold tracking-tight text-ink [font-stretch:125%]">{{ $link->label }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="mx-auto flex max-w-7xl flex-col gap-3 px-5 pb-6">
                <a href="{{ $site->cta_link }}" class="flex min-h-12 items-center justify-center rounded-full bg-primary px-4 text-base font-semibold text-primary-foreground">{{ $site->cta_label }}</a>
                <a href="{{ $site->phone_href }}" class="flex min-h-12 items-center justify-center rounded-full border border-ink px-4 text-base font-semibold tabular-nums text-ink">Call {{ $site->phone }}</a>
            </div>
        </div>
    </div>
</header>
