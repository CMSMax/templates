@props([
    'eyebrow' => 'The shop',
    'heading' => 'Everything on the rail.',
    'intro' => 'Every piece in the shop this week, with who made it and what it costs. Call and we will hold anything for three days.',
])
<section class="pinked-b bg-field pt-14 pb-20 sm:pt-20 sm:pb-28">
    <div class="mx-auto grid max-w-7xl gap-x-10 gap-y-6 px-5 sm:px-8 lg:grid-cols-12 lg:items-end">
        <div class="lg:col-span-8">
            <p data-rise class="flex items-center gap-2.5 text-sm font-medium text-field-muted [--i:0]"><span class="size-2 shrink-0 rounded-full bg-ink" aria-hidden="true"></span>{{ $eyebrow }}</p>
            <h1 data-rise class="mt-5 max-w-[14ch] font-display text-[clamp(2.75rem,7vw,6rem)] leading-[0.92] font-semibold tracking-[-0.045em] text-balance text-ink [--i:1]">{{ $heading }}</h1>
        </div>
        <p data-rise class="max-w-[42ch] text-lg/8 text-pretty text-field-muted lg:col-span-4 [--i:2]">{{ $intro }}</p>
    </div>
</section>
