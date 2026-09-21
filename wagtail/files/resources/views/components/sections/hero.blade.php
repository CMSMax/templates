@props([
    'heading' => 'The vet visit they won’t hide from.',
    'body' => 'Unhurried exams, fear-free handling, and prices you can read before you sit down. A family-owned clinic for dogs and cats in Springfield since 2009.',
    'cardHeading' => 'Clinic hours',
    'image' => '/images/hero.jpg',
    'imageAlt' => 'A golden mixed-breed dog sitting calmly on a wooden bench in a sunlit exam room',
])
<section class="pt-10 pb-20 sm:pt-14 lg:pb-28">
    <div class="mx-auto grid max-w-6xl items-center gap-12 px-5 sm:px-8 lg:grid-cols-[7fr_5fr] lg:gap-16">
        <div>
            <h1 data-rise class="max-w-[13ch] font-display text-[clamp(2.75rem,6.4vw,5.25rem)] leading-[1.02] font-semibold tracking-[-0.035em] text-balance text-ink">{{ $heading }}</h1>
            <p data-rise class="mt-7 max-w-[52ch] text-lg/8 text-muted [--i:1]">{{ $body }}</p>
            <div data-rise class="mt-10 flex flex-wrap items-center gap-x-6 gap-y-4 [--i:2]">
                <a href="{{ $site->cta_link }}" class="inline-flex items-center gap-2 rounded-full bg-primary py-4 pr-5 pl-7 text-base font-semibold text-primary-foreground shadow-sm shadow-primary/25 hover:bg-primary/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                    {{ $site->cta_label }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </a>
                <a href="{{ $site->phone_href }}" class="group inline-flex min-h-12 items-center gap-2.5 rounded-full text-base font-semibold text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0 text-primary" aria-hidden="true"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
                    <span class="underline decoration-ink/25 underline-offset-[6px] group-hover:decoration-ink">Call {{ $site->phone }}</span>
                </a>
            </div>
            <ul role="list" data-rise class="mt-12 flex flex-wrap gap-x-7 gap-y-3 border-t border-line pt-7 text-sm font-medium text-ink [--i:3]">
                @foreach ($site->hero_facts as $fact)
                    <li class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0 text-primary" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg>
                        {{ $fact }}
                    </li>
                @endforeach
            </ul>
        </div>
        <div data-rise class="relative pb-16 [--i:2] sm:pb-10 lg:pb-0">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="896" height="1120" fetchpriority="high" class="aspect-[4/5] w-full rounded-[1.75rem] object-cover outline-1 -outline-offset-1 outline-ink/5 max-lg:max-h-[34rem]">
            <div class="absolute right-4 -bottom-0 left-4 rounded-[1.25rem] bg-card p-5 shadow-lg shadow-ink/10 ring-1 ring-ink/5 sm:right-auto sm:left-[-2rem] sm:w-[20rem] lg:bottom-8 lg:left-[-3.5rem]">
                <p class="flex items-center gap-2 text-sm font-semibold text-ink">
                    <span class="size-2 shrink-0 rounded-full bg-primary" aria-hidden="true"></span>
                    {{ $cardHeading }}
                </p>
                <p class="mt-2 font-display text-xl font-semibold tracking-tight text-ink">{{ $site->hours_headline }}</p>
                <p class="mt-1 text-sm/6 text-ink tabular-nums">{{ $site->hours_short }}</p>
                <p class="mt-3 border-t border-line pt-3 text-sm/6 text-muted">{{ $site->same_day_note }}</p>
            </div>
        </div>
    </div>
</section>
