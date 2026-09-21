@props([
    'heading' => 'Founded on a simple idea',
    'body' => 'Lexford was founded on the belief that good legal advice should be understandable, affordable in advance, and given by the person who will actually do the work. We started with two attorneys and a borrowed conference room.',
    'bodyMore' => 'Today we are three attorneys and a small, long-serving staff — still in one office, still returning every call ourselves. We have deliberately stayed small. It is the only way we know to give each client the attention their matter deserves.',
    'foundedLabel' => 'In practice since',
    'image' => '/images/desk-still-life.jpg',
    'imageAlt' => 'A leather portfolio, fountain pen and reading glasses on a walnut desk in morning light.',
])
<section class="pb-24 lg:pb-36">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid items-end gap-y-14 lg:grid-cols-12 lg:gap-x-16">
            <div class="lg:col-span-6">
                <h2 class="max-w-[16ch] font-display text-4xl font-light tracking-tight text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
                <p class="mt-8 max-w-[58ch] text-lg/8 text-pretty text-ink/85">{{ $body }}</p>
                <p class="mt-5 max-w-[58ch] text-lg/8 text-pretty text-muted">{{ $bodyMore }}</p>
                <p class="mt-12 flex items-baseline gap-4 border-t border-line pt-6">
                    <span class="text-sm text-muted">{{ $foundedLabel }}</span>
                    <span class="font-display text-4xl tracking-tight text-ink tabular-nums">{{ $site->founded }}</span>
                </p>
            </div>
            <div class="overflow-hidden rounded-[min(3vw,1.5rem)] bg-line lg:col-span-5 lg:col-start-8">
                <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1600" height="2000" loading="lazy" class="aspect-4/5 w-full object-cover">
            </div>
        </div>
    </div>
</section>
