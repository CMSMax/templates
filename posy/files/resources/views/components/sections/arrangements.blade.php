@props([
    'heading' => 'This week’s arrangements',
    'body' => 'Every piece changes with what the farms bring in, so no two are quite alike. Prices start where you see them.',
    'linkLabel' => 'All arrangements',
    'items' => [],
])
<section class="py-20 sm:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex flex-wrap items-end justify-between gap-x-12 gap-y-6">
            <div>
                <h2 class="font-display text-4xl tracking-tight text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
                <p class="mt-5 max-w-[52ch] text-lg/8 text-muted">{{ $body }}</p>
            </div>
            <a href="/arrangements" class="group inline-flex items-center gap-2 font-medium text-ink underline decoration-ink/30 underline-offset-8 transition-colors duration-200 hover:decoration-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                {{ $linkLabel }}
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-4 transition-transform duration-200 group-hover:translate-x-0.5" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
            </a>
        </div>
        <div class="mt-14 grid gap-x-10 gap-y-14 lg:grid-cols-12">
            @foreach ($items as $item)
                @if ($item->home_spot == 'lead')
                    <a href="/arrangements#{{ $item->section }}" class="group lg:col-span-6 focus-visible:outline-2 focus-visible:outline-offset-8 focus-visible:outline-primary">
                        <span class="block overflow-hidden bg-surface">
                            <img src="{{ $item->image }}" alt="{{ $item->image_alt }}" width="1200" height="1490" loading="lazy" decoding="async" class="aspect-4/5 w-full object-cover transition-transform duration-700 ease-out group-hover:scale-[1.02]">
                        </span>
                        <span class="mt-6 flex items-baseline justify-between gap-6 border-t border-line pt-5">
                            <span class="font-display text-3xl text-ink transition-colors duration-200 group-hover:text-primary">{{ $item->name }}</span>
                            <span class="shrink-0 text-muted tabular-nums">from <span class="font-display text-2xl text-ink">${{ $item->price }}</span></span>
                        </span>
                        <span class="mt-3 block max-w-[52ch] text-base/7 text-muted">{{ $item->description }}</span>
                    </a>
                @endif
            @endforeach
            <div class="grid gap-y-14 sm:grid-cols-2 sm:gap-x-10 lg:col-span-6">
                @foreach ($items as $item)
                    @if ($item->home_spot == 'side')
                        <a href="/arrangements#{{ $item->section }}" class="group focus-visible:outline-2 focus-visible:outline-offset-8 focus-visible:outline-primary sm:even:mt-32 lg:even:mt-56">
                            <span class="block overflow-hidden bg-surface">
                                <img src="{{ $item->image }}" alt="{{ $item->image_alt }}" width="1200" height="1490" loading="lazy" decoding="async" class="aspect-4/5 w-full object-cover transition-transform duration-700 ease-out group-hover:scale-[1.02]">
                            </span>
                            <span class="mt-5 block border-t border-line pt-4 font-display text-2xl text-ink transition-colors duration-200 group-hover:text-primary">{{ $item->name }}</span>
                            <span class="mt-3 block text-base/7 text-muted">{{ $item->description }}</span>
                            <span class="mt-3 block text-muted tabular-nums">from <span class="font-display text-xl text-ink">${{ $item->price }}</span></span>
                        </a>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
