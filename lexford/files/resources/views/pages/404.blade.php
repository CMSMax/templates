<x-layouts.main title="Page not found — Lexford Law" description="That page could not be found.">
    <section class="py-28 lg:py-40">
        <div class="mx-auto max-w-7xl px-6 text-center lg:px-8">
            <span class="mx-auto grid size-10 text-primary"><x-sections.mark/></span>
            <h1 class="mx-auto mt-8 max-w-[16ch] font-display text-5xl font-light tracking-tight text-balance text-ink sm:text-7xl">This page has been dismissed</h1>
            <p class="mx-auto mt-6 max-w-[44ch] text-lg/8 text-pretty text-muted">The page you were looking for isn’t here. Everything else is exactly where you left it.</p>
            <div class="mt-10 flex flex-wrap items-center justify-center gap-3">
                <a href="/contact" class="rounded-full bg-primary px-6 py-3.5 font-medium text-primary-foreground transition-colors duration-150 hover:bg-primary/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->cta_label }}</a>
                <a href="/" class="rounded-full border border-ink/15 px-6 py-3.5 font-medium text-ink transition-colors duration-150 hover:border-ink/40 hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Back to the homepage</a>
            </div>
        </div>
    </section>
</x-layouts.main>
