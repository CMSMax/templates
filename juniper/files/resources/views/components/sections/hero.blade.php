@props([
    'heading' => 'Good food, cooked with the season',
    'body' => 'A neighborhood kitchen cooking what the farms bring in each week — with bread from our own oven, small-grower wine, and all the time you want at the table.',
    'secondaryLabel' => 'See the menu',
    'image' => '/images/hero-table.jpg',
    'imageAlt' => 'A table set with shared plates of burrata with peaches, charred broccolini, fresh pasta, and grilled bread.',
])
<section class="pt-12 pb-16 sm:pt-20 lg:pb-20">
    <div class="mx-auto max-w-6xl px-6">
        <div class="text-center">
            <h1 class="mx-auto max-w-[16ch] font-display text-6xl text-balance text-ink sm:text-7xl lg:text-8xl">{{ $heading }}</h1>
            <p class="mx-auto mt-6 max-w-[48ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
            <div class="mt-10 flex flex-wrap items-center justify-center gap-3">
                <a href="/reservations" class="rounded-full bg-primary px-6 py-3.5 font-medium text-primary-foreground hover:bg-primary/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->cta_label }}</a>
                <a href="/menu" class="rounded-full border border-ink/15 px-6 py-3.5 font-medium text-ink hover:border-ink/40 hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $secondaryLabel }}</a>
            </div>
        </div>
        <div class="relative mt-14 overflow-hidden rounded-[min(3vw,1.75rem)] bg-line sm:mt-20">
            <img data-settle src="{{ $image }}" alt="{{ $imageAlt }}" width="1800" height="1004" fetchpriority="high" class="aspect-4/5 w-full object-cover sm:aspect-16/9">
            <nav aria-label="Menu courses" class="max-sm:hidden absolute inset-x-0 bottom-5 flex justify-center px-4 sm:bottom-8">
                <ul role="list" class="flex max-w-full gap-1 overflow-x-auto rounded-full bg-surface/95 p-1.5 shadow-[0_8px_24px_-12px_rgb(0_0_0/0.35)] backdrop-blur-sm">
                    @foreach ($site->courses as $course)
                        <li class="shrink-0"><a href="/menu#{{ $course->slug }}" class="block rounded-full px-4 py-2 text-sm font-medium text-ink hover:bg-canvas focus-visible:outline-2 focus-visible:-outline-offset-2 focus-visible:outline-primary">{{ $course->name }}</a></li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</section>
