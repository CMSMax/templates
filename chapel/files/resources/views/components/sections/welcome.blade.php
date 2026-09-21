@props([
    'quote' => 'You do not need to believe everything, or anything, to walk through our doors. Bring your questions and your doubts. We keep a seat and a cup of coffee for you either way.',
    'name' => 'Rev. Anna Whitley',
    'role' => 'Rector, since 2015',
    'image' => '/images/rector.jpg',
    'imageAlt' => 'Rev. Anna Whitley smiling in the stone doorway of the church',
])
<section aria-label="A welcome from our rector" class="bg-surface py-24 sm:py-28 lg:py-32">
    <div class="mx-auto max-w-6xl px-5 sm:px-8">
        <figure class="grid gap-10 lg:grid-cols-[2fr_10fr] lg:gap-16">
            @if ($image)
                <div class="h-40 w-28 sm:h-48 sm:w-32 lg:mt-3">
                    <x-window :image="$image" :alt="$imageAlt"/>
                </div>
            @else
                <p class="font-display text-[7rem] leading-[0.7] text-primary lg:text-[9rem]" aria-hidden="true">“</p>
            @endif
            <div>
                <blockquote class="relative font-display text-[clamp(1.75rem,3.6vw,2.75rem)] leading-[1.25] font-normal tracking-[-0.01em] text-pretty text-ink">
                    <p class="max-w-[34ch]">{{ $quote }}</p>
                </blockquote>
                <figcaption class="mt-10 flex flex-wrap items-baseline gap-x-4 gap-y-1">
                    <span class="font-display text-xl text-ink italic">{{ $name }}</span>
                    <span class="smallcaps text-base text-muted">{{ $role }}</span>
                </figcaption>
            </div>
        </figure>
    </div>
</section>
