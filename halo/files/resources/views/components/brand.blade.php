@props(['inverted' => '0'])
@if ($inverted == '1' && $site->logo_inverted)
    <img src="{{ $site->logo_inverted }}" alt="{{ $site->name }}" class="h-9 w-auto">
@elseif ($site->logo)
    <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-9 w-auto">
@else
    <span class="flex items-center gap-2.5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" class="size-8 shrink-0 text-primary" aria-hidden="true"><path fill-rule="evenodd" d="M9.5 27V14.5a6.5 6.5 0 0 1 13 0V27Zm2.5-2.5V14.5a4 4 0 0 1 8 0v10Z"/><path d="M25 3.5l.9 2.1 2.1.9-2.1.9-.9 2.1-.9-2.1-2.1-.9 2.1-.9Z"/></svg>
        <span class="font-display text-[1.75rem] leading-none italic tracking-tight">{{ $site->short_name }}</span>
    </span>
@endif
