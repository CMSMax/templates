@props([
    'items' => [],
    'heading' => 'Pick it off the wall.',
    'body' => 'Flash is drawn in-house and tattooed once. When a piece is claimed it gets the stamp, and the next sheet goes up.',
    'limit' => '8',
    'columns' => '4',
    'linkLabel' => 'See the whole sheet',
    'linkUrl' => '/flash',
])
<section id="flash" class="scroll-mt-16 border-y-2 border-ink bg-primary py-20 text-primary-foreground lg:py-28">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        @if ($heading)
            <div class="mb-14 grid gap-6 lg:mb-16 lg:grid-cols-[7fr_5fr] lg:items-end lg:gap-16">
                <h2 class="max-w-[13ch] font-display text-[clamp(2.25rem,5vw,4rem)] leading-[1] tracking-[-0.02em] text-balance uppercase">{{ $heading }}</h2>
                <div>
                    <p class="max-w-[44ch] text-lg/8">{{ $body }}</p>
                    <p class="mt-4 flex items-center gap-2.5 text-base font-semibold">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>
                        {{ $site->walkin_note }}
                    </p>
                </div>
            </div>
        @endif
        <ul role="list" class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 sm:gap-y-10 @if ($columns == '4') lg:grid-cols-4 @endif">
            @foreach ($items as $piece)
                <li class="group relative odd:-rotate-1 even:rotate-[1.25deg]">
                    <span class="absolute -top-2 left-1/2 z-10 size-4 -translate-x-1/2 rounded-full border-2 border-ink bg-surface" aria-hidden="true"></span>
                    <div class="relative bg-surface p-3 shadow-[0_14px_24px_-14px_rgb(14_14_14/0.55)] transition-transform duration-200 ease-out group-hover:-translate-y-1 group-hover:rotate-0 sm:p-4">
                        <div class="flex items-baseline justify-between gap-2 border-b border-ink pb-2">
                            <p class="font-display text-xs tracking-[0.04em] uppercase tabular-nums">No. {{ $piece->number }}</p>
                            <p class="font-display text-base tabular-nums sm:text-lg">{{ $site->currency }}{{ $piece->price }}</p>
                        </div>
                        <img src="{{ $piece->image }}" alt="{{ $piece->alt }}" width="200" height="200" loading="lazy" decoding="async" class="mx-auto my-3 aspect-square w-full max-w-[11rem] @if ($piece->taken) opacity-35 grayscale @endif">
                        <p class="text-base/6 font-semibold">{{ $piece->name }}</p>
                        <p class="mt-0.5 text-sm text-muted">{{ $piece->size }} · {{ $piece->artist }}</p>
                        @if ($piece->taken)
                            <p class="absolute top-[38%] left-1/2 -translate-x-1/2 -translate-y-1/2 -rotate-[14deg] border-[3px] border-ink bg-surface/80 px-3 py-1 font-display text-xl tracking-[0.08em] uppercase sm:text-2xl">Taken</p>
                        @endif
                    </div>
                </li>
                @break($loop->iteration == $limit)
            @endforeach
        </ul>
        @if ($linkLabel)
            <div class="mt-14 flex justify-center">
                <a href="{{ $linkUrl }}" class="inline-flex items-center gap-2.5 border-2 border-ink bg-ink py-3.5 pr-5 pl-6 text-lg font-semibold text-canvas hover:bg-surface hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">
                    {{ $linkLabel }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
                </a>
            </div>
        @endif
    </div>
</section>
