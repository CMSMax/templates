@props([
    'eyebrow' => 'How it works',
    'heading' => 'From sore to strong, one band at a time.',
    'body' => 'Every plan runs in four phases. The load only goes up when your body says it’s ready — the same way you’d move from a light band to a heavy one.',
    'loadLabel' => 'Load',
])
<section id="plan" aria-labelledby="plan-heading" class="scroll-mt-8 px-3 sm:px-5">
    <div class="mx-auto max-w-7xl overflow-hidden rounded-[2rem] bg-secondary py-20 text-secondary-foreground lg:py-28">
        <div class="mx-auto max-w-6xl px-5 sm:px-8">
            <div class="grid gap-6 lg:grid-cols-[7fr_5fr] lg:items-end lg:gap-16">
                <div>
                    <p class="flex items-center gap-2.5 text-sm font-semibold text-secondary-foreground/80">
                        <span class="h-2 w-6 shrink-0 rounded-full bg-primary" aria-hidden="true"></span>
                        {{ $eyebrow }}
                    </p>
                    <h2 id="plan-heading" class="mt-6 max-w-[16ch] font-display text-[clamp(2.25rem,4.8vw,3.75rem)] leading-[1.02] font-semibold tracking-[-0.04em] text-balance">{{ $heading }}</h2>
                </div>
                <p class="text-lg/8 text-secondary-foreground/75">{{ $body }}</p>
            </div>
            <ol role="list" class="mt-16 border-t border-secondary-foreground/15 lg:mt-20">
                @foreach ($site->plan as $step)
                    <li class="grid gap-x-10 gap-y-6 border-b border-secondary-foreground/15 py-9 lg:grid-cols-[11rem_1fr] lg:py-11">
                        <div class="flex items-baseline gap-4 lg:flex-col lg:gap-1.5">
                            <p class="font-display text-5xl font-semibold tracking-[-0.05em] text-primary">{{ $step->phase }}</p>
                            <p class="text-sm font-semibold text-secondary-foreground/70 tabular-nums">{{ $step->weeks }}</p>
                        </div>
                        <div>
                            <div class="flex items-center gap-4">
                                <div class="min-w-0 flex-1">
                                    @if ($loop->iteration == 1)
                                        <div data-band class="flex w-[58%] sm:w-[46%] items-center [--i:0]" aria-hidden="true"><span class="size-4 shrink-0 rounded-full border-3 border-primary/35"></span><span class="h-2 flex-1 rounded-full bg-primary/35"></span><span class="size-4 shrink-0 rounded-full border-3 border-primary/35"></span></div>
                                    @elseif ($loop->iteration == 2)
                                        <div data-band class="flex w-[72%] sm:w-[64%] items-center [--i:1]" aria-hidden="true"><span class="size-5 shrink-0 rounded-full border-4 border-primary/60"></span><span class="h-3 flex-1 rounded-full bg-primary/60"></span><span class="size-5 shrink-0 rounded-full border-4 border-primary/60"></span></div>
                                    @elseif ($loop->iteration == 3)
                                        <div data-band class="flex w-[86%] sm:w-[82%] items-center [--i:2]" aria-hidden="true"><span class="size-6 shrink-0 rounded-full border-[5px] border-primary/80"></span><span class="h-4 flex-1 rounded-full bg-primary/80"></span><span class="size-6 shrink-0 rounded-full border-[5px] border-primary/80"></span></div>
                                    @else
                                        <div data-band class="flex w-full items-center [--i:3]" aria-hidden="true"><span class="size-7 shrink-0 rounded-full border-[6px] border-primary"></span><span class="h-5 flex-1 rounded-full bg-primary"></span><span class="size-7 shrink-0 rounded-full border-[6px] border-primary"></span></div>
                                    @endif
                                </div>
                                <p class="w-24 shrink-0 text-right text-sm text-secondary-foreground/70 sm:w-28"><span class="sr-only">{{ $loadLabel }}: </span>{{ $step->load }}</p>
                            </div>
                            <div class="mt-7 grid gap-3 sm:grid-cols-[5fr_7fr] sm:gap-10">
                                <h3 class="font-display text-2xl font-semibold tracking-[-0.03em]">{{ $step->title }}</h3>
                                <p class="text-base/7 text-secondary-foreground/75">{{ $step->body }}</p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
</section>
