@props([
    'heading' => "Water where it shouldn't be?",
    'body' => 'Turn off the main shutoff, then call. A person answers at any hour and gives you an arrival time before you hang up.',
    'ctaLabel' => 'Or book a visit online',
    'ctaLink' => '/contact',
    'lidText' => 'On call 24/7 · Nights cost the same as days ·',
])
<section class="relative isolate overflow-hidden bg-primary py-24 text-primary-foreground md:py-32">
    <div class="absolute -right-24 -bottom-24 -z-10 w-80 opacity-15 md:-right-16 md:w-[28rem]">
        <x-lid :text="$lidText" key="call-lid"/>
    </div>
    <div class="mx-auto max-w-7xl px-5 md:px-8">
        <h2 class="max-w-[18ch] font-display text-section font-extrabold text-balance">{{ $heading }}</h2>
        <p class="mt-6 max-w-[48ch] text-lg text-pretty text-primary-foreground/85 md:text-xl/8">{{ $body }}</p>
        <p class="mt-12 md:mt-16">
            <a href="{{ $site->phone_href }}" class="inline-block font-display text-[clamp(1.75rem,7vw,6.25rem)] leading-none whitespace-nowrap font-extrabold tracking-tight tabular-nums [font-stretch:125%] underline decoration-primary-foreground/25 decoration-4 underline-offset-[0.12em] hover:decoration-primary-foreground">{{ $site->phone }}</a>
        </p>
        <a href="{{ $ctaLink }}" class="group mt-10 inline-flex min-h-11 items-center gap-2 text-lg font-semibold">
            <span class="underline decoration-primary-foreground/30 underline-offset-[6px] group-hover:decoration-primary-foreground">{{ $ctaLabel }}</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0 transition-transform duration-200 group-hover:translate-x-0.5" aria-hidden="true"><path d="M4 10h11M11 5l5 5-5 5"/></svg>
        </a>
    </div>
</section>
