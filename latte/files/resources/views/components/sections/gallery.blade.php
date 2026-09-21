@props([
    'heading' => 'From the',
    'headingAccent' => 'counter.',
    'body' => 'What a morning here looks like, give or take a cardamom bun.',
    'linkLabel' => 'Follow along on Instagram',
])
<section class="py-20 lg:py-28">
    <div class="mx-auto max-w-6xl px-6">
        <div class="flex flex-wrap items-end justify-between gap-6">
            <div>
                <h2 class="font-display text-4xl font-medium tracking-tight text-balance text-ink sm:text-5xl">{{ $heading }} <em class="font-serif font-normal tracking-normal italic">{{ $headingAccent }}</em></h2>
                <p class="mt-4 max-w-[48ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
            </div>
            <a href="{{ $site->instagram }}" class="inline-flex min-h-12 items-center rounded-sm text-base font-medium text-ink underline decoration-line decoration-2 underline-offset-6 hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $linkLabel }}</a>
        </div>
        <ul role="list" class="mt-12 grid grid-cols-2 gap-3 sm:gap-6 lg:grid-cols-4">
            @foreach ($gallery as $photo)
                @if ($loop->even)
                    <li class="lg:mt-16"><img src="{{ $photo->image }}" alt="{{ $photo->alt }}" width="896" height="1120" loading="lazy" decoding="async" class="aspect-[4/5] w-full rounded-[min(3vw,24px)] object-cover"></li>
                @else
                    <li><img src="{{ $photo->image }}" alt="{{ $photo->alt }}" width="896" height="1120" loading="lazy" decoding="async" class="aspect-[4/5] w-full rounded-[min(3vw,24px)] object-cover"></li>
                @endif
            @endforeach
        </ul>
    </div>
</section>
