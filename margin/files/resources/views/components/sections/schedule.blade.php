@props(['items', 'heading' => 'The week at the centre.', 'note' => 'Online sessions run on the same timetable. Saturday mornings are kept for mocks and intensives.'])
<section class="border-b border-line py-16 lg:py-24">
    <div class="mx-auto grid max-w-6xl grid-cols-1 items-start gap-10 px-6 lg:grid-cols-[minmax(0,22rem)_minmax(0,1fr)] lg:gap-16">
        <div>
            <h2 class="max-w-[14ch] font-display text-[clamp(2rem,3.6vw,3.25rem)]/[1.05] font-normal tracking-[-0.015em] text-balance text-ink">{{ $heading }}</h2>
            <p class="mt-5 max-w-[38ch] text-base/7 text-muted">{{ $note }}</p>
        </div>
        <div class="min-w-0">
            <div aria-hidden="true" class="grid grid-cols-[8rem_9rem_minmax(0,1fr)] gap-4 border-b-2 border-ink/80 pb-3 text-[0.8125rem] font-medium tracking-[0.04em] text-muted uppercase max-sm:hidden">
                <span>Day</span>
                <span>Hours</span>
                <span>Subjects</span>
            </div>
            <dl class="max-sm:border-t-2 max-sm:border-ink/80">
                @foreach ($items as $slot)
                    <div class="grid gap-x-4 gap-y-1 border-b border-rule py-4 sm:grid-cols-[8rem_9rem_minmax(0,1fr)] sm:items-baseline">
                        <dt class="font-display text-lg text-ink">{{ $slot->day }}</dt>
                        <dd class="text-ink tabular-nums">{{ $slot->times }}</dd>
                        <dd class="text-muted">{{ $slot->subjects }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</section>
