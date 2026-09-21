@props([
    'linkLabel' => 'Read more about this service',
    'items' => [],
])
<section class="py-16 md:py-24">
    <div class="mx-auto max-w-7xl px-5 md:px-8">
        <ul role="list" class="grid gap-x-10 gap-y-16 md:grid-cols-2">
            @foreach ($items as $service)
                <li data-reveal>
                    <a href="{{ $service->link }}" class="group flex flex-col gap-6">
                        <div class="overflow-hidden rounded-[1.75rem]">
                            <img src="{{ $service->image }}" alt="{{ $service->imageAlt }}" width="1024" height="688" loading="lazy" class="aspect-[3/2] w-full object-cover transition-transform duration-500 group-hover:scale-[1.03]">
                        </div>
                        <div class="flex items-start justify-between gap-6">
                            <div>
                                <h2 class="font-display text-2xl font-extrabold md:text-3xl">{{ $service->title }}</h2>
                                <p class="mt-3 max-w-[46ch] text-base text-pretty text-muted md:text-lg">{{ $service->description }}</p>
                                <p class="mt-4 flex flex-wrap gap-2 text-sm font-semibold">
                                    <span class="rounded-full bg-tint px-3 py-1 text-primary tabular-nums">{{ $service->priceFrom }}</span>
                                    <span class="rounded-full bg-surface px-3 py-1 ring-1 ring-line">{{ $service->time }}</span>
                                </p>
                            </div>
                            <span class="flex size-11 shrink-0 items-center justify-center rounded-full ring-1 ring-line group-hover:bg-primary group-hover:text-primary-foreground group-hover:ring-primary" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5"><path d="M4 10h11M11 5l5 5-5 5"/></svg>
                            </span>
                        </div>
                        <span class="sr-only">{{ $linkLabel }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>
