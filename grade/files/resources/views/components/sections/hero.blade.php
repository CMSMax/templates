@props([
    'heading' => 'Quoted plain.',
    'headingMarked' => 'Built once.',
    'body' => 'Grade builds additions, kitchens, and backyard cottages across Portland. One fixed, line-item price before we start, one crew lead until we finish.',
    'ctaLabel' => 'Request a quote',
    'ctaLink' => '/#quote',
    'image' => '/images/hero-framing.jpg',
    'imageAlt' => 'A two-storey timber-framed addition going up on the back of a house, with fresh lumber stacked on the gravel.',
    'stampNumber' => '121',
    'stampTitle' => 'Now framing',
    'stampLocation' => 'Laurelhurst',
    'stampYear' => '2026',
    'stampScope' => 'Rear addition',
    'stampWeeks' => '9 of 20',
])
<section class="overflow-hidden pt-10 pb-20 md:pt-16 md:pb-32">
    <div class="mx-auto max-w-7xl px-5 md:px-8">
        <h1 class="font-display text-hero font-extrabold uppercase">
            <span class="block">{{ $heading }}</span>
            <span class="relative isolate inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 80" preserveAspectRatio="none" class="absolute -right-[3%] bottom-[4%] -left-[2%] -z-10 h-[46%] w-[105%] text-primary" aria-hidden="true">
                    <defs>
                        <filter id="paint-spray" x="-4%" y="-50%" width="108%" height="200%">
                            <feTurbulence type="fractalNoise" baseFrequency="0.018 0.9" numOctaves="4" seed="11" result="noise"/>
                            <feDisplacementMap in="SourceGraphic" in2="noise" scale="26" xChannelSelector="R" yChannelSelector="G" result="rough"/>
                            <feGaussianBlur in="rough" stdDeviation="0.8"/>
                        </filter>
                    </defs>
                    <g filter="url(#paint-spray)" fill="none" stroke="currentColor" stroke-linecap="round">
                        <path d="M14 50 C 150 34, 330 58, 586 36" stroke-width="40"/>
                        <path d="M40 40 C 200 30, 380 46, 560 30" stroke-width="18" opacity="0.8"/>
                    </g>
                </svg>
                {{ $headingMarked }}
            </span>
        </h1>
        <div class="mt-10 grid gap-8 md:mt-14 md:grid-cols-12 md:items-end md:gap-10">
            <p class="max-w-[46ch] text-lg text-pretty text-muted md:col-span-6 md:text-xl">{{ $body }}</p>
            <div class="flex flex-wrap items-center gap-x-6 gap-y-4 md:col-span-6 md:justify-end">
                <a href="{{ $ctaLink }}" class="inline-flex min-h-13 items-center gap-3 bg-primary py-3 pr-4 pl-6 text-base font-semibold text-primary-foreground transition-[translate,background-color] duration-150 hover:bg-ink hover:text-canvas active:translate-y-px">
                    {{ $ctaLabel }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="square" class="size-5 shrink-0" aria-hidden="true"><path d="M4 10h11M11 5l5 5-5 5"/></svg>
                </a>
                <a href="{{ $site->phone_href }}" class="inline-flex min-h-12 items-center border-b-2 border-ink text-base font-semibold tabular-nums text-ink transition-colors duration-150 hover:border-primary">or call {{ $site->phone }}</a>
            </div>
        </div>
        <figure class="relative mt-12 md:mt-16" data-reveal>
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1024" height="688" fetchpriority="high" class="aspect-[4/3] w-full object-cover md:aspect-[21/9]">
            <figcaption class="absolute -bottom-8 left-4 [--tilt:-2.5deg] md:-bottom-10 md:left-10">
                <x-stamp :number="$stampNumber" :title="$stampTitle" :location="$stampLocation" :year="$stampYear" :scope="$stampScope" :weeks="$stampWeeks"/>
            </figcaption>
        </figure>
    </div>
</section>
