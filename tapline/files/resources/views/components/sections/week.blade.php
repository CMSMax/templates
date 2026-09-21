@props([
    'heading' => 'The week at the bar.',
    'body' => 'The regulars. Same night, same time, every week — no tickets, just show up.',
    'image' => '/images/table.jpg',
    'imageAlt' => 'Four beers from pale to stout on a worn wooden table, with a soft pretzel and a stack of trivia cards',
])
<section id="week" class="scroll-mt-20 bg-surface py-20 lg:py-28">
    <div class="mx-auto grid max-w-7xl grid-cols-1 gap-14 px-5 sm:px-8 lg:grid-cols-12 lg:gap-16">
        <div class="lg:col-span-5">
            <h2 class="max-w-[12ch] font-display text-[clamp(2.25rem,3.8vw,3.125rem)] leading-[1.02] font-black tracking-tight text-balance text-ink">{{ $heading }}</h2>
            <p class="mt-6 max-w-[40ch] text-lg/8 text-muted">{{ $body }}</p>
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1024" height="688" loading="lazy" decoding="async" class="mt-12 aspect-[3/2] w-full rounded-2xl object-cover outline-1 -outline-offset-1 outline-ink/10 max-lg:hidden">
        </div>
        <ul role="list" class="divide-y divide-line border-y border-line lg:col-span-7">
            @foreach ($events as $event)
                <li class="grid grid-cols-1 gap-y-3 py-7 sm:grid-cols-[8.5rem_1fr] sm:gap-x-8">
                    <p class="font-display text-2xl leading-none font-black text-ink wide sm:text-4xl"><abbr title="{{ $event->day }}" class="no-underline">{{ $event->short }}</abbr></p>
                    <div>
                        <div class="flex flex-wrap items-baseline justify-between gap-x-4 gap-y-1">
                            <h3 class="font-display text-xl font-extrabold text-ink sm:text-2xl">{{ $event->title }}</h3>
                            <p class="text-base font-medium text-ink/85 tabular-nums">{{ $event->time }}</p>
                        </div>
                        <p class="mt-2 max-w-[54ch] text-base text-muted">{{ $event->note }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>
