@if ($site->logo)
    <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-9 w-auto">
@else
    <span class="flex items-center gap-2.5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="size-8 shrink-0" aria-hidden="true"><circle cx="19" cy="13" r="10" class="fill-primary"/><path fill="currentColor" class="overprint" d="M4 29V17a8 8 0 0 1 16 0v12h-4V17a4 4 0 0 0-8 0v12Z"/></svg>
        <span class="font-display text-[1.375rem] leading-none font-extrabold tracking-[-0.02em]">{{ $site->name }}</span>
    </span>
@endif
