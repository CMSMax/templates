@props([
    'eyebrow' => 'In the shop',
    'heading' => 'More than the rail.',
    'items' => [],
])
<section id="services" class="py-20 sm:py-28">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <p class="text-sm font-medium text-muted">{{ $eyebrow }}</p>
        <h2 class="mt-4 font-display text-[clamp(2.25rem,4.4vw,3.75rem)] leading-none font-semibold tracking-[-0.035em] text-balance text-ink">{{ $heading }}</h2>
        <ol role="list" class="mt-12 grid gap-x-10 border-t border-ink sm:grid-cols-3">
            @foreach ($items as $service)
                <li class="border-b border-line py-8 sm:border-b-0">
                    <p class="font-display text-5xl font-semibold tracking-tight text-line tabular-nums" aria-hidden="true">{{ $loop->iteration }}</p>
                    <h3 class="mt-6 font-display text-2xl font-medium tracking-tight text-ink">{{ $service->name }}</h3>
                    <p class="mt-3 max-w-[36ch] text-base/7 text-pretty text-muted">{{ $service->description }}</p>
                    <p class="mt-5 text-sm font-medium text-ink">{{ $service->detail }}</p>
                </li>
            @endforeach
        </ol>
    </div>
</section>
