@props([
    'heading' => 'What’s the weather like,',
    'headingItalic' => 'inside?',
    'body' => 'Everyone arrives with their own forecast. These are the conditions I work with most — find the line that sounds like you.',
    'footnote' => 'Not sure which one is yours? Most people are a mix. That’s what the free call is for.',
    'footnoteLink' => 'Book a free consultation',
])
<section id="specialties" aria-labelledby="specialties-heading" class="scroll-mt-8 border-t border-line bg-card py-24 lg:py-32">
    <div class="mx-auto max-w-6xl px-5 sm:px-8">
        <div class="grid gap-6 lg:grid-cols-[7fr_5fr] lg:items-end lg:gap-20">
            <h2 id="specialties-heading" class="text-[clamp(2.25rem,4.6vw,3.75rem)] leading-[1.02] text-ink">
                <span class="block font-sans font-medium tracking-[-0.04em]">{{ $heading }}</span>
                <span class="block font-display font-light tracking-[-0.025em] italic">{{ $headingItalic }}</span>
            </h2>
            <p class="max-w-[44ch] text-lg/8 text-muted">{{ $body }}</p>
        </div>
        <div class="mt-16 border-t border-ink">
            <div class="grid grid-cols-[11rem_minmax(0,5fr)_minmax(0,6fr)] gap-10 py-3 font-display text-base text-muted italic max-lg:hidden" aria-hidden="true">
                <span>Conditions</span>
                <span>Sounds like</span>
                <span>What we work on</span>
            </div>
            <ul role="list" class="border-t border-line max-lg:border-t-0">
                @foreach ($specialties as $item)
                    <li class="grid gap-x-10 gap-y-4 border-b border-line py-9 lg:grid-cols-[11rem_minmax(0,5fr)_minmax(0,6fr)] lg:py-10">
                        <p class="flex items-center gap-3 text-sm font-semibold text-ink lg:flex-col lg:items-start lg:gap-4">
                            <span class="grid size-12 shrink-0 place-items-center rounded-full bg-canvas text-ink ring-1 ring-line" aria-hidden="true">
                                @if ($item->weather == 'fog')
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-6"><path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242M16 17H7m10 4H9"/></svg>
                                @elseif ($item->weather == 'overcast')
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-6"><path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9"/></svg>
                                @elseif ($item->weather == 'storm')
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-6"><path d="M6 16.326A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 .5 8.973"/><path d="m13 12-3 5h4l-3 5"/></svg>
                                @elseif ($item->weather == 'wind')
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-6"><path d="M12.8 19.6A2 2 0 1 0 14 16H2m15.5-8a2.5 2.5 0 1 1 2 4H2m7.8-7.6A2 2 0 1 1 11 8H2"/></svg>
                                @elseif ($item->weather == 'rain')
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-6"><path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242M8 19v1m0-6v1m8 4v1m0-6v1m-4 6v1m0-6v1"/></svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-6"><path d="M7 18a5 5 0 0 1 10 0Z" fill="var(--color-primary)" stroke="var(--color-primary)"/><path d="M12 2v5M4.93 7.93l1.41 1.41M2 18h2m16 0h2m-2.93-10.07-1.41 1.41M22 22H2"/></svg>
                                @endif
                            </span>
                            {{ $item->condition }}
                        </p>
                        <p class="font-display text-[clamp(1.5rem,2.6vw,2.125rem)] leading-[1.2] font-light tracking-[-0.015em] text-ink italic">“{{ $item->feeling }}”</p>
                        <div>
                            <h3 class="text-lg font-semibold tracking-tight text-ink">{{ $item->name }}</h3>
                            <p class="mt-2 text-base/7 text-muted">{{ $item->body }}</p>
                            <p class="mt-4 inline-flex rounded-full bg-canvas px-3 py-1 text-sm font-medium text-ink ring-1 ring-line">{{ $item->format }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <p class="mt-10 flex flex-wrap items-center gap-x-4 gap-y-2 text-base/7 text-muted">
            {{ $footnote }}
            <a href="{{ $site->cta_link }}" class="group inline-flex min-h-12 items-center gap-2 rounded-full font-semibold text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink"><span class="underline decoration-ink/30 underline-offset-[6px] group-hover:decoration-ink">{{ $footnoteLink }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
            </a>
        </p>
    </div>
</section>
