@props(['eyebrow' => 'Smile gallery', 'heading' => 'Drag to see the difference.', 'intro' => 'Real results are the only brochure we trust. This patient wanted to stop hiding his smile in photos. Two weeks of custom-tray whitening did the rest.', 'treatment' => 'Custom-tray whitening', 'visits' => '2 visits', 'timeframe' => '2 weeks', 'before' => '/images/smile-before.jpg', 'after' => '/images/smile-after.jpg', 'imageAlt' => 'A patient smiling, before and after professional whitening', 'caption' => 'Photos shared with the patient’s permission.'])
<section class="px-3 pb-3 sm:px-4 sm:pb-4">
    <div class="rounded-[2rem] bg-accent px-5 py-16 text-accent-ink sm:px-10 lg:py-28">
    <div class="mx-auto grid max-w-7xl items-center gap-12 lg:grid-cols-12 lg:gap-8">
        <div data-reveal class="lg:col-span-4">
            <p class="flex items-center gap-2.5 text-sm font-semibold tracking-wide text-mint uppercase"><span class="size-2 rounded-full bg-pop" aria-hidden="true"></span>{{ $eyebrow }}</p>
            <h2 class="mt-5 max-w-[12ch] font-display text-4xl leading-[1.02] font-semibold tracking-[-0.03em] text-balance sm:text-5xl">{{ $heading }}</h2>
            <p class="mt-5 max-w-[38ch] text-lg/relaxed text-pretty text-accent-ink/80">{{ $intro }}</p>
            <dl class="mt-10 grid grid-cols-3 gap-4 border-t border-accent-ink/15 pt-6 lg:grid-cols-1 lg:gap-0 lg:pt-0">
                <div class="lg:flex lg:justify-between lg:border-b lg:border-accent-ink/15 lg:py-4">
                    <dt class="text-sm text-accent-ink/70">Treatment</dt>
                    <dd class="mt-1 font-semibold lg:mt-0 lg:text-right">{{ $treatment }}</dd>
                </div>
                <div class="lg:flex lg:justify-between lg:border-b lg:border-accent-ink/15 lg:py-4">
                    <dt class="text-sm text-accent-ink/70">Visits</dt>
                    <dd class="mt-1 font-semibold lg:mt-0">{{ $visits }}</dd>
                </div>
                <div class="lg:flex lg:justify-between lg:border-b lg:border-accent-ink/15 lg:py-4">
                    <dt class="text-sm text-accent-ink/70">Start to finish</dt>
                    <dd class="mt-1 font-semibold lg:mt-0">{{ $timeframe }}</dd>
                </div>
            </dl>
        </div>
        <figure data-reveal class="lg:col-span-8">
            <div data-compare class="relative aspect-[3/2] overflow-hidden rounded-[1.75rem] bg-ink select-none">
                <img src="{{ $after }}" alt="{{ $imageAlt }} — after" width="1500" height="999" loading="lazy" class="absolute inset-0 size-full object-cover">
                <img data-compare-before src="{{ $before }}" alt="{{ $imageAlt }} — before" width="1500" height="999" loading="lazy" class="absolute inset-0 size-full object-cover">
                <span class="pointer-events-none absolute top-4 left-4 rounded-full bg-canvas px-3 py-1 text-xs font-semibold tracking-wide text-ink uppercase">Before</span>
                <span class="pointer-events-none absolute top-4 right-4 rounded-full bg-mint px-3 py-1 text-xs font-semibold tracking-wide text-ink uppercase">After</span>
                <span data-compare-handle class="pointer-events-none absolute inset-y-0 w-0.5 -translate-x-1/2 bg-canvas" aria-hidden="true">
                    <span data-compare-knob class="absolute top-1/2 left-1/2 grid size-12 -translate-x-1/2 -translate-y-1/2 place-items-center rounded-full bg-pop text-accent-ink shadow-[0_6px_20px_-6px_rgb(0_0_0/0.45)]">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" class="size-5"><path d="m9 6-6 6 6 6M15 6l6 6-6 6"/></svg>
                    </span>
                </span>
                <input type="range" min="0" max="100" value="50" aria-label="Compare before and after" class="absolute inset-0 size-full">
            </div>
            <figcaption class="mt-4 text-sm text-accent-ink/70">{{ $caption }}</figcaption>
        </figure>
    </div>
    </div>
</section>
