@props([
    'eyebrow' => 'Our story',
    'heading' => 'A small room with a',
    'headingAccent' => 'big window.',
    'body' => 'Latte started as a six-seat espresso bar and a borrowed oven. Today it is a neighborhood living room: the same house blend, a kitchen that cooks until three, and a window bench that is never empty for long.',
    'bodySecondary' => 'We roast every week, bake every morning, and learn your order by the third visit.',
    'image' => '/images/interior.jpg',
    'imageAlt' => 'The café in the morning — oak tables, bentwood chairs, and sunlight across the floor',
])
<section id="story" class="scroll-mt-20 py-20 lg:py-28">
    <div class="mx-auto grid max-w-6xl items-center gap-12 px-6 lg:grid-cols-[6fr_5fr] lg:gap-20">
        <div>
            <p class="text-sm font-medium text-muted">{{ $eyebrow }}</p>
            <h2 class="mt-4 max-w-[18ch] font-display text-4xl font-medium tracking-tight text-balance text-ink sm:text-5xl">{{ $heading }} <em class="font-serif font-normal tracking-normal italic">{{ $headingAccent }}</em></h2>
            <p class="mt-6 max-w-[52ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
            <p class="mt-4 max-w-[52ch] text-lg/8 text-pretty text-muted">{{ $bodySecondary }}</p>
            <dl class="mt-12 grid grid-cols-3 gap-6 border-t border-line pt-8">
                @foreach ($site->facts as $fact)
                    <div class="flex flex-col-reverse justify-end gap-1">
                        <dt class="text-sm/5 text-muted">{{ $fact->label }}</dt>
                        <dd class="font-display text-3xl font-medium tracking-tight text-ink tabular-nums sm:text-4xl">{{ $fact->value }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
        <img src="{{ $image }}" alt="{{ $imageAlt }}" width="896" height="1120" loading="lazy" decoding="async" class="aspect-[4/5] w-full rounded-[min(3vw,28px)] object-cover">
    </div>
</section>
