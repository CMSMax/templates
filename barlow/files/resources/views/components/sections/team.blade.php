@props([
    'items' => [],
    'heading' => 'The barbers.',
    'body' => 'Three chairs, three barbers, and more than forty years at the trade between them. Ask for someone by name, or take the next free chair.',
])
<section class="border-t border-line py-20 lg:py-32">
    <div class="mx-auto max-w-7xl px-6">
        <div class="flex flex-col justify-between gap-6 lg:flex-row lg:items-end">
            <h2 class="font-display text-5xl leading-[0.95] font-semibold text-ink uppercase sm:text-6xl">{{ $heading }}</h2>
            <p class="max-w-[48ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
        </div>
        <ul role="list" class="mt-14 grid gap-x-8 gap-y-14 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($items as $barber)
                <li>
                    <img src="{{ $barber->image }}" alt="{{ $barber->alt }}" width="880" height="1168" loading="lazy" decoding="async" class="aspect-[3/4] w-full object-cover">
                    <h3 class="mt-6 font-display text-3xl font-semibold text-ink uppercase">{{ $barber->name }}</h3>
                    <p class="mt-1 text-sm font-medium tracking-wide text-primary">{{ $barber->role }}</p>
                    <p class="mt-3 max-w-[36ch] text-base/7 text-pretty text-muted">{{ $barber->specialty }}</p>
                </li>
            @endforeach
        </ul>
    </div>
</section>
