@props([
    'heading' => 'Treatments and prices',
    'body' => 'Six kinds of massage, each in sixty or ninety minutes, all with the same therapist. Prices include everything; tipping is welcome and never expected.',
])
<section class="pt-20 pb-16 lg:pt-28 lg:pb-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h1 class="max-w-[14ch] font-display text-[clamp(3rem,7vw,6rem)] leading-[0.98] font-normal tracking-[-0.035em] text-balance text-ink">{{ $heading }}</h1>
        <p class="mt-8 max-w-[56ch] text-lg/8 text-muted">{{ $body }}</p>
    </div>
</section>
