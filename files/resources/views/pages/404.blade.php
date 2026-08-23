<x-layouts.main title="Page not found — Keystone Home Services" description="That page could not be found.">
    <section class="py-24 lg:py-36">
        <div class="mx-auto max-w-6xl px-6 text-center">
            <p class="text-sm font-semibold text-muted tabular-nums">404</p>
            <h1 class="mx-auto mt-3 max-w-[20ch] font-display text-4xl font-semibold tracking-tight text-balance text-ink sm:text-5xl">Wrong turn — happens to the best of us</h1>
            <p class="mx-auto mt-5 max-w-[44ch] text-lg text-pretty text-muted">That page isn't here, but help is. Head back home or give us a call.</p>
            <div class="mt-8 flex flex-wrap items-center justify-center gap-3">
                <a href="/" class="rounded-lg bg-accent px-4 py-2.5 font-medium text-accent-ink transition-transform duration-200 ease-[cubic-bezier(0.22,1,0.36,1)] active:scale-[0.98] hover:bg-accent/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">Back to the homepage</a>
                <a href="{{ $site->phone_href }}" class="rounded-lg border border-line px-4 py-2.5 font-medium text-ink hover:border-ink/30 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">Call {{ $site->phone }}</a>
            </div>
        </div>
    </section>
</x-layouts.main>
