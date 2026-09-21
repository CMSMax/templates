@props([
    'eyebrow' => 'Autumn and winter, now in the shop',
    'heading' => 'Clothes worth keeping.',
    'body' => 'Knitwear, shirts and coats from seven small makers, chosen for the cloth and fitted in the shop on Linden Street.',
    'primaryLabel' => 'Shop new in',
    'primaryUrl' => '/shop',
    'secondaryLabel' => 'Plan a visit',
    'secondaryUrl' => '/visit',
    'image' => '/images/hero.jpg',
    'imageAlt' => 'A woman in an oat cable cardigan and rust canvas trousers standing in the bright shop.',
    'showTicket' => '1',
    'ticketNumber' => 'No. 014',
    'ticketName' => 'Arden cardigan',
    'ticketDetail' => 'Oat lambswool · $168',
])
<section class="relative pt-10 pb-16 sm:pt-16 lg:pb-0">
    <div class="pinked-b absolute inset-x-0 top-0 bottom-0 bg-field lg:bottom-28" aria-hidden="true"></div>
    <div class="relative mx-auto grid max-w-7xl gap-x-10 gap-y-12 px-5 sm:px-8 lg:grid-cols-12 lg:items-end">
        <div class="lg:col-span-7 lg:self-start lg:pt-14 lg:pb-44">
            <p data-rise class="flex items-center gap-2.5 text-sm font-medium text-field-muted [--i:0]"><span class="size-2 shrink-0 rounded-full bg-ink" aria-hidden="true"></span>{{ $eyebrow }}</p>
            <h1 data-rise class="mt-6 max-w-[10ch] font-display text-[clamp(3.5rem,9.5vw,8.25rem)] leading-[0.9] font-semibold tracking-[-0.045em] text-balance text-ink [--i:1]">{{ $heading }}</h1>
            <p data-rise class="mt-8 max-w-[44ch] text-lg/8 text-pretty text-field-muted [--i:2]">{{ $body }}</p>
            <div data-rise class="mt-10 flex flex-wrap items-center gap-x-8 gap-y-4 [--i:3]">
                <a href="{{ $primaryUrl }}" class="bg-primary px-6 py-3.5 font-medium text-primary-foreground hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink active:translate-y-px">{{ $primaryLabel }}</a>
                <a href="{{ $secondaryUrl }}" class="group inline-flex items-center gap-2 font-medium text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $secondaryLabel }}<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" class="size-4 transition-transform duration-200 group-hover:translate-x-1" aria-hidden="true"><path d="M4 10h12m-4-4 4 4-4 4"/></svg></a>
            </div>
        </div>
        <div class="relative lg:col-span-5">
            <div class="overflow-hidden">
                <img data-settle src="{{ $image }}" alt="{{ $imageAlt }}" width="1600" height="2000" fetchpriority="high" class="aspect-4/5 w-full bg-surface object-cover">
            </div>
            @if ($showTicket == '1')
                <div class="absolute -bottom-5 -left-3 w-52 -rotate-3 bg-surface p-4 shadow-[0_12px_30px_-12px_rgb(28_27_32/0.35)] ring-1 ring-ink/5 sm:-left-10">
                    <div class="flex items-center justify-between">
                        <span class="text-[0.8125rem] font-medium text-muted tabular-nums">{{ $ticketNumber }}</span>
                        <span class="size-3 rounded-full bg-canvas ring-1 ring-line ring-inset" aria-hidden="true"></span>
                    </div>
                    <p class="mt-3 font-display text-lg/6 font-medium tracking-tight text-ink">{{ $ticketName }}</p>
                    <p class="mt-1 text-sm text-muted tabular-nums">{{ $ticketDetail }}</p>
                </div>
            @endif
        </div>
    </div>
</section>
