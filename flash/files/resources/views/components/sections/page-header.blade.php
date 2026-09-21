@props([
    'heading' => 'The flash sheet.',
    'body' => 'Every design on this page is drawn in-house and tattooed once. Prices are on the tag and include everything.',
    'highlight' => '',
])
<section class="border-b-2 border-ink">
    <div class="mx-auto flex max-w-7xl flex-col gap-8 px-5 pt-16 pb-14 sm:px-8 lg:flex-row lg:items-end lg:justify-between lg:pt-24 lg:pb-20">
        <h1 class="max-w-[12ch] font-display text-[clamp(2.75rem,8vw,6rem)] leading-[0.98] tracking-[-0.02em] text-balance text-ink uppercase">{{ $heading }}</h1>
        <div class="flex flex-col items-start gap-5">
            @if ($highlight)
                <p class="font-display text-base tracking-[0.02em] uppercase"><span class="marker text-primary-foreground">{{ $highlight }}</span></p>
            @endif
            <p class="max-w-[42ch] text-lg/8 text-muted">{{ $body }}</p>
        </div>
    </div>
</section>
