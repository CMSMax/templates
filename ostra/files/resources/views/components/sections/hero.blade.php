@props([
    'body' => 'Twelve rooms in a pink house above the harbour, claret shutters open to the sea, and a breakfast that runs until eleven.',
    'secondaryLabel' => 'See the rooms',
    'secondaryLink' => '/rooms',
    'image' => '/images/house.jpg',
    'imageAlt' => 'The inn: a rose-plaster house with claret shutters and a striped awning over its terrace, above the sea',
])
<section class="relative isolate flex min-h-[max(40rem,100svh)] flex-col justify-end overflow-hidden bg-ink text-canvas">
    <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1920" height="1074" fetchpriority="high" class="absolute inset-0 -z-20 size-full object-cover object-[62%_center]">
    <div class="absolute inset-0 -z-10 bg-linear-to-t from-ink/85 via-ink/15 to-ink/45 max-md:via-ink/50" aria-hidden="true"></div>
    <div class="mx-auto w-full max-w-7xl px-6 pt-32 lg:px-8">
        <div class="flex flex-col gap-8 border-b border-canvas/25 pb-8 md:flex-row md:items-end md:justify-between md:gap-16">
            <div class="flex flex-col gap-4">
                <p data-rise class="text-xs font-medium tracking-[0.24em] text-canvas/80 uppercase">{{ $site->place }}</p>
                <p data-rise class="max-w-[38ch] text-lg/8 text-pretty text-canvas/90 [--i:1]">{{ $body }}</p>
            </div>
            <div data-rise class="flex shrink-0 flex-wrap items-center gap-3 [--i:2]">
                <a href="{{ $site->booking_url }}" class="rounded-full bg-primary px-6 py-3.5 text-base font-medium text-primary-foreground transition-colors duration-150 hover:bg-primary/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-canvas">{{ $site->cta_label }}</a>
                <a href="{{ $secondaryLink }}" class="rounded-full px-6 py-3.5 text-base font-medium text-canvas ring-1 ring-canvas/45 ring-inset transition-colors duration-150 hover:bg-canvas/10 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-canvas">{{ $secondaryLabel }}</a>
            </div>
        </div>
        <h1 data-rise class="-mb-[0.14em] pt-4 text-center font-display text-[clamp(6.5rem,26vw,24rem)] leading-none font-normal tracking-[-0.04em] [--i:3]">{{ $site->short_name }}</h1>
    </div>
</section>
