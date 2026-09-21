@props(['text' => 'Licensed master plumbers · Denver · Est. 2009 ·', 'key' => 'lid'])
{{-- The meter lid: a cast-iron roundel with its lettering running round the
     rim and the plumb bob at the hub. The rim turns; the hub stays level. --}}
<div class="relative aspect-square text-ink" aria-hidden="true">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" class="absolute inset-0 size-full">
        <defs>
            <pattern id="{{ $key }}-tread" width="9" height="9" patternUnits="userSpaceOnUse" patternTransform="rotate(45)">
                <rect width="4" height="4" x="2.5" y="2.5" rx="0.8" fill="currentColor" class="text-canvas" opacity="0.12"/>
            </pattern>
        </defs>
        <circle cx="100" cy="100" r="99" fill="currentColor"/>
        <circle cx="100" cy="100" r="92" fill="none" stroke="currentColor" class="text-canvas" stroke-opacity="0.35" stroke-width="1"/>
        <circle cx="100" cy="100" r="60" fill="url(#{{ $key }}-tread)"/>
        <circle cx="100" cy="100" r="60" fill="none" stroke="currentColor" class="text-canvas" stroke-opacity="0.35" stroke-width="1"/>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" class="lid-spin absolute inset-0 size-full">
        <defs>
            <path id="{{ $key }}-rim" d="M100 100m-76 0a76 76 0 1 1 152 0a76 76 0 1 1-152 0"/>
        </defs>
        <text fill="currentColor" class="text-canvas" font-family="var(--font-sans)" font-size="13.5" font-weight="600" letter-spacing="3.2">
            <textPath href="#{{ $key }}-rim" textLength="470" lengthAdjust="spacing">{{ $text }}</textPath>
        </text>
    </svg>
    <div class="absolute inset-[34%] flex items-center justify-center rounded-full bg-primary text-primary-foreground">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="size-1/2"><path fill="currentColor" d="M15 1h2v7h-2Z"/><rect width="12" height="4" x="10" y="8" fill="currentColor" rx="1"/><path fill="currentColor" d="M9.5 13.5h13c0 5.2-2.6 11.3-6.5 17.5-3.9-6.2-6.5-12.3-6.5-17.5Z"/></svg>
    </div>
</div>
