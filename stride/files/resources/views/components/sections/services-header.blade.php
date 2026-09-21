@props([
    'heading' => 'Services & pricing',
    'body' => 'Every visit is one-on-one with a licensed physical therapist. We bill most insurance directly — and if you’re paying yourself, these are the prices, with nothing added at the desk.',
    'image' => '/images/clinic.jpg',
    'imageAlt' => 'The Stride clinic floor in morning light — two treatment tables, a squat rack, and a wall of resistance bands and dumbbells',
])
<section class="pt-8 pb-16 sm:pt-12 lg:pb-20">
    <div class="mx-auto max-w-6xl px-5 sm:px-8">
        <div class="grid gap-6 lg:grid-cols-[7fr_5fr] lg:items-end lg:gap-16">
            <h1 data-rise class="font-display text-[clamp(2.75rem,6.4vw,5.25rem)] leading-[0.98] font-semibold tracking-[-0.045em] text-balance text-ink">{{ $heading }}</h1>
            <p data-rise class="text-lg/8 text-muted [--i:1]">{{ $body }}</p>
        </div>
        <img data-rise src="{{ $image }}" alt="{{ $imageAlt }}" width="1024" height="688" fetchpriority="high" class="mt-12 aspect-[4/3] w-full rounded-[1.75rem] object-cover outline-1 -outline-offset-1 outline-ink/5 [--i:2] sm:aspect-[21/9] lg:mt-16">
    </div>
</section>
