@props([
    'heading' => "What's going on?",
    'body' => 'Pick the closest match. You will see what it usually is, what we do about it, and the flat price, before anyone comes out.',
    'ticketLabel' => 'Work ticket',
    'causeLabel' => 'Most likely',
    'fixLabel' => 'What we do',
    'timeLabel' => 'Time on site',
    'priceLabel' => 'Flat price',
    'ctaLabel' => 'Book this fix',
    'ctaLink' => '/contact',
    'note' => 'If it turns out to be something else, we tell you the new price before we touch it. You can still say no and pay only the $59 visit.',
    'items' => [],
])
<section id="finder" class="py-24 md:py-32">
    <div class="mx-auto max-w-7xl px-5 md:px-8">
        <div class="grid gap-6 lg:grid-cols-12 lg:items-end lg:gap-10">
            <h2 class="font-display text-section font-extrabold text-balance lg:col-span-6">{{ $heading }}</h2>
            <p class="max-w-[48ch] text-lg text-pretty text-muted lg:col-span-5 lg:col-start-8">{{ $body }}</p>
        </div>
        <div data-finder class="mt-12 grid gap-8 md:mt-16 lg:grid-cols-12 lg:gap-10">
            <div role="tablist" aria-label="{{ $heading }}" aria-orientation="vertical" class="flex flex-col gap-2 lg:col-span-5">
                @foreach ($items as $fault)
                    <button type="button" role="tab" id="fault-tab-{{ $fault->slug }}" aria-controls="fault-{{ $fault->slug }}" aria-selected="false" class="group flex min-h-16 w-full items-center gap-4 rounded-2xl px-5 py-3 text-left ring-1 ring-line hover:bg-surface aria-selected:bg-surface aria-selected:shadow-lift aria-selected:ring-primary">
                        <span class="flex size-9 shrink-0 items-center justify-center rounded-full bg-tint text-primary group-aria-selected:bg-primary group-aria-selected:text-primary-foreground" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4"><path d="M10 2.5c-.3 0-.58.15-.75.4C7.6 5.3 5 9.2 5 12a5 5 0 0 0 10 0c0-2.8-2.6-6.7-4.25-9.1a.9.9 0 0 0-.75-.4Z"/></svg>
                        </span>
                        <span class="flex-1 text-base font-semibold text-ink md:text-lg">{{ $fault->name }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0 text-muted group-aria-selected:text-primary max-lg:hidden" aria-hidden="true"><path d="m8 5 5 5-5 5"/></svg>
                    </button>
                @endforeach
            </div>
            <div class="flex flex-col gap-6 lg:col-span-7">
                @foreach ($items as $fault)
                    <article id="fault-{{ $fault->slug }}" role="tabpanel" aria-labelledby="fault-tab-{{ $fault->slug }}" data-finder-panel class="rounded-[1.75rem] bg-surface p-6 shadow-ticket ring-1 ring-line md:p-10">
                        <div class="flex flex-wrap items-center justify-between gap-3 border-b border-dashed border-line pb-5">
                            <p class="text-sm font-semibold text-muted">{{ $ticketLabel }} · <span class="text-ink">{{ $fault->code }}</span></p>
                            <p class="rounded-full bg-tint px-3 py-1 text-sm font-semibold text-primary">{{ $fault->urgency }}</p>
                        </div>
                        <h3 class="mt-6 font-display text-2xl font-extrabold text-balance md:text-[2rem]">{{ $fault->name }}</h3>
                        <dl class="mt-6 flex flex-col gap-4">
                            <div class="grid gap-1 sm:grid-cols-[9rem_1fr] sm:gap-8">
                                <dt class="text-sm font-semibold text-muted sm:pt-1">{{ $causeLabel }}</dt>
                                <dd class="text-lg text-pretty">{{ $fault->cause }}</dd>
                            </div>
                            <div class="grid gap-1 sm:grid-cols-[9rem_1fr] sm:gap-8">
                                <dt class="text-sm font-semibold text-muted sm:pt-1">{{ $fixLabel }}</dt>
                                <dd class="text-lg text-pretty">{{ $fault->fix }}</dd>
                            </div>
                            <div class="grid gap-1 sm:grid-cols-[9rem_1fr] sm:gap-8">
                                <dt class="text-sm font-semibold text-muted sm:pt-1">{{ $timeLabel }}</dt>
                                <dd class="text-lg tabular-nums">{{ $fault->time }}</dd>
                            </div>
                        </dl>
                        <div class="mt-8 flex flex-col gap-6 rounded-2xl bg-canvas p-5 sm:flex-row sm:items-center sm:justify-between md:p-6">
                            <div>
                                <p class="text-sm font-semibold text-muted">{{ $priceLabel }}</p>
                                <p class="mt-1 font-display text-4xl font-extrabold tabular-nums [font-stretch:125%] md:text-5xl">{{ $fault->price }}</p>
                            </div>
                            <a href="{{ $ctaLink }}" class="inline-flex min-h-12 items-center justify-center gap-2 rounded-full bg-ink py-3 pr-4 pl-5 text-base font-semibold text-canvas hover:bg-primary active:translate-y-px">
                                {{ $ctaLabel }}
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M4 10h11M11 5l5 5-5 5"/></svg>
                            </a>
                        </div>
                    </article>
                @endforeach
                <p class="max-w-[62ch] text-sm/6 text-pretty text-muted">{{ $note }}</p>
            </div>
        </div>
    </div>
</section>
