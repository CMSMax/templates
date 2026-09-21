@props([
    'headingLead' => 'Put the week',
    'headingCircled' => 'down.',
    'body' => 'Therapeutic and relaxation massage in a quiet studio with two rooms and one rule: nobody gets rushed off the table.',
    'secondaryLabel' => 'Treatments and prices',
    'secondaryLink' => '/treatments',
    'image' => '/images/room.jpg',
    'imageAlt' => 'A massage table made up with warm white linen in a plaster-walled room, low afternoon sun falling across the sheets',
])
<section class="relative isolate flex min-h-[max(40rem,100svh)] flex-col justify-end overflow-hidden bg-secondary text-secondary-foreground">
    <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1920" height="1074" fetchpriority="high" class="absolute inset-0 -z-20 size-full object-cover object-[70%_center]">
    <div class="absolute inset-0 -z-10 bg-linear-to-t from-secondary/90 via-secondary/25 to-secondary/40" aria-hidden="true"></div>
    <div class="absolute inset-0 -z-10 bg-linear-to-r from-secondary/55 via-secondary/10 to-transparent max-md:hidden" aria-hidden="true"></div>
    <div class="mx-auto w-full max-w-7xl px-6 pt-36 pb-10 lg:px-8 lg:pb-12">
        <h1 data-rise class="max-w-[12ch] font-display text-[clamp(3.25rem,9vw,7.5rem)] leading-[0.95] font-normal tracking-[-0.035em] text-balance">{{ $headingLead }} <span class="circled">{{ $headingCircled }}</span></h1>
        <div class="mt-10 flex flex-col gap-8 md:flex-row md:items-end md:justify-between md:gap-16">
            <p data-rise class="max-w-[46ch] text-lg/8 text-secondary-foreground/90 [--i:1]">{{ $body }}</p>
            <div data-rise class="flex shrink-0 flex-wrap items-center gap-3 [--i:2]">
                <a href="{{ $site->booking_url }}" class="rounded-full bg-primary px-6 py-3.5 text-base font-semibold text-primary-foreground transition-colors duration-150 hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary-foreground">{{ $site->cta_label }}</a>
                <a href="{{ $secondaryLink }}" class="rounded-full px-6 py-3.5 text-base font-semibold text-secondary-foreground ring-1 ring-secondary-foreground/50 ring-inset transition-colors duration-150 hover:bg-secondary-foreground/10 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary-foreground">{{ $secondaryLabel }}</a>
            </div>
        </div>
        <dl data-rise class="mt-12 grid grid-cols-1 border-t border-secondary-foreground/25 sm:grid-cols-3 [--i:3]">
            @foreach ($site->facts as $fact)
                <div class="flex items-baseline gap-4 border-b border-secondary-foreground/15 py-4 sm:flex-col sm:gap-1 sm:border-b-0 sm:py-6 sm:pr-6">
                    <dt class="order-2 text-sm text-secondary-foreground/80">{{ $fact->label }}</dt>
                    <dd class="order-1 font-display text-2xl tabular-nums">{{ $fact->value }}</dd>
                </div>
            @endforeach
        </dl>
    </div>
</section>
