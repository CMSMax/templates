@props([
    'heading' => 'Book your first evaluation.',
    'body' => 'Call, or tell us a little about what’s going on and we’ll call you back within one working day. Most people are seen within 48 hours.',
    'hoursHeading' => 'Clinic hours',
])
<section id="visit" aria-labelledby="visit-heading" class="scroll-mt-8 px-3 pb-3 sm:px-5 sm:pb-5">
    <div class="mx-auto max-w-7xl rounded-[2rem] bg-surface py-16 sm:py-20 lg:py-24">
        <div class="mx-auto grid max-w-6xl gap-14 px-5 sm:px-8 lg:grid-cols-[7fr_5fr] lg:gap-16">
            <div class="flex flex-col">
                <h2 id="visit-heading" class="max-w-[14ch] font-display text-[clamp(2.5rem,5.4vw,4.25rem)] leading-[1] font-semibold tracking-[-0.045em] text-balance text-ink">{{ $heading }}</h2>
                <p class="mt-6 max-w-[50ch] text-lg/8 text-muted">{{ $body }}</p>
                <div class="mt-10 flex flex-wrap items-center gap-x-6 gap-y-4">
                    <a href="{{ $site->booking_link }}" class="inline-flex items-center gap-2 rounded-full bg-primary py-4 pr-5 pl-7 text-base font-semibold text-primary-foreground ring-1 ring-ink/10 ring-inset hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">
                        {{ $site->cta_label }}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                    <a href="{{ $site->directions_url }}" class="group inline-flex min-h-12 items-center rounded-full text-base font-semibold text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">
                        <span class="underline decoration-ink/25 underline-offset-[6px] group-hover:decoration-ink">Get directions</span>
                    </a>
                </div>
                <dl class="mt-14 grid gap-8 border-t border-ink/15 pt-10 sm:grid-cols-2 lg:mt-auto">
                    <div>
                        <dt class="text-sm font-semibold text-muted">Find us</dt>
                        <dd class="mt-2 text-lg/7 text-ink">{{ $site->address }}<br>{{ $site->city }}</dd>
                    </div>
                    <div>
                        <dt class="text-sm font-semibold text-muted">Call or write</dt>
                        <dd class="mt-2 text-lg/7"><a href="{{ $site->phone_href }}" class="rounded-sm text-ink tabular-nums underline decoration-ink/25 underline-offset-[6px] hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $site->phone }}</a></dd>
                        <dd class="mt-1 text-lg/7"><a href="mailto:{{ $site->email }}" class="rounded-sm text-ink underline decoration-ink/25 underline-offset-[6px] hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $site->email }}</a></dd>
                    </div>
                </dl>
            </div>
            <div class="rounded-[1.5rem] bg-card p-6 ring-1 ring-ink/5 sm:p-8">
                <h3 class="font-display text-2xl font-semibold tracking-[-0.03em] text-ink">{{ $hoursHeading }}</h3>
                <dl class="mt-6 divide-y divide-line">
                    @foreach ($hours as $row)
                        <div class="flex items-baseline justify-between gap-6 py-3.5">
                            <dt class="text-base text-muted">{{ $row->day }}</dt>
                            <dd class="text-base font-semibold text-ink tabular-nums">{{ $row->hours }}</dd>
                        </div>
                    @endforeach
                </dl>
                <p class="mt-6 flex gap-3 rounded-2xl bg-canvas p-4 text-sm/6 text-ink">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mt-0.5 size-4 shrink-0" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                    <span>{{ $site->hours_note }}</span>
                </p>
            </div>
        </div>
    </div>
</section>
