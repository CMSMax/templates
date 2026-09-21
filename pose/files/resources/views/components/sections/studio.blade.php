@props([
    'eyebrow' => 'The studio',
    'heading' => 'One room, twelve mats, no mirrors.',
    'body' => 'Pose opened in 2016 in a former sewing workshop with three tall windows facing east. We kept the classes small on purpose: a teacher can watch twelve people properly, and nobody gets lost at the back.',
    'bodyTwo' => 'There are no mirrors, because yoga is about how a pose feels, not how it looks. There is good tea, a shelf of well-worn props, and a front desk that remembers what you came for last week.',
    'image' => '/images/studio-class.jpg',
    'imageAlt' => 'Two women sitting cross-legged on mats in a bright loft studio with tall windows',
    'statOne' => '2016',
    'statOneLabel' => 'opened on Alder Street',
    'statTwo' => '6,400',
    'statTwoLabel' => 'first classes taught',
])
<section id="studio" aria-labelledby="studio-heading" class="scroll-mt-8 py-20 sm:py-24 lg:py-32">
    <div class="mx-auto grid max-w-7xl gap-12 px-5 sm:px-8 lg:grid-cols-12 lg:gap-10">
        <div class="lg:col-span-7">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="960" height="640" loading="lazy" class="aspect-[3/2] w-full rounded-[1.75rem] bg-card object-cover outline-1 -outline-offset-1 outline-ink/5">
        </div>
        <div class="flex flex-col justify-between gap-10 lg:col-span-5">
            <div>
                <p class="text-sm font-semibold text-primary">{{ $eyebrow }}</p>
                <h2 id="studio-heading" class="mt-4 max-w-[16ch] font-display text-[clamp(2.25rem,4.5vw,3.75rem)] leading-[1.02] font-medium tracking-[-0.035em] text-ink">{{ $heading }}</h2>
                <p class="mt-6 max-w-[46ch] text-lg/8 text-muted">{{ $body }}</p>
                <p class="mt-4 max-w-[46ch] text-lg/8 text-muted">{{ $bodyTwo }}</p>
            </div>
            <dl class="grid grid-cols-2 border-t border-line pt-8">
                <div class="flex flex-col gap-1 pr-6">
                    <dt class="order-2 text-sm text-muted sm:text-base">{{ $statOneLabel }}</dt>
                    <dd class="font-display text-4xl font-medium tracking-tight text-ink tabular-nums sm:text-5xl">{{ $statOne }}</dd>
                </div>
                <div class="flex flex-col gap-1 border-l border-line pl-6">
                    <dt class="order-2 text-sm text-muted sm:text-base">{{ $statTwoLabel }}</dt>
                    <dd class="font-display text-4xl font-medium tracking-tight text-ink tabular-nums sm:text-5xl">{{ $statTwo }}</dd>
                </div>
            </dl>
        </div>
    </div>
</section>
