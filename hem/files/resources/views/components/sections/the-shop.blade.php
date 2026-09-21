@props([
    'image' => '/images/shop-interior.jpg',
    'imageAlt' => 'Inside the shop: a steel rail of knitwear and coats, a low oak table of folded sweaters and a big window onto the street.',
    'eyebrow' => 'The shop',
    'heading' => 'A bright room on Linden Street, with a big fitting room.',
    'hoursLabel' => 'Opening hours',
    'directionsLabel' => 'Get directions',
])
<section id="visit" class="relative">
    <img src="{{ $image }}" alt="{{ $imageAlt }}" width="2048" height="1376" loading="lazy" decoding="async" class="aspect-4/3 w-full bg-surface object-cover sm:aspect-16/9 lg:aspect-21/9">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="relative -mt-16 grid gap-x-12 gap-y-10 bg-surface p-6 ring-1 ring-ink/5 sm:-mt-28 sm:p-10 lg:-mt-40 lg:max-w-5xl lg:grid-cols-2">
            <div>
                <p class="text-sm font-medium text-muted">{{ $eyebrow }}</p>
                <h2 class="mt-3 max-w-[18ch] font-display text-[clamp(1.75rem,3vw,2.5rem)] leading-tight font-semibold tracking-tight text-balance text-ink">{{ $heading }}</h2>
                <p class="mt-5 text-lg/8 text-ink">{{ $site->address }}, {{ $site->city }}</p>
                <p class="mt-1 max-w-[40ch] text-base/7 text-muted">{{ $site->parking }}</p>
                <a href="{{ $site->map_url }}" class="group mt-8 inline-flex items-center gap-2 border-b border-ink pb-1 font-medium text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $directionsLabel }}<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" class="size-4 transition-transform duration-200 group-hover:translate-x-1" aria-hidden="true"><path d="M4 10h12m-4-4 4 4-4 4"/></svg></a>
            </div>
            <div class="lg:pt-8">
                <h3 class="text-sm font-medium text-ink">{{ $hoursLabel }}</h3>
                <dl class="mt-3 border-t border-line text-base/6 sm:text-sm/6">
                    @foreach ($hours as $slot)
                        <div class="flex justify-between gap-6 border-b border-line py-2.5">
                            <dt class="text-muted">{{ $slot->day }}</dt>
                            <dd class="text-ink tabular-nums">{{ $slot->hours }}</dd>
                        </div>
                    @endforeach
                </dl>
                <p class="mt-3 text-sm/6 text-muted">{{ $site->hours_note }}</p>
            </div>
        </div>
    </div>
</section>
