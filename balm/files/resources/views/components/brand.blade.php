@if ($site->logo)
    <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-8 w-auto">
@else
    <span class="flex items-center gap-2.5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="size-7 shrink-0" aria-hidden="true"><path fill="currentColor" d="M16 2.5c2.6 3.4 4.2 5.9 4.2 7.9a4.2 4.2 0 0 1-8.4 0c0-2 1.6-4.5 4.2-7.9Z"/><path fill="none" stroke="currentColor" stroke-width="1.8" d="M4.5 22.2c0-3.6 5.1-6.2 11.5-6.2s11.5 2.6 11.5 6.2c0 3.3-4.6 6.3-11.5 6.3S4.5 25.5 4.5 22.2Z"/></svg>
        <span class="font-display text-2xl tracking-tight">{{ $site->short_name }}</span>
    </span>
@endif
