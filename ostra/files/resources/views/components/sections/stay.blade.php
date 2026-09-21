@props([
    'eyebrow' => 'The stay',
    'heading' => 'Every night',
    'headingAccent' => 'includes',
    'deskHeading' => 'At the front desk',
])
<section id="stay" class="scroll-mt-20 bg-ink py-24 text-canvas lg:py-32">
    <div class="mx-auto grid max-w-7xl gap-16 px-6 lg:grid-cols-[5fr_7fr] lg:gap-24 lg:px-8">
        <div class="flex flex-col gap-12">
            <div>
                <p class="text-xs font-medium tracking-[0.24em] text-canvas/70 uppercase">{{ $eyebrow }}</p>
                <h2 class="mt-6 font-display text-[clamp(2.25rem,4.5vw,3.75rem)] leading-[1.05] font-normal tracking-tight text-balance">{{ $heading }} <em class="italic">{{ $headingAccent }}</em></h2>
            </div>
            <div class="rounded-[2rem] bg-canvas p-8 text-ink sm:p-10">
                <h3 class="font-display text-2xl italic">{{ $deskHeading }}</h3>
                <dl class="mt-6 divide-y divide-line border-t border-line">
                    @foreach ($site->desk as $row)
                        <div class="flex items-baseline justify-between gap-6 py-4">
                            <dt class="text-xs font-medium tracking-[0.2em] text-muted uppercase">{{ $row->label }}</dt>
                            <dd class="font-display text-xl text-ink tabular-nums">{{ $row->value }}</dd>
                        </div>
                    @endforeach
                </dl>
            </div>
        </div>
        <ol role="list" class="grid border-t border-canvas/20 sm:grid-cols-2 sm:gap-x-12">
            @foreach ($site->included as $item)
                <li class="flex gap-5 border-b border-canvas/20 py-8">
                    <span class="font-display text-lg text-canvas/60 italic tabular-nums">{{ $loop->iteration }}.</span>
                    <div>
                        <h3 class="font-display text-2xl">{{ $item->title }}</h3>
                        <p class="mt-3 text-base/7 text-pretty text-canvas/75">{{ $item->note }}</p>
                    </div>
                </li>
            @endforeach
        </ol>
    </div>
</section>
