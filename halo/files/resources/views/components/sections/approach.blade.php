@props([
    'eyebrow' => 'The studio',
    'heading' => 'An hour that is',
    'headingAccent' => 'entirely yours.',
    'body' => 'Three chairs, two treatment rooms and a lot of daylight. We book fewer clients than we could, so nobody watches the clock — least of all you.',
    'image' => '/images/studio.jpg',
    'imageAlt' => 'The salon floor: arched mirrors on rose plaster walls, cognac leather chairs and tall windows',
    'linkLabel' => 'Inside the studio',
    'linkHref' => '/studio',
])
<section id="studio" aria-labelledby="approach-heading" class="scroll-mt-8 bg-surface">
    <div class="grid lg:grid-cols-2">
        <div class="relative min-h-[22rem] sm:min-h-[30rem] lg:min-h-[46rem]">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1600" height="900" loading="lazy" class="absolute inset-0 size-full object-cover">
        </div>
        <div class="flex items-center px-5 py-20 sm:px-8 sm:py-24 lg:px-16 lg:py-28 xl:px-24">
            <div class="max-w-xl">
                <p class="text-xs font-semibold tracking-[0.22em] text-muted uppercase">{{ $eyebrow }}</p>
                <h2 id="approach-heading" class="mt-5 font-display text-[clamp(2.5rem,4.6vw,4rem)] leading-[1.02] tracking-[-0.025em] text-ink">{{ $heading }} <em class="text-primary italic">{{ $headingAccent }}</em></h2>
                <p class="mt-6 max-w-[46ch] text-lg/8 text-muted">{{ $body }}</p>
                <dl class="mt-12 border-t border-ink">
                    @foreach ($site->approach_stats as $item)
                        <div class="grid gap-2 border-b border-line py-6 sm:grid-cols-[11rem_1fr] sm:items-baseline sm:gap-8">
                            <dt class="font-display text-3xl whitespace-nowrap text-ink sm:text-4xl">{{ $item->stat }}</dt>
                            <dd class="text-base/7 text-muted">{{ $item->label }}</dd>
                        </div>
                    @endforeach
                </dl>
                @if ($linkLabel)
                    <a href="{{ $linkHref }}" class="group mt-10 inline-flex items-center gap-2 rounded-sm text-base font-semibold text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                        <span class="underline decoration-ink/25 underline-offset-[6px] transition-colors duration-150 group-hover:decoration-ink">{{ $linkLabel }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0 transition-transform duration-200 group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                @endif
            </div>
        </div>
    </div>
</section>
