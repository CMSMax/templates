@props([
    'announcement' => 'Free alterations on anything bought in the shop',
    'showAnnouncement' => '1',
    'shopLabel' => 'Shop',
    'makersLabel' => 'Makers',
    'aboutLabel' => 'About',
    'visitLabel' => 'Visit',
])
<header class="sticky top-0 z-40">
    @if ($showAnnouncement == '1')
        <div class="bg-ink text-canvas">
            <p class="mx-auto flex max-w-7xl items-center justify-center gap-2.5 px-5 py-2 text-center text-sm sm:px-8"><span class="size-1.5 shrink-0 rounded-full bg-spot" aria-hidden="true"></span>{{ $announcement }}</p>
        </div>
    @endif
    <div class="border-b border-line bg-canvas/90 backdrop-blur-md">
        <nav aria-label="Main" class="mx-auto grid h-16 max-w-7xl grid-cols-[1fr_auto] items-center gap-6 px-5 sm:px-8 lg:grid-cols-[1fr_auto_1fr]">
            <a href="/" aria-label="Homepage" class="flex items-center gap-2 justify-self-start text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">
                @if ($site->logo)
                    <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-7 w-auto">
                @else
                    <span class="grid size-6 shrink-0"><x-sections.mark/></span>
                    <span class="font-display text-[1.625rem] font-semibold tracking-tight">{{ $site->name }}</span>
                @endif
            </a>
            <div data-nav-links class="flex items-center gap-8 max-lg:hidden">
                <a href="/shop" class="text-[0.9375rem] text-ink/75 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $shopLabel }}</a>
                <a href="/#makers" class="text-[0.9375rem] text-ink/75 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $makersLabel }}</a>
                <a href="/about" class="text-[0.9375rem] text-ink/75 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $aboutLabel }}</a>
                <a href="/visit" class="text-[0.9375rem] text-ink/75 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $visitLabel }}</a>
            </div>
            <div class="flex items-center gap-3 justify-self-end">
                <p class="text-sm text-muted tabular-nums max-xl:hidden">{{ $site->address }}</p>
                <a href="{{ $site->shop_url }}" class="border border-ink px-4 py-2 text-[0.9375rem] font-medium text-ink hover:bg-ink hover:text-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink max-sm:hidden">{{ $site->shop_label }}</a>
                <button type="button" data-nav-toggle aria-expanded="false" aria-controls="mobile-nav" class="group grid size-11 place-items-center border border-ink/30 text-ink hover:border-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink lg:hidden">
                    <span class="sr-only">Menu</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" class="size-5 group-aria-expanded:hidden" aria-hidden="true"><path d="M4 9h16M4 15h16"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" class="size-5 group-not-aria-expanded:hidden" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
                </button>
            </div>
        </nav>
        <div id="mobile-nav" hidden class="border-t border-line px-5 pt-3 pb-8 sm:px-8 lg:hidden">
            <div class="flex flex-col">
                <a href="/shop" class="border-b border-line py-4 font-display text-3xl font-medium tracking-tight text-ink hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $shopLabel }}</a>
                <a href="/#makers" class="border-b border-line py-4 font-display text-3xl font-medium tracking-tight text-ink hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $makersLabel }}</a>
                <a href="/about" class="border-b border-line py-4 font-display text-3xl font-medium tracking-tight text-ink hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $aboutLabel }}</a>
                <a href="/visit" class="border-b border-line py-4 font-display text-3xl font-medium tracking-tight text-ink hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $visitLabel }}</a>
                <a href="{{ $site->shop_url }}" class="mt-6 bg-primary px-5 py-3.5 text-center font-medium text-primary-foreground hover:bg-primary/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $site->shop_label }}</a>
                <p class="mt-4 text-center text-sm text-muted">{{ $site->address }}, {{ $site->city }}</p>
            </div>
        </div>
    </div>
</header>
