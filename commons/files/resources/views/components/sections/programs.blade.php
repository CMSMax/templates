@props([
    'heading' => 'What happens on Alder Street',
    'body' => 'Four programs, one hall, and the numbers from last year — counted by the volunteers who did the work.',
])
<section id="programs" aria-labelledby="programs-heading" class="scroll-mt-20 border-t border-line bg-surface">
    <div class="mx-auto max-w-7xl px-5 py-20 sm:px-6 lg:px-8 lg:py-28">
        <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
            <h2 id="programs-heading" class="max-w-[16ch] font-display text-[clamp(2.25rem,5vw,4rem)] leading-[0.98] font-extrabold tracking-[-0.03em] text-balance text-ink">{{ $heading }}</h2>
            <p class="max-w-[44ch] text-lg/8 text-muted">{{ $body }}</p>
        </div>
        <div class="mt-14 border-b-2 border-ink lg:mt-20">
            @foreach ($programs as $program)
                <article class="grid gap-5 border-t-2 border-ink py-9 md:grid-cols-[minmax(0,1.1fr)_minmax(0,1.5fr)_minmax(0,1fr)] md:gap-10 lg:py-11">
                    <div class="flex flex-col items-start gap-3">
                        <h3 class="font-display text-[1.75rem] leading-[1.05] font-bold tracking-[-0.02em] text-ink lg:text-[2rem]">{{ $program->name }}</h3>
                        <p class="rounded-full px-3 py-1 text-sm font-bold text-ink ring-1 ring-ink/40 ring-inset">{{ $program->when }}</p>
                    </div>
                    <p class="text-base/7 text-muted lg:text-lg/8">{{ $program->summary }}</p>
                    <p class="flex flex-col md:items-end md:text-right">
                        <span class="flex items-center gap-3 font-display text-[clamp(2.5rem,5vw,3.75rem)] leading-none font-extrabold tracking-[-0.03em] text-ink tabular-nums"><span class="size-3.5 shrink-0 rounded-full bg-primary" aria-hidden="true"></span>{{ $program->figure }}</span>
                        <span class="mt-2 text-sm text-muted">{{ $program->figure_label }}</span>
                    </p>
                </article>
            @endforeach
        </div>
    </div>
</section>
