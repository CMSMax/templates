@if ($site->logo)
    <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-8 w-auto">
@else
    <span class="flex items-center gap-2.5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" class="size-8 shrink-0" aria-hidden="true"><path d="M7.5 10.2V9a3 3 0 0 1 4.3-2.7 3.6 3.6 0 0 1 6.4-.7A3 3 0 0 1 24.5 8v2.2Z"/><path fill-rule="evenodd" d="M8.2 11.6h15.6l-1.9 15.2a1.4 1.4 0 0 1-1.4 1.2h-9a1.4 1.4 0 0 1-1.4-1.2Zm3.3 2.4h1.5l-.6 10.5h-1.3Z"/></svg>
        <span class="font-display text-xl leading-none font-extrabold wide">{{ $site->short_name }}</span>
    </span>
@endif
