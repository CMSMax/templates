@props([
    'eyebrow' => 'Welcome',
    'lineOne' => 'A quiet house',
    'lineTwo' => 'by the harbour,',
    'lineThree' => 'and a long',
    'lineFour' => 'breakfast.',
    'body' => 'We are a family-run inn of twelve rooms, three floors, and one very old staircase. Nobody rushes you out of bed here. The shutters open onto the water, the terrace smells of coffee and fig leaves, and the harbour is four minutes downhill.',
    'signoff' => 'Marta & Luc, your hosts',
])
<section class="py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-14 lg:grid-cols-[7fr_5fr] lg:items-end lg:gap-20">
            <div>
                <p class="text-xs font-medium tracking-[0.24em] text-primary uppercase">{{ $eyebrow }}</p>
                <h2 class="mt-6 font-display text-[clamp(2.5rem,6vw,5rem)] leading-[1.02] font-normal tracking-tight text-ink">
                    <span class="block">{{ $lineOne }}</span>
                    <span class="block pl-[8%] italic">{{ $lineTwo }}</span>
                    <span class="block pl-[16%]">{{ $lineThree }}</span>
                    <span class="block pl-[24%]">{{ $lineFour }}</span>
                </h2>
            </div>
            <div class="flex flex-col gap-6 lg:pb-3">
                <p class="max-w-[46ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
                <p class="font-display text-xl text-ink italic">— {{ $signoff }}</p>
            </div>
        </div>
        <dl class="mt-20 grid grid-cols-2 border-t border-line lg:mt-28 lg:grid-cols-4">
            @foreach ($site->facts as $fact)
                <div class="flex flex-col gap-2 border-line pt-8 pr-6 pb-2 max-lg:odd:border-r max-lg:nth-[n+3]:border-t lg:not-last:border-r lg:pl-8 lg:first:pl-0 max-lg:even:pl-6">
                    <dt class="order-2 text-sm/6 text-pretty text-muted">{{ $fact->label }}</dt>
                    <dd class="order-1 font-display text-[clamp(2.25rem,4vw,3.5rem)] leading-none text-ink tabular-nums">{{ $fact->value }}</dd>
                </div>
            @endforeach
        </dl>
    </div>
</section>
