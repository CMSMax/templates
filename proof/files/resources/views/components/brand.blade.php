@if ($site->logo)
    <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-8 w-auto">
@else
    <span class="flex items-center gap-2.5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" class="size-7 shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="M16 5C8.2 5 3 10.4 3 17.3 3 24 8.2 28 16 28s13-4 13-10.7C29 10.4 23.8 5 16 5Zm-6.6 16.4c2.7-5.6 7.3-8.9 13-10l.4 1.7c-5.2 1-9.4 4-11.8 9.1l-1.6-.8Z"/></svg>
        <span class="font-display text-[1.625rem] leading-none">{{ $site->short_name }}</span>
    </span>
@endif
