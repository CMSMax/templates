@props([
    'items' => [],
])
<section aria-label="What we carry" class="overflow-hidden py-16 sm:py-20">
    <div class="-mx-8 -rotate-2 bg-field py-5 sm:py-6">
        <div class="flex w-max motion-safe:animate-[hem-marquee_40s_linear_infinite]">
            <ul role="list" class="flex shrink-0 items-center">
                @foreach ($items as $word)
                    <li class="flex items-center gap-8 pr-8 font-display text-[clamp(1.75rem,3.6vw,3rem)] leading-none font-semibold tracking-tight whitespace-nowrap text-ink"><span>{{ $word->label }}</span><span class="pinked size-4 shrink-0 bg-ink [--tooth:4px]" aria-hidden="true"></span></li>
                @endforeach
            </ul>
            <ul role="list" class="flex shrink-0 items-center" aria-hidden="true">
                @foreach ($items as $word)
                    <li class="flex items-center gap-8 pr-8 font-display text-[clamp(1.75rem,3.6vw,3rem)] leading-none font-semibold tracking-tight whitespace-nowrap text-ink"><span>{{ $word->label }}</span><span class="pinked size-4 shrink-0 bg-ink [--tooth:4px]"></span></li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
