@props([
    'includesLabel' => 'Includes',
    'feeLabel' => 'Fee',
    'items' => [],
])
<section class="py-8 lg:py-12">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        @foreach ($items as $service)
            <article id="{{ $service->slug }}" class="grid gap-x-16 gap-y-6 border-b border-line py-14 last:border-b-0 lg:grid-cols-12 lg:py-20">
                <h2 class="font-display text-3xl font-medium tracking-[-0.025em] text-ink sm:text-4xl lg:col-span-4">{{ $service->name }}</h2>
                <div class="lg:col-span-5">
                    <p class="text-lg/8 text-pretty text-ink">{{ $service->description }}</p>
                    <p class="mt-6 text-sm font-medium text-ink">{{ $includesLabel }}</p>
                    <p class="mt-2 text-base/7 text-pretty text-muted">{{ $service->includes }}</p>
                </div>
                <div class="lg:col-span-3 lg:text-right">
                    <p class="text-sm text-muted">{{ $feeLabel }}</p>
                    <p class="mt-1 font-mono text-2xl text-primary tabular-nums">{{ $service->fee }}</p>
                </div>
            </article>
        @endforeach
    </div>
</section>
