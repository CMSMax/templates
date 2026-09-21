@props([
    'eyebrow' => 'Rooms and rates',
    'heading' => 'Pick a key.',
    'body' => 'Twelve rooms, three of them shown here, every one with breakfast on the terrace. Rates are per room, per night, and they are the same whether you book with us by email or by phone.',
])
<section class="pt-16 pb-20 lg:pt-24 lg:pb-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-[7fr_5fr] lg:items-end lg:gap-20">
            <div>
                <p class="text-xs font-medium tracking-[0.24em] text-primary uppercase">{{ $eyebrow }}</p>
                <h1 class="mt-6 font-display text-[clamp(3rem,8vw,6.5rem)] leading-none font-normal tracking-tight text-balance text-ink">{{ $heading }}</h1>
                <p class="mt-8 max-w-[52ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
            </div>
            <nav aria-label="Rooms" class="rounded-[2rem] bg-surface px-5 pt-6 pb-8 sm:px-8">
                <p class="text-xs font-medium tracking-[0.2em] text-muted uppercase">The key rack</p>
                <ul role="list" class="mt-5 flex flex-wrap gap-2 sm:gap-5">
                    @foreach ($rooms as $room)
                        <li>
                            <a href="#{{ $room->slug }}" class="group flex flex-col items-center gap-3 rounded-2xl p-1 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                                <span class="transition-transform duration-200 group-hover:-translate-y-1 group-hover:-rotate-3"><x-key-fob :number="$room->number" size="sm"/></span>
                                <span class="max-w-[9ch] text-center text-sm/5 text-ink">{{ $room->name }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</section>
