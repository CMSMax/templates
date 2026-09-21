@props([
    'quote' => 'Margaret found fourteen thousand dollars we’d been overpaying for three years — then made sure we never did again.',
    'name' => 'Elena Ruiz',
    'business' => 'Owner, Rise & Crumb Bakery',
    'figure' => '$14,200',
    'figureLabel' => 'recovered in amended returns',
    'image' => '/images/client-meeting.jpg',
    'imageAlt' => 'A bakery owner in an apron laughing with her accountant as they go through the year’s figures on a laptop.',
])
<section class="border-y border-line bg-surface">
    <div class="grid lg:grid-cols-2">
        <div class="relative min-h-[22rem] sm:min-h-[28rem]">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1600" height="1075" loading="lazy" class="absolute inset-0 size-full object-cover">
        </div>
        <figure class="flex flex-col justify-center px-6 py-16 sm:px-10 lg:px-16 lg:py-24 xl:pr-[max(4rem,calc(50vw-36rem))]">
            <blockquote class="max-w-[30ch] font-display text-3xl leading-[1.2] font-medium tracking-[-0.02em] text-balance text-ink sm:text-4xl">“{{ $quote }}”</blockquote>
            <figcaption class="mt-10 flex flex-wrap items-end justify-between gap-6 border-t border-line pt-6">
                <span>
                    <span class="block font-medium text-ink">{{ $name }}</span>
                    <span class="block text-sm text-muted">{{ $business }}</span>
                </span>
                <span class="text-right">
                    <span class="block font-mono text-2xl text-primary tabular-nums">{{ $figure }}</span>
                    <span class="block text-sm text-muted">{{ $figureLabel }}</span>
                </span>
            </figcaption>
        </figure>
    </div>
</section>
