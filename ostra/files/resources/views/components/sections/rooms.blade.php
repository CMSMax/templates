@props([
    'eyebrow' => 'The rooms',
    'heading' => 'Rooms with the',
    'headingAccent' => 'shutters open.',
    'body' => 'Every room is different — a bath by the balcony, a bed under the beams, a window at the height of the masts. Each one comes with its own key.',
    'linkLabel' => 'All rooms and rates',
])
<section id="rooms" class="scroll-mt-20 pb-24 lg:pb-36">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex flex-col gap-8 lg:flex-row lg:items-end lg:justify-between">
            <div class="max-w-2xl">
                <p class="text-xs font-medium tracking-[0.24em] text-primary uppercase">{{ $eyebrow }}</p>
                <h2 class="mt-6 font-display text-[clamp(2.25rem,4.5vw,3.75rem)] leading-[1.05] font-normal tracking-tight text-balance text-ink">{{ $heading }} <em class="italic">{{ $headingAccent }}</em></h2>
                <p class="mt-6 max-w-[52ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
            </div>
            <a href="/rooms" class="group inline-flex shrink-0 items-center gap-2 self-start rounded-sm border-b border-ink/30 pb-1 text-base font-medium text-ink transition-colors duration-150 hover:border-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary lg:self-auto">
                {{ $linkLabel }}
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4 shrink-0 transition-transform duration-200 group-hover:translate-x-0.5" aria-hidden="true"><path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.64l-4.2-3.96a.75.75 0 1 1 1.02-1.1l5.5 5.25a.75.75 0 0 1 0 1.1l-5.5 5.25a.75.75 0 1 1-1.02-1.1l4.2-3.94H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd"/></svg>
            </a>
        </div>
        <ul role="list" class="mt-16 grid gap-x-10 gap-y-16 sm:grid-cols-2 lg:mt-20 lg:grid-cols-3">
            @foreach ($rooms as $room)
                <li class="lg:even:mt-24">
                    <a href="/rooms#{{ $room->slug }}" class="group flex flex-col rounded-t-full focus-visible:outline-2 focus-visible:outline-offset-8 focus-visible:outline-primary">
                        <span class="relative">
                            <img src="{{ $room->image }}" alt="{{ $room->alt }}" width="880" height="1168" loading="lazy" class="aspect-[4/5] w-full rounded-t-full object-cover transition-[filter] duration-200 group-hover:brightness-105">
                            <span class="absolute top-[22%] -right-2 rotate-6 transition-transform duration-200 group-hover:rotate-0 sm:-right-4">
                                <x-key-fob :number="$room->number"/>
                            </span>
                        </span>
                        <span class="mt-7 flex items-baseline justify-between gap-4 border-b border-line pb-4">
                            <span class="font-display text-[1.75rem] leading-tight text-ink">{{ $room->name }}</span>
                            <span class="shrink-0 text-sm text-muted tabular-nums">from <span class="font-medium text-ink">{{ $site->currency }}{{ $room->rate }}</span></span>
                        </span>
                        <span class="mt-4 text-[0.9375rem] text-muted">{{ $room->bed }} · {{ $room->size }} · {{ $room->view }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>
