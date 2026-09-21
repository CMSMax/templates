@props(['inverted' => '0'])
@if ($inverted == '1' && $site->logo_inverted)
    <img src="{{ $site->logo_inverted }}" alt="{{ $site->name }}" class="h-9 w-auto">
@elseif ($site->logo)
    <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-9 w-auto">
@else
    <span class="flex items-center gap-2.5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="size-8 shrink-0" aria-hidden="true">
            <path fill="var(--color-primary)" d="M7 21a9 9 0 0 1 18 0Z"/>
            <path fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" d="M3 21h26M9 25.5h14"/>
        </svg>
        <span class="font-display text-[1.75rem] leading-none font-light tracking-[-0.02em] italic">{{ $site->short_name }}<span class="text-primary not-italic">.</span></span>
    </span>
@endif
