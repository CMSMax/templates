@props([
    'heading' => 'New in this week',
    'body' => 'Unpacked on Tuesday, steamed and on the rail by Wednesday. One or two of each, so come in early.',
    'linkLabel' => 'See everything',
    'linkUrl' => '/shop',
    'newLabel' => 'New',
    'onlyNew' => '1',
    'items' => [],
])
<section id="new-in" class="py-20 sm:py-28">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="flex flex-wrap items-end justify-between gap-x-10 gap-y-6">
            <div>
                <h2 class="font-display text-[clamp(2.25rem,4.4vw,3.75rem)] leading-none font-semibold tracking-[-0.035em] text-balance text-ink">{{ $heading }}</h2>
                <p class="mt-4 max-w-[48ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
            </div>
            <a href="{{ $linkUrl }}" class="group inline-flex items-center gap-2 border-b border-ink pb-1 font-medium text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $linkLabel }}<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" class="size-4 transition-transform duration-200 group-hover:translate-x-1" aria-hidden="true"><path d="M4 10h12m-4-4 4 4-4 4"/></svg></a>
        </div>
    </div>
    <ul role="list" class="mt-12 flex snap-x snap-mandatory gap-5 overflow-x-auto scroll-px-5 px-5 pb-6 [scrollbar-color:var(--color-line)_transparent] sm:scroll-px-8 sm:px-8 xl:scroll-px-[calc((100vw-80rem)/2+2rem)] xl:px-[calc((100vw-80rem)/2+2rem)]">
        @foreach ($items as $piece)
            @if ($onlyNew != '1' || $piece->isNew == '1')
                <li class="w-[72%] shrink-0 snap-start sm:w-[42%] lg:w-[calc((100%-4rem)/4.4)]">
                    <a href="{{ $piece->link }}" class="group block focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">
                        <div class="relative overflow-hidden bg-surface">
                            <img src="{{ $piece->image }}" alt="{{ $piece->imageAlt }}" width="896" height="1120" loading="lazy" decoding="async" class="aspect-4/5 w-full object-cover transition-transform duration-500 ease-out group-hover:scale-[1.03]">
                            @if ($piece->isNew == '1')
                                <span class="absolute top-3 left-3 flex items-center gap-1.5 bg-ink py-1 pr-2 pl-1.5 text-xs font-medium text-canvas"><span class="size-1.5 rounded-full bg-spot" aria-hidden="true"></span>{{ $newLabel }}</span>
                            @endif
                        </div>
                        <div class="mt-4 flex items-baseline justify-between gap-4">
                            <div class="min-w-0">
                                <p class="text-sm text-muted">{{ $piece->brand }}</p>
                                <h3 class="mt-0.5 font-display text-lg font-medium tracking-tight text-ink group-hover:underline group-hover:underline-offset-4">{{ $piece->title }}</h3>
                            </div>
                            <p class="shrink-0 font-display text-lg text-ink tabular-nums">{{ $piece->price }}</p>
                        </div>
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</section>
