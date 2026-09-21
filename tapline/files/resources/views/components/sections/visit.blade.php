@props([
    'heading' => 'Pull up a stool.',
    'body' => 'Walk-ins only, always. Big group? Call ahead and we’ll push some tables together.',
    'directionsLabel' => 'Get directions',
    'image' => '/images/taproom.jpg',
    'imageAlt' => 'The taproom at dusk: a long wooden bar with a row of brass taps under warm pendant lights, stools lined up in front',
])
<section id="visit" class="scroll-mt-20 py-20 lg:py-28">
    <div class="mx-auto grid max-w-7xl grid-cols-1 gap-14 px-5 sm:px-8 lg:grid-cols-12 lg:gap-16">
        <div class="lg:col-span-7">
            <h2 class="font-display text-[clamp(2.75rem,6.4vw,5.5rem)] leading-[0.96] font-black tracking-tight text-balance text-ink">{{ $heading }}</h2>
            <p class="mt-6 max-w-[46ch] text-lg/8 text-muted">{{ $body }}</p>

            <div class="mt-12 grid gap-12 sm:grid-cols-2 sm:gap-10">
                <div>
                    <h3 class="font-display text-sm font-bold tracking-wide text-ink wide">Find us</h3>
                    <address class="mt-4 text-lg/8 text-ink not-italic">
                        {{ $site->address }}<br>
                        {{ $site->city }}
                    </address>
                    <p class="mt-3 text-base">
                        <a href="{{ $site->phone_href }}" class="rounded-sm text-muted underline decoration-muted/40 underline-offset-4 hover:text-ink hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->phone }}</a>
                    </p>
                    <ul role="list" class="mt-8 flex flex-col gap-3">
                        @foreach ($site->house_notes as $note)
                            <li class="flex gap-3 text-base text-muted">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="mt-1 size-4 shrink-0 text-ink" aria-hidden="true"><path fill-rule="evenodd" d="M16.7 5.3a1 1 0 0 1 0 1.4l-8 8a1 1 0 0 1-1.4 0l-4-4a1 1 0 1 1 1.4-1.4L8 12.6l7.3-7.3a1 1 0 0 1 1.4 0Z" clip-rule="evenodd"/></svg>
                                <span>{{ $note }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h3 class="font-display text-sm font-bold tracking-wide text-ink wide">Hours</h3>
                    <dl class="mt-4 divide-y divide-line border-y border-line">
                        @foreach ($hours as $row)
                            <div class="flex justify-between gap-4 py-2.5 text-base">
                                <dt class="text-muted">{{ $row->day }}</dt>
                                <dd class="font-medium text-ink tabular-nums">{{ $row->hours }}</dd>
                            </div>
                        @endforeach
                    </dl>
                    <p class="mt-4 text-base text-muted">{{ $site->hours_note }}</p>
                </div>
            </div>

            <div class="mt-12 flex flex-wrap items-center gap-x-6 gap-y-4">
                <a href="{{ $site->map_url }}" class="inline-flex items-center gap-2 rounded-full bg-primary py-3.5 pr-4 pl-6 text-base font-semibold text-primary-foreground hover:bg-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                    {{ $directionsLabel }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.64l-4.16-3.96a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.16-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd"/></svg>
                </a>
                <a href="/menu" class="rounded-sm py-3 text-base font-semibold text-ink underline decoration-ink/35 decoration-2 underline-offset-6 hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">See what’s pouring</a>
            </div>
        </div>
        <div class="lg:col-span-5">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="896" height="1120" loading="lazy" decoding="async" class="aspect-[4/5] w-full rounded-2xl object-cover outline-1 -outline-offset-1 outline-ink/10 lg:sticky lg:top-24">
        </div>
    </div>
</section>
