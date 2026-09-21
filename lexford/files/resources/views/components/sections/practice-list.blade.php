@props([
    'heading' => 'Practice areas',
    'body' => 'Six areas of law, practised deeply rather than widely. If your matter falls outside them, we will tell you — and point you to someone we trust.',
    'linkLabel' => 'All practice areas',
    'items' => [],
])
<section class="py-24 lg:py-36">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-y-12 lg:grid-cols-12 lg:gap-x-16">
            <div class="lg:sticky lg:top-32 lg:col-span-4 lg:self-start">
                <h2 class="font-display text-4xl font-light tracking-tight text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
                <p class="mt-6 max-w-[40ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
                <a href="/practice-areas" class="group mt-6 inline-flex items-center gap-2 py-1 font-medium text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                    <span class="underline decoration-line underline-offset-[6px] transition-colors duration-150 group-hover:decoration-primary">{{ $linkLabel }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0 transition-transform duration-200 group-hover:translate-x-0.5" aria-hidden="true"><path d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
            <ul role="list" class="divide-y divide-line border-y border-line lg:col-span-8">
                @foreach ($items as $area)
                    <li>
                        <a href="/practice-areas#{{ $area->slug }}" class="group grid grid-cols-[1fr_auto] items-center gap-6 py-8 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary sm:gap-10 sm:py-10">
                            <span>
                                <span class="block font-display text-2xl tracking-tight text-ink transition-colors duration-150 group-hover:text-primary sm:text-3xl">{{ $area->name }}</span>
                                <span class="mt-2 block max-w-[56ch] text-base/7 text-pretty text-muted">{{ $area->summary }}</span>
                            </span>
                            <span class="grid size-11 shrink-0 place-items-center rounded-full border border-ink/15 text-ink transition-colors duration-200 group-hover:border-primary group-hover:bg-primary group-hover:text-primary-foreground" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-4"><path d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25"/></svg>
                            </span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
