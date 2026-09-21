@props([
    'items' => [],
    'heading' => 'Healed, not just fresh.',
    'body' => 'Anyone can post a tattoo the day it was done. These are months and years in, the way you will actually wear it.',
    'linkLabel' => 'More on Instagram',
])
<section id="work" class="scroll-mt-16 py-20 lg:py-32">
    <div class="mx-auto flex max-w-7xl flex-col justify-between gap-6 px-5 sm:px-8 lg:flex-row lg:items-end">
        <h2 class="max-w-[14ch] font-display text-[clamp(2.25rem,5vw,4rem)] leading-[1] tracking-[-0.02em] text-balance text-ink uppercase">{{ $heading }}</h2>
        <div class="flex flex-col items-start gap-4 lg:items-end lg:text-right">
            <p class="max-w-[42ch] text-lg/8 text-muted">{{ $body }}</p>
            @if ($linkLabel)
                <a href="{{ $site->instagram }}" class="font-semibold text-ink underline decoration-2 underline-offset-[6px] hover:decoration-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $linkLabel }}</a>
            @endif
        </div>
    </div>
    <ul role="list" class="mt-14 flex snap-x snap-mandatory scroll-px-5 gap-5 overflow-x-auto px-5 pb-6 sm:scroll-px-8 sm:px-8 lg:mt-20 lg:gap-8 xl:px-[max(2rem,calc((100vw-80rem)/2+2rem))]">
        @foreach ($items as $piece)
            <li class="w-[72vw] shrink-0 snap-start sm:w-[22rem]">
                <figure>
                    <div class="bg-surface p-2.5 shadow-[0_12px_28px_-16px_rgb(14_14_14/0.4)] @if ($loop->even) rotate-1 @else -rotate-1 @endif">
                        <img src="{{ $piece->image }}" alt="{{ $piece->alt }}" width="900" height="1125" loading="lazy" decoding="async" class="aspect-[4/5] w-full object-cover">
                    </div>
                    <figcaption class="mt-5 border-t border-ink pt-3">
                        <p class="font-display text-base text-ink uppercase">{{ $piece->title }}</p>
                        <p class="mt-1 text-sm text-muted">{{ $piece->note }}</p>
                    </figcaption>
                </figure>
            </li>
        @endforeach
    </ul>
</section>
