@props([
    'status' => 'Two plumbers on call in Denver right now',
    'heading' => 'Fixed right. Priced first.',
    'body' => 'Leaks, drains, water heaters and everything between. You get a flat price at the door before any work starts, and a one-year guarantee when we leave.',
    'ctaLabel' => 'Book a plumber',
    'ctaLink' => '/contact',
    'image' => '/images/hero-sink.jpg',
    'imageAlt' => 'A plumber kneeling at an open kitchen sink cabinet, fitting a new chrome drain trap, with his tool bag on a drop cloth.',
    'rating' => '4.9',
    'ratingNote' => 'from 1,240 Google reviews',
    'promise' => '1-year guarantee',
    'promiseNote' => 'on every repair we make',
    'lidText' => 'Licensed master plumbers · Denver · Est. 2009 ·',
])
<section class="relative isolate lg:mb-20">
    <div class="absolute inset-x-0 top-0 -z-10 h-[calc(100%-5rem)] bg-primary lg:h-full" aria-hidden="true"></div>
    <div class="mx-auto grid max-w-7xl gap-12 px-5 pt-12 md:px-8 md:pt-16 lg:grid-cols-12 lg:gap-10 lg:pt-20">
        <div class="text-primary-foreground lg:col-span-7 lg:pb-24">
            <p class="inline-flex items-center gap-2.5 rounded-full bg-primary-foreground/10 py-1.5 pr-3.5 pl-2.5 text-sm font-medium ring-1 ring-primary-foreground/20">
                <span class="size-2 rounded-full bg-primary-foreground" aria-hidden="true"></span>
                {{ $status }}
            </p>
            <h1 class="mt-7 font-display text-hero font-extrabold text-balance">{{ $heading }}</h1>
            <p class="mt-7 max-w-[46ch] text-lg text-pretty text-primary-foreground/85 md:text-xl/8">{{ $body }}</p>
            <div class="mt-10 flex flex-wrap items-center gap-x-7 gap-y-4">
                <a href="{{ $ctaLink }}" class="inline-flex min-h-13 items-center gap-2.5 rounded-full bg-primary-foreground py-3 pr-4 pl-6 text-base font-semibold text-ink shadow-lift hover:bg-canvas active:translate-y-px">
                    {{ $ctaLabel }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M4 10h11M11 5l5 5-5 5"/></svg>
                </a>
                <a href="{{ $site->phone_href }}" class="group flex min-h-12 items-center gap-3 text-primary-foreground">
                    <span class="flex size-10 shrink-0 items-center justify-center rounded-full ring-1 ring-primary-foreground/40 group-hover:bg-primary-foreground/10">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4.5" aria-hidden="true"><path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 0 1 3.5 2h1.148a1.5 1.5 0 0 1 1.465 1.175l.513 2.31a1.5 1.5 0 0 1-1.02 1.745l-.7.233a.75.75 0 0 0-.45.998 11.5 11.5 0 0 0 5.083 5.083.75.75 0 0 0 .998-.45l.233-.7a1.5 1.5 0 0 1 1.745-1.02l2.31.513A1.5 1.5 0 0 1 18 15.352V16.5a1.5 1.5 0 0 1-1.5 1.5H15C7.82 18 2 12.18 2 5V3.5Z" clip-rule="evenodd"/></svg>
                    </span>
                    <span class="text-lg font-semibold tabular-nums underline decoration-primary-foreground/30 underline-offset-4 group-hover:decoration-primary-foreground">{{ $site->phone }}</span>
                </a>
            </div>
            <dl class="mt-12 grid max-w-xl grid-cols-2 gap-6 border-t border-primary-foreground/20 pt-6">
                <div>
                    <dt class="sr-only">Rating</dt>
                    <dd class="flex items-center gap-1.5 font-display text-xl font-extrabold tabular-nums [font-stretch:125%] sm:text-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd"/></svg>
                        {{ $rating }}
                    </dd>
                    <dd class="mt-1 text-sm text-primary-foreground/75">{{ $ratingNote }}</dd>
                </div>
                <div>
                    <dt class="sr-only">Guarantee</dt>
                    <dd class="font-display text-xl font-extrabold [font-stretch:125%] sm:text-2xl">{{ $promise }}</dd>
                    <dd class="mt-1 text-sm text-primary-foreground/75">{{ $promiseNote }}</dd>
                </div>
            </dl>
        </div>
        <div class="relative lg:col-span-5 lg:translate-y-20">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="896" height="1120" fetchpriority="high" class="aspect-[4/5] w-full rounded-[2rem] object-cover shadow-photo max-lg:max-h-[34rem]">
            <div class="absolute -bottom-10 -left-6 w-32 sm:w-40 lg:-left-16 lg:bottom-28 lg:w-44">
                <x-lid :text="$lidText" key="hero-lid"/>
            </div>
        </div>
    </div>
</section>
