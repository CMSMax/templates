@if ($site->logo)
    <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-8 w-auto">
@else
    <span class="flex items-center gap-2.5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 32" class="h-7 w-auto shrink-0" aria-hidden="true"><path fill="currentColor" fill-rule="evenodd" d="M6 1h12a2 2 0 1 1 0 4H6a2 2 0 1 1 0-4Zm0 26h12a2 2 0 1 1 0 4H6a2 2 0 1 1 0-4ZM7 6h10v20H7Zm1.75 1.75v16.5h6.5V7.75Z"/><path class="fill-primary" d="M8.75 13 15.25 9v2.5L8.75 15.5Zm0 6 6.5-4v2.5l-6.5 4Zm3.25 5.25 3.25-2v2Z"/></svg>
        <span class="font-display text-2xl font-semibold tracking-[0.14em] uppercase">{{ $site->short_name }}</span>
    </span>
@endif
