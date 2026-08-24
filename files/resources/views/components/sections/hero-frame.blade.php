@props(['heading' => 'The house is handled.'])
{{-- Full-frame look: the photo is the page. Copy sits on a scrim bottom-left,
     the dispatch card holds the opposite corner on the same baseline, and a
     caption plate under the print carries the proof points. --}}
<section class="px-4 pt-4 pb-16 sm:px-6 sm:pt-6 lg:pb-24">
    <div class="mx-auto max-w-6xl">
        <div class="rounded-[1.75rem] bg-ink/4 p-1.5 ring-1 ring-ink/6">
            <div class="relative isolate overflow-hidden rounded-[calc(1.75rem-6px)] bg-ink">
                <img src="/images/hero-overlook.jpg" alt="A modern farmhouse at dusk, porch light on" width="1728" height="964" fetchpriority="high" data-hero-frame class="h-[34rem] w-full object-cover object-[62%_50%] sm:h-[38rem] lg:h-[46rem]">
                <div class="pointer-events-none absolute inset-0 bg-linear-to-t from-ink/85 via-ink/35 via-45% to-ink/0" aria-hidden="true"></div>
                <div class="pointer-events-none absolute inset-0 bg-linear-to-r from-ink/45 to-ink/0 to-60% max-lg:hidden" aria-hidden="true"></div>

                <div class="absolute inset-x-0 bottom-0 flex flex-col gap-8 p-5 sm:p-8 lg:flex-row lg:items-end lg:justify-between lg:p-10">
                    <div class="max-w-2xl">
                        <p data-hero-in style="--i: 0" class="inline-flex items-center gap-2 rounded-full bg-canvas/12 py-1 pr-3 pl-2 text-sm font-medium text-canvas ring-1 ring-canvas/25 backdrop-blur-md max-sm:text-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0 text-secondary" aria-hidden="true"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77a4 4 0 0 1 6.74 0a4 4 0 0 1 4.78 4.78a4 4 0 0 1 0 6.74a4 4 0 0 1-4.77 4.78a4 4 0 0 1-6.75 0a4 4 0 0 1-4.78-4.77a4 4 0 0 1 0-6.76"/><path d="m9 12l2 2l4-4"/></svg>
                            Trusted by homeowners in your area
                        </p>
                        <h1 data-hero-in style="--i: 1" class="mt-5 max-w-[13ch] font-display text-4xl font-semibold tracking-tight text-balance text-canvas sm:text-5xl lg:text-6xl xl:text-7xl">{{ $heading }}</h1>
                        <p data-hero-in style="--i: 2" class="mt-5 max-w-[40ch] text-lg text-pretty text-canvas/80 lg:text-xl">One licensed local crew for every repair, install, and tune-up — booked in minutes, priced before we start.</p>
                        <div data-hero-in style="--i: 3" class="mt-8 flex flex-wrap items-center gap-3 max-sm:flex-col max-sm:items-stretch">
                            <a href="/contact" class="rounded-lg bg-canvas px-4 py-2.5 text-center font-medium text-ink transition-transform duration-200 ease-[cubic-bezier(0.22,1,0.36,1)] active:scale-[0.98] hover:bg-canvas/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-canvas">{{ $site->cta_label }}</a>
                            <a href="{{ $site->phone_href }}" class="rounded-lg bg-canvas/12 px-4 py-2.5 text-center font-medium text-canvas ring-1 ring-canvas/30 backdrop-blur-md hover:bg-canvas/20 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-canvas">Call {{ $site->phone }}</a>
                        </div>
                    </div>
                    <div data-hero-in style="--i: 4" class="shrink-0 max-lg:hidden">
                        <x-sections.dispatch-card/>
                    </div>
                </div>
            </div>

            {{-- Caption plate: the print's label, set in the mat. --}}
            <div data-hero-in style="--i: 5" class="flex flex-wrap items-center justify-between gap-x-8 gap-y-3 px-3 pt-3.5 pb-2 max-sm:flex-col max-sm:items-start sm:px-5">
                <p class="flex items-center gap-2.5 text-sm whitespace-nowrap text-muted">
                    <x-sections.stars/>
                    <span><span class="font-semibold text-ink">Five stars</span> from 300+ homeowners</span>
                </p>
                <ul class="flex flex-wrap items-center gap-x-5 gap-y-2 text-sm text-muted" aria-label="Why homeowners choose us">
                    <li class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0 text-ink" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                        Same-day service
                    </li>
                    <li class="flex items-center gap-2 sm:border-l sm:border-line sm:pl-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0 text-ink" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12l2 2l4-4"/></svg>
                        Licensed &amp; insured
                    </li>
                    <li class="flex items-center gap-2 sm:border-l sm:border-line sm:pl-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0 text-ink" aria-hidden="true"><path d="M4 2v20l2-1 2 1 2-1 2 1 2-1 2 1 2-1 2 1V2l-2 1-2-1-2 1-2-1-2 1-2-1-2 1Z"/><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"/><path d="M12 17.5v-11"/></svg>
                        Upfront pricing
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
