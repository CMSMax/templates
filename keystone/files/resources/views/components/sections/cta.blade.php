<section class="relative isolate overflow-hidden bg-accent py-16 lg:py-24">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 110.8 156" fill="currentColor" class="absolute -right-10 -bottom-24 -z-10 h-96 w-auto text-accent-ink/4" aria-hidden="true"><path d="m79 136-45.3-56.4 46.1-56.1h29.9l-47 56.1 45.8 56.4h-29.8"/><path d="M2.7 20.9 28.6 2v152L2.7 135Z"/></svg>
    <div data-reveal class="mx-auto grid max-w-6xl items-center gap-10 px-6 lg:grid-cols-[3fr_2fr]">
        <div>
            <h2 class="max-w-[24ch] font-display text-3xl font-semibold tracking-tight text-balance text-accent-ink sm:text-4xl">Ready when you are.</h2>
            <p class="mt-4 max-w-[48ch] text-lg text-pretty text-accent-ink/70">Tell us what needs fixing and we'll take it from there. Estimates are always free.</p>
            <div class="mt-8 flex flex-wrap items-center gap-3">
                <a href="/contact" class="rounded-lg bg-canvas px-4 py-2.5 font-medium text-ink transition-transform duration-200 ease-[cubic-bezier(0.22,1,0.36,1)] active:scale-[0.98] hover:bg-canvas/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-canvas">{{ $site->cta_label }}</a>
                <a href="{{ $site->phone_href }}" class="inline-flex items-center gap-2 rounded-lg px-4 py-2.5 font-medium text-accent-ink hover:text-accent-ink/80 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-canvas">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0" aria-hidden="true"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233a14 14 0 0 0 6.392 6.384"/></svg>
                    <span class="tabular-nums">{{ $site->phone }}</span>
                </a>
            </div>
        </div>
        <div class="lg:justify-self-end">
            <x-sections.dispatch-card status="Next available" detail="Today, 4:30 – 6:00pm" :meta="$site->hours_note"/>
        </div>
    </div>
</section>
