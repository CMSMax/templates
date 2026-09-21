@props([
    'heading' => 'Recent sermons',
    'body' => 'Every Sunday’s sermon, written out in full for the week.',
    'show' => 'recent',
    'linkLabel' => 'All sermons',
    'linkHref' => '/sermons',
])
<section aria-label="{{ $heading }}" data-show="{{ $show }}" class="py-24 data-[show=all]:pt-0 sm:py-28 sm:data-[show=all]:pt-0 lg:py-32 lg:data-[show=all]:pt-0">
    <div class="mx-auto max-w-6xl px-5 sm:px-8">
        @if ($show == 'recent')
            <div class="flex flex-wrap items-end justify-between gap-x-10 gap-y-6 border-b border-line pb-10">
                <div>
                    <h2 class="font-display text-[clamp(2.25rem,4.4vw,3.5rem)] leading-[1.05] font-normal tracking-[-0.02em] text-balance text-ink">{{ $heading }}</h2>
                    <p class="mt-4 max-w-[48ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
                </div>
                @if ($linkLabel)
                    <a href="{{ $linkHref }}" class="group inline-flex min-h-12 items-center gap-2 rounded-full text-base font-semibold text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                        <span class="underline decoration-ink/25 underline-offset-[6px] group-hover:decoration-ink">{{ $linkLabel }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0 text-primary" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                @endif
            </div>
        @endif
        <ul role="list" class="mt-12 grid in-data-[show=all]:mt-4 gap-x-8 gap-y-14 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($sermons as $sermon)
                <li>
                    <a href="{{ $sermon->link }}" class="group block rounded-t-full focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                        <span class="relative block aspect-[5/4] overflow-hidden sm:aspect-[4/5] rounded-t-full bg-surface ring-1 ring-line">
                            @if ($sermon->image)
                                <img src="{{ $sermon->image }}" alt="" aria-hidden="true" width="640" height="800" class="size-full object-cover">
                            @else
                                <span class="absolute inset-3 flex flex-col items-center justify-center rounded-t-full border border-line px-6 text-center" aria-hidden="true">
                                    <span class="smallcaps text-sm text-muted">{{ $sermon->series }}</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="mt-6 size-4 text-primary"><path d="M10.8 2h2.4v6.4h6.3v2.4h-6.3V22h-2.4V10.8H4.5V8.4h6.3V2Z"/></svg>
                                    <span class="oldstyle mt-6 font-display text-[2rem] leading-tight text-ink italic">{{ $sermon->scripture }}</span>
                                </span>
                            @endif
                        </span>
                        <span class="oldstyle mt-6 block text-sm text-muted">{{ $sermon->dateFormatted }} · {{ $sermon->speaker }}</span>
                        <span class="mt-2 block font-display text-[1.75rem] leading-tight text-ink underline decoration-transparent underline-offset-[6px] group-hover:decoration-primary">{{ $sermon->title }}</span>
                        <span class="mt-3 block max-w-[44ch] text-base/7 text-pretty text-muted">{{ $sermon->description }}</span>
                    </a>
                </li>
                @break($show == 'recent' && $loop->iteration == 3)
            @endforeach
        </ul>
    </div>
</section>
