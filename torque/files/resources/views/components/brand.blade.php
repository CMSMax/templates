@if ($site->logo)
    <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-8 w-auto">
@else
    <span class="flex items-center gap-2.5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="size-8 shrink-0" aria-hidden="true"><path fill="currentColor" fill-rule="evenodd" d="M16 2.5 27.7 9.25v13.5L16 29.5 4.3 22.75V9.25Zm0 7.5a6 6 0 1 0 0 12 6 6 0 0 0 0-12Z"/><circle cx="16" cy="16" r="2.5" class="fill-primary"/></svg>
        <span class="font-display text-2xl leading-none font-bold tracking-wide uppercase">{{ $site->short_name }}</span>
    </span>
@endif
