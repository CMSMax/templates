@props(['inverted' => '0'])
@if ($inverted == '1' && $site->logo_inverted)
    <img src="{{ $site->logo_inverted }}" alt="{{ $site->name }}" class="h-9 w-auto">
@elseif ($site->logo)
    <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-9 w-auto">
@else
    <span class="flex items-center gap-2.5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="size-9 shrink-0 text-primary" aria-hidden="true"><rect width="48" height="48" rx="14" fill="currentColor"/><circle cx="24" cy="13.5" r="3.5" fill="var(--color-primary-foreground)"/><path d="M24 19.5v9M24 28.5l-2 11M24 28.5l2 11M23 20.5l-6.5-11M25 20.5l6.5-11" fill="none" stroke="var(--color-primary-foreground)" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        <span class="font-display text-[1.625rem] leading-none font-medium tracking-[-0.03em]">{{ $site->short_name }}</span>
    </span>
@endif
