@props([
    'heading' => 'We cook what the growers bring us, and we change the menu when they do.',
    'body' => 'Most mornings start with a delivery from a handful of small farms within an hour of the kitchen. What arrives decides what we cook — a few plates at a time, done simply, and done well.',
    'linkLabel' => 'Read our story',
    'image' => '/images/chef-plating.jpg',
    'imageAlt' => 'A cook placing herbs on roasted carrots and whipped yogurt at the kitchen pass.',
])
<section class="py-16 lg:py-24">
    <div class="mx-auto grid max-w-6xl items-center gap-12 px-6 lg:grid-cols-[5fr_7fr] lg:gap-20">
        <img src="{{ $image }}" alt="{{ $imageAlt }}" width="960" height="1191" loading="lazy" class="aspect-4/5 w-full rounded-[min(3vw,1.75rem)] bg-line object-cover max-lg:max-h-[34rem]">
        <div>
            <h2 class="max-w-[22ch] font-display text-4xl text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
            <p class="mt-6 max-w-[52ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
            <a href="/our-story" class="group mt-8 inline-flex items-center gap-2 font-medium text-ink underline decoration-line decoration-1 underline-offset-8 hover:decoration-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                {{ $linkLabel }}
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-4 transition-transform duration-200 group-hover:translate-x-0.5" aria-hidden="true"><path d="M4 10h12M11 5l5 5-5 5"/></svg>
            </a>
        </div>
    </div>
</section>
