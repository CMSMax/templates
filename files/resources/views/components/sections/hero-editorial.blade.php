@props(['heading' => 'Simple, dependable help for every home'])
<section class="px-6 pt-6 pb-16 lg:pb-24">
    <div class="mx-auto max-w-6xl rounded-3xl bg-surface p-6 sm:p-10 lg:p-14">
        <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-8">
            <div>
                <p class="inline-flex items-center gap-2 rounded-full border border-ink/10 py-1 pr-3 pl-2 text-sm font-medium text-muted">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12l2 2l4-4"/></svg>
                    Trusted by homeowners in your area
                </p>
                <h1 class="mt-5 max-w-[16ch] font-display text-4xl font-semibold tracking-tight text-balance text-ink sm:text-5xl">{{ $heading }}</h1>
                <p class="mt-5 max-w-[46ch] text-lg text-pretty text-muted">Professional home services, done right. From quick fixes to full installations, our experienced team is here when you need us most.</p>
                <div class="mt-8 flex flex-wrap items-center gap-3">
                    <a href="/contact" class="rounded-lg bg-accent px-4 py-2.5 font-medium text-accent-ink transition-transform duration-200 ease-[cubic-bezier(0.22,1,0.36,1)] active:scale-[0.98] hover:bg-accent/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ $site->cta_label }}</a>
                    <a href="/services" class="rounded-lg border border-ink/15 px-4 py-2.5 font-medium text-ink hover:border-ink/30 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">View services</a>
                </div>
                <dl class="mt-10 grid grid-cols-1 gap-y-4 sm:grid-cols-3 sm:gap-x-5">
                    <div>
                        <dt class="flex items-center gap-2 text-sm font-semibold text-ink">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0" aria-hidden="true"><path d="M8 2v3m8-3v3"/><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M3 9h18M9 15l2 2l4-4"/></svg>
                            Easy scheduling
                        </dt>
                        <dd class="mt-1 text-sm text-muted">Book online in minutes.</dd>
                    </div>
                    <div class="sm:border-l sm:border-ink/10 sm:pl-5">
                        <dt class="flex items-center gap-2 text-sm font-semibold text-ink">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12l2 2l4-4"/></svg>
                            Upfront pricing
                        </dt>
                        <dd class="mt-1 text-sm text-muted">No surprises on the invoice.</dd>
                    </div>
                    <div class="sm:border-l sm:border-ink/10 sm:pl-5">
                        <dt class="flex items-center gap-2 text-sm font-semibold text-ink">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0 text-secondary" aria-hidden="true"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77a4 4 0 0 1 6.74 0a4 4 0 0 1 4.78 4.78a4 4 0 0 1 0 6.74a4 4 0 0 1-4.77 4.78a4 4 0 0 1-6.75 0a4 4 0 0 1-4.78-4.77a4 4 0 0 1 0-6.76"/><path d="m9 12l2 2l4-4"/></svg>
                            Trusted pros
                        </dt>
                        <dd class="mt-1 text-sm text-muted">Background-checked, always.</dd>
                    </div>
                </dl>
            </div>
            <div class="relative pb-10 lg:pb-0">
                <div class="rounded-[1.25rem] bg-ink/3 p-1.5 ring-1 ring-ink/5"><img src="/images/hero-editorial.jpg" alt="A technician carrying a tool bag toward a home's front porch" width="966" height="1200" fetchpriority="high" class="w-full rounded-[calc(1.25rem-6px)] object-cover"></div>
                @foreach ($reviews as $review)
                    <figure class="absolute -bottom-2 left-4 max-w-xs rounded-xl bg-canvas p-4 shadow-xl shadow-ink/10 ring-1 ring-ink/5 sm:left-6">
                        <x-sections.stars/>
                        <blockquote class="mt-2">
                            <p class="text-sm text-pretty text-ink">"{{ $review->quote }}"</p>
                        </blockquote>
                        <figcaption class="mt-3 flex items-center gap-2.5">
                            <span class="grid size-8 shrink-0 place-items-center rounded-full bg-surface text-sm font-semibold text-ink ring-1 ring-ink/10" aria-hidden="true">{{ $review->initial }}</span>
                            <span class="text-sm font-medium text-ink">{{ $review->name }} <span class="font-normal text-muted">· {{ $review->area }}</span></span>
                        </figcaption>
                    </figure>
                    @break
                @endforeach
            </div>
        </div>
        <p class="mt-12 border-t border-ink/10 pt-6 text-center text-sm text-muted">Five stars from homeowners across Google, Yelp, Facebook, and Nextdoor.</p>
    </div>
</section>
