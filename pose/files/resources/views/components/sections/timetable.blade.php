@props([
    'eyebrow' => 'Schedule',
    'heading' => 'This week at Pose.',
    'body' => 'Book online up to a week ahead, or just turn up — if there is a mat free, it is yours.',
    'note' => 'Doors open fifteen minutes before each class and close five minutes after it starts.',
])
<section id="schedule" aria-labelledby="schedule-heading" class="scroll-mt-8 border-t border-line py-20 sm:py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="grid gap-6 lg:grid-cols-12 lg:items-end lg:gap-10">
            <div class="lg:col-span-7">
                <p class="text-sm font-semibold text-primary">{{ $eyebrow }}</p>
                <h2 id="schedule-heading" class="mt-4 font-display text-[clamp(2.25rem,4.5vw,3.75rem)] leading-[1.02] font-medium tracking-[-0.035em] text-ink">{{ $heading }}</h2>
                <p class="mt-6 max-w-[48ch] text-lg/8 text-muted">{{ $body }}</p>
            </div>
            <ul role="list" class="flex flex-wrap gap-x-6 gap-y-2 text-sm text-ink lg:col-span-5 lg:justify-end">
                @foreach ($site->levels as $level)
                    <li><x-level :value="$level->value"/></li>
                @endforeach
            </ul>
        </div>
        <div class="mt-14 grid gap-8 sm:grid-cols-2 lg:mt-16 lg:grid-cols-7 lg:gap-2">
            @foreach ($site->days as $day)
                <div class="flex flex-col gap-2">
                    <h3 class="flex items-baseline justify-between border-b border-ink pb-3 font-display text-xl font-medium tracking-tight text-ink lg:text-lg">
                        <span class="lg:hidden">{{ $day->label }}</span>
                        <span class="max-lg:hidden">{{ $day->name }}</span>
                    </h3>
                    <ul role="list" class="flex flex-col gap-2">
                        @foreach ($schedule as $slot)
                            @if ($slot->day == $day->name)
                                <li class="grid grid-cols-[4.5rem_1fr] gap-x-3 rounded-xl bg-card p-3.5 ring-1 ring-ink/5 lg:flex lg:flex-col lg:gap-1">
                                    <span class="pt-0.5 text-sm font-semibold text-primary tabular-nums">{{ $slot->time }}</span>
                                    <span class="flex flex-col gap-1">
                                        <span class="text-base/6 font-semibold text-ink">{{ $slot->className }}</span>
                                        <span class="text-sm text-muted">{{ $slot->teacher }} · {{ $slot->length }}</span>
                                        <span class="mt-1 text-xs text-muted"><x-level :value="$slot->level"/></span>
                                    </span>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
        <p class="mt-10 max-w-[60ch] text-sm/6 text-muted">{{ $note }}</p>
    </div>
</section>
