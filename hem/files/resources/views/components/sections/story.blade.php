@props([
    'image' => '/images/owner.jpg',
    'imageAlt' => 'Ruth folding a moss green sweater on the oak counter, a tape measure round her neck.',
    'caption' => 'Ruth, at the back counter, most days.',
    'heading' => 'We opened in 2014 with one rail and a sewing machine.',
    'body' => 'Ruth trained as a tailor and spent ten years altering other people’s clothes before she wanted to sell her own. Hem started in the front room of 41 Linden Street with twelve cardigans from Lowrie and a promise to take up any hem for free. The shop has grown into the whole ground floor; the promise has not changed.',
    'secondBody' => 'We still buy the way we started: a handful of makers, visited in person, in runs small enough that you will rarely see yourself coming down the street.',
])
<section class="py-20 sm:py-28">
    <div class="mx-auto grid max-w-7xl gap-x-10 gap-y-12 px-5 sm:px-8 lg:grid-cols-12 lg:items-center">
        <figure class="lg:col-span-7">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1024" height="688" loading="lazy" decoding="async" class="aspect-3/2 w-full bg-surface object-cover">
            <figcaption class="mt-3 text-sm text-muted">{{ $caption }}</figcaption>
        </figure>
        <div class="lg:col-span-5">
            <h2 class="font-display text-[clamp(2rem,3.6vw,3rem)] leading-[1.02] font-semibold tracking-[-0.03em] text-balance text-ink">{{ $heading }}</h2>
            <p class="mt-6 text-lg/8 text-pretty text-muted">{{ $body }}</p>
            <p class="mt-4 text-lg/8 text-pretty text-muted">{{ $secondBody }}</p>
        </div>
    </div>
</section>
