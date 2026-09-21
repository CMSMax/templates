@props([
    'eyebrow' => 'Physical therapy & sports rehab in Springfield',
    'heading' => 'Pain-free is the start.',
    'headingTape' => 'Strong is the goal.',
    'body' => 'One-on-one physical therapy for backs, knees, shoulders, and life after surgery. Every visit is measured, so you can watch the numbers move — and you’ll know from day one when you should be done.',
    'image' => '/images/hero.jpg',
    'imageAlt' => 'A physical therapist guides a patient through a step-up onto a wooden box, a lime resistance band looped above her knees',
])
<section class="pt-8 pb-20 sm:pt-12 lg:pb-28">
    <div class="mx-auto grid max-w-6xl items-center gap-12 px-5 sm:px-8 lg:grid-cols-[7fr_5fr] lg:gap-16">
        <div>
            <p data-rise class="flex items-center gap-2.5 text-sm font-semibold text-ink">
                <span class="h-2 w-6 shrink-0 rounded-full bg-primary ring-1 ring-ink/15 ring-inset" aria-hidden="true"></span>
                {{ $eyebrow }}
            </p>
            <h1 data-rise class="mt-7 font-display text-[clamp(2.625rem,6vw,4rem)] leading-[1.02] font-semibold tracking-[-0.045em] text-ink [--i:1]">
                <span class="block max-w-[14ch] text-balance">{{ $heading }}</span>
                <span class="tape sm:whitespace-nowrap">{{ $headingTape }}</span>
            </h1>
            <p data-rise class="mt-8 max-w-[52ch] text-lg/8 text-muted [--i:2]">{{ $body }}</p>
            <div data-rise class="mt-10 flex flex-wrap items-center gap-x-6 gap-y-4 [--i:3]">
                <a href="{{ $site->cta_link }}" class="inline-flex items-center gap-2 rounded-full bg-primary py-4 pr-5 pl-7 text-base font-semibold text-primary-foreground ring-1 ring-ink/10 ring-inset hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">
                    {{ $site->cta_label }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </a>
                <a href="{{ $site->phone_href }}" class="group inline-flex min-h-12 items-center gap-2.5 rounded-full text-base font-semibold text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
                    <span class="tabular-nums underline decoration-ink/25 underline-offset-[6px] group-hover:decoration-ink">Call {{ $site->phone }}</span>
                </a>
            </div>
            <ul role="list" data-rise class="mt-12 flex flex-wrap gap-x-7 gap-y-3 border-t border-line pt-7 text-sm font-medium text-ink [--i:4]">
                @foreach ($site->hero_facts as $fact)
                    <li class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>
                        {{ $fact }}
                    </li>
                @endforeach
            </ul>
        </div>
        <div data-rise class="relative pb-40 [--i:2] sm:pb-24 lg:pb-0">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="896" height="1120" fetchpriority="high" class="aspect-[4/5] w-full rounded-[1.75rem] object-cover outline-1 -outline-offset-1 outline-ink/5 max-lg:max-h-[36rem]">
            <figure class="absolute right-4 bottom-0 left-4 rounded-[1.25rem] bg-card p-5 shadow-lg shadow-ink/10 ring-1 ring-ink/5 sm:right-auto sm:left-[-1.5rem] sm:w-[19rem] lg:bottom-8 lg:left-[-4rem]">
                <figcaption class="flex items-center justify-between gap-4">
                    <span class="text-sm font-semibold text-ink">{{ $site->rom->label }}</span>
                    <span class="text-sm text-muted">{{ $site->rom->joint }}</span>
                </figcaption>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 112" class="mt-3 w-full" role="img" aria-label="{{ $site->rom->joint }}: {{ $site->rom->start }} at {{ $site->rom->start_label }}, {{ $site->rom->now }} at {{ $site->rom->now_label }}">
                    <path d="M20 100a80 80 0 0 1 160 0" fill="none" stroke="var(--color-surface)" stroke-width="14" stroke-linecap="round"/>
                    <path data-arc d="M20 100a80 80 0 0 1 160 0" pathLength="180" fill="none" stroke="var(--color-primary)" stroke-width="14" stroke-linecap="round" stroke-dasharray="{{ $site->rom->now_deg }} 400" style="--arc-from: {{ $site->rom->now_deg }}"/>
                    <g transform="rotate({{ $site->rom->goal_deg }} 100 100)"><path d="M4 100h24" stroke="var(--color-ink)" stroke-width="2" stroke-dasharray="3 3"/></g>
                    <g transform="rotate({{ $site->rom->start_deg }} 100 100)"><path d="M10 100h20" stroke="var(--color-muted)" stroke-width="2"/></g>
                    <g transform="rotate({{ $site->rom->now_deg }} 100 100)"><path d="M100 100H34" stroke="var(--color-ink)" stroke-width="3" stroke-linecap="round"/></g>
                    <circle cx="100" cy="100" r="7" fill="var(--color-ink)"/>
                    <circle cx="100" cy="100" r="2.5" fill="var(--color-primary)"/>
                </svg>
                <dl class="mt-3 grid grid-cols-2 gap-4">
                    <div>
                        <dt class="text-sm text-muted">{{ $site->rom->start_label }}</dt>
                        <dd class="font-display text-2xl font-semibold tracking-tight text-muted">{{ $site->rom->start }}</dd>
                    </div>
                    <div class="text-right">
                        <dt class="text-sm text-muted">{{ $site->rom->now_label }}</dt>
                        <dd class="font-display text-2xl font-semibold tracking-tight text-ink">{{ $site->rom->now }}</dd>
                    </div>
                </dl>
                <p class="mt-3 border-t border-line pt-3 text-sm/6 text-muted">{{ $site->rom->goal }}</p>
            </figure>
        </div>
    </div>
</section>
