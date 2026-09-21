@props([
    'heading' => 'Ready when',
    'headingItalic' => 'you are.',
    'body' => 'Send a short note or call — a sentence or two about what’s going on is plenty. I’ll reply within one business day to set up a free 15-minute call, and there’s no obligation after it.',
    'buttonLabel' => 'Email to book a consultation',
])
<section id="contact" aria-labelledby="contact-heading" class="scroll-mt-8 border-t border-line bg-card py-24 lg:py-32">
    <div class="mx-auto grid max-w-6xl gap-14 px-5 sm:px-8 lg:grid-cols-[7fr_5fr] lg:gap-20">
        <div>
            <h2 id="contact-heading" class="text-[clamp(2.75rem,6.4vw,5.25rem)] leading-[0.98] text-ink">
                <span class="block font-sans font-medium tracking-[-0.045em]">{{ $heading }}</span>
                <span class="block font-display font-light tracking-[-0.03em] italic">{{ $headingItalic }}</span>
            </h2>
            <p class="mt-7 max-w-[48ch] text-lg/8 text-muted">{{ $body }}</p>
            <div class="mt-10 flex flex-wrap items-center gap-x-7 gap-y-4">
                <a href="{{ $site->booking_link }}" class="inline-flex items-center gap-3 rounded-full bg-primary py-2 pr-2 pl-6 text-base font-semibold text-primary-foreground ring-1 ring-primary hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">
                    {{ $buttonLabel }}
                    <span class="grid size-10 place-items-center rounded-full bg-ink text-canvas" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </span>
                </a>
                <a href="{{ $site->phone_href }}" class="group inline-flex min-h-12 items-center rounded-full text-base font-semibold text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink"><span class="underline decoration-ink/30 underline-offset-[6px] group-hover:decoration-ink">Call {{ $site->phone }}</span></a>
            </div>
        </div>
        <div>
            <dl class="divide-y divide-line border-y border-ink">
                <div class="grid grid-cols-[6.5rem_1fr] gap-4 py-5">
                    <dt class="text-sm font-semibold text-ink">Office</dt>
                    <dd class="text-base/7 text-muted">{{ $site->address }}<br>{{ $site->city }}<br><a href="{{ $site->directions_url }}" class="rounded-sm font-medium text-ink underline decoration-ink/30 underline-offset-4 hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Get directions</a></dd>
                </div>
                <div class="grid grid-cols-[6.5rem_1fr] gap-4 py-5">
                    <dt class="text-sm font-semibold text-ink">Online</dt>
                    <dd class="text-base/7 text-muted">{{ $site->service_area }}</dd>
                </div>
                <div class="grid grid-cols-[6.5rem_1fr] gap-4 py-5">
                    <dt class="text-sm font-semibold text-ink">Hours</dt>
                    <dd class="text-base/7 text-muted">{{ $site->hours_short }}<br>{{ $site->hours_note }}</dd>
                </div>
                <div class="grid grid-cols-[6.5rem_1fr] gap-4 py-5">
                    <dt class="text-sm font-semibold text-ink">Email</dt>
                    <dd class="text-base/7 text-muted"><a href="mailto:{{ $site->email }}" class="rounded-sm font-medium text-ink underline decoration-ink/30 underline-offset-4 hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $site->email }}</a></dd>
                </div>
            </dl>
            <p class="mt-6 flex gap-3 rounded-[1rem] bg-canvas p-4 text-sm/6 text-ink ring-1 ring-line">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="mt-0.5 size-5 shrink-0" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 8v4m0 4h.01"/></svg>
                <span>{{ $site->crisis_note }}</span>
            </p>
        </div>
    </div>
</section>
