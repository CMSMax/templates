@props(['eyebrow' => 'Treatments', 'heading' => 'Care for every smile, priced in plain sight.', 'intro' => 'From a child’s first check-up to a full smile makeover. Every price below is what you pay — insurance only makes it smaller.'])
<section class="px-3 pt-1 sm:px-4">
    <div class="rounded-[2rem] bg-mint">
        <div class="mx-auto grid max-w-7xl gap-8 px-5 py-16 sm:px-10 lg:grid-cols-12 lg:items-end lg:py-24">
            <div class="lg:col-span-8">
                <p data-rise style="--i:0" class="flex items-center gap-2.5 text-sm font-semibold tracking-wide text-ink uppercase"><span class="size-2.5 rounded-full bg-pop" aria-hidden="true"></span>{{ $eyebrow }}</p>
                <h1 data-rise style="--i:1" class="mt-6 max-w-[16ch] font-display text-[clamp(2.75rem,6.4vw,5.5rem)] leading-[0.95] font-semibold tracking-[-0.04em] text-balance text-ink">{{ $heading }}</h1>
            </div>
            <p data-rise style="--i:2" class="max-w-[40ch] text-lg/relaxed text-pretty text-ink/80 lg:col-span-4">{{ $intro }}</p>
        </div>
    </div>
</section>
