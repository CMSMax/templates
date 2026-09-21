@props([
    'heading' => 'Every dollar, in a hundred cents.',
    'body' => 'Here is where a dollar given to us went last year, drawn to scale — one tick for every cent. Our books are audited each spring and the full report is public.',
])
<section id="dollar" aria-labelledby="dollar-heading" class="scroll-mt-20 bg-ink text-canvas">
    <div class="mx-auto max-w-7xl px-5 py-20 sm:px-6 lg:px-8 lg:py-32">
        <div class="grid gap-8 lg:grid-cols-12 lg:items-end">
            <h2 id="dollar-heading" class="font-display text-[clamp(2.5rem,6vw,5rem)] leading-[0.95] font-extrabold tracking-[-0.035em] text-balance lg:col-span-7">{{ $heading }}</h2>
            <p class="max-w-[48ch] text-lg/8 text-canvas/80 lg:col-span-5">{{ $body }}</p>
        </div>

        <figure class="mt-16 lg:mt-24">
            <div class="flex items-end justify-between font-display text-sm font-bold text-canvas/70 tabular-nums" aria-hidden="true">
                <span>0¢</span><span>50¢</span><span>$1</span>
            </div>
            <div class="cents mt-3 flex h-24 w-full sm:h-32 lg:h-40" aria-hidden="true">
                @foreach ($site->split as $part)
                    @if ($loop->first)
                        <div class="h-full bg-primary" style="width: {{ $part->percent }}%"></div>
                    @elseif ($loop->last)
                        <div class="h-full bg-canvas/40" style="width: {{ $part->percent }}%"></div>
                    @else
                        <div class="h-full bg-canvas" style="width: {{ $part->percent }}%"></div>
                    @endif
                @endforeach
            </div>
            <figcaption class="mt-12 grid gap-10 border-t border-canvas/25 pt-10 md:grid-cols-3 md:gap-8">
                @foreach ($site->split as $part)
                    <div>
                        <p class="flex items-center gap-3">
                            @if ($loop->first)
                                <span class="size-4 shrink-0 bg-primary" aria-hidden="true"></span>
                            @elseif ($loop->last)
                                <span class="size-4 shrink-0 bg-canvas/40" aria-hidden="true"></span>
                            @else
                                <span class="size-4 shrink-0 bg-canvas" aria-hidden="true"></span>
                            @endif
                            <span class="font-display text-[clamp(2.75rem,5vw,4rem)] leading-none font-extrabold tracking-[-0.03em] tabular-nums">{{ $part->percent }}¢</span>
                        </p>
                        <p class="mt-4 text-lg font-bold">{{ $part->label }}</p>
                        <p class="mt-2 max-w-[36ch] text-base/7 text-canvas/75">{{ $part->note }}</p>
                    </div>
                @endforeach
            </figcaption>
        </figure>

        <a href="{{ $site->report_url }}" class="mt-14 inline-flex min-h-12 items-center gap-2 rounded-sm text-lg font-bold text-canvas underline decoration-primary decoration-2 underline-offset-[6px] transition-colors duration-150 hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-canvas">{{ $site->report_label }}<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-5" aria-hidden="true"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7-7l7 7l-7 7"/></svg></a>
    </div>
</section>
