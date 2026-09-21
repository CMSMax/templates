@props([
    'eyebrow' => 'How we buy',
    'heading' => 'Three rules, written on the stockroom door.',
    'items' => [],
])
<section class="bg-ink py-20 text-canvas sm:py-28">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <p class="text-sm font-medium text-field">{{ $eyebrow }}</p>
        <h2 class="mt-4 max-w-[18ch] font-display text-[clamp(2.25rem,4.4vw,3.75rem)] leading-none font-semibold tracking-[-0.035em] text-balance text-canvas">{{ $heading }}</h2>
        <ol role="list" class="mt-14 border-t border-canvas/20">
            @foreach ($items as $rule)
                <li class="grid gap-x-10 gap-y-3 border-b border-canvas/20 py-8 sm:grid-cols-12 sm:items-baseline">
                    <span class="font-display text-lg text-field tabular-nums sm:col-span-1" aria-hidden="true">{{ $loop->iteration }}</span>
                    <h3 class="font-display text-[clamp(1.5rem,2.6vw,2.25rem)] leading-tight font-medium tracking-tight text-canvas sm:col-span-5">{{ $rule->title }}</h3>
                    <p class="max-w-[48ch] text-base/7 text-pretty text-canvas/70 sm:col-span-6">{{ $rule->body }}</p>
                </li>
            @endforeach
        </ol>
    </div>
</section>
