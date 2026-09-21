@props(['inverted' => '0'])
@if ($inverted == '1' && $site->logo_inverted)
    <img src="{{ $site->logo_inverted }}" alt="{{ $site->name }}" class="h-9 w-auto">
@elseif ($site->logo)
    <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-9 w-auto">
@else
    <span class="flex items-center gap-2.5">
        <span class="grid size-9 shrink-0 place-items-center rounded-full bg-primary text-primary-foreground" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" fill-rule="evenodd" class="size-7"><path d="M3 22.6 12.2 17.4c1.4-4.2 4.7-7 8.8-7 1.3 0 2.4-.9 3.2-1.8 1.2-1.3 3.2-1 4 .5l1.4 1.1-1.6.7c.3 5-3.4 9.4-8.7 9.7-2.7.2-4.9-.4-6.5-1.3L3.6 23.7 3 22.6Zm22.6-12.9a.95.95 0 1 0 0 1.9.95.95 0 0 0 0-1.9Z"/></svg>
        </span>
        <span class="font-display text-[1.5rem] font-semibold tracking-tight">{{ $site->short_name }}</span>
    </span>
@endif
