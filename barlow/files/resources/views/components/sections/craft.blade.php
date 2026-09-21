@props([
    'heading' => 'The last of the proper barbershops.',
    'body' => 'No loud music, no production line. Just a barber, a chair, and forty-five minutes of undivided attention. Walk in with a photo or no idea at all — we will get you there.',
    'image' => '/images/fade.jpg',
    'imageAlt' => 'A barber fading the back of a client’s head with clippers',
    'feature' => '/images/beard-trim.jpg',
    'featureAlt' => 'A barber trimming a client’s beard with scissors and a comb',
    'quote' => 'The best barber in town for my money. Professional, unhurried, and the fade lasts.',
    'quoteName' => 'Chris Holloway',
    'cardHeading' => 'Book your beard service',
    'cardBody' => 'Trimmed, shaped, and lined with a straight razor, then finished with hot towels, oil, and balm.',
    'cardLink' => '/services',
    'cardLinkLabel' => 'Beard services',
])
<section class="py-20 lg:py-32">
    <div class="mx-auto max-w-7xl px-6">
        <div class="grid lg:grid-cols-12">
            <div class="flex flex-col justify-between gap-10 pb-12 lg:col-span-7 lg:pr-16 lg:pb-16">
                <h2 class="max-w-[14ch] font-display text-5xl leading-[0.95] font-semibold text-balance text-ink uppercase sm:text-6xl lg:text-7xl">{{ $heading }}</h2>
                <div>
                    <p class="max-w-[52ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
                    <p class="mt-8 flex items-center gap-4 font-display text-lg font-semibold tracking-[0.2em] text-primary uppercase">
                        <span class="h-px w-10 bg-primary" aria-hidden="true"></span>
                        Est. {{ $site->established }}
                    </p>
                </div>
            </div>
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1168" height="880" loading="lazy" decoding="async" class="aspect-[4/3] w-full object-cover lg:col-span-5 lg:aspect-auto lg:h-full">
            <img src="{{ $feature }}" alt="{{ $featureAlt }}" width="1168" height="880" loading="lazy" decoding="async" class="aspect-[4/3] w-full object-cover lg:col-span-7 lg:aspect-auto lg:h-full">
            <div class="flex flex-col lg:col-span-5">
                <figure class="flex flex-col items-center justify-center gap-6 bg-primary px-8 py-12 text-center text-primary-foreground sm:px-12">
                    <blockquote class="max-w-[30ch] text-xl/8 font-medium text-balance">
                        <p>“{{ $quote }}”</p>
                    </blockquote>
                    <figcaption class="font-display text-base font-semibold tracking-[0.14em] uppercase">{{ $quoteName }}</figcaption>
                </figure>
                <div class="flex flex-1 flex-col items-center justify-center gap-5 border border-t-0 border-line bg-surface px-8 py-12 text-center sm:px-12">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-9 shrink-0 text-primary" aria-hidden="true"><circle cx="6" cy="6" r="3"/><path d="M8.12 8.12 12 12m8-8L8.12 15.88"/><circle cx="6" cy="18" r="3"/><path d="M14.8 14.8 20 20"/></svg>
                    <h3 class="max-w-[16ch] font-display text-3xl font-semibold text-balance text-ink uppercase">{{ $cardHeading }}</h3>
                    <p class="max-w-[40ch] text-base/7 text-pretty text-muted">{{ $cardBody }}</p>
                    <a href="{{ $cardLink }}" class="inline-flex items-center gap-2 font-display text-base font-semibold tracking-[0.12em] text-primary uppercase underline-offset-4 hover:underline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                        {{ $cardLinkLabel }}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
