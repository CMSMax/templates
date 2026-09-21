@props([
    'characters' => 'Torque',
    'top' => '',
    'slogan' => '',
    'frameTop' => '',
    'frameBottom' => '',
    'stickerTop' => '',
    'stickerBottom' => '',
    'label' => '',
])
<figure class="plate-frame" role="img" aria-label="{{ $label }}">
<div class="relative px-[2.4cqi] pt-[7cqi] pb-[8.5cqi] text-field-ink">
    <p class="absolute inset-x-0 top-[2cqi] text-center font-display text-[3.6cqi] leading-none font-semibold tracking-[0.18em] whitespace-nowrap uppercase" aria-hidden="true">{{ $frameTop }}</p>
    <div class="plate" aria-hidden="true">
        <span class="bolt top-[5cqi] left-[17cqi]"></span>
        <span class="bolt top-[5cqi] right-[17cqi]"></span>
        <span class="bolt bottom-[5cqi] left-[17cqi]"></span>
        <span class="bolt bottom-[5cqi] right-[17cqi]"></span>
        @if ($stickerTop)
            <span class="sticker absolute top-[4cqi] right-[3.5cqi] flex w-[13cqi] flex-col items-center py-[1.4cqi] text-center font-display leading-none">
                <span class="text-[4.6cqi] font-extrabold uppercase">{{ $stickerTop }}</span>
                <span class="mt-[0.6cqi] text-[2.3cqi] font-semibold tracking-[0.06em] uppercase">{{ $stickerBottom }}</span>
            </span>
        @endif
        <span class="absolute inset-x-0 top-[5.2cqi] text-center font-display text-[4.6cqi] leading-none font-bold tracking-[0.2em] text-primary uppercase">{{ $top }}</span>
        <span class="stamped absolute inset-x-0 top-1/2 -translate-y-[52%] text-center font-display text-[23cqi] leading-none font-bold tracking-[0.02em] whitespace-nowrap text-ink uppercase">{{ $characters }}</span>
        <span class="absolute inset-x-0 bottom-[5.4cqi] text-center font-display text-[3.6cqi] leading-none font-semibold tracking-[0.12em] text-muted uppercase">{{ $slogan }}</span>
    </div>
    <p class="absolute inset-x-0 bottom-[2.4cqi] text-center font-display text-[4.4cqi] leading-none font-bold tracking-[0.14em] whitespace-nowrap tabular-nums" aria-hidden="true">{{ $frameBottom }}</p>
</div>
</figure>
