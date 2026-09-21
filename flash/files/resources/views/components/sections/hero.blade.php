@props([
    'styles' => [],
    'lineOne' => 'Custom work.',
    'lineTwo' => 'Walk-in flash.',
    'lineThree' => 'No attitude.',
    'body' => 'A small, bright studio with three chairs. Bring an idea for a custom piece, or pick a design off the wall and sit today.',
    'image' => '/images/hero.jpg',
    'imageAlt' => 'A tattoo artist in a beanie and blue gloves tattooing a client’s forearm in a bright studio',
    'caption' => 'Fine line, mid-session',
    'stamp' => 'Walk-ins welcome',
])
<section class="relative overflow-hidden">
    <div class="mx-auto grid max-w-7xl items-center gap-14 px-5 pt-12 pb-20 sm:px-8 lg:grid-cols-[8fr_4fr] lg:gap-12 lg:pt-20 lg:pb-28">
        <div>
            <h1 class="font-display text-[clamp(2.5rem,7.6vw,4.75rem)] leading-[0.98] tracking-[-0.02em] text-ink uppercase">
                <span data-drop class="block">{{ $lineOne }}</span>
                <span data-drop class="block [--i:1]"><span class="marker">{{ $lineTwo }}</span></span>
                <span data-drop class="block [--i:2]">{{ $lineThree }}</span>
            </h1>
            <p data-drop class="mt-8 max-w-[46ch] text-lg/8 text-muted [--i:3]">{{ $body }}</p>
            <div data-drop class="mt-10 flex flex-wrap items-center gap-x-6 gap-y-4 [--i:4]">
                <a href="{{ $site->booking_url }}" class="inline-flex items-center gap-2.5 border-2 border-ink bg-primary py-3.5 pr-5 pl-6 text-lg font-semibold text-primary-foreground hover:bg-ink hover:text-canvas active:translate-y-px focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">
                    {{ $site->cta_label }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
                </a>
                <a href="/flash" class="text-lg font-semibold text-ink underline decoration-2 underline-offset-[6px] hover:decoration-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $site->flash_label }}</a>
            </div>
        </div>
        <figure class="relative mx-auto w-full max-w-[26rem] rotate-2 bg-surface p-3 pb-4 shadow-[0_18px_40px_-18px_rgb(14_14_14/0.45)] lg:mr-0">
            <span class="tape -top-3 left-1/2 -translate-x-1/2 -rotate-3" aria-hidden="true"></span>
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1200" height="1500" fetchpriority="high" class="aspect-[4/5] w-full object-cover">
            <figcaption class="mt-3 flex items-center justify-between gap-4 text-sm text-muted">
                <span>{{ $caption }}</span>
                <span class="font-display text-xs tracking-[0.04em] text-ink uppercase">Est. {{ $site->established }}</span>
            </figcaption>
            <p class="absolute -top-9 -right-2 grid size-28 rotate-12 place-items-center rounded-full border-2 border-ink bg-primary p-3 text-center font-display text-[0.8125rem] leading-[1.15] text-balance text-primary-foreground uppercase sm:-right-5 sm:size-32 sm:text-sm">{{ $stamp }}</p>
        </figure>
    </div>
    <div class="relative -mx-4 -rotate-[1.5deg] border-y-2 border-ink bg-primary py-3.5">
        <div data-ribbon class="flex w-max">
            <ul role="list" class="flex shrink-0 items-center">
                    @foreach ($styles as $style)
                        <li class="flex items-center gap-6 pr-6 font-display text-lg whitespace-nowrap text-primary-foreground uppercase sm:text-xl">
                            {{ $style->label }}
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="size-5 shrink-0" aria-hidden="true"><path fill="currentColor" d="M16 2.5c1.4 8.6 4.9 12.1 13.5 13.5-8.6 1.4-12.1 4.9-13.5 13.5-1.4-8.6-4.9-12.1-13.5-13.5C11.1 14.6 14.6 11.1 16 2.5Z"/></svg>
                        </li>
                    @endforeach
                    @foreach ($styles as $style)
                        <li aria-hidden="true" class="flex items-center gap-6 pr-6 font-display text-lg whitespace-nowrap text-primary-foreground uppercase sm:text-xl">
                            {{ $style->label }}
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="size-5 shrink-0" aria-hidden="true"><path fill="currentColor" d="M16 2.5c1.4 8.6 4.9 12.1 13.5 13.5-8.6 1.4-12.1 4.9-13.5 13.5-1.4-8.6-4.9-12.1-13.5-13.5C11.1 14.6 14.6 11.1 16 2.5Z"/></svg>
                        </li>
                    @endforeach
            </ul>
            <ul role="list" class="flex shrink-0 items-center" aria-hidden="true">
                    @foreach ($styles as $style)
                        <li class="flex items-center gap-6 pr-6 font-display text-lg whitespace-nowrap text-primary-foreground uppercase sm:text-xl">
                            {{ $style->label }}
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="size-5 shrink-0" aria-hidden="true"><path fill="currentColor" d="M16 2.5c1.4 8.6 4.9 12.1 13.5 13.5-8.6 1.4-12.1 4.9-13.5 13.5-1.4-8.6-4.9-12.1-13.5-13.5C11.1 14.6 14.6 11.1 16 2.5Z"/></svg>
                        </li>
                    @endforeach
                    @foreach ($styles as $style)
                        <li class="flex items-center gap-6 pr-6 font-display text-lg whitespace-nowrap text-primary-foreground uppercase sm:text-xl">
                            {{ $style->label }}
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="size-5 shrink-0" aria-hidden="true"><path fill="currentColor" d="M16 2.5c1.4 8.6 4.9 12.1 13.5 13.5-8.6 1.4-12.1 4.9-13.5 13.5-1.4-8.6-4.9-12.1-13.5-13.5C11.1 14.6 14.6 11.1 16 2.5Z"/></svg>
                        </li>
                    @endforeach
            </ul>
        </div>
    </div>
</section>
