@props([
    'quote' => 'Two hundred and twelve guests, a barn with one outlet, and rain. Nobody noticed any of it. People are still asking me about the short rib.',
    'name' => 'Maren Ostrowski',
    'role' => 'Wedding planner, Rhinebeck',
    'image' => '/images/market.jpg',
    'imageAlt' => 'A still life of autumn produce — persimmons, figs, squash, pears, beets and chestnuts — against a plum wall',
])
<section class="bg-surface">
    <div class="mx-auto grid max-w-7xl grid-cols-1 items-center gap-12 px-5 py-20 sm:px-8 lg:grid-cols-[7fr_5fr] lg:gap-16 lg:py-28">
        <figure>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 36" class="h-9 w-12 fill-primary" aria-hidden="true"><path d="M0 36V21.6C0 9.4 6.1 2.2 18.3 0l2 4.6C13.5 6.6 10.2 10.6 10.2 17H19v19H0Zm28.6 0V21.6C28.6 9.4 34.7 2.2 46.9 0l2 4.6c-6.8 2-10.1 6-10.1 12.4h8.8v19h-19Z"/></svg>
            <blockquote class="mt-8 max-w-[30ch] font-display text-[clamp(1.75rem,3.4vw,2.75rem)] leading-[1.18] tracking-tight text-balance text-ink">
                <p>{{ $quote }}</p>
            </blockquote>
            <figcaption class="mt-8 flex flex-col gap-0.5">
                <span class="text-base font-medium text-ink">{{ $name }}</span>
                <span class="text-base text-muted sm:text-sm">{{ $role }}</span>
            </figcaption>
        </figure>
        <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1024" height="688" loading="lazy" decoding="async" class="aspect-[4/5] w-full rounded-b-full object-cover lg:rounded-b-[12rem]">
    </div>
</section>
