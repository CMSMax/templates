@props([
    'steps' => [],
    'heading' => 'Your first visit, minute by minute.',
    'body' => 'An hour, start to finish. Nothing happens to you that wasn’t explained first, and you leave knowing what we found and what comes next.',
    'priceLabel' => 'New patient visit',
    'endLabel' => '60′',
    'afterHeading' => 'After that',
    'linkLabel' => 'All care & pricing',
    'linkHref' => '/care',
])
<section id="first-visit" aria-labelledby="first-visit-heading" class="scroll-mt-8 bg-secondary py-20 text-secondary-foreground sm:py-28">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="grid gap-10 lg:grid-cols-12 lg:items-end lg:gap-8">
            <div class="lg:col-span-7">
                <h2 id="first-visit-heading" class="max-w-[16ch] font-display text-[clamp(2.75rem,6vw,5rem)] leading-[0.95] font-semibold tracking-[-0.02em] text-balance">{{ $heading }}</h2>
                <p class="mt-6 max-w-[52ch] text-lg/8 text-haze">{{ $body }}</p>
            </div>
            <div class="flex items-end gap-5 lg:col-span-4 lg:col-start-9 lg:justify-end">
                <p class="font-display text-[clamp(4.5rem,9vw,7.5rem)] leading-[0.8] font-semibold tracking-[-0.03em]">{{ $site->new_patient_price }}</p>
                <div class="max-w-[24ch] pb-1">
                    <p class="text-base font-semibold">{{ $priceLabel }}</p>
                    <p class="mt-1 text-sm/6 text-haze">{{ $site->new_patient_note }}</p>
                </div>
            </div>
        </div>

        <div class="relative mt-16 lg:mt-20">
            <ol role="list" class="grid sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($steps as $step)
                    <li class="relative pt-10 pr-8 pb-10 lg:pb-0">
                        <span class="absolute inset-x-0 top-0 h-5 bg-[repeating-linear-gradient(to_right,var(--color-haze)_0_1px,transparent_1px_calc(100%/15))] opacity-50" aria-hidden="true"></span>
                        <span class="absolute top-0 left-0 h-8 w-0.5 bg-primary" aria-hidden="true"></span>
                        <p class="font-display text-5xl font-semibold tracking-[-0.02em]">{{ $step->minute }}<span class="text-haze">′</span></p>
                        <h3 class="mt-4 text-xl font-semibold">{{ $step->title }}</h3>
                        <p class="mt-2 max-w-[34ch] text-base/7 text-haze">{{ $step->body }}</p>
                    </li>
                @endforeach
            </ol>
            <span class="absolute top-0 right-0 h-8 w-px bg-secondary-foreground max-lg:hidden" aria-hidden="true"></span>
            <span class="absolute top-10 right-0 font-display text-2xl font-semibold text-haze max-lg:hidden" aria-hidden="true">{{ $endLabel }}</span>
        </div>

        <div class="mt-16 flex flex-col gap-6 border-t border-secondary-foreground/15 pt-8 lg:flex-row lg:items-center lg:justify-between">
            <div class="flex flex-col gap-3 sm:flex-row sm:flex-wrap sm:items-baseline sm:gap-x-8">
                <h3 class="text-base font-semibold">{{ $afterHeading }}</h3>
                <ul role="list" class="flex flex-col gap-2 sm:flex-row sm:flex-wrap sm:gap-x-8">
                    @foreach ($services as $service)
                        @if ($service->featured && $service->name != $priceLabel)
                            <li class="text-base text-haze"><span class="text-secondary-foreground">{{ $service->name }}</span> · {{ $service->duration }} · <span class="font-semibold text-secondary-foreground tabular-nums">{{ $service->price }}</span></li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <a href="{{ $linkHref }}" class="group inline-flex shrink-0 items-center gap-2 rounded-sm text-base font-semibold focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-secondary-foreground">
                <span class="underline decoration-secondary-foreground/30 underline-offset-[6px] group-hover:decoration-secondary-foreground">{{ $linkLabel }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0 transition-transform duration-200 group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>
