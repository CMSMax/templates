@props([
    'heading' => 'Book a service.',
    'body' => 'Call and a service writer picks up — not a phone tree. Tell us the car and what it’s doing, and we’ll give you a time today.',
    'afterHoursLabel' => 'After hours?',
    'afterHours' => 'Leave your keys in the drop box by the front door with a note. We’ll call you first thing.',
    'directionsLabel' => 'Get directions',
    'image' => '/images/shop.jpg',
    'imageAlt' => 'The shop from the street: a white brick building with two open service bays and a car up on the lift',
])
<section id="book" class="scroll-mt-18 py-20 lg:py-28">
    <div class="mx-auto grid max-w-7xl grid-cols-1 gap-14 px-5 sm:px-8 lg:grid-cols-12 lg:gap-12">
        <div class="lg:col-span-7">
            <h2 class="font-display text-[clamp(2.75rem,6vw,5rem)] leading-[0.92] font-bold text-balance text-ink uppercase">{{ $heading }}</h2>
            <p class="mt-6 max-w-[48ch] text-lg/8 text-muted">{{ $body }}</p>
            <a href="{{ $site->phone_href }}" class="group mt-10 inline-flex items-center gap-4 rounded-lg bg-primary py-4 pr-6 pl-4 text-primary-foreground transition-colors duration-150 hover:bg-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink sm:gap-5 sm:pr-8">
                <span class="grid size-12 shrink-0 place-items-center rounded-md bg-primary-foreground/15 sm:size-14" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-6"><path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 0 1 3.5 2h1.148a1.5 1.5 0 0 1 1.465 1.175l.513 2.31a1.5 1.5 0 0 1-1.02 1.745l-.97.323a.5.5 0 0 0-.297.637 10.03 10.03 0 0 0 5.47 5.47.5.5 0 0 0 .637-.297l.323-.97a1.5 1.5 0 0 1 1.745-1.02l2.31.513A1.5 1.5 0 0 1 18 15.352V16.5a1.5 1.5 0 0 1-1.5 1.5H15C8.373 18 3 12.627 3 6V4.5" clip-rule="evenodd"/></svg>
                </span>
                <span class="flex flex-col">
                    <span class="text-sm font-semibold opacity-90">Call to book</span>
                    <span class="font-display text-[clamp(1.75rem,4.5vw,2.75rem)] leading-none font-bold tracking-wide tabular-nums">{{ $site->phone }}</span>
                </span>
            </a>
            <div class="mt-12 max-w-[52ch] border-t border-line pt-6">
                <h3 class="font-display text-lg font-bold tracking-wide text-ink uppercase">{{ $afterHoursLabel }}</h3>
                <p class="mt-2 text-base/7 text-muted">{{ $afterHours }}</p>
            </div>
        </div>

        <div class="lg:col-span-5">
            <div class="overflow-hidden rounded-xl bg-surface ring-1 ring-line">
                @if ($image)
                    <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1376" height="768" loading="lazy" decoding="async" class="aspect-[16/9] w-full border-b border-line object-cover">
                @endif
                <div class="p-7 sm:p-9">
                    <h3 class="font-display text-lg font-bold tracking-wide text-ink uppercase">Hours</h3>
                    <dl class="mt-4 divide-y divide-line border-y border-line">
                        @foreach ($hours as $row)
                            <div class="flex justify-between gap-4 py-3 text-base">
                                <dt class="text-muted">{{ $row->day }}</dt>
                                <dd class="font-semibold text-ink tabular-nums">{{ $row->hours }}</dd>
                            </div>
                        @endforeach
                    </dl>
                    <p class="mt-4 text-base/7 text-muted sm:text-sm/6">{{ $site->hours_note }}</p>

                    <h3 class="mt-10 font-display text-lg font-bold tracking-wide text-ink uppercase">Find the shop</h3>
                    <address class="mt-3 text-lg/8 text-ink not-italic">
                        {{ $site->address }}<br>
                        {{ $site->city }}
                    </address>
                    <div class="mt-5 flex flex-wrap items-center gap-x-6 gap-y-3">
                        <a href="{{ $site->map_url }}" class="inline-flex items-center gap-2 rounded-md px-4 py-3 text-base font-semibold text-ink ring-1 ring-ink/30 transition-colors duration-150 ring-inset hover:bg-ink hover:text-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="m9.69 18.933.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 0 0 .281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 1 0 3 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 0 0 2.273 1.765 11.842 11.842 0 0 0 .976.544l.062.029.018.008.006.003ZM10 11.25a2.25 2.25 0 1 0 0-4.5 2.25 2.25 0 0 0 0 4.5Z" clip-rule="evenodd"/></svg>
                            {{ $directionsLabel }}
                        </a>
                        <a href="mailto:{{ $site->email }}" class="rounded-sm py-2 text-base text-muted underline decoration-muted/40 underline-offset-4 transition-colors duration-150 hover:text-ink hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->email }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
