@props([
    'heading' => 'Care & pricing',
    'body' => 'Every visit, what it includes, how long it takes, and what it costs. You’ll always know the price before you’re on the table.',
    'image' => '/images/room.jpg',
    'imageAlt' => 'The Axis treatment room: a pale oak adjusting table under a sheer-curtained window, a spine model on the shelf',
])
<section class="pt-12 sm:pt-16 lg:pt-20">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="grid gap-8 lg:grid-cols-12 lg:items-end">
            <h1 data-rise class="font-display text-[clamp(3.5rem,10vw,8.5rem)] leading-[0.88] font-semibold tracking-[-0.025em] text-ink lg:col-span-7">{{ $heading }}</h1>
            <p data-rise class="max-w-[44ch] text-lg/8 text-muted [--i:1] lg:col-span-4 lg:col-start-9">{{ $body }}</p>
        </div>
        <img data-rise src="{{ $image }}" alt="{{ $imageAlt }}" width="1024" height="688" fetchpriority="high" class="mt-12 aspect-[3/2] w-full rounded-[1.5rem] object-cover outline-1 -outline-offset-1 outline-ink/5 [--i:2] sm:aspect-[21/9] lg:mt-16">
    </div>
</section>
