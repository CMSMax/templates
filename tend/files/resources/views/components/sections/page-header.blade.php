@props([
    'eyebrow' => 'Fees & insurance',
    'heading' => 'What it costs,',
    'headingItalic' => 'said plainly.',
    'body' => 'Every fee is listed here, along with how insurance, superbills and the sliding scale work. If something isn’t clear, ask me on the free call.',
])
<section class="px-3 sm:px-4">
    <div class="sky-dawn relative isolate mx-auto flex min-h-[26rem] max-w-[88rem] items-end overflow-hidden rounded-[clamp(1.25rem,2.5vw,2.25rem)]">
        <div class="pointer-events-none absolute inset-0 -z-10" aria-hidden="true">
            <div class="absolute top-[22%] -left-[8%] h-20 w-[50%] rounded-full bg-canvas/35 blur-2xl"></div>
            <div data-sun class="absolute -bottom-[7rem] right-[10%] size-[12rem] rounded-full bg-primary blur-[1px] sm:-bottom-[9rem] sm:size-[16rem]"></div>
        </div>
        <div class="mx-auto w-full max-w-6xl px-5 pt-24 pb-14 sm:px-8 lg:pb-20">
            <p data-rise class="text-sm font-medium text-ink/75">{{ $eyebrow }}</p>
            <h1 class="mt-4 text-[clamp(2.5rem,6vw,5rem)] leading-[0.98] text-ink">
                <span data-rise class="block font-sans font-medium tracking-[-0.045em] [--i:1]">{{ $heading }}</span>
                <span data-rise class="block font-display font-light tracking-[-0.03em] italic [--i:2]">{{ $headingItalic }}</span>
            </h1>
            <p data-rise class="mt-6 max-w-[52ch] text-lg/8 text-ink/80 [--i:3]">{{ $body }}</p>
        </div>
    </div>
</section>
