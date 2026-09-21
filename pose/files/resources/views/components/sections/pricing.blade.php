@props([
    'eyebrow' => 'Pricing',
    'heading' => 'Three ways to keep coming.',
    'body' => 'Prices include tax, mats and props. Students, teachers and anyone over sixty-five get twenty percent off — just ask at the desk.',
])
<section id="plans" aria-labelledby="plans-heading" class="scroll-mt-8 py-20 sm:py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="grid gap-6 lg:grid-cols-12 lg:items-end lg:gap-10">
            <div class="lg:col-span-7">
                <p class="text-sm font-semibold text-primary">{{ $eyebrow }}</p>
                <h2 id="plans-heading" class="mt-4 max-w-[18ch] font-display text-[clamp(2.25rem,4.5vw,3.75rem)] leading-[1.02] font-medium tracking-[-0.035em] text-ink">{{ $heading }}</h2>
            </div>
            <p class="max-w-[46ch] text-lg/8 text-muted lg:col-span-5">{{ $body }}</p>
        </div>
        <ul role="list" class="mt-14 grid gap-4 lg:mt-16 lg:grid-cols-3 lg:gap-6">
            @foreach ($plans as $plan)
                <li class="flex flex-col justify-between gap-10 rounded-3xl bg-card p-7 ring-1 ring-ink/5 sm:p-9">
                    <div>
                        <div class="flex items-center justify-between gap-4">
                            <h3 class="font-display text-2xl font-medium tracking-tight text-ink">{{ $plan->name }}</h3>
                            @if ($plan->highlight)
                                <span class="rounded-full bg-spark px-3 py-1 text-xs font-semibold text-spark-ink">Most popular</span>
                            @endif
                        </div>
                        <p class="mt-2 text-base text-muted">{{ $plan->description }}</p>
                        <p class="mt-8 flex items-baseline gap-2">
                            <span class="font-display text-6xl font-medium tracking-[-0.04em] text-ink tabular-nums">{{ $plan->price }}</span>
                            <span class="text-base text-muted">{{ $plan->per }}</span>
                        </p>
                        <ul role="list" class="mt-8 flex flex-col gap-3 border-t border-line pt-6 text-base text-ink">
                            <li class="flex gap-3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-lh size-4 shrink-0 text-primary" aria-hidden="true"><path fill-rule="evenodd" d="M16.7 5.3a1 1 0 0 1 0 1.4l-8 8a1 1 0 0 1-1.4 0l-4-4a1 1 0 1 1 1.4-1.4L8 12.58l7.3-7.3a1 1 0 0 1 1.4 0Z" clip-rule="evenodd"/></svg>{{ $plan->featureOne }}</li>
                            <li class="flex gap-3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-lh size-4 shrink-0 text-primary" aria-hidden="true"><path fill-rule="evenodd" d="M16.7 5.3a1 1 0 0 1 0 1.4l-8 8a1 1 0 0 1-1.4 0l-4-4a1 1 0 1 1 1.4-1.4L8 12.58l7.3-7.3a1 1 0 0 1 1.4 0Z" clip-rule="evenodd"/></svg>{{ $plan->featureTwo }}</li>
                            <li class="flex gap-3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-lh size-4 shrink-0 text-primary" aria-hidden="true"><path fill-rule="evenodd" d="M16.7 5.3a1 1 0 0 1 0 1.4l-8 8a1 1 0 0 1-1.4 0l-4-4a1 1 0 1 1 1.4-1.4L8 12.58l7.3-7.3a1 1 0 0 1 1.4 0Z" clip-rule="evenodd"/></svg>{{ $plan->featureThree }}</li>
                        </ul>
                    </div>
                    <div>
                        @if ($plan->highlight)
                            <a href="{{ $plan->ctaLink }}" class="flex justify-center rounded-full bg-primary px-6 py-3.5 text-base font-semibold text-primary-foreground hover:bg-primary/90 active:bg-primary/80 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $plan->ctaLabel }}</a>
                        @else
                            <a href="{{ $plan->ctaLink }}" class="flex justify-center rounded-full px-6 py-3.5 text-base font-semibold text-ink ring-1 ring-ink/15 ring-inset hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $plan->ctaLabel }}</a>
                        @endif
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>
