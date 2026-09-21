@props(['heading' => 'Ready when you are.', 'intro' => 'Book online in two minutes, or call and a real person picks up. New patients are usually seen within the week.', 'hoursHeading' => 'This week', 'hours' => []])
<section class="px-3 pb-3 sm:px-4 sm:pb-4">
    <div class="overflow-hidden rounded-[2rem] bg-mint">
        <div class="mx-auto grid max-w-7xl gap-12 px-5 py-16 sm:px-10 lg:grid-cols-12 lg:gap-8 lg:py-24">
            <div data-reveal class="lg:col-span-7">
                <h2 class="max-w-[12ch] font-display text-[clamp(2.75rem,6.5vw,5.5rem)] leading-[0.95] font-semibold tracking-[-0.04em] text-balance text-ink">{{ $heading }}</h2>
                <p class="mt-6 max-w-[40ch] text-lg/relaxed text-pretty text-ink/80">{{ $intro }}</p>
                <div class="mt-8 flex flex-wrap items-center gap-3">
                    <a href="/contact" class="rounded-full bg-accent px-6 py-3.5 font-semibold text-accent-ink transition duration-200 hover:bg-ink active:scale-[0.97] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ $site->cta_label }}</a>
                    <a href="{{ $site->phone_href }}" class="rounded-full bg-canvas/60 px-6 py-3.5 font-semibold text-ink tabular-nums transition duration-200 hover:bg-canvas active:scale-[0.97] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">Call {{ $site->phone }}</a>
                </div>
            </div>
            <div data-reveal class="lg:col-span-4 lg:col-start-9">
                <div class="rounded-[1.5rem] bg-canvas p-6 sm:p-7">
                    <h3 class="font-display text-lg font-semibold tracking-tight text-ink">{{ $hoursHeading }}</h3>
                    <dl class="mt-3">
                        @foreach ($hours as $slot)
                            <div class="flex justify-between gap-4 border-b border-line py-2.5 text-sm last:border-b-0">
                                <dt class="text-ink">{{ $slot->day }}</dt>
                                <dd class="text-muted tabular-nums">{{ $slot->hours }}</dd>
                            </div>
                        @endforeach
                    </dl>
                    <p class="mt-4 text-sm text-muted">{{ $site->hours_note }}.</p>
                </div>
            </div>
        </div>
    </div>
</section>
