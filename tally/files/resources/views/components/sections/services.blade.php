@props([
    'heading' => 'Five services. One fixed fee.',
    'body' => 'Pick what you need, or let us look after all of it. Every fee is quoted in writing before we start.',
    'serviceLabel' => 'Service',
    'coversLabel' => 'What it covers',
    'feeLabel' => 'Fee',
    'linkLabel' => 'Every service in detail',
    'items' => [],
])
<section id="services" class="border-t border-line bg-surface py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
            <h2 class="max-w-[16ch] font-display text-4xl leading-[1.08] font-medium tracking-[-0.03em] text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
            <p class="max-w-[42ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
        </div>
        <div class="mt-16">
            <div class="hidden grid-cols-12 gap-8 border-b border-ink pb-3 text-sm text-muted md:grid" aria-hidden="true">
                <span class="col-span-4">{{ $serviceLabel }}</span>
                <span class="col-span-5">{{ $coversLabel }}</span>
                <span class="col-span-3 text-right">{{ $feeLabel }}</span>
            </div>
            <ul role="list" class="divide-y divide-line border-b border-line max-md:border-t max-md:border-ink">
                @foreach ($items as $service)
                    <li>
                        <a href="/services#{{ $service->slug }}" class="group grid gap-x-8 gap-y-2 py-7 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary md:grid-cols-12 md:items-baseline">
                            <span class="font-display text-2xl font-medium tracking-tight text-ink transition-colors duration-150 group-hover:text-primary md:col-span-4">{{ $service->name }}</span>
                            <span class="max-w-[48ch] text-base/7 text-pretty text-muted md:col-span-5">{{ $service->summary }}</span>
                            <span class="flex items-center gap-3 font-mono text-ink tabular-nums md:col-span-3 md:justify-end">
                                {{ $service->fee }}
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0 text-muted transition duration-200 group-hover:translate-x-0.5 group-hover:text-primary" aria-hidden="true"><path d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                            </span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <a href="/services" class="group mt-10 inline-flex items-center gap-2 py-1 font-medium text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
            <span class="underline decoration-ink/25 underline-offset-[6px] transition-colors duration-150 group-hover:decoration-primary">{{ $linkLabel }}</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0 transition-transform duration-200 group-hover:translate-x-0.5" aria-hidden="true"><path d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
        </a>
    </div>
</section>
