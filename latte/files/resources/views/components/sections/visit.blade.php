@props([
    'eyebrow' => 'Visit',
    'heading' => 'Come sit',
    'headingAccent' => 'a while.',
    'body' => 'Two blocks from the park, with a bike rack out front and plenty of room for strollers. Walk-ins only — we save the window bench for whoever gets there first.',
    'image' => '/images/window-seat.jpg',
    'imageAlt' => 'A cup of filter coffee and an open book at a sunny window table',
])
<section id="visit" class="scroll-mt-20 py-20 lg:py-28">
    <div class="mx-auto grid max-w-6xl items-center gap-12 px-6 lg:grid-cols-2 lg:gap-20">
        <img src="{{ $image }}" alt="{{ $imageAlt }}" width="896" height="1120" loading="lazy" decoding="async" class="aspect-[4/5] w-full rounded-[min(3vw,28px)] object-cover max-lg:aspect-[4/3]">
        <div>
            <p class="text-sm font-medium text-muted">{{ $eyebrow }}</p>
            <h2 class="mt-4 font-display text-4xl font-medium tracking-tight text-balance text-ink sm:text-5xl">{{ $heading }} <em class="font-serif font-normal tracking-normal italic">{{ $headingAccent }}</em></h2>
            <p class="mt-6 max-w-[48ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
            <address class="mt-10 text-2xl font-medium tracking-tight text-ink not-italic">
                {{ $site->address }}<br>
                <span class="text-muted">{{ $site->city }}</span>
            </address>
            <dl class="mt-8 divide-y divide-line border-y border-line">
                @foreach ($hours as $slot)
                    <div class="flex items-baseline justify-between gap-6 py-3.5">
                        <dt class="text-base font-medium text-ink">{{ $slot->day }}</dt>
                        <dd class="text-base text-muted tabular-nums">{{ $slot->hours }}</dd>
                    </div>
                @endforeach
            </dl>
            <p class="mt-4 text-sm text-muted">{{ $site->hours_note }}.</p>
            <div class="mt-10 flex flex-wrap items-center gap-3">
                <a href="{{ $site->directions_url }}" class="inline-flex items-center gap-2 rounded-full bg-primary py-3.5 pr-4 pl-6 text-base font-medium text-primary-foreground hover:bg-primary/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                    {{ $site->cta_label }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 0 0 1.06 0l7.22-7.22v5.69a.75.75 0 0 0 1.5 0v-7.5a.75.75 0 0 0-.75-.75h-7.5a.75.75 0 0 0 0 1.5h5.69l-7.22 7.22a.75.75 0 0 0 0 1.06Z" clip-rule="evenodd"/></svg>
                </a>
                <a href="{{ $site->phone_href }}" class="rounded-full px-6 py-3.5 text-base font-medium text-ink ring-1 ring-line ring-inset hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Call {{ $site->phone }}</a>
            </div>
        </div>
    </div>
</section>
