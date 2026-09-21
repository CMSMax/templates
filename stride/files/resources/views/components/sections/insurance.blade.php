@props([
    'heading' => 'We bill your insurance for you.',
    'eyebrow' => 'Insurance',
])
<section aria-labelledby="insurance-heading" class="px-3 sm:px-5">
    <div class="mx-auto max-w-7xl rounded-[2rem] bg-secondary py-16 text-secondary-foreground lg:py-20">
        <div class="mx-auto grid max-w-6xl gap-10 px-5 sm:px-8 lg:grid-cols-[5fr_7fr] lg:gap-16">
            <div>
                <p class="flex items-center gap-2.5 text-sm font-semibold text-secondary-foreground/80">
                    <span class="h-2 w-6 shrink-0 rounded-full bg-primary" aria-hidden="true"></span>
                    {{ $eyebrow }}
                </p>
                <h2 id="insurance-heading" class="mt-5 max-w-[14ch] font-display text-[clamp(2rem,4vw,3rem)] leading-[1.05] font-semibold tracking-[-0.04em] text-balance">{{ $heading }}</h2>
            </div>
            <div>
                <ul role="list" class="flex flex-wrap gap-2.5">
                    @foreach ($site->insurance as $plan)
                        <li class="rounded-full px-4 py-2 text-base font-medium ring-1 ring-secondary-foreground/20 ring-inset">{{ $plan }}</li>
                    @endforeach
                </ul>
                <p class="mt-8 text-lg/8 text-secondary-foreground/75">{{ $site->insurance_note }}</p>
            </div>
        </div>
    </div>
</section>
