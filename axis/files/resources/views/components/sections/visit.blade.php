@props([
    'heading' => 'Book your first visit.',
    'body' => 'Call the front desk and we will usually see you this week. Tell us where it hurts when you ring, and we will set aside the right amount of time.',
    'hoursHeading' => 'Hours',
    'emailLabel' => 'Or write to us',
])
<section id="visit" aria-labelledby="visit-heading" class="scroll-mt-8 pb-20 sm:pb-28">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="grid gap-12 border-t border-ink pt-14 lg:grid-cols-12 lg:gap-8 lg:pt-20">
            <div class="lg:col-span-6">
                <h2 id="visit-heading" class="max-w-[12ch] font-display text-[clamp(3rem,7.5vw,6.5rem)] leading-[0.9] font-semibold tracking-[-0.025em] text-balance text-ink">{{ $heading }}</h2>
                <p class="mt-6 max-w-[48ch] text-lg/8 text-muted">{{ $body }}</p>
                <div class="mt-10 flex flex-wrap items-center gap-x-6 gap-y-4">
                    <a href="{{ $site->booking_link }}" class="inline-flex items-center gap-2 rounded-full bg-primary py-4 pr-5 pl-7 text-base font-semibold text-primary-foreground hover:bg-primary/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                        {{ $site->cta_label }}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                    <a href="{{ $site->phone_href }}" class="group inline-flex min-h-12 items-center gap-2.5 rounded-full text-base font-semibold text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0 text-primary" aria-hidden="true"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
                        <span class="underline decoration-ink/25 underline-offset-[6px] tabular-nums group-hover:decoration-ink">Call {{ $site->phone }}</span>
                    </a>
                </div>
                <p class="mt-10 text-base text-muted">{{ $emailLabel }} · <a href="mailto:{{ $site->email }}" class="rounded-sm font-medium text-ink underline decoration-ink/25 underline-offset-4 hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->email }}</a></p>
            </div>
            <div class="grid gap-8 sm:grid-cols-2 lg:col-span-5 lg:col-start-8 lg:grid-cols-1">
                <div class="rounded-[1.5rem] bg-card p-7 ring-1 ring-ink/8 sm:p-8">
                    <h3 class="font-display text-2xl font-semibold text-ink">{{ $hoursHeading }}</h3>
                    <dl class="mt-5 flex flex-col">
                        @foreach ($hours as $row)
                            <div class="flex items-baseline justify-between gap-4 border-t border-line py-2.5">
                                <dt class="text-base font-medium text-ink sm:text-sm">{{ $row->day }}</dt>
                                <dd class="text-base whitespace-nowrap text-muted tabular-nums sm:text-sm">{{ $row->hours }}</dd>
                            </div>
                        @endforeach
                    </dl>
                    <p class="mt-4 text-sm/6 text-muted">{{ $site->hours_note }}</p>
                </div>
                <div class="flex flex-col justify-between gap-6 rounded-[1.5rem] bg-surface p-7 sm:p-8 lg:flex-row lg:items-end">
                    <div>
                        <h3 class="font-display text-2xl font-semibold text-ink">{{ $site->address }}</h3>
                        <p class="mt-1 text-base text-muted">{{ $site->city }}</p>
                    </div>
                    <a href="{{ $site->directions_url }}" class="group inline-flex shrink-0 items-center gap-2 rounded-sm text-base font-semibold text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                        <span class="underline decoration-ink/25 underline-offset-[6px] group-hover:decoration-ink">Get directions</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0 transition-transform duration-200 group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
