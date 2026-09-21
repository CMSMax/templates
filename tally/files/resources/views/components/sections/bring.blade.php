@props([
    'heading' => 'What to bring to your first meeting',
    'body' => 'Don’t worry if something’s missing — we can request most of it for you. This is just what makes the first hour count.',
    'image' => '/images/documents.jpg',
    'imageAlt' => 'A client’s tax papers on an oak desk: a manila folder, clipped receipts, a printed form, a blue pen and a calculator.',
    'items' => [],
])
<section class="border-t border-line bg-surface">
    <div class="grid lg:grid-cols-2">
        <div class="px-6 py-20 sm:px-10 lg:py-28 lg:pr-16 lg:pl-[max(2rem,calc(50vw-38rem))]">
            <h2 class="max-w-[16ch] font-display text-4xl leading-[1.08] font-medium tracking-[-0.03em] text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
            <p class="mt-6 max-w-[44ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
            <ul role="list" class="mt-10 divide-y divide-line border-y border-line">
                @foreach ($items as $entry)
                    <li class="flex items-start gap-4 py-4 text-ink">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="mt-0.5 size-5 shrink-0 text-primary" aria-hidden="true"><rect x="3" y="3" width="14" height="14" rx="2"/><path d="m6.5 10 2.5 2.5 4.5-5"/></svg>
                        {{ $entry->item }}
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="relative min-h-[22rem] sm:min-h-[30rem]">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1600" height="1075" loading="lazy" class="absolute inset-0 size-full object-cover">
        </div>
    </div>
</section>
