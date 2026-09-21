@props([
    'label' => 'Visit',
    'heading' => 'Your first week is on us.',
    'body' => 'Call or email and we will book you into Foundations, or any class on the board. Bring flat shoes and water; we have the rest.',
    'image' => '/images/floor.jpg',
    'imageAlt' => 'The gym floor in the morning: a row of squat racks, stacked plates and rowing machines under tall windows',
    'hoursLabel' => 'Hours',
    'addressLabel' => 'Find us',
    'directionsLabel' => 'Get directions',
    'arrivalNote' => 'Free parking behind the building. Bike racks by the door.',
    'items' => [],
])
<section id="visit" class="py-20 lg:py-32">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1024" height="688" loading="lazy" decoding="async" class="aspect-[16/9] w-full rounded-sm object-cover lg:aspect-[21/8]">
        <div class="mt-14 grid gap-12 lg:mt-20 lg:grid-cols-12 lg:gap-8">
            <div class="lg:col-span-6">
                <p class="font-display text-[0.9375rem] font-bold tracking-[0.14em] text-muted uppercase">{{ $label }}</p>
                <h2 class="mt-5 max-w-[12ch] font-display text-[clamp(2.75rem,6vw,5rem)] leading-[0.9] font-black text-ink uppercase">{{ $heading }}</h2>
                <p class="mt-6 max-w-[46ch] text-lg/8 text-muted">{{ $body }}</p>
                <div class="mt-9 flex flex-wrap items-center gap-x-7 gap-y-4">
                    <a href="{{ $site->phone_href }}" class="inline-flex items-center gap-3 rounded-sm bg-primary py-4 pr-6 pl-5 font-display text-2xl leading-none font-extrabold tracking-[0.05em] text-primary-foreground uppercase transition-colors duration-150 hover:bg-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
                        <span class="tabular-nums">{{ $site->phone }}</span>
                    </a>
                    <a href="mailto:{{ $site->email }}" class="rounded-sm py-3 text-base font-semibold text-ink underline decoration-ink/30 decoration-2 underline-offset-6 transition-colors duration-150 hover:decoration-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $site->email }}</a>
                </div>
            </div>
            <div class="grid gap-10 sm:grid-cols-2 lg:col-span-6 lg:gap-8">
                <div>
                    <h3 class="border-b-2 border-ink pb-2 font-display text-2xl leading-none font-black tracking-wide text-ink uppercase">{{ $hoursLabel }}</h3>
                    <dl class="divide-y divide-line">
                        @foreach ($items as $row)
                            <div class="flex justify-between gap-4 py-3 text-base">
                                <dt class="text-muted">{{ $row->day }}</dt>
                                <dd class="text-right font-semibold text-ink tabular-nums">{{ $row->hours }}</dd>
                            </div>
                        @endforeach
                    </dl>
                    <p class="mt-3 text-sm/6 text-muted">{{ $site->hours_note }}</p>
                </div>
                <div>
                    <h3 class="border-b-2 border-ink pb-2 font-display text-2xl leading-none font-black tracking-wide text-ink uppercase">{{ $addressLabel }}</h3>
                    <address class="mt-4 text-base/7 text-ink not-italic">
                        {{ $site->address }}<br>
                        {{ $site->city }}
                    </address>
                    <a href="{{ $site->map_url }}" class="mt-3 inline-flex items-center gap-2 rounded-sm py-2 text-base font-semibold text-ink underline decoration-ink/30 decoration-2 underline-offset-6 transition-colors duration-150 hover:decoration-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $directionsLabel }}</a>
                    <p class="mt-3 text-sm/6 text-muted">{{ $arrivalNote }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
