@props([
    'heading' => 'Order ahead, or just come by.',
    'orderHeading' => 'What we take orders for',
    'hoursHeading' => 'Hours',
    'findHeading' => 'Find us',
    'directionsLabel' => 'Get directions',
    'items' => [],
])
<section id="visit" class="border-b border-line">
    <div class="grid grid-cols-1 gap-px bg-line lg:grid-cols-2">
        <div class="flex flex-col bg-canvas px-5 py-14 sm:px-8 lg:px-12 lg:py-24">
            <h2 class="max-w-[14ch] font-display text-[clamp(2.5rem,4.4vw,4rem)] leading-[1.02] tracking-[-0.02em] text-balance text-ink">{{ $heading }}</h2>
            <p class="mt-6 max-w-[44ch] text-lg/8 text-muted">{{ $site->order_note }}</p>
            <div class="mt-10 flex flex-wrap items-center gap-x-6 gap-y-4">
                <a href="{{ $site->cta_link }}" class="inline-flex items-center gap-3 bg-primary py-4 pr-4 pl-6 text-base font-semibold text-primary-foreground transition-colors duration-150 hover:bg-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                    {{ $site->cta_label }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
                </a>
                <a href="{{ $site->phone_href }}" class="py-2 font-display text-2xl text-ink tabular-nums hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $site->phone }}</a>
            </div>
            <h3 class="mt-14 text-sm font-semibold text-muted lg:mt-auto lg:pt-14">{{ $orderHeading }}</h3>
            <ul role="list" class="mt-4 flex flex-wrap gap-2">
                @foreach ($site->order_items as $thing)
                    <li class="border border-line px-3 py-1.5 text-base text-ink">{{ $thing }}</li>
                @endforeach
            </ul>
        </div>
        <div class="grid grid-cols-1 gap-px bg-line">
            <div class="bg-canvas px-5 py-12 sm:px-8 lg:px-12 lg:py-16">
                <h3 class="font-display text-3xl text-ink">{{ $hoursHeading }}</h3>
                <dl class="mt-6 divide-y divide-line border-y border-line">
                    @foreach ($items as $row)
                        <div class="flex items-baseline justify-between gap-6 py-4">
                            <dt class="text-base text-ink">{{ $row->day }}</dt>
                            <dd class="text-base font-medium text-ink tabular-nums">{{ $row->hours }}</dd>
                        </div>
                    @endforeach
                </dl>
                <p class="mt-5 text-base/7 text-muted">{{ $site->hours_note }}</p>
            </div>
            <div class="bg-canvas px-5 py-12 sm:px-8 lg:px-12 lg:py-16">
                <h3 class="font-display text-3xl text-ink">{{ $findHeading }}</h3>
                <p class="mt-6 text-lg/8 text-ink">{{ $site->address }}<br>{{ $site->city }}</p>
                <p class="mt-6">
                    <a href="{{ $site->map_link }}" class="inline-flex items-center gap-2 py-1 text-base font-semibold text-primary underline decoration-primary/40 underline-offset-8 transition-colors duration-150 hover:decoration-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $directionsLabel }}</a>
                </p>
            </div>
        </div>
    </div>
</section>
