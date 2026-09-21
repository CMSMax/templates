@props([
    'heading' => 'Tell us the date.',
    'body' => 'Send the date, the venue and a rough head count. You will have a first menu and a quote from us within two working days.',
])
<section id="contact" class="scroll-mt-18 bg-secondary text-on-plum">
    <div class="mx-auto grid max-w-7xl grid-cols-1 gap-14 px-5 py-20 sm:px-8 lg:grid-cols-[7fr_5fr] lg:gap-16 lg:py-28">
        <div>
            <h2 class="font-display text-[clamp(2.75rem,7vw,5.5rem)] leading-[1] tracking-tight text-balance">{{ $heading }}</h2>
            <p class="mt-7 max-w-[46ch] text-lg/8 text-on-plum-muted">{{ $body }}</p>
            <p class="mt-10">
                <a href="{{ $site->quote_link }}" class="inline-flex items-center gap-2 rounded-full bg-primary py-3.5 pr-4 pl-6 text-base font-medium text-primary-foreground hover:bg-on-plum focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-on-plum">
                    {{ $site->cta_label }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </a>
            </p>
        </div>
        <dl class="flex flex-col self-end border-t border-on-plum/15">
            <div class="flex flex-col gap-1 border-b border-on-plum/15 py-5">
                <dt class="text-sm text-on-plum-muted">Call the kitchen</dt>
                <dd><a href="{{ $site->phone_href }}" class="rounded-sm font-display text-2xl text-on-plum tabular-nums hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->phone }}</a></dd>
            </div>
            <div class="flex flex-col gap-1 border-b border-on-plum/15 py-5">
                <dt class="text-sm text-on-plum-muted">Write to us</dt>
                <dd><a href="mailto:{{ $site->email }}" class="rounded-sm font-display text-2xl break-all text-on-plum hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->email }}</a></dd>
            </div>
            <div class="flex flex-col gap-1 border-b border-on-plum/15 py-5">
                <dt class="text-sm text-on-plum-muted">Where we cook</dt>
                <dd class="text-lg text-on-plum">{{ $site->service_area }}</dd>
            </div>
        </dl>
    </div>
</section>
