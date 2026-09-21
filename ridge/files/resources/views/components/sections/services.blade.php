@props([
    'heading' => 'Everything above the ceiling.',
    'body' => 'One crew for the whole roof: shingles, metal, flashing, gutters, and the attic air underneath.',
    'image' => '/images/chalk-lines.jpg',
    'imageAlt' => 'New charcoal shingles going down over grey underlayment marked with straight blue chalk lines, a nail gun and a chalk reel on the deck.',
    'linkLabel' => 'How we build a roof',
    'linkHref' => '/services',
    'items' => [],
])
<section class="py-20 md:py-32">
    <div class="mx-auto grid max-w-7xl gap-12 px-5 md:px-8 lg:grid-cols-12 lg:gap-10">
        <div class="lg:col-span-5">
            <div class="lg:sticky lg:top-40">
                <h2 class="max-w-[16ch] font-display text-section font-semibold text-balance">{{ $heading }}</h2>
                <p class="mt-5 max-w-[40ch] text-lg text-pretty text-muted">{{ $body }}</p>
                <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1600" height="1205" loading="lazy" decoding="async" class="mt-10 aspect-[4/3] w-full rounded-lg object-cover max-lg:hidden">
            </div>
        </div>
        <div class="lg:col-span-7">
            <ul role="list" class="border-t border-ink">
                @foreach ($items as $service)
                    <li id="{{ $service->slug }}" class="border-b border-line" data-reveal>
                        <a href="{{ $linkHref }}#{{ $service->slug }}" class="group grid gap-x-8 gap-y-2 py-7 sm:grid-cols-[1fr_auto] sm:items-baseline md:py-9">
                            <h3 class="font-display text-2xl font-semibold tracking-tight md:text-3xl">{{ $service->name }}</h3>
                            <p class="bulletin text-muted sm:text-right">{{ $service->detail }}</p>
                            <p class="max-w-[52ch] text-base text-pretty text-muted">{{ $service->summary }}</p>
                            <span class="flex size-10 items-center justify-center self-end justify-self-start rounded-full border border-line text-ink transition-colors duration-150 group-hover:border-primary group-hover:bg-primary sm:justify-self-end" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4"><path d="M4 10h11M11 5l5 5-5 5"/></svg>
                            </span>
                        </a>
                    </li>
                @endforeach
            </ul>
            <a href="{{ $linkHref }}" class="mt-8 inline-flex min-h-12 items-center gap-2 text-base font-semibold underline decoration-line decoration-2 underline-offset-6 hover:decoration-ink">{{ $linkLabel }}</a>
        </div>
    </div>
</section>
