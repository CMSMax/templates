@props([
    'kicker' => 'The day, on one page',
    'heading' => 'Every vendor gets the same sheet',
    'body' => 'Two weeks before the wedding we send one timeline to everyone working the day, down to the minute. This is a real one, lightly edited.',
    'sheetTitle' => 'Order of the day',
    'sheetCouple' => 'Maren & Jo',
    'sheetDate' => 'Saturday, May 16',
    'items' => [],
])
<section class="bg-surface py-24 sm:py-32">
    <div class="mx-auto grid max-w-7xl gap-x-16 gap-y-14 px-6 lg:grid-cols-12 lg:items-center lg:px-8">
        <div class="lg:col-span-5">
            <p class="label-caps text-muted">{{ $kicker }}</p>
            <h2 class="mt-5 max-w-[16ch] font-display text-4xl tracking-tight text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
            <p class="mt-6 max-w-[44ch] text-lg/8 text-muted">{{ $body }}</p>
        </div>
        <figure class="relative bg-canvas px-6 py-8 shadow-xl shadow-ink/5 ring-1 ring-ink/10 sm:px-10 sm:py-12 lg:col-span-6 lg:col-start-7">
            <span class="absolute -top-3 left-1/2 h-6 w-28 -translate-x-1/2 -rotate-2 bg-secondary" aria-hidden="true"></span>
            <figcaption class="flex flex-wrap items-baseline justify-between gap-x-6 gap-y-2 border-b-2 border-ink pb-5">
                <span class="font-display text-3xl tracking-tight text-ink">{{ $sheetTitle }}</span>
                <span class="label-caps text-muted">{{ $sheetCouple }} · {{ $sheetDate }}</span>
            </figcaption>
            <ol role="list">
                @foreach ($items as $moment)
                    <li class="grid grid-cols-[4rem_1fr] gap-x-5 border-b border-ink/10 py-4 sm:grid-cols-[4.5rem_1fr]">
                        <p class="font-display text-xl text-primary tabular-nums">{{ $moment->time }}</p>
                        <div>
                            <p class="text-base/6 font-medium text-ink">{{ $moment->title }}</p>
                            <p class="mt-1 text-sm/6 text-muted">{{ $moment->note }}</p>
                        </div>
                    </li>
                @endforeach
            </ol>
        </figure>
    </div>
</section>
