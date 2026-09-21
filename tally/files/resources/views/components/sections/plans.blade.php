@props([
    'heading' => 'Or take a package',
    'body' => 'Most clients choose one of these. Everything is included in one monthly fee, and you can change packages at any time.',
    'featuredLabel' => 'Most chosen',
    'buttonLabel' => 'Ask about this package',
    'items' => [],
])
<section class="border-t border-line bg-surface py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
            <h2 class="font-display text-4xl leading-[1.08] font-medium tracking-[-0.03em] text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
            <p class="max-w-[46ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
        </div>
        <div class="mt-16 grid border-y border-ink lg:grid-cols-3">
            @foreach ($items as $plan)
                <div class="relative isolate flex flex-col border-line p-8 max-lg:border-b max-lg:last:border-b-0 lg:border-l lg:first:border-l-0">
                    @if ($plan->featured)
                        <span class="absolute inset-0 -z-10 bg-canvas" aria-hidden="true"></span>
                    @endif
                    <div class="flex items-center justify-between gap-4">
                        <h3 class="font-display text-xl font-medium tracking-tight text-ink">{{ $plan->name }}</h3>
                        @if ($plan->featured)
                            <span class="rounded-sm bg-primary px-2 py-0.5 text-xs font-medium text-primary-foreground">{{ $featuredLabel }}</span>
                        @endif
                    </div>
                    <p class="mt-2 text-sm text-muted">{{ $plan->for }}</p>
                    <p class="mt-8 flex items-baseline gap-2"><span class="font-mono text-4xl text-ink tabular-nums">{{ $plan->price }}</span><span class="text-sm text-muted">{{ $plan->cadence }}</span></p>
                    <p class="mt-6 grow border-t border-line pt-6 text-base/7 text-pretty text-muted">{{ $plan->includes }}</p>
                    @if ($plan->featured)
                        <a href="/contact" class="mt-8 rounded-md bg-primary px-5 py-3 text-center font-medium text-primary-foreground transition duration-150 hover:bg-primary/88 active:translate-y-px focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $buttonLabel }}</a>
                    @else
                        <a href="/contact" class="mt-8 rounded-md border border-ink/20 px-5 py-3 text-center font-medium text-ink transition duration-150 hover:border-ink active:translate-y-px focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $buttonLabel }}</a>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>
