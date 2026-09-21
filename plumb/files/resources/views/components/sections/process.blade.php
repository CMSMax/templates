@props([
    'heading' => 'The price comes before the wrench.',
    'body' => 'Every job runs the same four steps, whether it is a dripping tap or a burst main.',
    'items' => [],
])
<section class="border-t border-line py-24 md:py-32">
    <div class="mx-auto max-w-7xl px-5 md:px-8">
        <div class="grid gap-6 lg:grid-cols-12 lg:items-end lg:gap-10">
            <h2 class="max-w-[16ch] font-display text-section font-extrabold text-balance lg:col-span-7">{{ $heading }}</h2>
            <p class="max-w-[40ch] text-lg text-pretty text-muted lg:col-span-4 lg:col-start-9">{{ $body }}</p>
        </div>
        <div class="relative mt-14 md:mt-20" data-reveal>
            <div class="absolute top-7 bottom-7 left-7 w-3 -translate-x-1/2 overflow-hidden rounded-full bg-line shadow-[inset_0_1px_2px_--alpha(var(--color-ink)/15%)] md:top-7 md:right-0 md:bottom-auto md:left-[calc(var(--spacing)*7)] md:h-3 md:w-auto md:translate-x-0 md:-translate-y-1/2" aria-hidden="true">
                <div class="pipe-water size-full bg-primary"></div>
            </div>
            <ol role="list" class="relative grid gap-10 md:grid-cols-4 md:gap-8">
                @foreach ($items as $step)
                    <li class="flex gap-6 md:flex-col md:gap-8">
                        <span class="flex size-14 shrink-0 items-center justify-center rounded-full bg-surface font-display text-xl font-extrabold tabular-nums ring-1 ring-line shadow-lift [font-stretch:125%]">{{ $loop->iteration }}</span>
                        <div class="pt-2 md:pt-0">
                            <p class="text-sm font-semibold text-primary">{{ $step->when }}</p>
                            <h3 class="mt-2 font-display text-xl font-extrabold text-balance md:text-2xl">{{ $step->title }}</h3>
                            <p class="mt-3 max-w-[34ch] text-base text-pretty text-muted">{{ $step->body }}</p>
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
</section>
