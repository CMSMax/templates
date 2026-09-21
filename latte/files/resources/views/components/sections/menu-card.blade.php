@props([
    'eyebrow' => 'The menu',
    'heading' => 'What we are',
    'headingAccent' => 'pouring today.',
    'body' => 'A short card of the things regulars come back for. The full menu has teas, more bakes, and everything the kitchen does until three.',
    'linkLabel' => 'See the full menu',
    'image' => '/images/pour.jpg',
    'imageAlt' => 'A barista pouring steamed milk into a latte',
])
<section class="bg-surface py-20 lg:py-28">
    <div class="mx-auto grid max-w-6xl gap-12 px-6 lg:grid-cols-[5fr_7fr] lg:gap-20">
        <div class="flex flex-col">
            <p class="text-sm font-medium text-muted">{{ $eyebrow }}</p>
            <h2 class="mt-4 max-w-[14ch] font-display text-4xl font-medium tracking-tight text-balance text-ink sm:text-5xl">{{ $heading }} <em class="font-serif font-normal tracking-normal italic">{{ $headingAccent }}</em></h2>
            <p class="mt-6 max-w-[44ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
            <p class="mt-8">
                <a href="/menu" class="inline-flex items-center gap-2 rounded-full py-3 pr-4 pl-5 text-base font-medium text-ink ring-1 ring-ink/15 ring-inset hover:bg-card focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                    {{ $linkLabel }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.64l-4.16-3.96a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.16-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd"/></svg>
                </a>
            </p>
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="896" height="1120" loading="lazy" decoding="async" class="mt-12 aspect-[4/5] w-full max-w-sm rounded-[min(3vw,28px)] object-cover max-lg:hidden">
        </div>
        <div class="self-start rounded-[2rem] bg-card p-2 shadow-xl shadow-ink/5">
            <div class="rounded-[1.5rem] border border-line px-6 py-10 sm:px-12 sm:py-14">
                <p class="flex items-center justify-center gap-4 text-center text-sm font-medium text-muted">
                    <span class="h-px w-8 bg-line" aria-hidden="true"></span>
                    {{ $site->name }}
                    <span class="h-px w-8 bg-line" aria-hidden="true"></span>
                </p>
                <div class="mt-10 flex flex-col gap-12">
                    @foreach ($site->menu_sections as $group)
                        @if ($group->on_card)
                            <div>
                                <h3 class="text-center font-serif text-4xl text-ink italic">{{ $group->name }}</h3>
                                <ul role="list" class="mt-6 flex flex-col gap-5">
                                    @foreach ($menu as $item)
                                        @if ($item->section == $group->name && $item->featured)
                                            <li>
                                                <div class="flex items-baseline gap-3">
                                                    <p class="text-lg font-medium text-ink">{{ $item->name }}</p>
                                                    <span class="leader" aria-hidden="true"></span>
                                                    <p class="text-lg font-medium text-ink tabular-nums">{{ $site->currency }}{{ $item->price }}</p>
                                                </div>
                                                <p class="mt-1 max-w-[46ch] text-base/6 text-pretty text-muted">{{ $item->description }}</p>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    @endforeach
                </div>
                <p class="mt-12 border-t border-line pt-6 text-center text-sm/6 text-pretty text-muted">{{ $site->menu_note }}</p>
            </div>
        </div>
    </div>
</section>
