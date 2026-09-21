@props([
    'heading' => 'How a booking goes.',
    'items' => [],
])
<section id="booking" class="scroll-mt-18 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="flex flex-col justify-between gap-6 lg:flex-row lg:items-end">
            <h2 class="max-w-[16ch] font-display text-[clamp(2.25rem,4.5vw,3.5rem)] leading-[1.05] tracking-tight text-balance text-ink">{{ $heading }}</h2>
            <p class="max-w-[44ch] text-lg/8 text-muted">{{ $site->lead_time }}</p>
        </div>
        <div class="relative mt-16">
            <div class="absolute top-[0.4375rem] right-0 left-0 h-px bg-ink/15 max-lg:hidden" aria-hidden="true"></div>
            <ol role="list" class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-4 lg:gap-8">
                @foreach ($items as $step)
                    <li class="relative flex flex-col max-lg:border-l max-lg:border-ink/15 max-lg:pl-6">
                        @if ($loop->last)
                            <span class="size-3.5 rounded-full bg-primary ring-4 ring-canvas max-lg:absolute max-lg:top-1.5 max-lg:-left-[0.4375rem]" aria-hidden="true"></span>
                        @else
                            <span class="size-3.5 rounded-full border border-ink/40 bg-canvas ring-4 ring-canvas max-lg:absolute max-lg:top-1.5 max-lg:-left-[0.4375rem]" aria-hidden="true"></span>
                        @endif
                        <p class="text-sm font-medium tracking-[0.14em] text-muted uppercase lg:mt-6">{{ $step->when }}</p>
                        <h3 class="mt-3 font-display text-2xl text-ink">{{ $step->name }}</h3>
                        <p class="mt-3 max-w-[40ch] text-base/7 text-muted">{{ $step->detail }}</p>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
</section>
