@props([
    'kicker' => 'Services and pricing',
    'heading' => 'Plan all of it with us, or only the part you need',
    'body' => 'Three packages, each with a starting fee. Your quote depends on guest count, travel, and how much design the day asks for; we send it after the first conversation.',
    'image' => '/images/design-board.jpg',
    'imageAlt' => 'A planner’s design board seen from above: plum velvet, blush silk and oat linen swatches, silk ribbon, painted colour chips, an invitation suite, and a timeline on a clipboard.',
])
<section class="pt-16 sm:pt-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-x-16 gap-y-6 lg:grid-cols-12 lg:items-end">
            <div class="lg:col-span-7">
                <p class="label-caps text-muted">{{ $kicker }}</p>
                <h1 class="mt-5 max-w-[18ch] font-display text-[clamp(2.5rem,5vw,4.25rem)] leading-[1.06] tracking-tight text-balance text-ink">{{ $heading }}</h1>
            </div>
            <p class="max-w-[46ch] text-lg/8 text-muted lg:col-span-5">{{ $body }}</p>
        </div>
        <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1800" height="1200" fetchpriority="high" class="mt-14 aspect-3/2 w-full bg-surface object-cover sm:mt-20 lg:aspect-21/9">
    </div>
</section>
