@props([
    'heading' => 'Street tacos,',
    'headingAccent' => 'parked near you.',
    'body' => 'Tortillas pressed on the truck, meat off the flat-top, handed through the window in about four minutes. Here is where we are parking next.',
    'secondaryLabel' => 'See the menu',
    'secondaryLink' => '/menu',
    'image' => '/images/truck.jpg',
    'imageAlt' => 'A black food truck with its service window open, parked at a yellow curb in the late afternoon sun',
])
<section class="overflow-hidden">
    <div class="mx-auto grid max-w-7xl grid-cols-1 items-center gap-12 px-5 pt-10 pb-16 sm:px-8 sm:pt-14 lg:grid-cols-[7fr_5fr] lg:gap-16 lg:pt-16 lg:pb-20">
        <div>
            <h1 data-rise class="font-display text-[clamp(3.25rem,8vw,6rem)] leading-[0.98] font-black text-balance text-ink uppercase">{{ $heading }} <span class="bg-linear-to-b from-transparent from-18% to-primary to-18% box-decoration-clone px-2 text-primary-foreground">{{ $headingAccent }}</span></h1>
            <p data-rise class="mt-7 max-w-[46ch] text-lg/8 text-pretty text-muted [--i:1]">{{ $body }}</p>
            @foreach ($stops as $stop)
                @if ($stop->next)
                    <div data-rise class="mt-9 max-w-md border-2 border-ink bg-card [--i:2]">
                        <p class="flex items-center justify-between gap-4 bg-ink px-4 py-2 text-sm font-semibold text-canvas">
                            <span class="flex items-center gap-2">
                                <span class="size-2 shrink-0 bg-primary" aria-hidden="true"></span>
                                Next stop
                            </span>
                            <span class="text-canvas/75">{{ $stop->meal }}</span>
                        </p>
                        <div class="flex items-center gap-5 px-4 py-4">
                            <p class="font-display text-5xl font-black text-ink uppercase">{{ $stop->day }}</p>
                            <div class="min-w-0 flex-1 border-l border-ink/15 pl-5">
                                <p class="text-base font-semibold text-ink">{{ $stop->place }}</p>
                                <p class="text-base text-muted sm:text-sm">{{ $stop->address }}</p>
                                <p class="mt-1 text-base font-medium text-ink tabular-nums sm:text-sm">{{ $stop->hours }}</p>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
            <div data-rise class="mt-8 flex flex-wrap items-center gap-x-6 gap-y-4 [--i:3]">
                <a href="{{ $site->cta_link }}" class="inline-flex items-center gap-2 border-2 border-ink bg-primary py-3.5 pr-4 pl-6 text-base font-semibold text-primary-foreground hover:bg-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">
                    {{ $site->cta_label }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="M10 2a.75.75 0 0 1 .75.75v12.69l4.22-4.22a.75.75 0 1 1 1.06 1.06l-5.5 5.5a.75.75 0 0 1-1.06 0l-5.5-5.5a.75.75 0 1 1 1.06-1.06l4.22 4.22V2.75A.75.75 0 0 1 10 2Z" clip-rule="evenodd"/></svg>
                </a>
                <a href="{{ $secondaryLink }}" class="inline-flex items-center gap-1.5 text-base font-semibold text-ink underline decoration-ink/30 decoration-2 underline-offset-6 hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $secondaryLabel }}</a>
            </div>
        </div>
        <div data-rise class="relative [--i:2]">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="896" height="1120" fetchpriority="high" class="aspect-[4/5] w-full object-cover object-[center_70%] max-lg:aspect-[3/2]">
            <p class="absolute -bottom-5 left-5 flex rotate-[-3deg] items-center gap-2 border-2 border-ink bg-card px-3.5 py-2 text-sm font-semibold text-ink">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4 shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="m9.69 18.933.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 0 0 .281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 1 0 3 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 0 0 2.273 1.765 11.842 11.842 0 0 0 .976.544l.062.029.018.008.006.003ZM10 11.25a2.25 2.25 0 1 0 0-4.5 2.25 2.25 0 0 0 0 4.5Z" clip-rule="evenodd"/></svg>
                Rolling around {{ $site->city }}
            </p>
        </div>
    </div>
    <div class="overflow-hidden border-y-2 border-ink bg-primary py-4 text-primary-foreground" aria-hidden="true">
        <div class="marquee flex w-max">
            <div class="flex shrink-0 items-center">
                @foreach ($menu as $item)
                    <p class="flex items-center gap-8 pr-8 font-display text-3xl font-extrabold whitespace-nowrap uppercase">{{ $item->name }} <span class="size-2.5 rotate-45 bg-ink"></span></p>
                @endforeach
            </div>
            <div class="flex shrink-0 items-center">
                @foreach ($menu as $item)
                    <p class="flex items-center gap-8 pr-8 font-display text-3xl font-extrabold whitespace-nowrap uppercase">{{ $item->name }} <span class="size-2.5 rotate-45 bg-ink"></span></p>
                @endforeach
            </div>
        </div>
    </div>
</section>
