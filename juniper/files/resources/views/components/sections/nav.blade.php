@props(['menuLabel' => 'Menu', 'storyLabel' => 'Our story', 'visitLabel' => 'Visit'])
<header class="sticky top-0 z-40 bg-canvas/90 backdrop-blur-md">
    <nav aria-label="Main" class="mx-auto flex h-20 max-w-6xl items-center justify-between gap-8 px-6">
        <a href="/" aria-label="Homepage" class="flex items-center gap-2 rounded-full text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
            @if ($site->logo)
                <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-9 w-auto">
            @else
                <span class="grid size-7 shrink-0 text-primary"><x-sections.mark/></span>
                <span class="font-display text-3xl">{{ $site->name }}</span>
            @endif
        </a>
        <div class="flex items-center gap-8">
            <div class="flex items-center gap-7 max-md:hidden">
                <a href="/menu" class="text-[0.9375rem] text-ink/80 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $menuLabel }}</a>
                <a href="/our-story" class="text-[0.9375rem] text-ink/80 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $storyLabel }}</a>
                <a href="/reservations#visit" class="text-[0.9375rem] text-ink/80 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $visitLabel }}</a>
            </div>
            <div class="max-md:hidden"><a href="/reservations" class="rounded-full border border-ink/15 px-4 py-2 text-[0.9375rem] font-medium text-ink hover:border-ink/40 hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->cta_label }}</a></div>
            <button type="button" data-nav-toggle aria-expanded="false" aria-controls="mobile-nav" class="group relative grid size-11 place-items-center rounded-full border border-ink/15 text-ink hover:border-ink/40 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary md:hidden">
                <span class="sr-only">Menu</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" class="size-5 group-aria-expanded:hidden" aria-hidden="true"><path d="M4 9h16M4 15h16"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" class="hidden size-5 group-aria-expanded:block" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
            </button>
        </div>
    </nav>
    <div id="mobile-nav" hidden class="border-t border-line px-6 pt-4 pb-6 md:hidden">
        <div class="flex flex-col gap-1">
            <a href="/menu" class="rounded-full px-4 py-3 font-display text-2xl text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $menuLabel }}</a>
            <a href="/our-story" class="rounded-full px-4 py-3 font-display text-2xl text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $storyLabel }}</a>
            <a href="/reservations#visit" class="rounded-full px-4 py-3 font-display text-2xl text-ink hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $visitLabel }}</a>
            <a href="/reservations" class="mt-3 rounded-full bg-primary px-5 py-3.5 text-center font-medium text-primary-foreground hover:bg-primary/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->cta_label }}</a>
        </div>
    </div>
</header>
