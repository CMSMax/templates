@if ($site->logo)
    <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-8 w-auto">
@else
    <span class="flex items-center gap-2.5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="size-7 shrink-0" aria-hidden="true"><circle cx="16" cy="4.5" r="2.6" fill="none" stroke="currentColor" stroke-width="1.8"/><path fill="currentColor" fill-rule="evenodd" d="M16 7a6 6 0 0 1 6 6v11a6 6 0 0 1-12 0V13a6 6 0 0 1 6-6Zm0 3.5a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/></svg>
        <span class="font-display text-2xl tracking-tight">{{ $site->short_name }}</span>
    </span>
@endif
