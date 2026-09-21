@props([
    'heading' => 'Come see the yard.',
    'body' => 'Drop by any afternoon for a look around. The dogs will want to say hello. Parking is free on Mill Street, and the gate is next to the big green door.',
    'image' => '/images/bath.jpg',
    'imageAlt' => 'A small wire-haired terrier wrapped in a brown towel on a grooming table after a bath.',
])
<section id="visit" aria-labelledby="visit-heading" class="py-20 lg:py-28">
    <div class="mx-auto grid max-w-6xl items-center gap-12 px-5 sm:px-8 lg:grid-cols-12 lg:gap-16">
        <div class="flex flex-col gap-10 lg:col-span-7">
            <div class="flex flex-col gap-5">
                <h2 id="visit-heading" class="font-display text-[clamp(2.25rem,4.5vw,3.5rem)] leading-[1.02] font-extrabold tracking-[-0.03em] text-balance">{{ $heading }}</h2>
                <p class="max-w-[36rem] text-lg/8 text-muted">{{ $body }}</p>
            </div>
            <div class="grid gap-10 sm:grid-cols-2 sm:gap-8">
                <div class="flex flex-col gap-4">
                    <h3 class="flex items-center gap-2 font-display text-lg font-extrabold tracking-tight"><x-icon name="clock" class="size-5 text-secondary"/>Hours</h3>
                    <dl class="flex flex-col divide-y divide-line border-y border-line">
                        @foreach ($hours as $row)
                            <div class="flex items-baseline justify-between gap-4 py-3">
                                <dt class="text-base text-muted">{{ $row->day }}</dt>
                                <dd class="text-right text-base font-bold text-ink tabular-nums">{{ $row->hours }}</dd>
                            </div>
                        @endforeach
                    </dl>
                    <p class="text-sm text-muted">{{ $site->hours_note }}</p>
                </div>
                <div class="flex flex-col gap-4">
                    <h3 class="flex items-center gap-2 font-display text-lg font-extrabold tracking-tight"><x-icon name="pin" class="size-5 text-secondary"/>Address</h3>
                    <address class="text-lg/8 not-italic">{{ $site->address }}<br>{{ $site->city }}</address>
                    <div class="flex flex-col items-start gap-3">
                        <a href="{{ $site->directions_url }}" class="inline-flex items-center gap-2 rounded-full px-5 py-3 text-base font-bold text-ink ring-1 ring-ink/25 ring-inset transition-colors duration-150 hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary">Get directions<x-icon name="external" class="size-4"/></a>
                        <a href="{{ $site->phone_href }}" class="inline-flex items-center gap-2 rounded-sm text-base font-bold underline decoration-ink/30 underline-offset-[6px] transition-colors duration-150 hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-secondary"><x-icon name="phone" class="size-4"/>{{ $site->phone }}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:col-span-5">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="896" height="1120" loading="lazy" decoding="async" class="aspect-[4/5] w-full rounded-[1.75rem] object-cover outline-1 -outline-offset-1 outline-ink/10">
        </div>
    </div>
</section>
