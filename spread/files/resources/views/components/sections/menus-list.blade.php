@props([
    'askLabel' => 'Ask about this menu',
    'dietaryHeading' => 'For every guest',
])
<section class="py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <ul role="list" class="flex flex-col gap-20 lg:gap-28">
            @foreach ($menus as $menu)
                <li class="grid grid-cols-1 gap-12 lg:grid-cols-[5fr_7fr] lg:gap-16 lg:even:grid-cols-[7fr_5fr] lg:[&:nth-child(even)>div:first-child]:order-last">
                    <div class="lg:sticky lg:top-28 lg:self-start lg:pt-14">
                        <h2 class="font-display text-[clamp(2rem,4vw,3rem)] leading-[1.08] tracking-tight text-balance text-ink">{{ $menu->name }}</h2>
                        <p class="mt-3 text-base font-medium text-muted">{{ $menu->style }}</p>
                        <p class="mt-6 max-w-[48ch] text-lg/8 text-muted">{{ $menu->description }}</p>
                        <dl class="mt-8 grid grid-cols-2 border-y border-ink/15">
                            <div class="py-4 pr-6">
                                <dt class="text-sm text-muted">Per guest</dt>
                                <dd class="mt-1 font-display text-2xl text-ink tabular-nums">{{ $site->currency }}{{ $menu->price }}</dd>
                            </div>
                            <div class="border-l border-ink/15 py-4 pl-6">
                                <dt class="text-sm text-muted">Minimum</dt>
                                <dd class="mt-1 font-display text-2xl text-ink">{{ $menu->minimum }}</dd>
                            </div>
                        </dl>
                        <p class="mt-8">
                            <a href="{{ $site->quote_link }}" class="inline-flex items-center gap-2 rounded-full py-3 pr-4 pl-5 text-base font-medium text-ink ring-1 ring-ink/25 ring-inset hover:bg-ink hover:text-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                                {{ $askLabel }}
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                            </a>
                        </p>
                    </div>
                    <div class="rounded-3xl bg-secondary px-4 py-10 sm:px-12 sm:py-14 lg:px-16">
                        <div class="mx-auto max-w-md">
                            <x-menu-card :menu="$menu"/>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="mt-20 grid grid-cols-1 gap-3 border-t border-ink/15 pt-10 lg:mt-28 lg:grid-cols-[5fr_7fr] lg:gap-16">
            <h2 class="font-display text-2xl text-ink">{{ $dietaryHeading }}</h2>
            <p class="max-w-[60ch] text-lg/8 text-muted">{{ $site->dietary_note }}</p>
        </div>
    </div>
</section>
