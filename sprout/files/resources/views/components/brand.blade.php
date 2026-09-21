@if ($site->logo)
    <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-9 w-auto">
@else
    <span class="flex items-center gap-2.5">
        <span class="grid size-9 shrink-0 place-items-center rounded-xl bg-primary text-primary-foreground" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" class="size-7"><path d="M15 17.2c-4.9 0-8-3.2-8-8.2 4.9 0 8 3.2 8 8.2Zm2-2.7c0-4.9 3.2-8 8.2-8 0 4.9-3.2 8-8.2 8ZM15 14h2v12h-2z"/></svg>
        </span>
        <span class="font-display text-[1.625rem] font-semibold tracking-tight">{{ $site->short_name }}</span>
    </span>
@endif
