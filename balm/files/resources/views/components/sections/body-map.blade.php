@props([
    'heading' => 'Where are you holding it?',
    'body' => 'Point to it — most people can. These are the places tension settles for almost everyone, what it tends to feel like, and what we would book for it.',
    'formTitle' => 'Client intake',
    'formNote' => 'Mark where it hurts',
    'linkLabel' => 'See every treatment and price',
    'linkHref' => '/treatments',
])
<section id="body-map" class="scroll-mt-20 bg-primary py-24 text-primary-foreground lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h2 class="max-w-[16ch] font-display text-[clamp(2.5rem,5.5vw,4.5rem)] leading-[1.02] font-normal tracking-[-0.03em] text-balance">{{ $heading }}</h2>
        <p class="mt-6 max-w-[52ch] text-lg/8">{{ $body }}</p>
        <div class="mt-16 grid gap-16 lg:grid-cols-[5fr_7fr] lg:items-start lg:gap-20">
            <div class="rounded-3xl bg-surface p-6 text-ink shadow-xl shadow-ink/10 sm:p-8 lg:sticky lg:top-28">
                <div class="flex items-baseline justify-between gap-4 border-b border-line pb-4">
                    <p class="font-display text-xl">{{ $formTitle }}</p>
                    <p class="text-sm text-muted">{{ $formNote }}</p>
                </div>
                <div class="pt-8">
                    <x-body-figure/>
                </div>
            </div>
            <div>
                <ol role="list" class="border-b border-primary-foreground/25">
                    @foreach ($areas as $area)
                        <li class="grid grid-cols-[2.5rem_1fr] gap-x-5 border-t border-primary-foreground/25 py-7 sm:grid-cols-[3rem_1fr]">
                            <span class="grid size-9 place-items-center rounded-full bg-primary-foreground text-sm font-bold text-primary tabular-nums sm:size-10" aria-hidden="true">{{ $area->number }}</span>
                            <div>
                                <h3 class="font-display text-2xl tracking-tight sm:text-[1.75rem]">{{ $area->name }}</h3>
                                <p class="mt-2 text-base/7">{{ $area->feels }}</p>
                                <p class="mt-3 flex items-center gap-2 text-sm font-semibold">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4 shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.64l-3.22-3.22a.75.75 0 1 1 1.06-1.06l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 1 1-1.06-1.06l3.22-3.22H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd"/></svg>
                                    <span><span class="sr-only">What to book: </span>{{ $area->treatment }}</span>
                                </p>
                            </div>
                        </li>
                    @endforeach
                </ol>
                <a href="{{ $linkHref }}" class="mt-10 inline-flex items-center gap-2 rounded-full px-6 py-3.5 text-base font-semibold ring-1 ring-primary-foreground/60 ring-inset transition-colors duration-150 hover:bg-primary-foreground/10 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-foreground">{{ $linkLabel }}</a>
            </div>
        </div>
    </div>
</section>
