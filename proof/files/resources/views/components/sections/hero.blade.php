@props([
    'heading' => 'Bread worth getting up early for.',
    'body' => 'Sourdough, laminated pastry and whatever fruit is in season, baked through the night and on the counter by seven. Come early for croissants — they rarely see ten o’clock.',
    'linkLabel' => 'See the menu',
    'image' => '/images/loaves.jpg',
    'imageAlt' => 'Three dark-crusted sourdough loaves dusted with flour on an oak bench, beside a folded red linen cloth',
    'wordmarkSize' => 'huge',
])
<section class="overflow-hidden bg-primary text-primary-foreground">
    <div class="px-5 pt-8 sm:px-8 lg:px-12 lg:pt-10">
        @if ($wordmarkSize == 'huge')
            <p class="rise font-display text-[clamp(5.5rem,calc(39vw_-_2.5rem),33rem)] leading-[0.78] tracking-[-0.045em] [overflow-wrap:anywhere]">{{ $site->short_name }}</p>
        @elseif ($wordmarkSize == 'large')
            <p class="rise font-display text-[clamp(4rem,calc(22vw_-_1.5rem),19rem)] leading-[0.82] tracking-[-0.04em] [overflow-wrap:anywhere]">{{ $site->short_name }}</p>
        @else
            <p class="rise font-display text-[clamp(3rem,10vw,9.5rem)] leading-[0.88] tracking-[-0.03em] [overflow-wrap:anywhere]">{{ $site->short_name }}</p>
        @endif
    </div>
    <div class="mt-8 grid grid-cols-1 gap-px border-t border-primary-foreground/25 bg-primary-foreground/25 lg:mt-10 lg:grid-cols-12">
        <div class="flex flex-col justify-between gap-10 bg-primary px-5 py-10 sm:px-8 lg:col-span-5 lg:px-12 lg:py-14">
            <div>
                <h1 class="max-w-[16ch] font-display text-[clamp(2.25rem,4.2vw,3.75rem)] leading-[1.02] tracking-[-0.02em] text-balance">{{ $heading }}</h1>
                <p class="mt-6 max-w-[46ch] text-lg/8 text-primary-foreground/85">{{ $body }}</p>
            </div>
            <div class="flex flex-wrap items-center gap-x-7 gap-y-4">
                <a href="{{ $site->cta_link }}" class="inline-flex items-center gap-3 bg-primary-foreground py-4 pr-4 pl-6 text-base font-semibold text-primary transition-colors duration-150 hover:bg-canvas focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary-foreground">
                    {{ $site->cta_label }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
                </a>
                <a href="/menu" class="py-3 text-base font-semibold text-primary-foreground underline decoration-primary-foreground/40 underline-offset-8 transition-colors duration-150 hover:decoration-primary-foreground focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary-foreground">{{ $linkLabel }}</a>
            </div>
        </div>
        <div class="bg-primary lg:col-span-4">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="896" height="1120" fetchpriority="high" class="aspect-[4/5] size-full object-cover lg:aspect-auto lg:min-h-[34rem]">
        </div>
        <div class="flex flex-col bg-primary px-5 py-10 sm:px-8 lg:col-span-3 lg:px-10 lg:py-14">
            <h2 class="text-sm font-semibold text-primary-foreground/80">Today at the counter</h2>
            <dl class="mt-6 flex flex-col divide-y divide-primary-foreground/25 border-y border-primary-foreground/25">
                <div class="py-4">
                    <dt class="text-sm text-primary-foreground/80">Open</dt>
                    <dd class="mt-1 text-base font-medium">{{ $site->hours_summary }}</dd>
                </div>
                @foreach ($bakes as $bake)
                    <div class="py-4">
                        <dt class="text-sm text-primary-foreground/80">First out of the oven</dt>
                        <dd class="mt-1 text-base font-medium">{{ $bake->time }} — {{ $bake->item }}</dd>
                    </div>
                    @break($loop->first)
                @endforeach
                <div class="py-4">
                    <dt class="text-sm text-primary-foreground/80">Find us</dt>
                    <dd class="mt-1 text-base font-medium">{{ $site->address }}, {{ $site->city }}</dd>
                </div>
            </dl>
            <p class="mt-6 text-sm/6 text-primary-foreground/80">{{ $site->hours_note }}</p>
        </div>
    </div>
</section>
