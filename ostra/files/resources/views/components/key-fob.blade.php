@props(['number' => '01', 'size' => 'md'])
{{-- The signature: a claret key-fob tag with a punched hole and a ring, the room number in Bodoni italic. --}}
<span class="flex flex-col items-center" aria-hidden="true">
    <span class="size-5 rounded-full border-2 border-primary"></span>
    @if ($size == 'sm')
        <span class="-mt-1 flex h-24 w-14 flex-col items-center rounded-full bg-primary pt-3 pb-3.5 text-primary-foreground shadow-lg shadow-ink/25">
            <span class="size-2.5 rounded-full bg-canvas"></span>
            <span class="mt-auto font-sans text-[0.5625rem] font-medium tracking-[0.2em] uppercase">No.</span>
            <span class="font-display text-2xl italic tabular-nums">{{ $number }}</span>
        </span>
    @else
        <span class="-mt-1 flex h-32 w-[4.5rem] flex-col items-center rounded-full bg-primary pt-4 pb-5 text-primary-foreground shadow-lg shadow-ink/25">
            <span class="size-3 rounded-full bg-canvas"></span>
            <span class="mt-auto font-sans text-[0.625rem] font-medium tracking-[0.22em] uppercase">No.</span>
            <span class="font-display text-[2rem] italic tabular-nums">{{ $number }}</span>
        </span>
    @endif
</span>
