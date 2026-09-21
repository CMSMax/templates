@props([
    'heading' => 'What the neighbours say',
    'rating' => '4.9',
    'ratingNote' => 'Average of 1,240 Google reviews',
    'items' => [],
])
<section class="border-y border-line bg-surface py-24 md:py-32">
    <div class="mx-auto max-w-7xl px-5 md:px-8">
        <h2 class="sr-only">{{ $heading }}</h2>
        <div class="grid gap-16 lg:grid-cols-12 lg:gap-10">
            @foreach ($items as $review)
                @if ($loop->first)
                    <figure class="lg:col-span-7" data-reveal>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 36" fill="currentColor" class="h-9 w-12 text-primary" aria-hidden="true"><path d="M0 36V22.4C0 9.9 6.2 2.4 18.6 0l2.1 5.2C13.9 7.2 10.6 11 10.4 16.8H20V36H0Zm28 0V22.4C28 9.9 34.2 2.4 46.6 0l2.1 5.2c-6.8 2-10.1 5.8-10.3 11.6H48V36H28Z"/></svg>
                        <blockquote class="mt-8">
                            <p class="max-w-[34ch] text-[clamp(1.5rem,2.6vw,2.25rem)] leading-[1.3] font-semibold tracking-tight text-pretty">{{ $review->quote }}</p>
                        </blockquote>
                        <figcaption class="mt-10 flex flex-wrap items-center gap-x-3 gap-y-1 text-base">
                            <span class="font-semibold">{{ $review->name }}</span>
                            <span class="text-muted">{{ $review->area }} · {{ $review->job }}</span>
                        </figcaption>
                    </figure>
                @endif
            @endforeach
            <div class="lg:col-span-4 lg:col-start-9">
                <div class="flex items-end gap-4 border-b border-line pb-8">
                    <p class="font-display text-7xl font-extrabold tabular-nums [font-stretch:125%]">{{ $rating }}</p>
                    <div class="pb-2">
                        <p class="flex gap-0.5 text-primary" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5"><path d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5"><path d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5"><path d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5"><path d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5"><path d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"/></svg>
                        </p>
                        <p class="mt-1.5 text-sm text-muted">{{ $ratingNote }}</p>
                    </div>
                </div>
                <ul role="list">
                    @foreach ($items as $review)
                        @if ($loop->first)
                        @else
                            <li class="border-b border-line py-7 last:border-b-0">
                                <figure>
                                    <blockquote>
                                        <p class="text-base/7 text-pretty">{{ $review->quote }}</p>
                                    </blockquote>
                                    <figcaption class="mt-3 text-sm">
                                        <span class="font-semibold">{{ $review->name }}</span>
                                        <span class="text-muted">· {{ $review->area }}</span>
                                    </figcaption>
                                </figure>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
