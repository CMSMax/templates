@if ($site->logo)
    <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-8 w-auto">
@else
    <span class="flex items-center gap-2.5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 32" class="h-8 w-6 shrink-0" aria-hidden="true">
            <rect x="6" y="1" width="12" height="5" rx="2.5" class="fill-ink"/>
            <rect x="4" y="9" width="16" height="6" rx="3" class="fill-primary"/>
            <rect x="5" y="18" width="16" height="6" rx="3" class="fill-ink"/>
            <rect x="7" y="27" width="13" height="4" rx="2" class="fill-ink"/>
        </svg>
        <span class="font-display text-[1.75rem] leading-none font-semibold tracking-[-0.01em] text-ink">{{ $site->short_name }}</span>
    </span>
@endif
