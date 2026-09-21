@props(['menu' => '', 'course' => '1', 'heading' => ''])
<div class="flex flex-col items-center gap-5">
    <h4 class="flex items-center gap-3 text-sm font-medium tracking-[0.18em] text-muted uppercase">
        <span class="h-px w-6 bg-ink/20" aria-hidden="true"></span>
        {{ $heading }}
        <span class="h-px w-6 bg-ink/20" aria-hidden="true"></span>
    </h4>
    <ul role="list" class="flex flex-col gap-4">
        @foreach ($dishes as $dish)
            @if ($dish->menu == $menu && $dish->course == $course)
                <li>
                    <p class="font-display text-xl text-ink">{{ $dish->name }}</p>
                    <p class="mt-0.5 text-base/6 text-muted sm:text-sm/6">{{ $dish->note }}</p>
                </li>
            @endif
        @endforeach
    </ul>
</div>
