@if ($site->logo)
    <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-8 w-auto">
@else
    <span class="flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" class="size-7 shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="M14 5a11 11 0 1 1 0 22 11 11 0 0 1 0-22Zm0 2.5a8.5 8.5 0 1 0 0 17 8.5 8.5 0 0 0 0-17ZM24.4 13.4h3.2a2.6 2.6 0 0 1 0 5.2h-3.2Z"/><path d="M14 21.4c-.5 0-4.8-2.9-4.8-6.1a2.6 2.6 0 0 1 4.8-1.4 2.6 2.6 0 0 1 4.8 1.4c0 3.2-4.3 6.1-4.8 6.1Z"/></svg>
        <span class="font-display text-2xl font-semibold tracking-tighter">{{ $site->short_name }}</span>
    </span>
@endif
