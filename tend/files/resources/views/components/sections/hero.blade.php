@props([
    'heading' => 'A calmer place',
    'headingItalic' => 'to think out loud.',
    'body' => 'Unhurried, practical therapy for adults and couples working through anxiety, burnout, relationships and the big changes in between.',
    'secondaryLabel' => 'See fees & insurance',
    'secondaryLink' => '/fees',
    'cardHeading' => 'This week’s forecast',
])
<section class="px-3 sm:px-4">
    <div class="sky-dawn relative isolate mx-auto flex max-w-[88rem] flex-col overflow-hidden lg:min-h-[46rem] lg:flex-row lg:items-center rounded-[clamp(1.25rem,2.5vw,2.25rem)]">
        <div class="pointer-events-none absolute inset-0 -z-10" aria-hidden="true">
            <div class="absolute top-[18%] -left-[10%] h-24 w-[55%] rounded-full bg-canvas/35 blur-2xl"></div>
            <div class="absolute top-[34%] right-[-6%] h-16 w-[40%] rounded-full bg-canvas/30 blur-2xl"></div>
            <div data-sun class="absolute -right-[3rem] -bottom-[8rem] size-[18rem] sm:right-[8%] sm:-bottom-[11rem] sm:size-[24rem] lg:right-[12%] lg:-bottom-[13rem] lg:size-[27rem]">
                <div class="absolute -inset-[35%] rounded-full bg-radial from-primary/45 to-transparent to-70%"></div>
                <div class="absolute inset-0 rounded-full bg-primary blur-[2px]"></div>
            </div>
            <div class="absolute inset-x-0 bottom-0 h-px bg-ink/10"></div>
        </div>
        <div class="mx-auto w-full max-w-6xl px-5 pt-14 pb-10 sm:px-8 sm:pt-20 lg:py-24">
            <p data-rise class="inline-flex items-center gap-2 rounded-full bg-card/80 px-3.5 py-1.5 text-sm font-medium text-ink ring-1 ring-ink/10">
                <span class="size-1.5 rounded-full bg-primary ring-2 ring-primary/30" aria-hidden="true"></span>
                {{ $site->availability }}
            </p>
            <h1 class="mt-7 text-[clamp(2.75rem,7.2vw,6rem)] leading-[0.98] text-ink">
                <span data-rise class="block font-sans font-medium tracking-[-0.045em] [--i:1]">{{ $heading }}</span>
                <span data-rise class="block font-display font-light tracking-[-0.03em] italic [--i:2]">{{ $headingItalic }}</span>
            </h1>
            <p data-rise class="mt-7 max-w-[46ch] text-lg/8 text-ink/80 [--i:3]">{{ $body }}</p>
            <div data-rise class="mt-10 flex flex-wrap items-center gap-x-7 gap-y-4 [--i:4]">
                <a href="{{ $site->cta_link }}" class="inline-flex items-center gap-3 rounded-full bg-primary py-2 pr-2 pl-6 text-base font-semibold text-primary-foreground ring-1 ring-primary hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">
                    {{ $site->cta_label }}
                    <span class="grid size-10 place-items-center rounded-full bg-ink text-canvas" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </span>
                </a>
                <a href="{{ $secondaryLink }}" class="group inline-flex min-h-12 items-center rounded-full text-base font-semibold text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink"><span class="underline decoration-ink/30 underline-offset-[6px] group-hover:decoration-ink">{{ $secondaryLabel }}</span></a>
            </div>
        </div>
        <div data-rise class="mx-3 mb-3 rounded-[1.25rem] bg-card p-5 shadow-lg shadow-ink/10 ring-1 ring-ink/5 [--i:5] sm:mx-8 sm:mb-8 sm:w-[21rem] sm:self-end lg:absolute lg:top-10 lg:right-10 lg:m-0">
            <p class="font-display text-lg font-light text-ink italic">{{ $cardHeading }}</p>
            <dl class="mt-3 divide-y divide-line text-sm/6">
                <div class="flex justify-between gap-4 py-2">
                    <dt class="font-medium whitespace-nowrap text-ink">Next openings</dt>
                    <dd class="text-right text-muted">{{ $site->next_openings }}</dd>
                </div>
                <div class="flex justify-between gap-4 py-2">
                    <dt class="font-medium whitespace-nowrap text-ink">First call</dt>
                    <dd class="text-right text-muted">Free · 15 minutes</dd>
                </div>
                <div class="flex justify-between gap-4 py-2">
                    <dt class="font-medium whitespace-nowrap text-ink">Replies</dt>
                    <dd class="text-right text-muted">{{ $site->reply_time }}</dd>
                </div>
            </dl>
        </div>
    </div>
    <ul role="list" class="mx-auto flex max-w-6xl flex-wrap gap-x-8 gap-y-2 px-5 pt-6 text-sm font-medium text-muted sm:px-8">
        @foreach ($site->logistics as $fact)
            <li class="flex items-center gap-2.5">
                <span class="size-1 rounded-full bg-ink/40" aria-hidden="true"></span>
                {{ $fact }}
            </li>
        @endforeach
    </ul>
</section>
