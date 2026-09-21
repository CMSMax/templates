@props([
    'heading' => 'Dinner for two hundred, cooked like dinner for ten.',
    'body' => 'Seasonal food for weddings, offices and every celebration in between — cooked in our kitchen, finished at your venue, and served by people who care whether the second helping is as good as the first.',
    'secondaryLabel' => 'See the menus',
    'image' => '/images/table.jpg',
    'imageAlt' => 'A long candlelit grazing table set with roasted squash, burrata and figs, cured meats, persimmons, olives and bread',
    'eventsHeading' => 'What are we feeding?',
    'items' => [],
])
<section class="bg-secondary text-on-plum">
    <div class="mx-auto grid max-w-7xl grid-cols-1 gap-12 px-5 pt-10 pb-16 sm:px-8 lg:grid-cols-[7fr_5fr] lg:gap-16 lg:pt-16 lg:pb-24">
        <div class="flex flex-col justify-center">
            <h1 data-rise class="max-w-[16ch] font-display text-[clamp(2.5rem,6vw,4.75rem)] leading-[1.02] tracking-tight text-balance">{{ $heading }}</h1>
            <p data-rise class="mt-7 max-w-[52ch] text-lg/8 text-on-plum-muted [--i:1]">{{ $body }}</p>
            <div data-rise class="mt-10 flex flex-wrap items-center gap-x-8 gap-y-4 [--i:2]">
                <a href="{{ $site->quote_link }}" class="inline-flex items-center gap-2 rounded-full bg-primary py-3.5 pr-4 pl-6 text-base font-medium text-primary-foreground hover:bg-on-plum focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-on-plum">
                    {{ $site->cta_label }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </a>
                <a href="/menus" class="rounded-sm text-base font-medium text-on-plum underline decoration-on-plum/35 underline-offset-6 hover:decoration-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $secondaryLabel }}</a>
            </div>
            <p data-rise class="mt-10 text-sm text-on-plum-muted [--i:3]">{{ $site->service_area }}</p>
        </div>
        <div data-rise class="relative [--i:1]">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="896" height="1120" fetchpriority="high" class="aspect-[4/5] w-full rounded-t-full object-cover max-lg:max-h-[34rem] lg:rounded-t-[12rem]">
        </div>
    </div>
    <div class="border-t border-on-plum/15">
        <div class="mx-auto max-w-7xl px-5 sm:px-8">
            <h2 class="pt-8 text-sm font-medium text-on-plum-muted">{{ $eventsHeading }}</h2>
            <ul role="list" class="grid grid-cols-1 pb-6 sm:grid-cols-2 lg:grid-cols-4 lg:pb-10">
                @foreach ($items as $event)
                    <li class="border-on-plum/15 max-sm:[&:not(:first-child)]:border-t sm:max-lg:[&:nth-child(n+3)]:border-t lg:[&:not(:first-child)]:border-l lg:[&:not(:first-child)]:pl-6 sm:max-lg:[&:nth-child(2n)]:border-l sm:max-lg:[&:nth-child(2n)]:pl-6">
                        <a href="{{ $event->link }}" class="group flex h-full flex-col gap-2 py-5 pr-6 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                            <span class="flex items-center justify-between gap-4">
                                <span class="font-display text-2xl text-on-plum group-hover:text-primary">{{ $event->name }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0 text-on-plum-muted group-hover:translate-x-1 group-hover:text-primary motion-safe:transition-transform" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                            </span>
                            <span class="text-base/6 text-on-plum-muted sm:text-sm/6">{{ $event->detail }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
