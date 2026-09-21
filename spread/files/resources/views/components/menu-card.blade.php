@props(['menu' => []])
<article id="{{ $menu->slug }}" class="scroll-mt-28 bg-card p-2.5 text-center sm:p-3">
    <div class="flex flex-col items-center border-4 border-double border-ink/25 px-6 py-10 sm:px-10 sm:py-12">
        <p class="text-sm font-medium tracking-[0.18em] text-muted uppercase">{{ $menu->style }}</p>
        <h3 class="mt-3 font-display text-3xl tracking-tight text-balance text-ink sm:text-4xl">{{ $menu->name }}</h3>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 12" class="mt-5 h-3 w-16 text-ink/30" aria-hidden="true"><path fill="currentColor" d="M0 5.5h24v1H0zM40 5.5h24v1H40z"/><path class="fill-primary" d="M32 1.5 36.5 6 32 10.5 27.5 6Z"/></svg>
        <div class="mt-9 flex flex-col gap-9">
            @if ($menu->course_1)
                <x-menu-course :menu="$menu->slug" course="1" :heading="$menu->course_1"/>
            @endif
            @if ($menu->course_2)
                <x-menu-course :menu="$menu->slug" course="2" :heading="$menu->course_2"/>
            @endif
            @if ($menu->course_3)
                <x-menu-course :menu="$menu->slug" course="3" :heading="$menu->course_3"/>
            @endif
        </div>
        <div class="mt-10 flex w-full flex-col items-center gap-1 border-t border-ink/15 pt-7">
            <p class="font-display text-5xl text-primary tabular-nums">{{ $site->currency }}{{ $menu->price }}</p>
            <p class="text-base text-muted sm:text-sm">per guest · {{ $menu->minimum }} minimum</p>
        </div>
    </div>
</article>
