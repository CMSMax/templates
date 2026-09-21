@props(['label' => 'Back', 'pins' => '1'])
<figure class="relative mx-auto w-full max-w-[20rem]">
    <div class="relative aspect-[5/7]">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 420" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="absolute inset-0 size-full text-ink" aria-hidden="true">
            <ellipse cx="150" cy="52" rx="29" ry="36"/>
            <path d="M137 85c1 10 0 18-3 25M163 85c-1 10 0 18 3 25"/>
            <path d="M134 110c-22 6-48 8-60 20-12 12-14 30-16 50l-8 82c-2 20-4 38-6 56M166 110c22 6 48 8 60 20 12 12 14 30 16 50l8 82c2 20 4 38 6 56"/>
            <path d="M44 318c-2 12 2 24 10 26 8 0 10-12 8-24M256 318c2 12-2 24-10 26-8 0-10-12-8-24"/>
            <path d="M62 320l8-58c4-22 10-48 16-66M238 320l-8-58c-4-22-10-48-16-66"/>
            <path d="M86 196c2 26 8 54 14 72 4 14 0 32-4 50-4 18-4 42 2 72M214 196c-2 26-8 54-14 72-4 14 0 32 4 50 4 18 4 42-2 72"/>
            <path d="M98 390c22 10 42 12 52 6 10 6 30 4 52-6M150 350v46M98 390l2 28M202 390l-2 28M150 396v22"/>
            <path d="M112 150c-8 20-6 46 8 58 8-8 12-32 8-52M188 150c8 20 6 46-8 58-8-8-12-32-8-52" opacity="0.55"/>
            <path d="M150 112v228" stroke-dasharray="2 6" opacity="0.6"/>
        </svg>
        @if ($pins == '1')
        @foreach ($areas as $area)
            <span class="absolute top-(--pin-y) left-(--pin-x) grid size-8 -translate-1/2 place-items-center rounded-full bg-ink font-sans text-sm font-bold text-primary tabular-nums ring-4 ring-primary/35" style="--pin-x: {{ $area->x }}%; --pin-y: {{ $area->y }}%" aria-hidden="true">{{ $area->number }}</span>
        @endforeach
        @endif
    </div>
    <figcaption class="mt-4 text-center text-sm font-semibold text-muted">{{ $label }}</figcaption>
</figure>
