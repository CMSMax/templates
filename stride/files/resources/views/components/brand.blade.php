@props(['inverted' => '0'])
@if ($inverted == '1' && $site->logo_inverted)
    <img src="{{ $site->logo_inverted }}" alt="{{ $site->name }}" class="h-9 w-auto">
@elseif ($site->logo)
    <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-9 w-auto">
@else
    <span class="flex items-center gap-2.5">
        <span class="grid size-9 shrink-0 place-items-center rounded-[0.625rem] bg-primary text-primary-foreground" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="2.75" stroke-linecap="round" class="size-8"><path d="M7.5 21.5a8.5 8.5 0 1 1 17 0M16 21.5l5.5-6.5"/><circle cx="16" cy="21.5" r="2.25" fill="currentColor" stroke="none"/></svg>
        </span>
        <span class="font-display text-[1.5rem] font-semibold tracking-[-0.03em]">{{ $site->short_name }}</span>
    </span>
@endif
