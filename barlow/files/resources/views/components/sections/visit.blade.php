@props([
    'heading' => 'Pull up a chair.',
    'body' => 'Book ahead to guarantee your time, or walk in and grab a coffee while you wait. There is always a fresh pot and something good on the record player.',
    'image' => '/images/interior.jpg',
    'imageAlt' => 'The barbershop at dusk, with leather chairs, brass mirrors, and warm pendant lights',
])
<section id="visit" class="relative isolate scroll-mt-20 overflow-hidden">
    <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1344" height="752" loading="lazy" decoding="async" class="absolute inset-0 -z-20 size-full object-cover">
    <div class="absolute inset-0 -z-10 bg-canvas/75" aria-hidden="true"></div>
    <div class="mx-auto grid max-w-7xl items-center gap-16 px-6 py-24 lg:grid-cols-[7fr_5fr] lg:gap-24 lg:py-36">
        <div>
            <h2 class="max-w-[12ch] font-display text-6xl leading-[0.9] font-semibold text-balance text-ink uppercase sm:text-7xl lg:text-8xl">{{ $heading }}</h2>
            <p class="mt-8 max-w-[46ch] text-lg/8 text-pretty text-ink/80">{{ $body }}</p>
            <address class="mt-10 text-xl text-ink not-italic">
                <a href="{{ $site->directions_url }}" class="inline-flex items-start gap-3 underline-offset-4 hover:underline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="mt-1 size-5 shrink-0 text-primary" aria-hidden="true"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
                    <span>{{ $site->address }}, {{ $site->city }}</span>
                </a>
            </address>
            <div class="mt-10 flex flex-wrap items-center gap-3">
                <a href="{{ $site->phone_href }}" class="inline-flex items-center gap-2 rounded-xs bg-primary py-3.5 pr-4 pl-6 font-display text-lg font-semibold tracking-[0.08em] text-primary-foreground uppercase hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                    Call to book
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </a>
                <a href="{{ $site->directions_url }}" class="rounded-xs px-6 py-3.5 text-base font-medium text-ink ring-1 ring-ink/25 ring-inset hover:bg-ink/5 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Get directions</a>
            </div>
        </div>
        <div class="border border-line bg-canvas/90 p-2">
            <div class="border border-line px-6 py-8 sm:px-10 sm:py-10">
                <h3 class="font-display text-3xl font-semibold text-ink uppercase">Hours</h3>
                <dl class="mt-6 divide-y divide-line">
                    @foreach ($hours as $slot)
                        <div class="flex items-baseline gap-3 py-3.5">
                            <dt class="text-base font-medium text-ink">{{ $slot->day }}</dt>
                            <span class="leader" aria-hidden="true"></span>
                            <dd class="text-base text-muted tabular-nums">{{ $slot->hours }}</dd>
                        </div>
                    @endforeach
                </dl>
                <p class="mt-6 text-sm/6 text-muted">{{ $site->hours_note }}.</p>
                <p class="mt-6 border-t border-line pt-6 text-base">
                    <a href="{{ $site->phone_href }}" class="font-display text-2xl font-semibold tracking-wide text-primary tabular-nums hover:underline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $site->phone }}</a>
                </p>
            </div>
        </div>
    </div>
</section>
