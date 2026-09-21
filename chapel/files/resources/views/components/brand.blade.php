@props(['inverted' => '0'])
@if ($inverted == '1' && $site->logo_inverted)
    <img src="{{ $site->logo_inverted }}" alt="{{ $site->name }}" class="h-9 w-auto">
@elseif ($site->logo)
    <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-9 w-auto">
@else
    <span class="flex items-center gap-3">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" class="size-8 shrink-0 text-primary" aria-hidden="true"><path fill-rule="evenodd" d="M16 2C9.4 2 5 7.2 5 13.5V30h22V13.5C27 7.2 22.6 2 16 2Zm-1.2 9.5V8.8h2.4v2.7h2.7v2.4h-2.7V26h-2.4V13.9h-2.7v-2.4h2.7Z"/></svg>
        <span class="font-display text-[1.45rem] leading-none font-medium tracking-tight">{{ $site->short_name }}</span>
    </span>
@endif
