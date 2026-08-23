@props(['heading' => 'Reliable service for every part of your home'])
<section class="py-16 lg:py-24">
    <div class="mx-auto max-w-6xl px-6">
        <div class="flex flex-col items-center text-center">
            <p class="inline-flex items-center gap-2 rounded-full border border-line py-1 pr-3 pl-2 text-sm font-medium text-muted">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0 text-secondary" aria-hidden="true"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77a4 4 0 0 1 6.74 0a4 4 0 0 1 4.78 4.78a4 4 0 0 1 0 6.74a4 4 0 0 1-4.77 4.78a4 4 0 0 1-6.75 0a4 4 0 0 1-4.78-4.77a4 4 0 0 1 0-6.76"/><path d="m9 12l2 2l4-4"/></svg>
                Trusted by homeowners in your area
            </p>
            <h1 class="mx-auto mt-6 max-w-[18ch] font-display text-4xl font-semibold tracking-tight text-balance text-ink sm:text-5xl lg:text-6xl">{{ $heading }}</h1>
            <p class="mx-auto mt-5 max-w-[46ch] text-lg text-pretty text-muted">From quick fixes to major installs, our licensed professionals deliver quality work and friendly service you can count on.</p>
            <div class="mt-8 flex flex-wrap items-center justify-center gap-3">
                <a href="/contact" class="rounded-lg bg-accent px-4 py-2.5 font-medium text-accent-ink transition-transform duration-200 ease-[cubic-bezier(0.22,1,0.36,1)] active:scale-[0.98] hover:bg-accent/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ $site->cta_label }}</a>
                <a href="/services" class="rounded-lg border border-line px-4 py-2.5 font-medium text-ink hover:border-ink/30 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">Explore services</a>
            </div>
            <ul role="list" class="mt-10 flex flex-wrap items-center justify-center gap-2.5">
                @foreach ($services as $service)
                    @break($loop->iteration == 5)
                    <li>
                        <a href="/services" class="inline-flex items-center gap-2 rounded-full border border-line py-1.5 pr-3.5 pl-2.5 text-sm font-medium text-ink hover:border-ink/30 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">
                            {!! $service->icon !!}
                            {{ $service->name }}
                        </a>
                    </li>
                @endforeach
                <li>
                    <a href="/services" class="inline-flex items-center rounded-full border border-line px-3.5 py-1.5 text-sm font-medium text-muted hover:border-ink/30 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">And more</a>
                </li>
            </ul>
        </div>
        <div class="relative mt-14 rounded-[1.25rem] bg-ink/3 p-1.5 ring-1 ring-ink/5">
            <img src="/images/hero-centered.jpg" alt="A technician shaking hands with a homeowner at their front door" width="1440" height="803" fetchpriority="high" class="w-full rounded-[calc(1.25rem-6px)] object-cover">
            <div class="absolute bottom-6 left-6 flex items-start gap-3 rounded-xl bg-canvas p-4 shadow-xl shadow-ink/10 ring-1 ring-ink/5">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0 text-ink" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12l2 2l4-4"/></svg>
                <span>
                    <span class="block text-sm font-semibold text-ink">Satisfaction guaranteed</span>
                    <span class="block text-sm text-muted">Quality work, every time.</span>
                </span>
            </div>
        </div>
    </div>
</section>
