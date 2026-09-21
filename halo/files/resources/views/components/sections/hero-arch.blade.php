@props([
    'eyebrow' => 'Salon & day spa · Linden Avenue',
    'heading' => 'Come in tired.',
    'headingAccent' => 'Leave lit.',
    'body' => 'Cuts, colour, facials, nails and massage under one roof — unhurried appointments with the price on the menu.',
    'image' => '/images/studio.jpg',
    'imageAlt' => 'The salon floor: arched mirrors on rose plaster walls, cognac leather chairs and tall windows',
])
<section class="pt-8 pb-16 sm:pt-12 lg:pb-24">
    <div class="mx-auto flex max-w-7xl flex-col items-center px-5 text-center sm:px-8">
        <p data-rise class="text-xs font-semibold tracking-[0.22em] text-muted uppercase">{{ $eyebrow }}</p>
        <h1 data-rise class="mt-6 font-display text-[clamp(3.25rem,9vw,8rem)] leading-[0.92] tracking-[-0.035em] text-ink [--i:1]">{{ $heading }} <em class="block text-primary italic">{{ $headingAccent }}</em></h1>
        <p data-rise class="mt-8 max-w-[48ch] text-lg/8 text-muted [--i:2]">{{ $body }}</p>
        <div data-rise class="mt-10 flex flex-wrap items-center justify-center gap-x-7 gap-y-4 [--i:3]">
            <a href="{{ $site->cta_link }}" class="rounded-full bg-primary px-7 py-4 text-base font-semibold text-primary-foreground transition-colors duration-150 hover:bg-primary/90 active:bg-primary/80 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->cta_label }}</a>
            <a href="{{ $site->phone_href }}" class="group inline-flex min-h-12 items-center rounded-full text-base font-semibold text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary"><span class="underline decoration-ink/25 underline-offset-[6px] transition-colors duration-150 group-hover:decoration-ink">Call {{ $site->phone }}</span></a>
        </div>
        <div data-rise class="relative mt-14 w-full [--i:4] lg:mt-20">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1344" height="752" fetchpriority="high" class="aspect-[4/3] w-full rounded-t-[50vw] rounded-b-[1.5rem] object-cover sm:aspect-[16/9] lg:rounded-t-[40rem]">
            <p class="absolute bottom-5 left-1/2 flex -translate-x-1/2 items-center gap-3 rounded-full bg-card/95 px-5 py-2.5 text-sm whitespace-nowrap shadow-lg shadow-ink/10 ring-1 ring-ink/5">
                <span class="flex gap-0.5 text-primary" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-3.5"><path d="M10 1.5l2.6 5.3 5.9.9-4.2 4.1 1 5.8L10 14.8l-5.3 2.8 1-5.8L1.5 7.7l5.9-.9Z"/></svg>
                </span>
                <span><span class="font-semibold text-ink">{{ $site->rating }}</span> <span class="text-muted">{{ $site->rating_note }}</span></span>
            </p>
        </div>
    </div>
</section>
