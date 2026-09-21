@props([
    'heading' => 'On the counter most mornings.',
    'linkLabel' => 'See the full menu',
    'image' => '/images/croissants.jpg',
    'imageAlt' => 'A tray of butter croissants on parchment, one torn open to show its layers, beside a small red dish of jam',
    'items' => [],
])
<section class="border-b border-line">
    <div class="flex flex-wrap items-end justify-between gap-x-12 gap-y-6 px-5 py-14 sm:px-8 lg:px-12 lg:py-20">
        <h2 class="max-w-[16ch] font-display text-[clamp(2.25rem,3.6vw,3.25rem)] leading-[1.04] tracking-[-0.02em] text-balance text-ink">{{ $heading }}</h2>
        <a href="/menu" class="inline-flex items-center gap-2 border border-ink py-3 pr-3 pl-5 text-base font-semibold text-ink transition-colors duration-150 hover:bg-ink hover:text-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">
            {{ $linkLabel }}
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
    </div>
    <div class="grid grid-cols-1 gap-px border-t border-line bg-line sm:grid-cols-2 lg:grid-cols-3">
        <div class="bg-canvas sm:col-span-2 lg:col-span-1 lg:row-span-2">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="896" height="1120" loading="lazy" decoding="async" class="aspect-[4/3] size-full object-cover lg:aspect-auto">
        </div>
        @foreach ($items as $item)
            @if ($item->featured)
                <div class="flex min-h-72 flex-col bg-canvas px-5 py-8 sm:px-8 lg:px-10 lg:py-10">
                    <p class="text-sm font-medium text-muted">{{ $item->section }}</p>
                    <h3 class="mt-3 font-display text-[1.875rem] leading-tight text-ink">{{ $item->name }}</h3>
                    <p class="mt-3 max-w-[40ch] text-base/7 text-muted">{{ $item->description }}</p>
                    <div class="mt-auto flex items-baseline justify-between gap-4 pt-8">
                        <p class="font-display text-3xl text-primary tabular-nums">{{ $site->currency }}{{ $item->price }}</p>
                        @if ($item->tag)
                            <p class="border border-ink/25 px-2.5 py-1 text-sm font-medium text-ink">{{ $item->tag }}</p>
                        @endif
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</section>
