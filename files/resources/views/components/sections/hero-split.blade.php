@props(['heading' => 'Professional home services, made simple.'])
<section class="py-16 lg:py-24">
    <div class="mx-auto grid max-w-6xl items-center gap-12 px-6 lg:grid-cols-2 lg:gap-8">
        <div>
            <p class="inline-flex items-center gap-2 rounded-full border border-line py-1 pr-3 pl-2 text-sm font-medium text-muted">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0 text-secondary" aria-hidden="true"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77a4 4 0 0 1 6.74 0a4 4 0 0 1 4.78 4.78a4 4 0 0 1 0 6.74a4 4 0 0 1-4.77 4.78a4 4 0 0 1-6.75 0a4 4 0 0 1-4.78-4.77a4 4 0 0 1 0-6.76"/><path d="m9 12l2 2l4-4"/></svg>
                Trusted by homeowners in your area
            </p>
            <h1 class="mt-5 max-w-[16ch] font-display text-4xl font-semibold tracking-tight text-balance text-ink sm:text-5xl lg:text-6xl">{{ $heading }}</h1>
            <p class="mt-5 max-w-[44ch] text-lg text-pretty text-muted">Reliable, high-quality help for your home. Book in minutes, get an honest price, and get the job done right the first time.</p>
            <div class="mt-8 flex flex-wrap items-center gap-3">
                <a href="/contact" class="rounded-lg bg-accent px-4 py-2.5 font-medium text-accent-ink transition-transform duration-200 ease-[cubic-bezier(0.22,1,0.36,1)] active:scale-[0.98] hover:bg-accent/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ $site->cta_label }}</a>
                <a href="{{ $site->phone_href }}" class="rounded-lg border border-line px-4 py-2.5 font-medium text-ink hover:border-ink/30 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">Call {{ $site->phone }}</a>
            </div>
            <dl class="mt-10 grid grid-cols-1 gap-y-4 sm:grid-cols-3 sm:gap-x-5">
                <div>
                    <dt class="flex items-center gap-2 text-sm font-semibold text-ink">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                        Same-day service
                    </dt>
                    <dd class="mt-1 text-sm text-muted">Fast response when you need it.</dd>
                </div>
                <div class="sm:border-l sm:border-line sm:pl-5">
                    <dt class="flex items-center gap-2 text-sm font-semibold text-ink">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12l2 2l4-4"/></svg>
                        Licensed pros
                    </dt>
                    <dd class="mt-1 text-sm text-muted">Insured and background-checked.</dd>
                </div>
                <div class="sm:border-l sm:border-line sm:pl-5">
                    <dt class="flex items-center gap-2 text-sm font-semibold text-ink">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0" aria-hidden="true"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.12 2.12 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.12 2.12 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.12 2.12 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.12 2.12 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.12 2.12 0 0 0 1.597-1.16z"/></svg>
                        Upfront pricing
                    </dt>
                    <dd class="mt-1 text-sm text-muted">The estimate is the price.</dd>
                </div>
            </dl>
        </div>
        <div class="relative rounded-[1.25rem] bg-ink/3 p-1.5 ring-1 ring-ink/5">
            <img src="/images/hero-split.jpg" alt="A technician standing beside his work van in a home's driveway" width="966" height="1200" fetchpriority="high" class="w-full rounded-[calc(1.25rem-6px)] object-cover">
            <div class="absolute bottom-6 left-6">
                <x-sections.dispatch-card/>
            </div>
        </div>
    </div>
</section>
