<x-layouts.main title="Page not found — Hotel Ostra" description="That page could not be found.">
    <section class="py-24 lg:py-36">
        <div class="mx-auto flex max-w-7xl flex-col items-center px-6 text-center lg:px-8">
            <span class="-rotate-6"><x-key-fob number="404"/></span>
            <h1 class="mt-10 max-w-[18ch] font-display text-[clamp(2.75rem,6vw,4.5rem)] leading-[1.05] font-normal tracking-tight text-balance text-ink">This door is <em class="italic">locked.</em></h1>
            <p class="mt-6 max-w-[44ch] text-lg/8 text-pretty text-muted">There is no room by that number. The front desk, happily, is still open.</p>
            <div class="mt-10 flex flex-wrap items-center justify-center gap-3">
                <a href="/" class="rounded-full bg-primary px-6 py-3.5 text-base font-medium text-primary-foreground transition-colors duration-150 hover:bg-primary/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Back to the house</a>
                <a href="/rooms" class="rounded-full px-6 py-3.5 text-base font-medium text-ink ring-1 ring-ink/25 ring-inset transition-colors duration-150 hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">See the rooms</a>
            </div>
        </div>
    </section>
</x-layouts.main>
