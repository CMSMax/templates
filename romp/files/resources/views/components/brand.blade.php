@props(['inverted' => '0'])
@if ($inverted == '1' && $site->logo_inverted)
    <img src="{{ $site->logo_inverted }}" alt="{{ $site->name }}" class="h-9 w-auto">
@elseif ($site->logo)
    <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-9 w-auto">
@else
    <span class="flex items-center gap-2.5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36" class="size-9 shrink-0" aria-hidden="true">
            <rect width="36" height="36" rx="9" class="fill-secondary"/>
            <rect x="2.5" y="2.5" width="31" height="31" rx="7" fill="none" stroke-width="1" class="stroke-secondary-foreground/60"/>
            <circle cx="18" cy="18" r="8.5" class="fill-primary"/>
            <path d="M11.4 12.6c3.4 1.9 3.4 8.9 0 10.8M24.6 12.6c-3.4 1.9-3.4 8.9 0 10.8" fill="none" stroke-width="1.6" stroke-linecap="round" class="stroke-secondary"/>
        </svg>
        <span class="font-display text-[1.625rem] font-extrabold tracking-tight">{{ $site->short_name }}</span>
    </span>
@endif
