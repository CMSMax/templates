@if ($site->logo)
    <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-8 w-auto">
@else
    <span class="flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="size-7 shrink-0" aria-hidden="true"><path class="fill-primary" stroke="currentColor" stroke-width="2.25" stroke-linejoin="round" d="M16 2.5c1.4 8.6 4.9 12.1 13.5 13.5-8.6 1.4-12.1 4.9-13.5 13.5-1.4-8.6-4.9-12.1-13.5-13.5C11.1 14.6 14.6 11.1 16 2.5Z"/></svg>
        <span class="font-display text-[1.375rem] tracking-[-0.01em] uppercase">{{ $site->short_name }}</span>
    </span>
@endif
