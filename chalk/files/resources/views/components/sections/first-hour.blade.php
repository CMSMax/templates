@props([
    'label' => 'Your first class',
    'heading' => 'The first hour, minute by minute.',
    'body' => 'Walking into a gym for the first time is the hardest rep. So here is exactly what happens.',
    'image' => '/images/chalk.jpg',
    'imageAlt' => 'Chalked hands pressing into a block of lifting chalk',
    'items' => [],
])
<section class="bg-chalk py-20 text-chalk-ink lg:py-32">
    <div class="mx-auto grid max-w-7xl gap-12 px-5 sm:px-8 lg:grid-cols-12 lg:gap-8">
        <div class="lg:col-span-5">
            <p class="font-display text-[0.9375rem] font-bold tracking-[0.14em] text-chalk-muted uppercase">{{ $label }}</p>
            <h2 class="mt-5 max-w-[12ch] font-display text-[clamp(2.75rem,6vw,5rem)] leading-[0.9] font-black text-chalk-ink uppercase">{{ $heading }}</h2>
            <p class="mt-6 max-w-[44ch] text-lg/8 text-chalk-muted">{{ $body }}</p>
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="896" height="1120" loading="lazy" decoding="async" class="mt-12 aspect-[4/3] w-full rounded-sm object-cover max-lg:hidden">
        </div>
        <ol class="lg:col-span-6 lg:col-start-7">
            @foreach ($items as $step)
                <li class="grid grid-cols-[5.5rem_minmax(0,1fr)] gap-x-6 border-t border-chalk-line py-8 last:border-b sm:grid-cols-[8rem_minmax(0,1fr)] lg:py-10">
                    <span class="font-display text-5xl leading-[0.85] font-black text-chalk-ink tabular-nums sm:text-6xl">{{ $step->time }}</span>
                    <div>
                        <h3 class="font-display text-3xl leading-none font-extrabold tracking-wide text-chalk-ink uppercase">{{ $step->title }}</h3>
                        <p class="mt-3 max-w-[50ch] text-base/7 text-chalk-muted">{{ $step->body }}</p>
                    </div>
                </li>
            @endforeach
        </ol>
    </div>
</section>
