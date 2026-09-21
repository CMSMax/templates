@props([
    'buttonLabel' => 'Check availability',
])
<section class="pb-24 lg:pb-32">
    <div class="mx-auto flex max-w-7xl flex-col gap-24 px-6 lg:gap-32 lg:px-8">
        @foreach ($rooms as $room)
            <article id="{{ $room->slug }}" class="group grid scroll-mt-28 gap-10 border-t border-line pt-12 lg:grid-cols-2 lg:items-center lg:gap-20 lg:pt-16">
                <div class="relative lg:group-even:order-2">
                    <img src="{{ $room->image }}" alt="{{ $room->alt }}" width="880" height="1168" loading="lazy" class="aspect-[4/5] w-full rounded-t-full object-cover">
                    <span class="absolute top-[18%] -right-2 rotate-6 sm:-right-5">
                        <x-key-fob :number="$room->number"/>
                    </span>
                </div>
                <div class="flex flex-col items-start">
                    <p class="text-xs font-medium tracking-[0.24em] text-primary uppercase">Room {{ $room->number }}</p>
                    <h2 class="mt-5 font-display text-[clamp(2.25rem,4.5vw,3.75rem)] leading-[1.05] font-normal tracking-tight text-balance text-ink">{{ $room->name }}</h2>
                    <p class="mt-6 max-w-[48ch] text-lg/8 text-pretty text-muted">{{ $room->summary }}</p>
                    <dl class="mt-10 grid w-full grid-cols-2 border-t border-line">
                        <div class="border-r border-b border-line py-5 pr-5">
                            <dt class="text-xs font-medium tracking-[0.2em] text-muted uppercase">Sleeps</dt>
                            <dd class="mt-2 font-display text-xl text-ink">{{ $room->sleeps }}</dd>
                        </div>
                        <div class="border-b border-line py-5 pl-5">
                            <dt class="text-xs font-medium tracking-[0.2em] text-muted uppercase">Beds</dt>
                            <dd class="mt-2 font-display text-xl text-ink">{{ $room->bed }}</dd>
                        </div>
                        <div class="border-r border-b border-line py-5 pr-5">
                            <dt class="text-xs font-medium tracking-[0.2em] text-muted uppercase">Size</dt>
                            <dd class="mt-2 font-display text-xl text-ink">{{ $room->size }}</dd>
                        </div>
                        <div class="border-b border-line py-5 pl-5">
                            <dt class="text-xs font-medium tracking-[0.2em] text-muted uppercase">View</dt>
                            <dd class="mt-2 font-display text-xl text-ink">{{ $room->view }}</dd>
                        </div>
                    </dl>
                    <p class="mt-6 text-base/7 text-ink">{{ $room->features }}</p>
                    <div class="mt-10 flex flex-wrap items-center gap-x-8 gap-y-4">
                        <p class="text-muted"><span class="font-display text-4xl text-ink tabular-nums">{{ $site->currency }}{{ $room->rate }}</span> <span class="text-base">a night</span></p>
                        <a href="{{ $site->booking_url }}" class="rounded-full px-6 py-3.5 text-base font-medium text-ink ring-1 ring-ink/25 ring-inset transition-colors duration-150 hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $buttonLabel }}</a>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
</section>
