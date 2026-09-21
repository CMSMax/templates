@props(['items', 'heading' => 'Three ways to study with us.', 'note' => 'Prices are per student. The assessment is free, and there is no registration fee or contract.', 'ctaLabel' => 'Book a free assessment', 'ctaUrl' => '/contact', 'featuredNote' => 'what most families choose'])
<section class="border-b border-line py-16 lg:py-24">
    <div class="mx-auto max-w-6xl px-6">
        <div class="flex flex-wrap items-end justify-between gap-x-12 gap-y-4">
            <h2 class="max-w-[16ch] font-display text-[clamp(2rem,3.6vw,3.25rem)]/[1.05] font-normal tracking-[-0.015em] text-balance text-ink">{{ $heading }}</h2>
            <p class="max-w-[42ch] text-base/7 text-muted">{{ $note }}</p>
        </div>
        <ul role="list" class="mt-16 grid gap-6 max-lg:gap-y-14 lg:grid-cols-3 lg:items-stretch">
            @foreach ($items as $plan)
                @if ($plan->featured)
                    <li class="relative flex flex-col rounded-sm bg-surface p-8 shadow-sheet outline-2 -outline-offset-2 outline-ink lg:-my-4 lg:py-12">
                        <p class="absolute -top-9 right-4 -rotate-3 font-hand text-2xl/none text-accent">{{ $featuredNote }}</p>
                @else
                    <li class="flex flex-col rounded-sm border border-line bg-surface/60 p-8">
                @endif
                        <h3 class="font-display text-2xl font-normal text-ink">{{ $plan->name }}</h3>
                        <p class="mt-2 text-[0.9375rem]/6 text-muted">{{ $plan->who }}</p>
                        <p class="mt-8 flex items-baseline gap-2 border-t border-line pt-6">
                            <span class="font-display text-5xl font-normal tracking-[-0.02em] text-ink tabular-nums">{{ $plan->price }}</span>
                            <span class="text-[0.9375rem] text-muted">{{ $plan->unit }}</span>
                        </p>
                        <ul role="list" class="mt-8 grid gap-3 text-[0.9375rem]/6 text-ink">
                            <li class="flex gap-3"><svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="mt-1 size-4 shrink-0 text-accent" aria-hidden="true"><path d="m2.5 8.5 3.5 3.5 7.5-8"/></svg>{{ $plan->feature1 }}</li>
                            <li class="flex gap-3"><svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="mt-1 size-4 shrink-0 text-accent" aria-hidden="true"><path d="m2.5 8.5 3.5 3.5 7.5-8"/></svg>{{ $plan->feature2 }}</li>
                            <li class="flex gap-3"><svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="mt-1 size-4 shrink-0 text-accent" aria-hidden="true"><path d="m2.5 8.5 3.5 3.5 7.5-8"/></svg>{{ $plan->feature3 }}</li>
                        </ul>
                        <div class="mt-auto pt-10">
                            @if ($plan->featured)
                                <a href="{{ $ctaUrl }}" class="block rounded-xs bg-accent px-5 py-3.5 text-center font-medium text-accent-ink transition duration-150 ease-out hover:bg-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent active:scale-[0.98]">{{ $ctaLabel }}</a>
                            @else
                                <a href="{{ $ctaUrl }}" class="block rounded-xs border border-ink px-5 py-3.5 text-center font-medium text-ink transition duration-150 ease-out hover:bg-ink hover:text-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent active:scale-[0.98]">{{ $ctaLabel }}</a>
                            @endif
                        </div>
                    </li>
            @endforeach
        </ul>
    </div>
</section>
