@props([
    'relaxHeading' => 'To switch off',
    'relaxNote' => 'When nothing hurts exactly, and everything is tight.',
    'repairHeading' => 'To fix something',
    'repairNote' => 'Focused work on the places that are actually sore.',
    'specialistHeading' => 'For a particular time',
    'specialistNote' => 'Pregnancy, recovery, and after surgery.',
])
<section class="pb-24 lg:pb-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-10 border-t border-ink py-14 lg:grid-cols-[4fr_8fr] lg:gap-20">
            <div>
                <h2 class="font-display text-[clamp(2rem,3.5vw,2.75rem)] leading-[1.05] tracking-[-0.025em] text-ink">{{ $relaxHeading }}</h2>
                <p class="mt-3 max-w-[32ch] text-base/7 text-muted">{{ $relaxNote }}</p>
            </div>
            <ul role="list" class="border-b border-line">
                @foreach ($treatments as $treatment)
                    @if ($treatment->group == 'Relax')
                        <li id="{{ $treatment->slug }}" class="scroll-mt-28 border-t border-line py-8 first:border-t-0 first:pt-0">
                            <div class="flex flex-wrap items-baseline justify-between gap-x-8 gap-y-3">
                                <h3 class="font-display text-[1.75rem] leading-[1.15] tracking-tight text-ink sm:text-3xl">{{ $treatment->name }}</h3>
                                <dl class="flex gap-6 text-base tabular-nums">
                                    <div class="flex items-baseline gap-2">
                                        <dt class="text-sm text-muted">60 min</dt>
                                        <dd class="font-display text-2xl text-ink">
                                            @if ($treatment->price_60)
                                                {{ $site->currency }}{{ $treatment->price_60 }}
                                            @else
                                                <span class="text-muted">—</span>
                                            @endif
                                        </dd>
                                    </div>
                                    <div class="flex items-baseline gap-2">
                                        <dt class="text-sm text-muted">90 min</dt>
                                        <dd class="font-display text-2xl text-ink">
                                            @if ($treatment->price_90)
                                                {{ $site->currency }}{{ $treatment->price_90 }}
                                            @else
                                                <span class="text-muted">—</span>
                                            @endif
                                        </dd>
                                    </div>
                                </dl>
                            </div>
                            <p class="mt-4 max-w-[62ch] text-base/7 text-muted">{{ $treatment->summary }}</p>
                            <p class="mt-3 text-sm font-semibold text-ink">Best for: {{ $treatment->best_for }}</p>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="grid gap-10 border-t border-ink py-14 lg:grid-cols-[4fr_8fr] lg:gap-20">
            <div>
                <h2 class="font-display text-[clamp(2rem,3.5vw,2.75rem)] leading-[1.05] tracking-[-0.025em] text-ink">{{ $repairHeading }}</h2>
                <p class="mt-3 max-w-[32ch] text-base/7 text-muted">{{ $repairNote }}</p>
            </div>
            <ul role="list" class="border-b border-line">
                @foreach ($treatments as $treatment)
                    @if ($treatment->group == 'Repair')
                        <li id="{{ $treatment->slug }}" class="scroll-mt-28 border-t border-line py-8 first:border-t-0 first:pt-0">
                            <div class="flex flex-wrap items-baseline justify-between gap-x-8 gap-y-3">
                                <h3 class="font-display text-[1.75rem] leading-[1.15] tracking-tight text-ink sm:text-3xl">{{ $treatment->name }}</h3>
                                <dl class="flex gap-6 text-base tabular-nums">
                                    <div class="flex items-baseline gap-2">
                                        <dt class="text-sm text-muted">60 min</dt>
                                        <dd class="font-display text-2xl text-ink">
                                            @if ($treatment->price_60)
                                                {{ $site->currency }}{{ $treatment->price_60 }}
                                            @else
                                                <span class="text-muted">—</span>
                                            @endif
                                        </dd>
                                    </div>
                                    <div class="flex items-baseline gap-2">
                                        <dt class="text-sm text-muted">90 min</dt>
                                        <dd class="font-display text-2xl text-ink">
                                            @if ($treatment->price_90)
                                                {{ $site->currency }}{{ $treatment->price_90 }}
                                            @else
                                                <span class="text-muted">—</span>
                                            @endif
                                        </dd>
                                    </div>
                                </dl>
                            </div>
                            <p class="mt-4 max-w-[62ch] text-base/7 text-muted">{{ $treatment->summary }}</p>
                            <p class="mt-3 text-sm font-semibold text-ink">Best for: {{ $treatment->best_for }}</p>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="grid gap-10 border-t border-ink py-14 lg:grid-cols-[4fr_8fr] lg:gap-20">
            <div>
                <h2 class="font-display text-[clamp(2rem,3.5vw,2.75rem)] leading-[1.05] tracking-[-0.025em] text-ink">{{ $specialistHeading }}</h2>
                <p class="mt-3 max-w-[32ch] text-base/7 text-muted">{{ $specialistNote }}</p>
            </div>
            <ul role="list" class="border-b border-line">
                @foreach ($treatments as $treatment)
                    @if ($treatment->group == 'Specialist')
                        <li id="{{ $treatment->slug }}" class="scroll-mt-28 border-t border-line py-8 first:border-t-0 first:pt-0">
                            <div class="flex flex-wrap items-baseline justify-between gap-x-8 gap-y-3">
                                <h3 class="font-display text-[1.75rem] leading-[1.15] tracking-tight text-ink sm:text-3xl">{{ $treatment->name }}</h3>
                                <dl class="flex gap-6 text-base tabular-nums">
                                    <div class="flex items-baseline gap-2">
                                        <dt class="text-sm text-muted">60 min</dt>
                                        <dd class="font-display text-2xl text-ink">
                                            @if ($treatment->price_60)
                                                {{ $site->currency }}{{ $treatment->price_60 }}
                                            @else
                                                <span class="text-muted">—</span>
                                            @endif
                                        </dd>
                                    </div>
                                    <div class="flex items-baseline gap-2">
                                        <dt class="text-sm text-muted">90 min</dt>
                                        <dd class="font-display text-2xl text-ink">
                                            @if ($treatment->price_90)
                                                {{ $site->currency }}{{ $treatment->price_90 }}
                                            @else
                                                <span class="text-muted">—</span>
                                            @endif
                                        </dd>
                                    </div>
                                </dl>
                            </div>
                            <p class="mt-4 max-w-[62ch] text-base/7 text-muted">{{ $treatment->summary }}</p>
                            <p class="mt-3 text-sm font-semibold text-ink">Best for: {{ $treatment->best_for }}</p>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</section>
