@if ($site->logo)
    <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-8 w-auto">
@else
    <span class="flex items-center gap-2.5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" class="size-8 shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="M16 2.5a13.5 13.5 0 1 0 0 27 13.5 13.5 0 0 0 0-27Zm0 3a10.5 10.5 0 1 1 0 21 10.5 10.5 0 0 1 0-21Z"/><path fill-rule="evenodd" d="M16 8a8 8 0 1 0 0 16 8 8 0 0 0 0-16Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Z"/></svg>
        <span class="font-display text-[1.75rem] leading-none font-black tracking-[0.02em] uppercase">{{ $site->short_name }}</span>
    </span>
@endif
