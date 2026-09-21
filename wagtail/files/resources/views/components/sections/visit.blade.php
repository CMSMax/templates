@props([
    'heading' => 'Come say hello.',
    'body' => 'New patients are always welcome. Call to book, or stop by with your pet’s old records and we’ll find a time that suits you both.',
    'hoursHeading' => 'Opening hours',
])
<section id="visit" aria-labelledby="visit-heading" class="scroll-mt-8 px-3 pb-3 sm:px-5 sm:pb-5">
    <div class="mx-auto max-w-7xl rounded-[2rem] bg-secondary py-16 text-secondary-foreground sm:py-20 lg:py-24">
        <div class="mx-auto grid max-w-6xl gap-14 px-5 sm:px-8 lg:grid-cols-[7fr_5fr] lg:gap-16">
            <div class="flex flex-col">
                <h2 id="visit-heading" class="max-w-[14ch] font-display text-[clamp(2.5rem,5.4vw,4.25rem)] leading-[1.02] font-semibold tracking-[-0.035em] text-balance">{{ $heading }}</h2>
                <p class="mt-6 max-w-[48ch] text-lg/8 text-secondary-foreground/80">{{ $body }}</p>
                <div class="mt-10 flex flex-wrap items-center gap-x-6 gap-y-4">
                    <a href="{{ $site->booking_link }}" class="inline-flex items-center gap-2 rounded-full bg-primary py-4 pr-5 pl-7 text-base font-semibold text-primary-foreground hover:bg-primary/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary-foreground">
                        {{ $site->cta_label }}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                    <a href="{{ $site->directions_url }}" class="group inline-flex min-h-12 items-center rounded-full text-base font-semibold focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-secondary-foreground">
                        <span class="underline decoration-secondary-foreground/30 underline-offset-[6px] group-hover:decoration-secondary-foreground">Get directions</span>
                    </a>
                </div>
                <dl class="mt-14 grid gap-8 border-t border-secondary-foreground/15 pt-10 sm:grid-cols-2 lg:mt-16">
                    <div>
                        <dt class="text-sm font-semibold text-secondary-foreground/70">Find us</dt>
                        <dd class="mt-2 text-lg/7">{{ $site->address }}<br>{{ $site->city }}</dd>
                    </div>
                    <div>
                        <dt class="text-sm font-semibold text-secondary-foreground/70">Call or write</dt>
                        <dd class="mt-2 text-lg/7"><a href="{{ $site->phone_href }}" class="rounded-sm underline decoration-secondary-foreground/30 underline-offset-[6px] hover:decoration-secondary-foreground focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-secondary-foreground">{{ $site->phone }}</a></dd>
                        <dd class="mt-1 text-lg/7"><a href="mailto:{{ $site->email }}" class="rounded-sm underline decoration-secondary-foreground/30 underline-offset-[6px] hover:decoration-secondary-foreground focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-secondary-foreground">{{ $site->email }}</a></dd>
                    </div>
                </dl>
            </div>
            <div class="rounded-[1.5rem] bg-secondary-foreground/6 p-6 ring-1 ring-secondary-foreground/10 sm:p-8">
                <h3 class="font-display text-2xl font-semibold tracking-tight">{{ $hoursHeading }}</h3>
                <dl class="mt-6 divide-y divide-secondary-foreground/10">
                    @foreach ($hours as $row)
                        <div class="flex items-baseline justify-between gap-6 py-3.5">
                            <dt class="text-base text-secondary-foreground/80">{{ $row->day }}</dt>
                            <dd class="text-base font-semibold tabular-nums">{{ $row->hours }}</dd>
                        </div>
                    @endforeach
                </dl>
                <p class="mt-6 text-sm/6 text-secondary-foreground/70">{{ $site->hours_note }}</p>
                <p class="mt-6 flex gap-3 rounded-2xl bg-secondary-foreground/6 p-4 text-sm/6">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mt-0.5 size-4 shrink-0" aria-hidden="true"><path d="M7 18v-6a5 5 0 1 1 10 0v6M5 21a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-1a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2zm16-9h1m-3.5-7.5L18 5M2 12h1m9-10v1M4.929 4.929l.707.707M12 12v6"/></svg>
                    <span>{{ $site->emergency_label }} · <a href="{{ $site->emergency_phone_href }}" class="rounded-sm font-semibold underline decoration-secondary-foreground/30 underline-offset-4 hover:decoration-secondary-foreground focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary-foreground">{{ $site->emergency_phone }}</a></span>
                </p>
            </div>
        </div>
    </div>
</section>
