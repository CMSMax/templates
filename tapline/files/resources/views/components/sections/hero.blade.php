@props([
    'heading' => 'Brewed out back. Poured right here.',
    'body' => 'A small brewery with a long tap list, a room full of neighbors, and beer that traveled twenty feet to get to your glass.',
    'secondaryLabel' => 'See the tap list',
    'flightLabel' => 'Tonight’s flight',
])
<section class="overflow-hidden pt-12 sm:pt-16 lg:pt-20">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <p data-pour class="flex flex-wrap items-center gap-x-3 gap-y-1 text-base text-muted sm:text-sm">
            <span class="flex items-center gap-2 font-medium text-ink">
                <span class="size-2 rounded-full bg-primary" aria-hidden="true"></span>
                {{ $site->open_summary }}
            </span>
            <span aria-hidden="true">/</span>
            <span>{{ $site->address }}, {{ $site->city }}</span>
        </p>
        <h1 data-pour style="--i: 1" class="mt-6 max-w-[13ch] font-display text-[clamp(2.6rem,7.4vw,6.75rem)] leading-[0.94] font-black tracking-tight text-balance text-ink">{{ $heading }}</h1>
        <div data-pour style="--i: 2" class="mt-8 flex flex-col gap-8 lg:flex-row lg:items-end lg:justify-between">
            <p class="max-w-[46ch] text-lg/8 text-muted">{{ $body }}</p>
            <div class="flex flex-wrap items-center gap-x-6 gap-y-4">
                <a href="{{ $site->cta_link }}" class="inline-flex items-center gap-2 rounded-full bg-primary py-3.5 pr-4 pl-6 text-base font-semibold text-primary-foreground hover:bg-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                    {{ $site->cta_label }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.64l-4.16-3.96a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.16-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd"/></svg>
                </a>
                <a href="/menu" class="rounded-sm py-3 text-base font-semibold text-ink underline decoration-ink/35 decoration-2 underline-offset-6 hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $secondaryLabel }}</a>
            </div>
        </div>

        <figure class="mt-14 sm:mt-20">
            <figcaption class="flex flex-wrap items-baseline justify-between gap-x-4 gap-y-1 border-b border-line pb-3">
                <span class="font-display text-sm font-bold tracking-wide whitespace-nowrap text-ink wide">{{ $flightLabel }}</span>
                <span class="text-base text-muted sm:text-sm">{{ $site->flight_note }}</span>
            </figcaption>
            <ul role="list" class="grid grid-cols-5 items-end gap-3 px-1 pt-10 sm:gap-8 sm:px-6 lg:gap-14 lg:px-12">
                @foreach ($taps as $tap)
                    @if ($tap->flight)
                        <li data-pour style="--i: {{ $loop->iteration }}" class="flex flex-col items-center">
                            <span data-color="{{ $tap->color }}" class="glass w-full max-w-28"></span>
                            <span class="sr-only">{{ $tap->name }}, {{ $tap->style }}, {{ $tap->abv }}</span>
                        </li>
                    @endif
                @endforeach
            </ul>
            <div class="paddle h-4 rounded-full bg-surface ring-1 ring-line ring-inset sm:h-5" aria-hidden="true"></div>
            <ul role="list" class="grid grid-cols-5 gap-3 px-1 pt-4 pb-14 sm:gap-8 sm:px-6 lg:gap-14 lg:px-12 lg:pb-20" aria-hidden="true">
                @foreach ($taps as $tap)
                    @if ($tap->flight)
                        <li class="text-center">
                            <p class="font-display text-lg font-extrabold text-ink tabular-nums wide">{{ $tap->number }}</p>
                            <p class="mt-1 text-sm font-medium text-ink max-sm:hidden">{{ $tap->name }}</p>
                            <p class="mt-0.5 text-sm text-muted">{{ $tap->abv }}</p>
                        </li>
                    @endif
                @endforeach
            </ul>
        </figure>
    </div>
</section>
