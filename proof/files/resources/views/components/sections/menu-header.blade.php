@props([
    'heading' => 'The menu',
    'body' => 'Everything is made here, from flour milled up the river. The counter changes with the season, so a few things come and go.',
    'image' => '/images/shaping.jpg',
    'imageAlt' => 'A baker’s floured hands shaping a round of dough on a wooden bench, cooling racks of bread behind',
])
<section class="border-b border-line">
    <div class="grid grid-cols-1 gap-px bg-line lg:grid-cols-12">
        <div class="flex flex-col justify-between gap-10 bg-canvas px-5 py-14 sm:px-8 lg:col-span-7 lg:px-12 lg:py-20">
            <h1 class="font-display text-[clamp(4rem,11vw,10rem)] leading-[0.85] tracking-[-0.04em] text-ink">{{ $heading }}</h1>
            <div>
                <p class="max-w-[48ch] text-lg/8 text-muted">{{ $body }}</p>
                <nav aria-label="Menu sections" class="mt-8 flex flex-wrap gap-2">
                    @foreach ($site->menu_sections as $group)
                        <a href="#{{ $group->slug }}" class="border border-line px-3 py-2 text-base text-ink transition-colors duration-150 hover:border-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $group->name }}</a>
                    @endforeach
                </nav>
            </div>
        </div>
        <div class="bg-canvas lg:col-span-5">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1024" height="688" fetchpriority="high" class="aspect-[3/2] size-full object-cover lg:aspect-auto">
        </div>
    </div>
</section>
