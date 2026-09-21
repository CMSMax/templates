@props(['value' => '1'])
<span class="inline-flex items-center gap-2">
    <span class="flex gap-1" aria-hidden="true">
        @foreach ($site->levels as $step)
            @if ($step->value <= $value)
                <span class="size-2 rounded-full bg-primary"></span>
            @else
                <span class="size-2 rounded-full ring-1 ring-primary/40 ring-inset"></span>
            @endif
        @endforeach
    </span>
    @foreach ($site->levels as $step)
        @if ($step->value == $value)
            <span>{{ $step->label }}</span>
        @endif
    @endforeach
</span>
