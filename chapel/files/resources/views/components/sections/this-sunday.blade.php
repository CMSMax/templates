@props([
    'heading' => 'This Sunday',
    'headingEmphasis' => 'on the road to Emmaus.',
    'body' => 'We are halfway through Road Stories, an autumn series on the people God meets on the way to somewhere else. Here is the whole service, just as it is printed in the bulletin.',
    'linkLabel' => 'Read the sermon notes',
    'linkHref' => '/sermons/bread-for-the-road',
    'footnote' => 'Large-print bulletins and hearing loops at the welcome table.',
])
<section id="sundays" aria-labelledby="sundays-heading" class="scroll-mt-8 py-24 sm:py-28 lg:py-36">
    <div class="mx-auto grid max-w-6xl items-center gap-14 px-5 sm:px-8 lg:grid-cols-[5fr_7fr] lg:gap-20">
        <div>
            <h2 id="sundays-heading" class="font-display text-[clamp(2.5rem,5vw,4rem)] leading-[1.05] font-normal tracking-[-0.02em] text-balance text-ink">
                <span class="block">{{ $heading }}</span>
                <span class="block italic">{{ $headingEmphasis }}</span>
            </h2>
            <p class="mt-6 max-w-[44ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
            @if ($linkLabel)
                <a href="{{ $linkHref }}" class="group mt-8 inline-flex min-h-12 items-center gap-2 rounded-full text-base font-semibold text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                    <span class="underline decoration-ink/25 underline-offset-[6px] group-hover:decoration-ink">{{ $linkLabel }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0 text-primary" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </a>
            @endif
        </div>
        <div class="rounded-sm bg-card p-3 shadow-xl shadow-ink/8 ring-1 ring-line sm:p-4 lg:rotate-[0.6deg]">
            <div class="border border-line px-6 py-10 sm:px-12 sm:py-12">
                <div class="text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="mx-auto size-5 text-primary" aria-hidden="true"><path d="M10.8 2h2.4v6.4h6.3v2.4h-6.3V22h-2.4V10.8H4.5V8.4h6.3V2Z"/></svg>
                    <p class="smallcaps mt-4 text-xl text-ink">{{ $site->bulletin_title }}</p>
                    <p class="oldstyle mt-1 font-display text-base text-muted italic">{{ $site->bulletin_date }}</p>
                </div>
                <ol role="list" class="mt-10 flex flex-col gap-6">
                    @foreach ($site->bulletin as $item)
                        <li>
                            <div class="flex flex-col gap-0.5 sm:flex-row sm:items-baseline sm:gap-3">
                                <span class="smallcaps shrink-0 text-base text-ink">{{ $item->part }}</span>
                                <span class="h-px min-w-6 flex-1 translate-y-[-0.3em] border-b border-dotted border-ink/30 max-sm:hidden" aria-hidden="true"></span>
                                <span class="oldstyle font-display text-lg text-ink sm:text-right">{{ $item->detail }}</span>
                            </div>
                            @if ($item->rubric)
                                <p class="mt-1 font-display text-base text-primary italic sm:text-right">{{ $item->rubric }}</p>
                            @endif
                        </li>
                    @endforeach
                </ol>
                @if ($footnote)
                    <p class="mt-10 border-t border-line pt-6 text-center text-sm text-muted">{{ $footnote }}</p>
                @endif
            </div>
        </div>
    </div>
</section>
