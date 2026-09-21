@props(['image' => '', 'alt' => ''])
{{-- The arched window: a photograph clipped to a round-headed arch, or —
     when no photograph is set — panes of morning light drawn in CSS. --}}
<div class="size-full rounded-t-full bg-surface p-2 ring-1 ring-line sm:p-2.5">
    @if ($image)
        <img src="{{ $image }}" alt="{{ $alt }}" width="896" height="1200" class="size-full rounded-t-full object-cover">
    @else
        <div class="window-panes relative grid size-full grid-cols-2 grid-rows-[4fr_3fr_3fr] gap-1.5 overflow-hidden rounded-t-full sm:gap-2" aria-hidden="true">
            <span></span><span></span><span></span><span></span><span></span><span></span>
            <i class="window-shine pointer-events-none absolute inset-0"></i>
        </div>
    @endif
</div>
