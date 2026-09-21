@props([
    'heading' => 'A place at the table,',
    'headingEmphasis' => 'whoever you are.',
    'body' => 'An old stone church on the corner of Chapel and Linden. Come for an hour of hymns, scripture and bread on Sunday — stay for coffee, and for as long as you like after that.',
    'secondaryLabel' => 'Hear last Sunday’s sermon',
    'secondaryLink' => '/sermons',
    'image' => '/images/sanctuary.jpg',
    'imageAlt' => 'Morning light through the arched east window, falling across the oak pews and the stone aisle',
])
<section class="pt-12 sm:pt-16 lg:pt-20">
    <div class="mx-auto max-w-6xl px-5 sm:px-8">
        <div class="grid items-end gap-12 lg:grid-cols-[7fr_5fr] lg:gap-16">
            <div class="pb-2 lg:pb-16">
                <h1 data-rise class="font-display text-[clamp(3rem,7.4vw,5.75rem)] leading-[1.02] font-normal tracking-[-0.025em] text-balance text-ink">
                    <span class="block">{{ $heading }}</span>
                    <span class="block text-primary italic">{{ $headingEmphasis }}</span>
                </h1>
                <p data-rise class="mt-8 max-w-[46ch] text-lg/8 text-pretty text-muted [--i:1]">{{ $body }}</p>
                <div data-rise class="mt-10 flex flex-wrap items-center gap-x-7 gap-y-4 [--i:2]">
                    <a href="{{ $site->cta_link }}" class="inline-flex items-center gap-2 rounded-full bg-primary py-4 pr-5 pl-7 text-base font-semibold text-primary-foreground shadow-sm shadow-primary/20 hover:bg-primary/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                        {{ $site->cta_label }}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                    <a href="{{ $secondaryLink }}" class="group inline-flex min-h-12 items-center rounded-full text-base font-semibold text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                        <span class="underline decoration-ink/25 underline-offset-[6px] group-hover:decoration-ink">{{ $secondaryLabel }}</span>
                    </a>
                </div>
            </div>
            <div data-rise class="relative mx-auto w-full max-w-[22rem] [--i:2] sm:max-w-[26rem] lg:max-w-none">
                <div class="h-[26rem] sm:h-[32rem] lg:h-[36rem]">
                    <x-window :image="$image" :alt="$imageAlt"/>
                </div>
                <div class="window-beam pointer-events-none absolute inset-x-[-12%] top-full h-24 sm:h-32" aria-hidden="true"></div>
            </div>
        </div>
    </div>
    <div class="relative mt-0 border-y border-line">
        <ul role="list" class="mx-auto grid max-w-6xl px-5 sm:grid-cols-3 sm:px-8">
            @foreach ($gatherings as $gathering)
                <li class="flex flex-col py-6 max-sm:border-t max-sm:border-line max-sm:first:border-t-0 sm:px-8 sm:py-8 sm:first:pl-0 sm:not-first:border-l sm:not-first:border-line">
                    <p class="flex items-baseline justify-between gap-4">
                        <span class="smallcaps text-base text-muted">{{ $gathering->day }}</span>
                        <span class="oldstyle font-display text-3xl text-ink">{{ $gathering->time }}</span>
                    </p>
                    <p class="mt-2 font-display text-xl text-ink italic">{{ $gathering->name }}</p>
                    <p class="mt-1 text-sm/6 text-pretty text-muted">{{ $gathering->note }}</p>
                </li>
            @endforeach
        </ul>
    </div>
</section>
