@props([
    'heading' => 'Posted prices. No surprises.',
    'body' => 'What most jobs cost here, parts and labor included. Your exact price depends on your car — you’ll have it in writing before we start.',
    'all' => '0',
    'linkLabel' => 'See every service and price',
    'showLink' => '1',
])
<section id="prices" class="scroll-mt-18 py-20 lg:py-28">
    <div class="mx-auto grid max-w-7xl grid-cols-1 gap-12 px-5 sm:px-8 lg:grid-cols-12 lg:gap-12">
        <div class="lg:col-span-4">
            <div class="lg:sticky lg:top-28">
                <h2 class="max-w-[12ch] font-display text-[clamp(2.5rem,5vw,4.25rem)] leading-[0.95] font-bold text-balance text-ink uppercase">{{ $heading }}</h2>
                <p class="mt-6 max-w-[42ch] text-lg/8 text-muted">{{ $body }}</p>
                <div class="mt-8 flex items-center gap-4 rounded-lg bg-surface p-4 ring-1 ring-line">
                    <span class="grid size-11 shrink-0 place-items-center rounded-md bg-ink text-canvas" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5"><path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm.75-13a.75.75 0 0 0-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 0 0 0-1.5h-3.25V5Z" clip-rule="evenodd"/></svg>
                    </span>
                    <p class="text-base/6 text-ink"><span class="font-semibold">Labor rate:</span> {{ $site->labor_rate }}</p>
                </div>
                @if ($showLink == '1')
                    <a href="/services" class="mt-8 inline-flex items-center gap-2 rounded-sm py-2 text-base font-semibold text-ink underline decoration-ink/30 decoration-2 underline-offset-6 transition-colors duration-150 hover:decoration-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                        {{ $linkLabel }}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.64l-4.16-3.96a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.16-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd"/></svg>
                    </a>
                @endif
            </div>
        </div>

        <div class="flex flex-col gap-14 lg:col-span-8">
            @foreach ($site->service_groups as $group)
                <div>
                    <div class="flex flex-wrap items-baseline justify-between gap-x-6 gap-y-1 border-b-2 border-ink pb-3">
                        <h3 class="font-display text-2xl font-bold tracking-wide text-ink uppercase">{{ $group->name }}</h3>
                        <p class="text-base text-muted sm:text-sm">{{ $group->note }}</p>
                    </div>
                    <div class="grid grid-cols-[1fr_auto] gap-x-6 border-b border-line py-2 text-sm text-muted max-sm:hidden sm:grid-cols-[1fr_6rem_7rem]" aria-hidden="true">
                        <span>Service</span>
                        <span>Typical time</span>
                        <span class="text-right">Price</span>
                    </div>
                    <ul role="list" class="divide-y divide-line">
                        @foreach ($services as $service)
                            @if ($service->category == $group->name)
                                @if ($all == '1' || $service->featured)
                                    <li class="grid grid-cols-[1fr_auto] items-baseline gap-x-6 gap-y-1 py-5 sm:grid-cols-[1fr_6rem_7rem]">
                                        <div class="min-w-0">
                                            <p class="text-lg font-semibold text-ink">{{ $service->name }}</p>
                                            <p class="mt-1 text-base/6 text-muted sm:text-sm/6">{{ $service->detail }}</p>
                                            <p class="mt-2 text-sm text-muted sm:hidden"><span class="sr-only">Typical time: </span>{{ $service->time }}</p>
                                        </div>
                                        <p class="text-base text-muted tabular-nums max-sm:hidden"><span class="sr-only">Typical time: </span>{{ $service->time }}</p>
                                        <p class="text-right font-display text-3xl leading-none font-bold text-ink tabular-nums">
                                            @if ($service->from)
                                                <span class="mr-1 align-middle font-sans text-sm font-medium text-muted">from</span>
                                            @endif
                                            {{ $site->currency }}{{ $service->price }}
                                        </p>
                                    </li>
                                @endif
                            @endif
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</section>
