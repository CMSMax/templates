@props(['heading' => 'Programs', 'intro' => '', 'margin' => ''])
<section class="relative overflow-hidden border-b border-line">
    <div aria-hidden="true" class="ruled absolute inset-0 opacity-60"></div>
    <div class="relative mx-auto max-w-6xl px-6 pt-16 pb-16 lg:pt-24 lg:pb-20">
        <div class="relative lg:pl-10">
            <div aria-hidden="true" class="absolute top-0 bottom-0 -left-px w-px bg-accent/70 max-lg:hidden"></div>
            <h1 data-rise class="max-w-[18ch] font-display text-[clamp(2.5rem,5vw,4.25rem)]/[1.03] font-normal tracking-[-0.02em] text-balance text-ink">{{ $heading }}</h1>
            @if ($intro)
                <p data-rise class="mt-6 max-w-[52ch] text-[1.125rem]/8 text-muted [--i:1]">{{ $intro }}</p>
            @endif
            @if ($margin)
                <p data-rise class="mt-6 -rotate-2 font-hand text-[1.75rem]/none text-accent [--i:2]">{{ $margin }}</p>
            @endif
        </div>
    </div>
</section>
