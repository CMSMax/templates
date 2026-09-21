@props([
    'eyebrow' => 'Home cleaning in Springfield',
    'heading' => 'Clean home. Same cleaner. Fixed price.',
    'body' => 'Regular, deep and move-out cleaning by insured cleaners we employ ourselves — with plant-based products, a published checklist and a price confirmed before we book.',
    'image' => '/images/living-room.jpg',
    'imageAlt' => 'A bright, freshly cleaned living room with a pale blue sofa, polished oak floor, and yellow cleaning gloves beside a glass spray bottle on a side table.',
    'promises' => [],
])
<section class="pt-12 pb-20 sm:pt-16 lg:pt-20 lg:pb-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid items-center gap-y-14 lg:grid-cols-12 lg:gap-x-16">
            <div class="lg:col-span-6">
                <p class="flex items-center gap-2.5 text-[0.9375rem] font-medium text-muted">
                    <span class="size-2 shrink-0 rounded-full bg-primary ring-4 ring-primary/30" aria-hidden="true"></span>{{ $eyebrow }}
                </p>
                <h1 class="mt-6 max-w-[14ch] font-display text-[2.625rem] font-semibold tracking-tight text-balance text-ink sm:text-6xl xl:text-7xl">{{ $heading }}</h1>
                <p class="mt-7 max-w-[46ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
                <div class="mt-10 flex flex-wrap items-center gap-x-7 gap-y-4">
                    <a href="{{ $site->cta_href }}" class="inline-flex items-center gap-2 rounded-full bg-primary py-3.5 pr-5 pl-6 font-medium text-primary-foreground transition-colors duration-150 hover:bg-primary/80 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">
                        {{ $site->cta_label }}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0" aria-hidden="true"><path d="M5 12h14m-7-7l7 7l-7 7"/></svg>
                    </a>
                    <a href="{{ $site->phone_href }}" class="group inline-flex items-center gap-2.5 py-2 font-medium text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4.5 shrink-0 text-muted" aria-hidden="true"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233a14 14 0 0 0 6.392 6.384"/></svg>
                        <span class="tabular-nums underline decoration-ink/25 underline-offset-[6px] transition-colors duration-150 group-hover:decoration-ink">or call {{ $site->phone }}</span>
                    </a>
                </div>
            </div>
            <div class="relative lg:col-span-6">
                <div class="overflow-hidden rounded-[2rem] bg-surface">
                    <img data-settle src="{{ $image }}" alt="{{ $imageAlt }}" width="896" height="1120" fetchpriority="high" class="aspect-[4/5] w-full object-cover sm:aspect-[5/5] lg:aspect-[4/5]">
                </div>
                <div class="absolute -bottom-6 left-6 grid size-32 rotate-[-8deg] place-content-center rounded-full bg-primary text-center text-primary-foreground shadow-[0_10px_30px_-12px_rgb(0_0_0/0.35)] sm:-left-6 sm:size-36">
                    <p class="font-display text-4xl font-semibold tracking-tight tabular-nums sm:text-5xl">{{ $site->rating }}</p>
                    <p class="mt-1 text-[0.8125rem] font-medium">{{ $site->review_count }} reviews</p>
                </div>
            </div>
        </div>
        <ul role="list" class="mt-20 grid border-t border-line sm:grid-cols-2 lg:mt-24 lg:grid-cols-4">
            @foreach ($promises as $promise)
                <li class="flex gap-3.5 border-b border-line py-7 sm:pr-8 lg:border-b-0 lg:pr-10 lg:not-first:border-l lg:not-first:pl-8">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mt-0.5 size-5 shrink-0 text-ink" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="m8 12.5 2.5 2.5L16 9.5"/></svg>
                    <div>
                        <p class="font-display font-semibold tracking-tight text-ink">{{ $promise->title }}</p>
                        <p class="mt-1.5 text-base/7 text-pretty text-muted sm:text-[0.9375rem]/6">{{ $promise->body }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>
