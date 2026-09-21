@props([
    'includedLabel' => 'What is included',
    'items' => [],
])
<section class="py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <ol role="list" class="border-t border-ink/15">
            @foreach ($items as $package)
                <li class="grid gap-x-16 gap-y-8 border-b border-ink/15 py-12 sm:py-16 lg:grid-cols-12">
                    <div class="lg:col-span-5">
                        <p class="font-display text-lg text-primary italic tabular-nums">0{{ $loop->iteration }}</p>
                        <h2 class="mt-3 font-display text-4xl tracking-tight text-balance text-ink">{{ $package->name }}</h2>
                        <p class="mt-4 font-display text-2xl text-ink tabular-nums">{{ $package->price }}</p>
                        <p class="label-caps mt-6 text-muted">{{ $package->timing }}</p>
                    </div>
                    <div class="lg:col-span-7">
                        <p class="max-w-[52ch] text-lg/8 text-ink">{{ $package->summary }}</p>
                        <p class="mt-3 max-w-[52ch] text-base/7 text-muted">Best for: {{ $package->bestFor }}</p>
                        <h3 class="label-caps mt-10 text-muted">{{ $includedLabel }}</h3>
                        <div class="included mt-5 text-base/7 text-ink">{!! $package->included !!}</div>
                    </div>
                </li>
            @endforeach
        </ol>
    </div>
</section>
