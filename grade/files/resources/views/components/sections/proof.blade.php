@props([
    'quote' => 'They told us the price in March and it was the price in September. The crew swept up every night, and our kids still ask where Luis went.',
    'name' => 'Adaeze and Tom Okafor',
    'detail' => 'Harlow Street addition, 2025',
    'figures' => [],
])
<section class="py-20 md:py-32">
    <div class="mx-auto grid max-w-7xl gap-14 px-5 md:px-8 lg:grid-cols-12 lg:gap-10">
        <figure class="lg:col-span-7" data-reveal>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 36" fill="currentColor" class="h-9 w-12 text-primary" aria-hidden="true"><path d="M0 36V20C0 8 6 1 18 0v7c-6 1.5-9 5-9.5 11H18v18Zm30 0V20c0-12 6-19 18-20v7c-6 1.5-9 5-9.5 11H48v18Z"/></svg>
            <blockquote class="mt-8">
                <p class="text-2xl leading-[1.35] font-medium text-pretty md:text-[2rem]">{{ $quote }}</p>
            </blockquote>
            <figcaption class="mt-8 flex flex-col gap-1 border-l-2 border-ink pl-4">
                <span class="font-semibold">{{ $name }}</span>
                <span class="text-muted">{{ $detail }}</span>
            </figcaption>
        </figure>
        <dl class="border-t-2 border-ink lg:col-span-4 lg:col-start-9">
            @foreach ($figures as $figure)
                <div class="flex items-end justify-between gap-6 border-b border-line py-6" data-reveal>
                    <dt class="max-w-[20ch] text-base text-muted">{{ $figure->label }}</dt>
                    <dd class="font-display text-6xl leading-none font-extrabold tabular-nums">{{ $figure->value }}</dd>
                </div>
            @endforeach
        </dl>
    </div>
</section>
