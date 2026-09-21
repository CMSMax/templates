@props([
    'heading' => 'Four menus, priced by the guest.',
    'body' => 'Start from one of our menus and we will shape it around your people, your venue and the week you book. Prices include the food, the cooks and the servers.',
    'linkLabel' => 'Read every menu',
    'image' => '/images/family.jpg',
])
<section id="menus" class="scroll-mt-18 py-20 lg:py-28">
    <div class="mx-auto grid max-w-7xl grid-cols-1 gap-14 px-5 sm:px-8 lg:grid-cols-[5fr_7fr] lg:gap-16">
        <div class="flex flex-col lg:sticky lg:top-28 lg:self-start">
            <h2 class="max-w-[14ch] font-display text-[clamp(2.25rem,4.5vw,3.5rem)] leading-[1.05] tracking-tight text-balance text-ink">{{ $heading }}</h2>
            <p class="mt-6 max-w-[48ch] text-lg/8 text-muted">{{ $body }}</p>
            <ul role="list" class="mt-10 border-t border-ink/15">
                @foreach ($menus as $menu)
                    <li class="border-b border-ink/15">
                        <a href="/menus#{{ $menu->slug }}" class="group flex flex-col gap-1 py-5 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                            <span class="flex items-baseline gap-3">
                                <span class="font-display text-xl text-ink group-hover:text-primary sm:text-2xl">{{ $menu->name }}</span>
                                <span class="leader text-ink" aria-hidden="true"></span>
                                <span class="font-display text-xl text-ink tabular-nums sm:text-2xl">{{ $site->currency }}{{ $menu->price }}</span>
                            </span>
                            <span class="text-base text-muted sm:text-sm">{{ $menu->style }} · from {{ $menu->minimum }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
            <p class="mt-8">
                <a href="/menus" class="inline-flex items-center gap-2 rounded-full py-3 pr-4 pl-5 text-base font-medium text-ink ring-1 ring-ink/25 ring-inset hover:bg-ink hover:text-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                    {{ $linkLabel }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </a>
            </p>
        </div>
        <div class="relative overflow-hidden rounded-3xl px-4 py-12 sm:px-12 sm:py-16 lg:px-16">
            <img src="{{ $image }}" alt="" aria-hidden="true" width="1024" height="688" loading="lazy" decoding="async" class="absolute inset-0 size-full object-cover">
            <div class="absolute inset-0 bg-secondary/25" aria-hidden="true"></div>
            <div class="relative mx-auto max-w-md shadow-2xl shadow-ink/40 sm:-rotate-1">
                @foreach ($menus as $menu)
                    @if ($menu->featured)
                        <x-menu-card :menu="$menu"/>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
