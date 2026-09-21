@props([
    'heading' => 'How switching to us works',
    'body' => 'Most new clients are fully set up inside two weeks, mid-year included.',
    'steps' => [],
])
<section class="py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-2xl">
            <h2 class="font-display text-4xl leading-[1.08] font-medium tracking-[-0.03em] text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
            <p class="mt-6 max-w-[44ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
        </div>
        <ol role="list" class="mt-16 grid gap-x-8 gap-y-12 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($steps as $step)
                <li class="border-t border-ink pt-6">
                    <p class="font-mono text-sm text-primary">{{ $step->when }}</p>
                    <h3 class="mt-4 font-display text-xl font-medium tracking-tight text-ink">{{ $step->title }}</h3>
                    <p class="mt-3 text-base/7 text-pretty text-muted">{{ $step->body }}</p>
                </li>
            @endforeach
        </ol>
    </div>
</section>
