@props([
    'eyebrow' => 'Residential property management',
    'heading' => 'Your rental, handled. Your rent, on the 5th.',
    'body' => 'We lease, maintain, and look after single-family homes and small buildings — and every month you get a plain statement and a deposit, on the same day.',
    'secondaryLabel' => 'See our fees',
    'secondaryLink' => '/#fees',
    'image' => '/images/building-dusk.jpg',
    'imageAlt' => 'A brick and stone apartment building at dusk with warm light in its windows',
    'stats' => [],
    'statementLines' => [],
])
<section class="pt-10 pb-16 sm:pt-14 lg:pt-20 lg:pb-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid items-center gap-12 lg:grid-cols-[5fr_6fr] lg:gap-16">
            <div>
                <p class="flex items-center gap-2 text-sm font-medium text-muted"><span class="size-1.5 rounded-full bg-primary" aria-hidden="true"></span>{{ $eyebrow }} · {{ $site->city }}</p>
                <h1 class="mt-5 max-w-[14ch] font-display text-[2.625rem] font-medium tracking-tight text-balance sm:text-6xl lg:text-[4.25rem]">{{ $heading }}</h1>
                <p class="mt-6 max-w-[44ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
                <div class="mt-9 flex flex-wrap items-center gap-x-6 gap-y-4">
                    <a href="{{ $site->cta_link }}" class="rounded-full bg-primary px-6 py-3.5 font-medium text-primary-foreground hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $site->cta_label }}</a>
                    <a href="{{ $secondaryLink }}" class="group inline-flex items-center gap-1.5 rounded-md font-medium text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $secondaryLabel }}<svg viewBox="0 0 16 16" fill="currentColor" class="size-4 transition-transform duration-150 group-hover:translate-x-0.5" aria-hidden="true"><path fill-rule="evenodd" d="M2 8a.75.75 0 0 1 .75-.75h8.69L8.22 4.03a.75.75 0 0 1 1.06-1.06l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 0 1-1.06-1.06l3.22-3.22H2.75A.75.75 0 0 1 2 8Z" clip-rule="evenodd"/></svg></a>
                </div>
            </div>
            <div class="relative lg:pb-20">
                <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1168" height="880" fetchpriority="high" data-rise class="aspect-[4/3] w-full rounded-[min(2vw,1.5rem)] object-cover outline-1 -outline-offset-1 outline-black/10 lg:ml-auto lg:aspect-[5/4] lg:w-[86%]">
                <div data-rise="late" class="relative mx-3 -mt-16 sm:mx-6 sm:-mt-24 sm:w-[23rem] lg:absolute lg:bottom-0 lg:left-0 lg:m-0">
                    <x-sections.statement :lines="$statementLines"/>
                </div>
            </div>
        </div>
        <dl class="mt-16 grid border-t border-ink/10 sm:grid-cols-3 lg:mt-20">
            @foreach ($stats as $stat)
                <div class="flex flex-col gap-1 border-b border-ink/10 py-6 sm:border-b-0 sm:py-8 sm:not-first:border-l sm:not-first:pl-8">
                    <dt class="order-2 text-muted">{{ $stat->label }}</dt>
                    <dd class="order-1 font-display text-4xl font-medium tracking-tight tabular-nums lg:text-5xl">{{ $stat->value }}</dd>
                </div>
            @endforeach
        </dl>
    </div>
</section>
