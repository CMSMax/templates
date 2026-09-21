@props([
    'heading' => 'Priced by the hour you need.',
    'body' => 'Every session is one therapist, one room, and the full time on the table — undressing and talking happen outside the clock. Most people start with sixty minutes.',
    'image' => '/images/oil.jpg',
    'imageAlt' => 'A therapist pouring golden massage oil from an amber bottle into a cupped palm in low sunlight',
    'linkLabel' => 'Full menu, add-ons and policies',
    'linkHref' => '/treatments',
])
<section id="treatments" class="scroll-mt-20 bg-secondary py-24 text-secondary-foreground lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-[7fr_5fr] lg:items-end lg:gap-20">
            <div>
                <h2 class="max-w-[14ch] font-display text-[clamp(2.5rem,5.5vw,4.5rem)] leading-[1.02] font-normal tracking-[-0.03em] text-balance">{{ $heading }}</h2>
                <p class="mt-6 max-w-[52ch] text-lg/8 text-secondary-foreground/85">{{ $body }}</p>
            </div>
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1200" height="806" loading="lazy" decoding="async" class="aspect-[3/2] w-full rounded-3xl object-cover">
        </div>
        <div class="mt-20">
            <div class="grid grid-cols-[1fr_6rem_6rem] gap-x-6 border-b border-secondary-foreground/25 pb-4 text-sm font-semibold text-secondary-foreground/80 max-md:hidden" aria-hidden="true">
                <span>Treatment</span>
                <span class="text-right">60 min</span>
                <span class="text-right">90 min</span>
            </div>
            <ul role="list">
                @foreach ($treatments as $treatment)
                    @if ($treatment->featured)
                        <li class="grid gap-x-6 gap-y-4 border-b border-secondary-foreground/15 py-8 md:grid-cols-[1fr_6rem_6rem] md:items-baseline">
                            <div>
                                <h3 class="font-display text-[1.75rem] leading-[1.15] tracking-tight sm:text-3xl">{{ $treatment->name }}</h3>
                                <p class="mt-3 max-w-[60ch] text-base/7 text-secondary-foreground/85">{{ $treatment->summary }}</p>
                                <p class="mt-3 text-sm text-primary">Best for: {{ $treatment->best_for }}</p>
                            </div>
                            <dl class="contents">
                                <div class="flex items-baseline justify-between gap-4 max-md:border-t max-md:border-secondary-foreground/15 max-md:pt-4 md:block md:text-right">
                                    <dt class="text-sm text-secondary-foreground/80 md:sr-only">60 minutes</dt>
                                    <dd class="font-display text-2xl tabular-nums">
                                        @if ($treatment->price_60)
                                            {{ $site->currency }}{{ $treatment->price_60 }}
                                        @else
                                            <span class="text-secondary-foreground/60">—</span>
                                        @endif
                                    </dd>
                                </div>
                                <div class="flex items-baseline justify-between gap-4 md:block md:text-right">
                                    <dt class="text-sm text-secondary-foreground/80 md:sr-only">90 minutes</dt>
                                    <dd class="font-display text-2xl tabular-nums">
                                        @if ($treatment->price_90)
                                            {{ $site->currency }}{{ $treatment->price_90 }}
                                        @else
                                            <span class="text-secondary-foreground/60">—</span>
                                        @endif
                                    </dd>
                                </div>
                            </dl>
                        </li>
                    @endif
                @endforeach
            </ul>
            <div class="mt-12 flex flex-wrap items-center gap-x-8 gap-y-4">
                <a href="{{ $site->booking_url }}" class="rounded-full bg-primary px-6 py-3.5 text-base font-semibold text-primary-foreground transition-colors duration-150 hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary-foreground">{{ $site->cta_label }}</a>
                <a href="{{ $linkHref }}" class="rounded-sm text-base font-semibold underline decoration-secondary-foreground/40 underline-offset-4 hover:decoration-secondary-foreground focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-secondary-foreground">{{ $linkLabel }}</a>
            </div>
        </div>
    </div>
</section>
