@props([
    'heading' => 'Your claim, forecast.',
    'body' => 'Most hail claims follow the same thirty days. Here is what happens on each of them, and who does it.',
    'items' => [],
])
<section class="py-20 md:py-32">
    <div class="mx-auto max-w-7xl px-5 md:px-8">
        <h2 class="max-w-[18ch] font-display text-section font-semibold text-balance">{{ $heading }}</h2>
        <p class="mt-5 max-w-[48ch] text-lg text-pretty text-muted">{{ $body }}</p>
        <ol role="list" class="mt-14 grid overflow-hidden rounded-lg border border-line bg-surface md:mt-16 lg:grid-cols-5" data-reveal>
            @foreach ($items as $step)
                <li class="flex gap-5 border-line p-6 max-lg:not-last:border-b lg:flex-col lg:not-last:border-r lg:p-7">
                    <div class="flex shrink-0 flex-col gap-4 max-lg:w-24">
                        <p class="bulletin text-muted">{{ $step->day }}</p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-10 text-ink" aria-hidden="true">
                            @if ($step->icon == 'storm')
                                <path d="M12 26a7 7 0 1 1 1.8-13.8A9 9 0 0 1 31 16a5 5 0 0 1-2 10Z"/><path class="text-primary" stroke="currentColor" d="m21 25-3 6h5l-3 6"/>
                            @elseif ($step->icon == 'search')
                                <circle cx="17" cy="17" r="10"/><path d="m24.5 24.5 9 9"/><circle class="text-primary" stroke="currentColor" cx="17" cy="17" r="4"/>
                            @elseif ($step->icon == 'people')
                                <circle cx="14" cy="13" r="5"/><circle cx="27" cy="15" r="4"/><path d="M5 33c0-5 4-9 9-9s9 4 9 9"/><path class="text-primary" stroke="currentColor" d="M25 24c4.5 0 9 3 9 8"/>
                            @elseif ($step->icon == 'hammer')
                                <path d="M5 30 20 15l5 5-15 15a3.5 3.5 0 0 1-5-5Z"/><path class="text-primary" stroke="currentColor" d="m22 13 6-6 7 7-6 6"/>
                            @else
                                <circle cx="20" cy="20" r="14"/><path class="text-primary" stroke="currentColor" d="m13 20.5 5 5 10-11"/>
                            @endif
                        </svg>
                    </div>
                    <div class="flex min-w-0 flex-col gap-2 lg:mt-4">
                        <h3 class="font-display text-lg font-semibold tracking-tight">{{ $step->title }}</h3>
                        <p class="text-base text-pretty text-muted">{{ $step->body }}</p>
                    </div>
                </li>
            @endforeach
        </ol>
    </div>
</section>
