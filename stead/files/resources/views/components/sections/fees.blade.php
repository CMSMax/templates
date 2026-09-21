@props([
    'eyebrow' => 'Fees',
    'heading' => 'One fee, written down.',
    'body' => 'No setup fee, no vacancy fee, no markup on repairs. If a charge is not on this page, we do not make it.',
    'note' => 'Cancel any time with 30 days’ notice. No cancellation fee.',
    'items' => [],
])
<section id="fees" class="bg-surface py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
            <div>
                <p class="text-sm font-medium text-muted">{{ $eyebrow }}</p>
                <h2 class="mt-4 max-w-[18ch] font-display text-4xl font-medium tracking-tight text-balance sm:text-5xl">{{ $heading }}</h2>
            </div>
            <p class="max-w-[44ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
        </div>
        <div class="mt-14 grid gap-6 lg:grid-cols-2">
            @foreach ($items as $plan)
                <article class="flex flex-col rounded-2xl p-8 ring-1 sm:p-10 @if ($plan->featured) bg-ink text-canvas ring-ink @else bg-canvas text-ink ring-ink/10 @endif">
                    <div class="flex items-center justify-between gap-4">
                        <h3 class="font-display text-2xl font-medium tracking-tight">{{ $plan->name }}</h3>
                        @if ($plan->featured)
                            <p class="rounded-full bg-primary px-3 py-1 text-sm font-medium text-primary-foreground">Most owners</p>
                        @endif
                    </div>
                    <p class="mt-8 flex flex-wrap items-baseline gap-x-3 gap-y-1">
                        <span class="font-display text-7xl font-medium tracking-tight tabular-nums">{{ $plan->rate }}</span>
                        <span class="@if ($plan->featured) text-canvas/70 @else text-muted @endif">{{ $plan->rate_note }}</span>
                    </p>
                    <p class="mt-6 max-w-[44ch] text-base/7 text-pretty @if ($plan->featured) text-canvas/80 @else text-muted @endif">{{ $plan->description }}</p>
                    <p class="mt-auto border-t pt-6 text-sm/6 @if ($plan->featured) mt-8 border-canvas/15 text-canvas/90 @else mt-8 border-ink/10 text-ink/80 @endif">{{ $plan->includes }}</p>
                </article>
            @endforeach
        </div>
        <p class="mt-8 text-muted">{{ $note }}</p>
    </div>
</section>
