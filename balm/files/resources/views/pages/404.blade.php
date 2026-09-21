<x-layouts.main title="Page not found — Balm Massage Studio" description="That page could not be found.">
    <section class="py-24 lg:py-32">
        <div class="mx-auto grid max-w-7xl items-center gap-16 px-6 lg:grid-cols-[7fr_5fr] lg:px-8">
            <div>
                <h1 class="max-w-[14ch] font-display text-[clamp(3rem,7vw,6rem)] leading-[0.98] font-normal tracking-[-0.035em] text-balance text-ink">We can't find <span class="circled">that</span> spot.</h1>
                <p class="mt-8 max-w-[46ch] text-lg/8 text-muted">The page you pressed on isn't here. Everything else still is — the treatments, the prices, and a table with your name on it.</p>
                <div class="mt-10 flex flex-wrap items-center gap-3">
                    <a href="/" class="rounded-full bg-primary px-6 py-3.5 text-base font-semibold text-primary-foreground transition-colors duration-150 hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Back to the studio</a>
                    <a href="/treatments" class="rounded-full px-6 py-3.5 text-base font-semibold text-ink ring-1 ring-ink/25 ring-inset transition-colors duration-150 hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Treatments and prices</a>
                </div>
            </div>
            <div class="rounded-3xl bg-surface p-8 max-lg:hidden">
                <x-body-figure label="Nothing marked here" pins="0"/>
            </div>
        </div>
    </section>
</x-layouts.main>
