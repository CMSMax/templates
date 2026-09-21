@props(['items', 'heading' => 'How a term runs.', 'note' => 'The same rhythm for every program, so you always know what happened this week and what comes next.'])
<section class="border-b border-line py-20 lg:py-32">
    <div class="mx-auto max-w-6xl px-6">
        <div class="grid gap-6 lg:grid-cols-[minmax(0,1fr)_minmax(0,1fr)] lg:items-end">
            <h2 class="max-w-[14ch] font-display text-[clamp(2rem,3.6vw,3.25rem)]/[1.05] font-normal tracking-[-0.015em] text-balance text-ink">{{ $heading }}</h2>
            <p class="max-w-[44ch] text-base/7 text-muted lg:justify-self-end">{{ $note }}</p>
        </div>
        <div class="relative mt-16">
        <div aria-hidden="true" class="absolute top-[0.4375rem] right-0 left-0 h-px bg-ink/25 max-lg:hidden"></div>
        <ol role="list" class="relative grid gap-10 sm:grid-cols-2 lg:grid-cols-4 lg:gap-8">
            @foreach ($items as $step)
                <li class="relative max-lg:border-t max-lg:border-line max-lg:pt-6">
                    <span aria-hidden="true" class="relative block size-3.5 rounded-full border-2 border-accent bg-canvas max-lg:hidden"></span>
                    <p class="text-sm font-medium tracking-[0.04em] text-accent uppercase lg:mt-7">{{ $step->when }}</p>
                    <h3 class="mt-3 font-display text-2xl font-normal tracking-[-0.01em] text-ink">{{ $step->title }}</h3>
                    <p class="mt-3 max-w-[32ch] text-base/7 text-muted">{{ $step->body }}</p>
                </li>
            @endforeach
        </ol>
        </div>
    </div>
</section>
