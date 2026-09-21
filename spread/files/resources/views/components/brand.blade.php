@if ($site->logo)
    <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-8 w-auto">
@else
    <span class="flex items-center gap-2.5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="size-8 shrink-0" aria-hidden="true"><path class="fill-primary" d="M16 9.5c6.4 0 11 4.3 11 10S22.4 29.5 16 29.5 5 25.2 5 19.5s4.6-10 11-10Z"/><path fill="currentColor" d="M16 3.2c.6 0 1 .4 1 1v4.1l3.6-2.2c.8-.5 1.7.3 1.3 1.1l-1.5 3 3.3.4c.9.1 1.1 1.3.3 1.7l-4.9 2.3a8 8 0 0 1-6.2 0l-4.9-2.3c-.8-.4-.6-1.6.3-1.7l3.3-.4-1.5-3c-.4-.8.5-1.6 1.3-1.1L15 8.3V4.2c0-.6.4-1 1-1Z"/></svg>
        <span class="font-display text-2xl leading-none">{{ $site->short_name }}</span>
    </span>
@endif
