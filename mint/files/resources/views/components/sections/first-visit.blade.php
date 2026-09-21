@props(['eyebrow' => 'Your first visit', 'heading' => 'Three steps, no surprises.', 'image' => '/images/first-visit.jpg', 'imageAlt' => 'A dentist showing a young boy how to brush on a model of teeth while his father watches', 'note' => 'Bringing the kids? Book back-to-back visits and we see the whole family in one trip.', 'items' => []])
<section class="px-5 py-20 sm:px-8 lg:py-32">
    <div class="mx-auto max-w-7xl">
        <div data-reveal class="flex flex-wrap items-end justify-between gap-6">
            <div>
                <p class="flex items-center gap-2.5 text-sm font-semibold tracking-wide text-muted uppercase"><span class="size-2 rounded-full bg-pop" aria-hidden="true"></span>{{ $eyebrow }}</p>
                <h2 class="mt-5 max-w-[16ch] font-display text-4xl leading-[1.02] font-semibold tracking-[-0.03em] text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
            </div>
            <a href="/new-patients" class="rounded-full bg-surface px-6 py-3.5 font-semibold text-ink transition duration-200 hover:bg-mint active:scale-[0.97] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">New patient guide</a>
        </div>
        <div class="mt-14 grid gap-10 lg:grid-cols-12 lg:gap-8">
            <ol role="list" data-reveal class="lg:col-span-6">
                @foreach ($items as $step)
                    <li class="grid grid-cols-[4.5rem_1fr] gap-4 border-t border-line py-8 first:border-t-0 first:pt-0 sm:grid-cols-[6rem_1fr]">
                        <span class="font-display text-6xl leading-none font-semibold tracking-tight text-mint tabular-nums sm:text-7xl" aria-hidden="true">0{{ $loop->iteration }}</span>
                        <div>
                            <h3 class="font-display text-2xl font-semibold tracking-tight text-ink">{{ $step->title }}</h3>
                            <p class="mt-2 max-w-[44ch] text-pretty text-muted">{{ $step->detail }}</p>
                        </div>
                    </li>
                @endforeach
            </ol>
            <figure data-reveal class="lg:col-span-6">
                <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1400" height="1045" loading="lazy" class="aspect-[4/3] w-full rounded-[1.75rem] object-cover">
                <figcaption class="mt-4 flex items-start gap-2.5 text-sm text-muted"><span class="mt-1.5 size-2 shrink-0 rounded-full bg-mint" aria-hidden="true"></span>{{ $note }}</figcaption>
            </figure>
        </div>
    </div>
</section>
