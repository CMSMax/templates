@props([
    'eyebrow' => 'Yoga on Alder Street · Seven days a week',
    'heading' => 'Yoga for the body you have today.',
    'body' => 'Small classes in a bright room, taught slowly enough to learn and strong enough to feel. New here? Your first week of unlimited classes is $25.',
    'secondaryLabel' => 'See this week’s schedule',
    'secondaryLink' => '/classes#schedule',
    'image' => '/images/hero-lunge.jpg',
    'imageAlt' => 'A woman kneeling in a low lunge with one arm reaching up, in a bright white studio',
    'platePose' => 'lunge',
    'plateNumber' => 'No. 02',
    'plateName' => 'Kneeling reach',
    'plateCue' => 'Inhale',
    'statOne' => '42',
    'statOneLabel' => 'classes a week',
    'statTwo' => '12',
    'statTwoLabel' => 'mats a room, never more',
    'statThree' => '4',
    'statThreeLabel' => 'teachers who know your name',
])
<section class="overflow-hidden pt-4 pb-20 sm:pt-8 lg:pb-28">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="grid items-end gap-12 lg:grid-cols-12 lg:gap-10">
            <div class="lg:col-span-6 lg:pb-4">
                <p data-rise class="flex items-center gap-3 text-sm font-semibold text-primary">
                    <span class="size-2 rounded-full bg-primary" aria-hidden="true"></span>
                    {{ $eyebrow }}
                </p>
                <h1 data-rise class="mt-6 max-w-[14ch] font-display text-[clamp(3.25rem,7.5vw,6.5rem)] leading-[0.95] font-medium tracking-[-0.045em] text-ink [--i:1]">{{ $heading }}</h1>
                <p data-rise class="mt-8 max-w-[46ch] text-lg/8 text-muted [--i:2]">{{ $body }}</p>
                <div data-rise class="mt-10 flex flex-wrap items-center gap-x-7 gap-y-4 [--i:3]">
                    <a href="{{ $site->cta_link }}" class="inline-flex items-center gap-2 rounded-full bg-primary py-4 pr-4 pl-7 text-base font-semibold text-primary-foreground hover:bg-primary/90 active:bg-primary/80 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                        {{ $site->cta_label }}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                    @if ($secondaryLabel)
                        <a href="{{ $secondaryLink }}" class="group inline-flex min-h-12 items-center rounded-full text-base font-semibold text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                            <span class="underline decoration-ink/25 underline-offset-[6px] group-hover:decoration-ink">{{ $secondaryLabel }}</span>
                        </a>
                    @endif
                </div>
            </div>
            <div data-rise class="relative lg:col-span-6 [--i:2]">
                <img src="{{ $image }}" alt="{{ $imageAlt }}" width="960" height="640" fetchpriority="high" class="aspect-[3/2] w-full rounded-[1.75rem] bg-card object-cover outline-1 -outline-offset-1 outline-ink/5">
                @if ($plateName)
                    <div class="absolute bottom-4 left-4 flex items-center gap-4 rounded-2xl bg-card/95 py-3 pr-5 pl-3 shadow-lg shadow-ink/10 ring-1 ring-ink/5 sm:bottom-6 sm:left-6">
                        <span class="grid size-14 shrink-0 place-items-center rounded-xl bg-spark text-spark-ink">
                            <x-pose :name="$platePose" size="size-10"/>
                        </span>
                        <span class="flex flex-col">
                            <span class="text-xs font-semibold text-muted tabular-nums">{{ $plateNumber }}</span>
                            <span class="font-display text-lg leading-tight font-medium text-ink">{{ $plateName }}</span>
                            <span class="text-sm text-primary">{{ $plateCue }}</span>
                        </span>
                    </div>
                @endif
            </div>
        </div>
        <dl data-rise class="mt-16 grid grid-cols-3 border-t border-line pt-8 lg:mt-20 [--i:4]">
            <div class="flex flex-col gap-1 pr-4 sm:pr-8">
                <dt class="order-2 text-sm text-muted sm:text-base">{{ $statOneLabel }}</dt>
                <dd class="font-display text-4xl font-medium tracking-tight text-ink tabular-nums sm:text-5xl">{{ $statOne }}</dd>
            </div>
            <div class="flex flex-col gap-1 border-l border-line px-4 sm:px-8">
                <dt class="order-2 text-sm text-muted sm:text-base">{{ $statTwoLabel }}</dt>
                <dd class="font-display text-4xl font-medium tracking-tight text-ink tabular-nums sm:text-5xl">{{ $statTwo }}</dd>
            </div>
            <div class="flex flex-col gap-1 border-l border-line pl-4 sm:pl-8">
                <dt class="order-2 text-sm text-muted sm:text-base">{{ $statThreeLabel }}</dt>
                <dd class="font-display text-4xl font-medium tracking-tight text-ink tabular-nums sm:text-5xl">{{ $statThree }}</dd>
            </div>
        </dl>
    </div>
</section>
