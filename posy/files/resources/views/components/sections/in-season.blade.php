@props([
    'heading' => 'The week’s still life, keyed',
    'body' => 'What is in the studio this week, and where it grew. The farms change with the season; so does this list.',
    'caption' => 'Arranged on Monday in a glazed stoneware jar.',
    'image' => '/images/still-life-keyed.jpg',
    'imageAlt' => 'A tall autumn bouquet of café au lait dahlias, rust garden roses, apricot ranunculus, burgundy scabiosa, a foxglove, and oat grass in a dark glazed vase.',
    'showMarkers' => '1',
    'items' => [],
])
<section id="in-season" class="border-y border-line bg-surface py-20 sm:py-28">
    <div class="mx-auto grid max-w-7xl gap-x-10 gap-y-14 px-6 lg:grid-cols-12 lg:px-8">
        <figure class="lg:col-span-6">
            <div class="relative">
                <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1400" height="1738" loading="lazy" decoding="async" class="aspect-4/5 w-full bg-canvas object-cover">
                @if ($showMarkers == '1')
                    @foreach ($items as $stem)
                        <span class="absolute top-(--y) left-(--x) grid size-8 -translate-1/2 place-items-center rounded-full bg-canvas/80 font-display text-base text-primary tabular-nums ring-1 ring-ink/40 backdrop-blur-sm sm:size-9" style="--x: {{ $stem->x }}%; --y: {{ $stem->y }}%" aria-hidden="true">{{ $loop->iteration }}</span>
                    @endforeach
                @endif
            </div>
            <figcaption class="mt-4 font-display text-base text-muted italic">{{ $caption }}</figcaption>
        </figure>
        <div class="lg:col-span-5 lg:col-start-8 lg:self-center">
            <h2 class="font-display text-4xl tracking-tight text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
            <p class="mt-5 max-w-[48ch] text-lg/8 text-muted">{{ $body }}</p>
            <ol role="list" class="mt-10 border-t border-line">
                @foreach ($items as $stem)
                    <li class="grid grid-cols-[2.75rem_1fr] items-baseline gap-x-4 border-b border-line py-5">
                        <span class="font-display text-3xl text-primary tabular-nums" aria-hidden="true">{{ $loop->iteration }}</span>
                        <div>
                            <p class="font-display text-xl text-ink">{{ $stem->name }} <span class="text-muted italic">— {{ $stem->latin }}</span></p>
                            <p class="mt-1 text-sm/6 text-muted">{{ $stem->source }}</p>
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
</section>
