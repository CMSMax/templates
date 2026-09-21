@props([
    'eyebrow' => 'The colour card',
    'heading' => 'Six cloths for the season.',
    'body' => 'Every autumn we pin a cutting of each cloth to a card by the till. Pick one to see what was made from it.',
    'pieceLabel' => 'Piece',
    'clothLabel' => 'Cloth',
    'makerLabel' => 'Made by',
    'priceLabel' => 'Price',
    'linkLabel' => 'See the piece',
    'items' => [],
])
<section id="colour-card" class="bg-ink py-20 text-canvas sm:py-28">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="relative flex flex-wrap gap-x-4 gap-y-6 lg:min-h-[42rem] lg:content-start lg:pr-[calc(58.333%+2.5rem)]">
            <div class="-order-1 basis-full pb-6">
                <p class="text-sm font-medium text-field">{{ $eyebrow }}</p>
                <h2 class="mt-4 max-w-[14ch] font-display text-[clamp(2.25rem,4.4vw,3.75rem)] leading-none font-semibold tracking-[-0.035em] text-balance text-canvas">{{ $heading }}</h2>
                <p class="mt-5 max-w-[40ch] text-lg/8 text-pretty text-canvas/70">{{ $body }}</p>
            </div>
            @foreach ($items as $swatch)
                <input type="radio" name="colour-card" id="colour-card-{{ $loop->iteration }}" class="swatch-input peer sr-only" @if ($loop->first) checked @endif>
                <label for="colour-card-{{ $loop->iteration }}" class="group w-[calc((100%-2rem)/3)] cursor-pointer text-canvas sm:w-24">
                    <span data-chip class="relative block transition-transform duration-200 group-hover:-translate-y-1">
                        <span class="pinked block bg-canvas/25 p-px">
                            <span class="pinked block aspect-square w-full bg-(--chip)" style="--chip: {{ $swatch->color }}"></span>
                        </span>
                        <span data-tick class="absolute -top-1.5 -right-1.5 grid size-5 place-items-center rounded-full bg-spot text-ink opacity-0" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" class="size-3"><path d="m4 8.5 2.5 2.5L12 5.5"/></svg></span>
                    </span>
                    <span class="mt-3 block text-sm text-canvas/60 tabular-nums">No. {{ $swatch->number }}</span>
                    <span class="block text-sm font-medium text-canvas">{{ $swatch->name }}</span>
                </label>
                <div class="swatch-panel order-1 mt-6 basis-full gap-8 sm:grid-cols-[minmax(0,5fr)_minmax(0,4fr)] sm:items-end lg:absolute lg:inset-y-0 lg:right-0 lg:mt-0 lg:w-7/12">
                    <img src="{{ $swatch->image }}" alt="{{ $swatch->imageAlt }}" width="896" height="1120" loading="lazy" decoding="async" class="pinked aspect-4/5 w-full bg-surface object-cover [--tooth:14px]">
                    <div>
                        <p class="font-display text-[clamp(4rem,8vw,7rem)] leading-none font-semibold tracking-[-0.05em] text-canvas tabular-nums" aria-hidden="true">{{ $swatch->number }}</p>
                        <h3 class="mt-4 font-display text-2xl font-medium tracking-tight text-canvas">{{ $swatch->name }}</h3>
                        <dl class="mt-6 border-t border-canvas/15 text-base/6 sm:text-sm/6">
                            <div class="flex justify-between gap-6 border-b border-canvas/15 py-3"><dt class="text-canvas/60">{{ $pieceLabel }}</dt><dd class="text-right text-canvas">{{ $swatch->piece }}</dd></div>
                            <div class="flex justify-between gap-6 border-b border-canvas/15 py-3"><dt class="text-canvas/60">{{ $clothLabel }}</dt><dd class="text-right text-canvas">{{ $swatch->cloth }}</dd></div>
                            <div class="flex justify-between gap-6 border-b border-canvas/15 py-3"><dt class="text-canvas/60">{{ $makerLabel }}</dt><dd class="text-right text-canvas">{{ $swatch->maker }}</dd></div>
                            <div class="flex justify-between gap-6 border-b border-canvas/15 py-3"><dt class="text-canvas/60">{{ $priceLabel }}</dt><dd class="text-right text-canvas tabular-nums">{{ $swatch->price }}</dd></div>
                        </dl>
                        <a href="{{ $swatch->link }}" class="mt-8 inline-flex bg-field px-5 py-3 font-medium text-ink hover:bg-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-field">{{ $linkLabel }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
