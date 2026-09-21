@props([
    'heading' => 'Other ways to pitch in',
    'body' => 'Not every kind of help fits in a shift. These do just as much.',
])
<section aria-labelledby="ways-heading" class="border-t border-line">
    <div class="mx-auto grid max-w-7xl gap-12 px-5 py-20 sm:px-6 lg:grid-cols-12 lg:gap-10 lg:px-8 lg:py-28">
        <div class="lg:col-span-4">
            <div class="lg:sticky lg:top-28">
                <h2 id="ways-heading" class="max-w-[12ch] font-display text-[clamp(2.25rem,5vw,3.75rem)] leading-[0.98] font-extrabold tracking-[-0.03em] text-ink">{{ $heading }}</h2>
                <p class="mt-5 max-w-[34ch] text-lg/8 text-muted">{{ $body }}</p>
            </div>
        </div>
        <ul role="list" class="border-b-2 border-ink lg:col-span-7 lg:col-start-6">
            @foreach ($site->ways as $way)
                <li class="grid gap-3 border-t-2 border-ink py-8 sm:grid-cols-[auto_1fr] sm:gap-8">
                    <span class="mt-2 size-5 rounded-full bg-primary" aria-hidden="true"></span>
                    <div>
                        <h3 class="font-display text-[1.75rem] leading-tight font-bold tracking-[-0.02em] text-ink">{{ $way->title }}</h3>
                        <p class="mt-3 max-w-[56ch] text-lg/8 text-muted">{{ $way->note }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>
