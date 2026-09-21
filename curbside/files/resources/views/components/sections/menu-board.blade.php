@props([
    'heading' => 'The short menu.',
    'body' => 'Five tacos, a couple of plates, and corn off the grill. It fits on the side of the truck, and every line of it gets made to order.',
    'linkLabel' => 'See the full menu',
    'image' => '/images/tacos.jpg',
    'imageAlt' => 'Three al pastor tacos with pineapple, onion and cilantro in a paper tray, with lime wedges and salsa verde',
])
<section class="py-20 lg:py-28">
    <div class="mx-auto grid max-w-7xl grid-cols-1 gap-12 px-5 sm:px-8 lg:grid-cols-[5fr_7fr] lg:gap-16">
        <div class="flex flex-col lg:sticky lg:top-24 lg:self-start">
            <h2 class="font-display text-[clamp(3rem,7vw,5.5rem)] leading-[0.92] font-black text-balance text-ink uppercase">{{ $heading }}</h2>
            <p class="mt-6 max-w-[42ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
            <p class="mt-8">
                <a href="/menu" class="inline-flex items-center gap-2 py-3 pr-3 pl-5 text-base font-semibold text-ink ring-2 ring-ink ring-inset hover:bg-ink hover:text-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">
                    {{ $linkLabel }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.64l-4.16-3.96a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.16-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd"/></svg>
                </a>
            </p>
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="896" height="1120" loading="lazy" decoding="async" class="mt-12 aspect-[4/5] w-full max-w-md object-cover max-lg:hidden">
        </div>
        <div>
            <div class="flex flex-col gap-14">
                @foreach ($site->menu_sections as $group)
                    @if ($group->on_board)
                        <div>
                            <div class="flex flex-wrap items-baseline justify-between gap-x-6 gap-y-1 border-b-2 border-ink pb-3">
                                <h3 class="font-display text-4xl font-black text-ink uppercase">{{ $group->name }}</h3>
                                <p class="text-sm font-medium text-muted">{{ $group->note }}</p>
                            </div>
                            <ul role="list" class="divide-y divide-ink/10">
                                @foreach ($menu as $item)
                                    @if ($item->section == $group->name && $item->featured)
                                        <li class="py-5">
                                            <div class="flex items-baseline gap-3">
                                                <p class="min-w-0 font-display text-2xl font-extrabold text-ink uppercase sm:text-3xl">{{ $item->name }}</p>
                                                @if ($item->tag)
                                                    <p class="shrink-0 bg-surface px-1.5 py-0.5 text-xs font-semibold text-ink">{{ $item->tag }}</p>
                                                @endif
                                                <span class="leader" aria-hidden="true"></span>
                                                <p class="font-display text-3xl font-black text-ink tabular-nums">{{ $site->currency }}{{ $item->price }}</p>
                                            </div>
                                            <p class="mt-1 max-w-[52ch] text-base text-pretty text-muted">{{ $item->description }}</p>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    @endif
                @endforeach
            </div>
            <p class="mt-10 max-w-[60ch] text-base/7 text-pretty text-muted">{{ $site->menu_note }}</p>
        </div>
    </div>
</section>
