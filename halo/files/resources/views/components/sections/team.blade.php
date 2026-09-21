@props([
    'eyebrow' => 'The team',
    'heading' => 'Book the person,',
    'headingAccent' => 'not just the slot.',
    'body' => 'Every one of us has a specialty. Choose yours, and you will see them again next time.',
])
<section id="team" aria-labelledby="team-heading" class="scroll-mt-8 py-20 sm:py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="max-w-2xl">
            <p class="text-xs font-semibold tracking-[0.22em] text-muted uppercase">{{ $eyebrow }}</p>
            <h2 id="team-heading" class="mt-5 font-display text-[clamp(2.5rem,5vw,4.25rem)] leading-[1.02] tracking-[-0.025em] text-ink">{{ $heading }} <em class="text-primary italic">{{ $headingAccent }}</em></h2>
            <p class="mt-6 max-w-[46ch] text-lg/8 text-muted">{{ $body }}</p>
        </div>
        <ul role="list" class="mt-14 grid grid-cols-2 gap-x-4 gap-y-12 sm:gap-x-6 lg:mt-20 lg:grid-cols-4 lg:gap-x-8">
            @foreach ($team as $person)
                <li class="lg:even:mt-16">
                    <a href="{{ $person->link }}" class="group block rounded-2xl focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                        <span class="block overflow-hidden arch bg-surface">
                            <img src="{{ $person->image }}" alt="{{ $person->imageAlt }}" width="800" height="1000" loading="lazy" class="aspect-[4/5] w-full object-cover transition-transform duration-700 ease-out group-hover:scale-[1.04]">
                        </span>
                        <span class="mt-5 block font-display text-2xl text-ink sm:text-[1.75rem]">{{ $person->name }}</span>
                        <span class="mt-1 block text-sm font-semibold text-ink">{{ $person->role }}</span>
                        <span class="mt-1 block text-sm/6 text-muted">{{ $person->specialty }}</span>
                        <span class="mt-4 inline-flex items-center gap-1.5 text-sm font-semibold text-primary">
                            <span class="underline decoration-primary/30 underline-offset-4 transition-colors duration-150 group-hover:decoration-primary">Book with {{ $person->name }}</span>
                        </span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>
