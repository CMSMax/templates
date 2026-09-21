<x-layouts.main title="Page not found — Curbside Taco Co." description="That page could not be found.">
    <section class="py-24 lg:py-36">
        <div class="mx-auto max-w-7xl px-5 sm:px-8">
            <p class="inline-flex bg-ink px-3 py-1 font-display text-2xl font-extrabold text-primary tabular-nums">404</p>
            <h1 class="mt-6 max-w-[16ch] font-display text-[clamp(3.25rem,8vw,6rem)] leading-[0.98] font-black text-balance text-ink uppercase">Wrong curb. <span class="bg-linear-to-b from-transparent from-18% to-primary to-18% box-decoration-clone px-2 text-primary-foreground">No truck here.</span></h1>
            <p class="mt-7 max-w-[44ch] text-lg/8 text-pretty text-muted">The page you were after has moved on, the way we do every afternoon. The schedule will tell you where we parked.</p>
            <div class="mt-10 flex flex-wrap items-center gap-x-6 gap-y-4">
                <a href="{{ $site->cta_link }}" class="inline-flex items-center gap-2 border-2 border-ink bg-primary px-6 py-3.5 text-base font-semibold text-primary-foreground hover:bg-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $site->cta_label }}</a>
                <a href="/menu" class="text-base font-semibold text-ink underline decoration-ink/30 decoration-2 underline-offset-6 hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">See the menu</a>
            </div>
        </div>
    </section>
</x-layouts.main>
