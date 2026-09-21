@props([
    'items' => [],
    'heading' => 'From the chair.',
    'linkLabel' => 'More on Instagram',
])
<section class="border-t border-line py-20 lg:py-32">
    <div class="mx-auto max-w-7xl px-6">
        <div class="flex flex-wrap items-end justify-between gap-6">
            <h2 class="font-display text-5xl leading-[0.95] font-semibold text-ink uppercase sm:text-6xl">{{ $heading }}</h2>
            <a href="{{ $site->instagram }}" class="inline-flex items-center gap-2 font-display text-base font-semibold tracking-[0.12em] text-primary uppercase underline-offset-4 hover:underline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                {{ $linkLabel }}
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0" aria-hidden="true"><path d="M7 7h10v10M7 17 17 7"/></svg>
            </a>
        </div>
        <ul role="list" class="mt-12 grid grid-cols-2 gap-2 lg:grid-cols-4">
            @foreach ($items as $photo)
                <li>
                    <img src="{{ $photo->image }}" alt="{{ $photo->alt }}" width="896" height="1120" loading="lazy" decoding="async" class="aspect-[4/5] w-full object-cover">
                </li>
            @endforeach
        </ul>
    </div>
</section>
