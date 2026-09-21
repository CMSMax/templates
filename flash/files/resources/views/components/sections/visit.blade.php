@props([
    'heading' => 'Tell us the idea.',
    'body' => 'Send a few references, where on the body, and roughly how big. We reply within two days with an artist and a consult time.',
    'emailLabel' => 'Or email',
])
<section id="visit" class="scroll-mt-16 py-20 lg:py-32">
    <div class="mx-auto grid max-w-7xl gap-14 px-5 sm:px-8 lg:grid-cols-[7fr_5fr] lg:gap-20">
        <div>
            <h2 class="max-w-[10ch] font-display text-[clamp(2.75rem,7vw,5.5rem)] leading-[0.98] tracking-[-0.02em] text-balance text-ink uppercase">{{ $heading }}</h2>
            <p class="mt-8 max-w-[46ch] text-lg/8 text-muted">{{ $body }}</p>
            <div class="mt-10 flex flex-wrap items-center gap-x-6 gap-y-4">
                <a href="{{ $site->booking_url }}" class="inline-flex items-center gap-2.5 border-2 border-ink bg-primary py-3.5 pr-5 pl-6 text-lg font-semibold text-primary-foreground hover:bg-ink hover:text-canvas active:translate-y-px focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">
                    {{ $site->cta_label }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
                </a>
                <p class="text-lg text-muted">{{ $emailLabel }} <a href="mailto:{{ $site->email }}" class="font-semibold text-ink underline decoration-2 underline-offset-[6px] hover:decoration-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $site->email }}</a></p>
            </div>
            <ul role="list" class="mt-14 flex flex-col gap-3 border-t-2 border-ink pt-6 text-base/7 text-ink">
                <li class="flex gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="mt-1 size-4 shrink-0 stroke-ink text-primary" aria-hidden="true"><path fill="currentColor" stroke-width="2.5" stroke-linejoin="round" d="M16 2.5c1.4 8.6 4.9 12.1 13.5 13.5-8.6 1.4-12.1 4.9-13.5 13.5-1.4-8.6-4.9-12.1-13.5-13.5C11.1 14.6 14.6 11.1 16 2.5Z"/></svg>
                    {{ $site->deposit_note }}
                </li>
                <li class="flex gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="mt-1 size-4 shrink-0 stroke-ink text-primary" aria-hidden="true"><path fill="currentColor" stroke-width="2.5" stroke-linejoin="round" d="M16 2.5c1.4 8.6 4.9 12.1 13.5 13.5-8.6 1.4-12.1 4.9-13.5 13.5-1.4-8.6-4.9-12.1-13.5-13.5C11.1 14.6 14.6 11.1 16 2.5Z"/></svg>
                    {{ $site->walkin_note }}
                </li>
                <li class="flex gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="mt-1 size-4 shrink-0 stroke-ink text-primary" aria-hidden="true"><path fill="currentColor" stroke-width="2.5" stroke-linejoin="round" d="M16 2.5c1.4 8.6 4.9 12.1 13.5 13.5-8.6 1.4-12.1 4.9-13.5 13.5-1.4-8.6-4.9-12.1-13.5-13.5C11.1 14.6 14.6 11.1 16 2.5Z"/></svg>
                    {{ $site->age_note }}
                </li>
            </ul>
        </div>
        <div class="self-start border-2 border-ink bg-surface p-6 sm:p-8">
            <h3 class="font-display text-xl text-ink uppercase">The studio</h3>
            <p class="mt-4 text-lg/7 text-ink">{{ $site->address }}<br>{{ $site->city }}</p>
            <div class="mt-4 flex flex-wrap gap-x-5 gap-y-2">
                <a href="{{ $site->directions_url }}" class="font-semibold text-ink underline decoration-2 underline-offset-4 hover:decoration-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">Directions</a>
                <a href="{{ $site->phone_href }}" class="font-semibold text-ink tabular-nums underline decoration-2 underline-offset-4 hover:decoration-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $site->phone }}</a>
            </div>
            <h3 class="mt-10 border-t border-ink pt-6 font-display text-xl text-ink uppercase">Hours</h3>
            <dl class="mt-4 flex flex-col divide-y divide-line">
                @foreach ($hours as $slot)
                    <div class="flex justify-between gap-4 py-2.5 text-base">
                        <dt class="text-muted">{{ $slot->day }}</dt>
                        <dd class="font-medium text-ink tabular-nums">{{ $slot->hours }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</section>
