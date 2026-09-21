@props([
    'heading' => 'The price list',
    'body' => 'Straightforward prices, no upsell. Every service includes a hot towel finish and a style you can recreate at home.',
    'full' => '0',
    'linkLabel' => 'All services',
    'linkUrl' => '/services',
])
<section id="prices" class="scroll-mt-20 border-y border-line bg-surface py-20 lg:py-32">
    <div class="mx-auto max-w-7xl px-6">
        <div class="flex flex-col justify-between gap-6 lg:flex-row lg:items-end">
            <h2 class="font-display text-5xl leading-[0.95] font-semibold text-ink uppercase sm:text-6xl">{{ $heading }}</h2>
            <p class="max-w-[48ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
        </div>
        <div class="mt-14 border border-line p-2">
            <div class="border border-line px-6 py-12 sm:px-12 lg:px-16 lg:py-16">
                <p class="flex items-center justify-center gap-5 text-center font-display text-base font-semibold tracking-[0.24em] text-muted uppercase">
                    <span class="h-px w-10 bg-line sm:w-20" aria-hidden="true"></span>
                    {{ $site->short_name }} · Est. {{ $site->established }}
                    <span class="h-px w-10 bg-line sm:w-20" aria-hidden="true"></span>
                </p>
                <div class="mt-12 grid gap-14 lg:grid-cols-3 lg:gap-16">
                    @foreach ($site->service_groups as $group)
                        <div>
                            <h3 class="border-b border-line pb-4 font-display text-3xl font-semibold text-ink uppercase">{{ $group->name }}</h3>
                            @if ($full == '1')
                                <p class="mt-4 text-base/7 text-pretty text-muted">{{ $group->note }}</p>
                            @endif
                            <ul role="list" class="mt-6 flex flex-col gap-6">
                                @foreach ($services as $item)
                                    @if ($item->category == $group->name)
                                        @if ($full == '1' || $item->featured)
                                            <li>
                                                <div class="flex items-baseline gap-3">
                                                    <p class="text-lg font-medium text-ink">{{ $item->name }}</p>
                                                    <span class="leader" aria-hidden="true"></span>
                                                    <p class="font-display text-2xl font-semibold text-primary tabular-nums">{{ $site->currency }}{{ $item->price }}</p>
                                                </div>
                                                <p class="mt-1 text-sm text-muted tabular-nums">{{ $item->duration }}</p>
                                                @if ($full == '1')
                                                    <p class="mt-2 max-w-[44ch] text-base/7 text-pretty text-muted">{{ $item->description }}</p>
                                                @endif
                                            </li>
                                        @endif
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
                <div class="mt-14 flex flex-col items-center gap-6 border-t border-line pt-8 text-center sm:flex-row sm:justify-between sm:text-left">
                    <p class="max-w-[60ch] text-sm/6 text-pretty text-muted">{{ $site->price_note }}</p>
                    @if ($linkLabel)
                        <a href="{{ $linkUrl }}" class="inline-flex shrink-0 items-center gap-2 font-display text-base font-semibold tracking-[0.12em] text-primary uppercase underline-offset-4 hover:underline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                            {{ $linkLabel }}
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
