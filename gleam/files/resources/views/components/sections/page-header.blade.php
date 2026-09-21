@props([
    'eyebrow' => 'Services and prices',
    'heading' => 'Every clean, what it covers and what it costs.',
    'body' => 'Prices are for a two-bedroom home and confirmed on the phone before we book. Larger homes are priced by room, never by the hour.',
    'items' => [],
])
<section class="pt-14 pb-16 sm:pt-20 lg:pt-24 lg:pb-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <p class="text-[0.9375rem] font-medium text-muted">{{ $eyebrow }}</p>
        <h1 class="mt-5 max-w-[18ch] font-display text-[2.625rem] font-semibold tracking-tight text-balance text-ink sm:text-6xl xl:text-7xl">{{ $heading }}</h1>
        <p class="mt-7 max-w-[56ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
        <ul role="list" class="mt-10 flex flex-wrap gap-2.5">
            @foreach ($items as $service)
                <li><a href="#{{ $service->slug }}" class="inline-flex items-center rounded-full border border-ink/15 px-4 py-2.5 text-[0.9375rem] font-medium text-ink transition-colors duration-150 hover:border-ink/40 hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $service->name }}</a></li>
            @endforeach
            <li><a href="#extras" class="inline-flex items-center rounded-full border border-ink/15 px-4 py-2.5 text-[0.9375rem] font-medium text-ink transition-colors duration-150 hover:border-ink/40 hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Extras</a></li>
        </ul>
    </div>
</section>
