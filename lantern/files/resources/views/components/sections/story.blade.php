@props([
    'heading' => 'Two technicians, one van, and a list that kept growing.',
    'bodyOne' => 'Lantern began in 2012 with heating work on the streets around Fairbank Road. Customers kept asking whether we also did the leak in the basement, then the panel in the garage, then the deck rail nobody wanted to climb.',
    'bodyTwo' => 'Rather than hand people a phone number for someone else, we hired the licence. Fourteen years later there are nine of us, still on the same streets, still answering the same number.',
    'image' => '/images/crew.jpg',
    'imageAlt' => 'Two Lantern technicians standing beside their van in a driveway on a bright morning',
    'quote' => 'We would rather lose a job than sell you a system you do not need. That rule has kept us busy for fourteen years.',
    'quoteName' => 'Ray Okonkwo, founder',
])
<section class="border-b border-line py-20 lg:py-32">
    <div class="mx-auto max-w-6xl px-6">
        <div class="grid items-start gap-8 lg:grid-cols-2">
            <h2 class="max-w-[20ch] font-display text-[clamp(2rem,3.6vw,3rem)]/[1.05] font-semibold tracking-tight text-balance text-ink">{{ $heading }}</h2>
            <div class="flex flex-col gap-5">
                <p class="max-w-[52ch] text-[1.0625rem]/7 text-muted">{{ $bodyOne }}</p>
                <p class="max-w-[52ch] text-[1.0625rem]/7 text-muted">{{ $bodyTwo }}</p>
            </div>
        </div>
        <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1400" height="929" loading="lazy" decoding="async" class="mt-14 aspect-3/2 w-full rounded-xs object-cover outline-1 -outline-offset-1 outline-ink/5 lg:aspect-21/9">
        <figure class="mt-14 border-t border-line pt-8">
            <blockquote class="max-w-[34ch] font-display text-[clamp(1.5rem,2.6vw,2.25rem)]/[1.2] font-semibold tracking-tight text-balance text-ink">{{ $quote }}</blockquote>
            <figcaption class="mt-5 text-base/6 text-muted sm:text-sm/6">{{ $quoteName }}</figcaption>
        </figure>
    </div>
</section>
