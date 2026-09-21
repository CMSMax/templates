@props([
    'lineOne' => 'Strong',
    'lineTwo' => 'is a',
    'lineThree' => 'schedule.',
    'body' => 'Coached strength and conditioning in classes of twelve or fewer. Show up three times a week, and we will handle the program, the plates and the progress.',
    'secondaryLabel' => 'See the week',
    'secondaryLink' => '/schedule',
    'image' => '/images/hero.jpg',
    'imageAlt' => 'A lifter in a bright warehouse gym sets up a deadlift, chalk dust in the air and a red plate on the bar',
    'items' => [],
])
<section class="border-b border-line">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="grid gap-10 pt-8 pb-14 lg:grid-cols-12 lg:gap-8 lg:pt-14 lg:pb-20">
            <div class="flex flex-col justify-between lg:col-span-7">
                <h1 class="font-display text-[clamp(4.5rem,19vw,11.5rem)] leading-[0.82] font-black tracking-[-0.01em] text-ink uppercase">
                    <span data-rise class="block">{{ $lineOne }}</span>
                    <span data-rise class="block text-muted [--i:1]">{{ $lineTwo }}</span>
                    <span data-rise class="block [--i:2]">{{ $lineThree }}</span>
                </h1>
                <div data-rise class="mt-10 [--i:3] lg:mt-14">
                    <p class="max-w-[46ch] text-lg/8 text-muted">{{ $body }}</p>
                    <div class="mt-8 flex flex-wrap items-center gap-x-7 gap-y-4">
                        <a href="{{ $site->cta_link }}" class="inline-flex items-center gap-3 rounded-sm bg-primary py-4 pr-5 pl-6 font-display text-2xl leading-none font-extrabold tracking-[0.05em] text-primary-foreground uppercase transition-colors duration-150 hover:bg-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                            {{ $site->cta_label }}
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="square" class="size-5 shrink-0" aria-hidden="true"><path d="M5 12h13m-6-6 6 6-6 6"/></svg>
                        </a>
                        <a href="{{ $secondaryLink }}" class="rounded-sm py-3 text-base font-semibold text-ink underline decoration-ink/30 decoration-2 underline-offset-6 transition-colors duration-150 hover:decoration-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $secondaryLabel }}</a>
                    </div>
                    <p class="mt-6 text-sm/6 text-muted">{{ $site->trial_note }}</p>
                </div>
            </div>
            <figure class="relative lg:col-span-5 lg:self-end">
                <img src="{{ $image }}" alt="{{ $imageAlt }}" width="896" height="1120" fetchpriority="high" class="aspect-[4/5] w-full rounded-sm object-cover max-lg:max-h-[34rem]">
                <figcaption class="absolute bottom-4 left-4 flex items-center gap-4 rounded-sm bg-surface py-3 pr-5 pl-3 shadow-xs ring-1 ring-ink/5">
                    @foreach ($programs as $program)
                        @if ($program->name == $site->next_class)
                            <span data-plate="{{ $program->plate }}" class="plate size-11" aria-hidden="true"></span>
                        @endif
                    @endforeach
                    <span class="flex flex-col">
                        <span class="font-display text-[0.8125rem] font-bold tracking-[0.14em] text-muted uppercase">Next class · {{ $site->next_class_time }}</span>
                        <span class="font-display text-2xl leading-tight font-extrabold tracking-wide text-ink uppercase">{{ $site->next_class }} <span class="text-muted">with {{ $site->next_class_coach }}</span></span>
                        <span class="text-sm text-muted">{{ $site->next_class_spots }}</span>
                    </span>
                </figcaption>
            </figure>
        </div>
        @if ($items)
            <dl class="grid grid-cols-2 border-t border-line lg:grid-cols-4">
                @foreach ($items as $stat)
                    <div class="flex flex-col gap-1 border-line py-7 max-lg:odd:border-r max-lg:odd:pr-5 max-lg:even:pl-5 max-lg:[&:nth-child(-n+2)]:border-b lg:border-r lg:px-6 lg:first:pl-0 lg:last:border-r-0">
                        <dt class="order-2 text-sm/6 text-muted">{{ $stat->label }}</dt>
                        <dd class="order-1 font-display text-[clamp(3rem,5vw,4.5rem)] leading-none font-black tracking-tight text-ink tabular-nums">{{ $stat->value }}</dd>
                    </div>
                @endforeach
            </dl>
        @endif
    </div>
</section>
