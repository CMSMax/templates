@props([
    'backLabel' => 'All services',
    'priceLabel' => 'Flat price',
    'timeLabel' => 'Typical time',
    'ctaLabel' => 'Book this job',
    'ctaLink' => '/contact',
    'asideHeading' => 'Other services',
    'callHeading' => 'Rather talk it through?',
    'callBody' => 'Call and describe what you see. We will tell you the likely fix and the price before we book.',
    'service' => [],
    'others' => [],
])
<article class="pt-10 pb-24 md:pt-14 md:pb-32">
    <div class="mx-auto max-w-7xl px-5 md:px-8">
        <nav aria-label="Breadcrumb">
            <a href="/services" class="group inline-flex min-h-11 items-center gap-2 text-sm font-semibold text-muted hover:text-ink">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0 transition-transform duration-150 group-hover:-translate-x-0.5" aria-hidden="true"><path d="M16 10H5M9 5l-5 5 5 5"/></svg>
                {{ $backLabel }}
            </a>
        </nav>
        <div class="mt-8 grid gap-10 lg:grid-cols-12 lg:items-center lg:gap-10">
            <div class="lg:col-span-6">
                <h1 class="font-display text-hero font-extrabold text-balance">{{ $service->title }}</h1>
                <p class="mt-6 max-w-[44ch] text-lg text-pretty text-muted md:text-xl/8">{{ $service->description }}</p>
                <dl class="mt-8 flex flex-wrap gap-x-10 gap-y-4 border-t border-line pt-6">
                    <div>
                        <dt class="text-sm font-semibold text-muted">{{ $priceLabel }}</dt>
                        <dd class="mt-1 font-display text-2xl font-extrabold tabular-nums [font-stretch:125%]">{{ $service->priceFrom }}</dd>
                    </div>
                    <div>
                        <dt class="text-sm font-semibold text-muted">{{ $timeLabel }}</dt>
                        <dd class="mt-1 font-display text-2xl font-extrabold tabular-nums [font-stretch:125%]">{{ $service->time }}</dd>
                    </div>
                </dl>
                <a href="{{ $ctaLink }}" class="mt-10 inline-flex min-h-13 items-center gap-2.5 rounded-full bg-primary py-3 pr-4 pl-6 text-base font-semibold text-primary-foreground shadow-lift hover:bg-ink active:translate-y-px">
                    {{ $ctaLabel }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M4 10h11M11 5l5 5-5 5"/></svg>
                </a>
            </div>
            <div class="lg:col-span-6">
                <img src="{{ $service->image }}" alt="{{ $service->imageAlt }}" width="1024" height="688" fetchpriority="high" class="aspect-[3/2] w-full rounded-[2rem] object-cover shadow-photo">
            </div>
        </div>
        <div class="mt-20 grid gap-16 border-t border-line pt-16 md:mt-28 md:pt-20 lg:grid-cols-12 lg:gap-10">
            <div class="prose-plumb max-w-[66ch] lg:col-span-7">{!! $service->content !!}</div>
            <aside class="flex flex-col gap-10 lg:col-span-4 lg:col-start-9">
                <div class="rounded-[1.75rem] bg-primary p-7 text-primary-foreground">
                    <h2 class="font-display text-xl font-extrabold">{{ $callHeading }}</h2>
                    <p class="mt-3 text-base text-pretty text-primary-foreground/85">{{ $callBody }}</p>
                    <a href="{{ $site->phone_href }}" class="mt-5 inline-block font-display text-2xl font-extrabold tabular-nums [font-stretch:125%] underline decoration-primary-foreground/30 underline-offset-4 hover:decoration-primary-foreground">{{ $site->phone }}</a>
                </div>
                <div>
                    <h2 class="font-display text-xl font-extrabold">{{ $asideHeading }}</h2>
                    <ul role="list" class="mt-4 border-t border-line">
                        @foreach ($others as $other)
                            @if ($other->slug != $service->slug)
                                <li class="border-b border-line">
                                    <a href="{{ $other->link }}" class="group flex items-center gap-4 py-3.5">
                                        <img src="{{ $other->image }}" alt="" aria-hidden="true" width="1024" height="688" loading="lazy" class="size-14 shrink-0 rounded-xl object-cover">
                                        <span class="flex min-w-0 flex-1 flex-col">
                                            <span class="font-semibold group-hover:text-primary">{{ $other->title }}</span>
                                            <span class="text-sm text-muted tabular-nums">{{ $other->priceFrom }}</span>
                                        </span>
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</article>
