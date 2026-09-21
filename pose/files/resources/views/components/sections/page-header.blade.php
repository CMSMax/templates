@props([
    'eyebrow' => 'Classes',
    'heading' => 'Every class, and who it is for.',
    'body' => 'Six classes across the week, from very gentle to properly strong. If you are unsure, start slow — you can always work harder next time.',
    'pose' => 'mountain',
])
<section class="pt-6 pb-16 sm:pt-10 lg:pb-20">
    <div class="mx-auto grid max-w-7xl gap-10 px-5 sm:px-8 lg:grid-cols-12 lg:items-end">
        <div class="lg:col-span-9">
            <p data-rise class="text-sm font-semibold text-primary">{{ $eyebrow }}</p>
            <h1 data-rise class="mt-5 max-w-[16ch] font-display text-[clamp(3rem,6.5vw,5.5rem)] leading-[0.98] font-medium tracking-[-0.045em] text-ink [--i:1]">{{ $heading }}</h1>
            <p data-rise class="mt-7 max-w-[52ch] text-lg/8 text-muted [--i:2]">{{ $body }}</p>
        </div>
        <div data-rise class="flex lg:col-span-3 lg:justify-end [--i:3]" aria-hidden="true">
            <span class="grid size-28 place-items-center rounded-[1.75rem] bg-spark text-spark-ink sm:size-36">
                <x-pose :name="$pose" size="size-20 sm:size-24"/>
            </span>
        </div>
    </div>
</section>
