@props([
    'heading' => 'Six jobs, done every day.',
    'body' => 'We keep to the work we do most, so the part is on the van and the plumber has fixed it a hundred times before.',
    'linkLabel' => 'All services',
    'linkHref' => '/services',
    'items' => [],
])
<section class="tread bg-ink py-24 text-canvas md:py-32">
    <div class="mx-auto grid max-w-7xl gap-12 px-5 md:px-8 lg:grid-cols-12 lg:gap-10">
        <div class="lg:col-span-4">
            <div class="lg:sticky lg:top-40">
                <h2 class="font-display text-section font-extrabold text-balance">{{ $heading }}</h2>
                <p class="mt-5 max-w-[38ch] text-lg text-pretty text-canvas/70">{{ $body }}</p>
                @if ($linkLabel)
                    <a href="{{ $linkHref }}" class="group mt-8 inline-flex min-h-11 items-center gap-2 text-base font-semibold text-canvas">
                        <span class="underline decoration-canvas/30 underline-offset-[6px] group-hover:decoration-canvas">{{ $linkLabel }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M4 10h11M11 5l5 5-5 5"/></svg>
                    </a>
                @endif
            </div>
        </div>
        <ul role="list" class="border-t border-canvas/15 lg:col-span-8">
            @foreach ($items as $service)
                <li class="border-b border-canvas/15" data-reveal>
                    <a href="{{ $service->link }}" class="group grid grid-cols-[1fr_auto] items-center gap-x-6 gap-y-2 py-7 md:grid-cols-[minmax(0,5fr)_minmax(0,6fr)_auto] md:py-9">
                        <h3 class="font-display text-2xl font-extrabold md:text-3xl">{{ $service->title }}</h3>
                        <span class="flex size-11 shrink-0 items-center justify-center rounded-full ring-1 ring-canvas/25 group-hover:bg-primary group-hover:ring-primary max-md:row-span-2 md:order-last" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 transition-transform duration-200 group-hover:translate-x-0.5"><path d="M4 10h11M11 5l5 5-5 5"/></svg>
                        </span>
                        <div class="flex flex-col gap-2">
                            <p class="text-base text-pretty text-canvas/70">{{ $service->description }}</p>
                            <p class="text-sm font-semibold tabular-nums text-canvas">{{ $service->priceFrom }} <span class="text-canvas/50">·</span> {{ $service->time }}</p>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>
