@props([
    'eyebrow' => 'The sequence',
    'heading' => 'Sun Salutation A, one breath at a time.',
    'body' => 'Every class here starts from the same eleven shapes. Hover a plate to hold it, or follow along — in through the nose, out through the nose.',
    'linkLabel' => 'Find a class to learn it in',
    'linkHref' => '/classes',
])
<section id="sequence" aria-labelledby="sequence-heading" data-sequence class="scroll-mt-8 overflow-hidden bg-surface py-20 sm:py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="grid gap-10 lg:grid-cols-12 lg:items-end">
            <div class="lg:col-span-7">
                <p class="text-sm font-semibold text-primary">{{ $eyebrow }}</p>
                <h2 id="sequence-heading" class="mt-4 max-w-[20ch] font-display text-[clamp(2.25rem,4.5vw,3.75rem)] leading-[1.02] font-medium tracking-[-0.035em] text-ink">{{ $heading }}</h2>
                <p class="mt-6 max-w-[52ch] text-lg/8 text-muted">{{ $body }}</p>
            </div>
            <div class="flex items-center gap-6 lg:col-span-5 lg:justify-end" aria-hidden="true">
                <span class="relative grid size-24 shrink-0 place-items-center sm:size-28">
                    <span class="absolute inset-0 rounded-full ring-1 ring-primary/25 ring-inset"></span>
                    <span data-breath-ring data-breath="Exhale" class="breath-ring absolute inset-0 rounded-full bg-primary/15"></span>
                    <span class="relative size-3 rounded-full bg-primary"></span>
                </span>
                <span class="flex flex-col">
                    <span data-cue-step class="text-sm font-semibold text-muted tabular-nums">01 / 11</span>
                    <span data-cue class="cue font-display text-5xl font-medium tracking-[-0.04em] text-ink sm:text-6xl">Exhale</span>
                </span>
            </div>
        </div>
    </div>
    <ol role="list" class="plates mx-auto mt-14 flex max-w-7xl snap-x snap-mandatory gap-3 overflow-x-auto px-5 pt-2 pb-4 sm:px-8 lg:mt-16 lg:grid lg:grid-cols-11 lg:gap-2 lg:overflow-visible">
        @foreach ($site->sequence as $plate)
            <li data-plate data-breath="{{ $plate->breath }}" tabindex="0" class="plate flex w-32 shrink-0 snap-start flex-col rounded-2xl bg-card p-3 text-ink ring-1 ring-ink/5 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary lg:w-auto">
                <span class="text-xs font-semibold text-muted tabular-nums">{{ $loop->iteration }}</span>
                <span class="plate-figure mt-2 grid aspect-square place-items-center text-primary">
                    <x-pose :name="$plate->pose" size="size-16 lg:size-16"/>
                </span>
                <span class="mt-3 text-sm/5 font-semibold">{{ $plate->name }}</span>
                <span class="mt-0.5 text-xs/5 text-muted">{{ $plate->breath }}</span>
            </li>
        @endforeach
    </ol>
    @if ($linkLabel)
        <div class="mx-auto mt-10 max-w-7xl px-5 sm:px-8">
            <a href="{{ $linkHref }}" class="group inline-flex min-h-12 items-center gap-2 rounded-full text-base font-semibold text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                <span class="underline decoration-ink/25 underline-offset-[6px] group-hover:decoration-ink">{{ $linkLabel }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0 transition-transform duration-200 group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
            </a>
        </div>
    @endif
</section>
