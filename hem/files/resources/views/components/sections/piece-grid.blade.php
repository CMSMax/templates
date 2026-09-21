@props([
    'heading' => 'On the rail this week',
    'note' => 'Prices include tax. Sizes change daily — call to check yours.',
    'newLabel' => 'New',
    'items' => [],
])
<section class="py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="flex flex-wrap items-baseline justify-between gap-x-8 gap-y-3 border-b border-ink pb-5">
            <h2 class="font-display text-2xl font-medium tracking-tight text-ink">{{ $heading }}</h2>
            <p class="text-sm text-muted">{{ $note }}</p>
        </div>
        <ul role="list" class="mt-10 grid gap-x-5 gap-y-14 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($items as $piece)
                <li>
                    <a href="{{ $piece->link }}" class="group block focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">
                        <div class="relative overflow-hidden bg-surface">
                            <img src="{{ $piece->image }}" alt="{{ $piece->imageAlt }}" width="896" height="1120" loading="lazy" decoding="async" class="aspect-4/5 w-full object-cover transition-transform duration-500 ease-out group-hover:scale-[1.03]">
                            @if ($piece->isNew == '1')
                                <span class="absolute top-3 left-3 flex items-center gap-1.5 bg-ink py-1 pr-2 pl-1.5 text-xs font-medium text-canvas"><span class="size-1.5 rounded-full bg-spot" aria-hidden="true"></span>{{ $newLabel }}</span>
                            @endif
                        </div>
                        <p class="mt-4 text-sm text-muted">{{ $piece->category }} · {{ $piece->brand }}</p>
                        <div class="mt-0.5 flex items-baseline justify-between gap-4">
                            <h3 class="min-w-0 font-display text-lg font-medium tracking-tight text-ink group-hover:underline group-hover:underline-offset-4">{{ $piece->title }}</h3>
                            <p class="shrink-0 font-display text-lg text-ink tabular-nums">{{ $piece->price }}</p>
                        </div>
                        <p class="mt-1 text-sm text-muted">{{ $piece->colour }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>
