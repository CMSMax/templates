@props(['eyebrow' => 'The team', 'heading' => 'The people you’ll see.', 'intro' => 'Same faces every visit. No rotating locums, no sales targets.', 'items' => []])
<section class="px-3 sm:px-4">
    <div class="rounded-[2rem] bg-surface">
        <div class="mx-auto max-w-7xl px-5 py-16 sm:px-10 lg:py-24">
            <div data-reveal class="flex flex-wrap items-end justify-between gap-6">
                <div>
                    <p class="flex items-center gap-2.5 text-sm font-semibold tracking-wide text-muted uppercase"><span class="size-2 rounded-full bg-pop" aria-hidden="true"></span>{{ $eyebrow }}</p>
                    <h2 class="mt-5 max-w-[16ch] font-display text-4xl leading-[1.02] font-semibold tracking-[-0.03em] text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
                </div>
                <p class="max-w-[34ch] text-lg text-pretty text-muted">{{ $intro }}</p>
            </div>
            <ul role="list" class="mt-14 grid gap-x-6 gap-y-12 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($items as $person)
                    <li data-reveal>
                        <img src="{{ $person->image }}" alt="{{ $person->imageAlt }}" width="1000" height="1250" loading="lazy" class="aspect-[4/5] w-full rounded-[1.5rem] object-cover">
                        <h3 class="mt-5 font-display text-2xl font-semibold tracking-tight text-ink">{{ $person->name }}</h3>
                        <p class="mt-1 font-medium text-ink/70">{{ $person->role }}</p>
                        <p class="mt-3 max-w-[40ch] text-pretty text-muted">{{ $person->bio }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
