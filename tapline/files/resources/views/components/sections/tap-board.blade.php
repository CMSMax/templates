@props([
    'heading' => 'On tap now.',
    'body' => 'The board changes most weeks. This is what’s pouring today — every beer in its true color, with its strength and what a glass costs.',
    'linkLabel' => 'The full tap list',
])
<section id="taps" class="scroll-mt-20 border-t border-line py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
            <div>
                <h2 class="font-display text-[clamp(2.25rem,5vw,4rem)] leading-none font-black tracking-tight text-ink">{{ $heading }}</h2>
                <p class="mt-5 max-w-[52ch] text-lg/8 text-muted">{{ $body }}</p>
            </div>
            <a href="/menu" class="inline-flex shrink-0 items-center gap-2 self-start rounded-full py-3 pr-4 pl-5 text-base font-semibold text-ink ring-1 ring-ink/40 ring-inset hover:bg-ink hover:text-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary lg:self-auto">
                {{ $linkLabel }}
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.64l-4.16-3.96a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.16-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd"/></svg>
            </a>
        </div>

        <div class="mt-14 border-t-2 border-ink">
            <div class="grid grid-cols-[3.5rem_1fr] gap-x-5 py-3 text-sm text-muted max-md:hidden md:grid-cols-[5rem_2.25rem_1fr_6rem_8rem] md:gap-x-8" aria-hidden="true">
                <p>Tap</p>
                <span></span>
                <p>Beer</p>
                <p class="text-right">ABV · IBU</p>
                <p class="text-right">Pour</p>
            </div>
            <ul role="list" class="divide-y divide-line border-y border-line">
                @foreach ($taps as $tap)
                    @if ($tap->featured)
                        <li class="grid grid-cols-[3.5rem_1fr] items-start gap-x-5 py-6 md:items-center md:grid-cols-[5rem_2.25rem_1fr_6rem_8rem] md:gap-x-8">
                            <p class="font-display text-3xl font-black text-muted tabular-nums wide md:text-4xl">{{ $tap->number }}</p>
                            <span data-color="{{ $tap->color }}" class="glass w-7 max-md:hidden" aria-hidden="true"></span>
                            <div class="min-w-0">
                                <div class="flex flex-wrap items-center gap-x-3 gap-y-1">
                                    <h3 class="font-display text-xl font-extrabold text-ink sm:text-2xl">{{ $tap->name }}</h3>
                                    @if ($tap->tag)
                                        <p class="rounded-full bg-primary px-2.5 py-0.5 text-sm font-semibold text-primary-foreground">{{ $tap->tag }}</p>
                                    @endif
                                </div>
                                <p class="mt-1 text-base font-medium text-ink/85">{{ $tap->style }}</p>
                                <p class="mt-1.5 max-w-[60ch] text-base text-muted">{{ $tap->description }}</p>
                                <p class="mt-3 flex flex-wrap items-center gap-x-3 text-base text-ink md:hidden">
                                    <span data-color="{{ $tap->color }}" class="glass w-4" aria-hidden="true"></span>
                                    <span>{{ $tap->abv }}</span>
                                    <span class="text-muted" aria-hidden="true">·</span>
                                    <span>{{ $tap->pour }}</span>
                                    <span class="font-display font-extrabold tabular-nums">{{ $site->currency }}{{ $tap->price }}</span>
                                </p>
                            </div>
                            <p class="text-right text-base text-ink tabular-nums max-md:hidden">
                                {{ $tap->abv }}
                                @if ($tap->ibu)
                                    <span class="block text-sm text-muted">{{ $tap->ibu }} IBU</span>
                                @endif
                            </p>
                            <p class="text-right max-md:hidden">
                                <span class="font-display text-3xl font-black text-ink tabular-nums">{{ $site->currency }}{{ $tap->price }}</span>
                                <span class="block text-sm text-muted">{{ $tap->pour }}</span>
                            </p>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</section>
