@props([
    'heading' => 'Everything but the venue.',
    'body' => 'A quote from us is the whole evening, not a price for trays. We bring the people, the plates and the plan, and we take all of it home again.',
    'image' => '/images/canapes.jpg',
    'imageAlt' => 'A server carrying a slate tray of persimmon crostini, beet tartlets and herb blini through a reception',
    'detail' => '/images/kitchen.jpg',
    'detailAlt' => 'A chef finishing a row of plated short rib dishes with micro herbs at the pass',
    'items' => [],
])
<section id="included" class="scroll-mt-18 bg-surface py-20 lg:py-28">
    <div class="mx-auto grid max-w-7xl grid-cols-1 gap-14 px-5 sm:px-8 lg:grid-cols-[5fr_7fr] lg:gap-16">
        <div class="relative grid grid-cols-[7fr_5fr] items-end gap-4 lg:order-last lg:grid-cols-[7fr_4fr]">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="896" height="1120" loading="lazy" decoding="async" class="aspect-[4/5] w-full rounded-2xl object-cover">
            <img src="{{ $detail }}" alt="{{ $detailAlt }}" width="896" height="1120" loading="lazy" decoding="async" class="mb-16 aspect-[3/4] w-full rounded-2xl object-cover sm:mb-24">
        </div>
        <div class="flex flex-col justify-center">
            <h2 class="max-w-[14ch] font-display text-[clamp(2.25rem,4.5vw,3.5rem)] leading-[1.05] tracking-tight text-balance text-ink">{{ $heading }}</h2>
            <p class="mt-6 max-w-[48ch] text-lg/8 text-muted">{{ $body }}</p>
            <dl class="mt-10 grid grid-cols-1 gap-x-10 border-t border-ink/15 sm:grid-cols-2">
                @foreach ($items as $item)
                    <div class="border-b border-ink/15 py-5">
                        <dt class="font-display text-xl text-ink">{{ $item->name }}</dt>
                        <dd class="mt-1 text-base/6 text-muted sm:text-sm/6">{{ $item->detail }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</section>
