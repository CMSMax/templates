@props([
    'label' => 'Contact',
    'heading' => 'Book a free roof check.',
    'body' => 'Send your address and a good time. We will confirm a visit within one business day — within 48 hours after a storm.',
    'ctaLabel' => 'Email your address',
    'subject' => 'Roof check request',
    'ticketTitle' => 'Free roof check',
    'ticketNote' => 'About 45 minutes · no cost · no obligation',
    'items' => [],
])
<section class="pt-14 pb-20 md:pt-24 md:pb-32">
    <div class="mx-auto grid max-w-7xl gap-14 px-5 md:px-8 lg:grid-cols-12 lg:gap-10">
        <div class="lg:col-span-6">
            <p class="bulletin flex items-center gap-2 text-muted"><span class="size-2 rounded-full bg-primary" aria-hidden="true"></span>{{ $label }}</p>
            <h1 class="mt-6 max-w-[14ch] font-display text-hero font-semibold text-balance">{{ $heading }}</h1>
            <p class="mt-7 max-w-[46ch] text-lg text-pretty text-muted md:text-xl">{{ $body }}</p>
            <dl class="mt-12 border-t border-ink">
                <div class="grid gap-1 border-b border-line py-5 sm:grid-cols-[9rem_1fr] sm:gap-6">
                    <dt class="text-sm font-semibold text-muted">Phone</dt>
                    <dd><a href="{{ $site->phone_href }}" class="font-display text-3xl font-semibold tracking-tight tabular-nums underline-offset-4 hover:underline">{{ $site->phone }}</a></dd>
                </div>
                <div class="grid gap-1 border-b border-line py-5 sm:grid-cols-[9rem_1fr] sm:gap-6">
                    <dt class="text-sm font-semibold text-muted">Email</dt>
                    <dd><a href="mailto:{{ $site->email }}" class="text-lg font-medium break-all underline-offset-4 hover:underline">{{ $site->email }}</a></dd>
                </div>
                <div class="grid gap-1 border-b border-line py-5 sm:grid-cols-[9rem_1fr] sm:gap-6">
                    <dt class="text-sm font-semibold text-muted">We cover</dt>
                    <dd class="text-lg">{{ $site->service_area }}</dd>
                </div>
                <div class="grid gap-1 border-b border-line py-5 sm:grid-cols-[9rem_1fr] sm:gap-6">
                    <dt class="text-sm font-semibold text-muted">Office</dt>
                    <dd class="text-lg">{{ $site->address }}<br><span class="text-muted">{{ $site->hours_note }}</span></dd>
                </div>
            </dl>
        </div>
        <div class="lg:col-span-5 lg:col-start-8 lg:pt-10">
            <div class="rounded-lg border border-line bg-surface p-6 shadow-sheet md:p-8" data-reveal>
                <div class="flex items-start justify-between gap-4 border-b border-dashed border-line pb-5">
                    <div>
                        <p class="bulletin text-muted">{{ $site->short_name }} · Roof check</p>
                        <h2 class="mt-2 font-display text-3xl font-semibold tracking-tight">{{ $ticketTitle }}</h2>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="size-9 shrink-0" aria-hidden="true"><path fill="currentColor" d="M1 21 16 6l15 15h-5.2L16 11.2 6.2 21Z"/><path class="fill-primary" d="M1 25h30v3.5H1Z"/></svg>
                </div>
                <ul role="list" class="flex flex-col gap-3.5 py-6">
                    @foreach ($items as $check)
                        <li class="flex items-start gap-3 text-base">
                            <span class="mt-0.5 flex size-5 shrink-0 items-center justify-center rounded-full bg-primary text-primary-foreground" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="size-3"><path d="m4.5 10.5 3.5 3.5 7.5-8"/></svg></span>
                            {{ $check->item }}
                        </li>
                    @endforeach
                </ul>
                <p class="bulletin border-t border-dashed border-line pt-5 text-muted">{{ $ticketNote }}</p>
                <a href="mailto:{{ $site->email }}?subject={{ $subject }}" class="group mt-6 flex min-h-13 w-full items-center justify-center gap-3 rounded-md bg-primary px-5 py-3 text-base font-semibold text-primary-foreground hover:bg-primary/85 active:translate-y-px">
                    {{ $ctaLabel }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0 transition-transform duration-150 group-hover:translate-x-0.5" aria-hidden="true"><path d="M4 10h11M11 5l5 5-5 5"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>
