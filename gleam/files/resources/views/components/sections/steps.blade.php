@props([
    'eyebrow' => 'How it works',
    'heading' => 'One call to book. Then the same cleaner, for as long as you like.',
    'image' => '/images/bathroom-shelf.jpg',
    'imageAlt' => 'A spotless white bathroom with folded white and pale blue towels on an oak shelf beside a polished tap.',
    'steps' => [],
])
<section class="py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid items-center gap-y-14 lg:grid-cols-12 lg:gap-x-16">
            <div class="overflow-hidden rounded-[2rem] bg-surface lg:col-span-5">
                <img src="{{ $image }}" alt="{{ $imageAlt }}" width="896" height="1120" loading="lazy" decoding="async" class="aspect-[4/3] w-full object-cover lg:aspect-[4/5]">
            </div>
            <div class="lg:col-span-7">
                <p class="text-[0.9375rem] font-medium text-muted">{{ $eyebrow }}</p>
                <h2 class="mt-4 max-w-[20ch] font-display text-4xl font-semibold tracking-tight text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
                <ol role="list" class="mt-12 border-b border-line">
                    @foreach ($steps as $step)
                        <li class="grid grid-cols-[3.25rem_1fr] gap-x-4 border-t border-line py-7 sm:grid-cols-[5rem_1fr] sm:gap-x-6">
                            <p class="font-display text-3xl font-semibold tracking-tight text-muted tabular-nums sm:text-4xl">0{{ $loop->iteration }}</p>
                            <div>
                                <h3 class="font-display text-xl font-semibold tracking-tight text-ink sm:text-2xl">{{ $step->title }}</h3>
                                <p class="mt-2 max-w-[52ch] text-base/7 text-pretty text-muted">{{ $step->body }}</p>
                            </div>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</section>
