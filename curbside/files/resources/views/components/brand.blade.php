@if ($site->logo)
    <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-8 w-auto">
@else
    <span class="flex items-center gap-2.5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" class="size-8 shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="M2 7.5A1.5 1.5 0 0 1 3.5 6h17A1.5 1.5 0 0 1 22 7.5V11h3.3a2 2 0 0 1 1.6.8l3.7 5a2 2 0 0 1 .4 1.2V23a1.5 1.5 0 0 1-1.5 1.5h-1.1a4 4 0 0 0-7.8 0h-5.2a4 4 0 0 0-7.8 0H3.5A1.5 1.5 0 0 1 2 23V7.5ZM5 10v5h14v-5H5Zm18 3.5V17h4.6l-2.6-3.5h-2Z"/><path d="M11.5 22.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0ZM26.5 22.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/></svg>
        <span class="font-display text-[1.625rem] leading-none font-extrabold tracking-wide uppercase">{{ $site->short_name }}</span>
    </span>
@endif
