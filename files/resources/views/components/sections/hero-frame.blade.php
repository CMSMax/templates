@props(['heading' => 'The house is handled.'])
<section class="px-6 pt-6 pb-16 lg:pb-24">
    <div class="mx-auto max-w-6xl">
        <div class="relative rounded-[1.5rem] bg-ink/3 p-1.5 ring-1 ring-ink/5">
            <img src="/images/hero-overlook.jpg" alt="A well-kept suburban home at golden hour" width="1728" height="964" fetchpriority="high" class="h-105 w-full rounded-[calc(1.5rem-6px)] object-cover lg:h-140">
            <div class="pointer-events-none absolute inset-1.5 rounded-[calc(1.5rem-6px)] bg-linear-to-r from-ink/30 to-ink/0 max-lg:hidden" aria-hidden="true"></div>
            <div class="relative -mt-16 mr-1.5 mb-1.5 ml-1.5 max-w-xl rounded-2xl bg-canvas p-6 shadow-xl shadow-ink/10 ring-1 ring-ink/5 sm:p-8 lg:absolute lg:bottom-8 lg:left-8 lg:m-0">
                <p class="inline-flex items-center gap-2 rounded-full border border-line py-1 pr-3 pl-2 text-sm font-medium text-muted">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0 text-secondary" aria-hidden="true"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77a4 4 0 0 1 6.74 0a4 4 0 0 1 4.78 4.78a4 4 0 0 1 0 6.74a4 4 0 0 1-4.77 4.78a4 4 0 0 1-6.75 0a4 4 0 0 1-4.78-4.77a4 4 0 0 1 0-6.76"/><path d="m9 12l2 2l4-4"/></svg>
                    Trusted by homeowners in your area
                </p>
                <h1 class="mt-4 max-w-[16ch] font-display text-3xl font-semibold tracking-tight text-balance text-ink sm:text-4xl lg:text-5xl">{{ $heading }}</h1>
                <p class="mt-4 max-w-[42ch] text-lg text-pretty text-muted">One licensed local crew for every repair, install, and tune-up — booked in minutes, priced before we start.</p>
                <div class="mt-6 flex flex-wrap items-center gap-3">
                    <a href="/contact" class="rounded-lg bg-accent px-4 py-2.5 font-medium text-accent-ink transition-transform duration-200 ease-[cubic-bezier(0.22,1,0.36,1)] active:scale-[0.98] hover:bg-accent/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ $site->cta_label }}</a>
                    <a href="{{ $site->phone_href }}" class="rounded-lg border border-line px-4 py-2.5 font-medium text-ink hover:border-ink/30 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">Call {{ $site->phone }}</a>
                </div>
                <p class="mt-6 flex flex-wrap items-center gap-x-2 gap-y-1 border-t border-line pt-4 text-sm text-muted">
                    <span>Same-day service</span>
                    <span aria-hidden="true">·</span>
                    <span>Licensed &amp; insured</span>
                    <span aria-hidden="true">·</span>
                    <span>Upfront pricing</span>
                </p>
            </div>
            <div class="absolute top-8 right-8 max-lg:hidden">
                <x-sections.dispatch-card/>
            </div>
        </div>
    </div>
</section>
