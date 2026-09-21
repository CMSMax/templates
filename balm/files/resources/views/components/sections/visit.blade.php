@props([
    'heading' => 'Come in and lie down.',
    'body' => 'Book by email or phone and we will confirm within the day. Tell us what hurts when you write — it helps us plan your hour.',
    'showOffer' => '1',
])
<section id="visit" class="scroll-mt-20 overflow-hidden bg-surface pb-24 lg:pb-32">
    @if ($showOffer == '1')
        <div class="ribbon mt-6 bg-secondary py-4 text-primary" aria-hidden="true">
            <p class="flex gap-12 font-display text-xl whitespace-nowrap sm:text-2xl">
                <span>{{ $site->offer }}</span><span>·</span><span>{{ $site->offer }}</span><span>·</span><span>{{ $site->offer }}</span><span>·</span><span>{{ $site->offer }}</span>
            </p>
        </div>
        <p class="sr-only">{{ $site->offer }}</p>
    @endif
    <div class="mx-auto mt-20 grid max-w-7xl gap-16 px-6 lg:mt-28 lg:grid-cols-[6fr_3fr_3fr] lg:gap-12 lg:px-8">
        <div>
            <h2 class="max-w-[12ch] font-display text-[clamp(2.5rem,5.5vw,4.5rem)] leading-[1.02] font-normal tracking-[-0.03em] text-balance text-ink">{{ $heading }}</h2>
            <p class="mt-6 max-w-[46ch] text-lg/8 text-muted">{{ $body }}</p>
            <div class="mt-10 flex flex-wrap items-center gap-x-8 gap-y-4">
                <a href="{{ $site->booking_url }}" class="rounded-full bg-primary px-6 py-3.5 text-base font-semibold text-primary-foreground transition-colors duration-150 hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $site->cta_label }}</a>
                <a href="{{ $site->phone_href }}" class="rounded-sm text-base font-semibold text-ink tabular-nums underline decoration-ink/30 underline-offset-4 hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">Call {{ $site->phone }}</a>
            </div>
        </div>
        <div>
            <h3 class="text-sm font-semibold text-ink">Hours</h3>
            <dl class="mt-5 border-b border-line">
                @foreach ($site->hours as $row)
                    <div class="flex items-baseline justify-between gap-4 border-t border-line py-3">
                        <dt class="text-base text-ink">{{ $row->day }}</dt>
                        <dd class="text-base text-muted tabular-nums">{{ $row->hours }}</dd>
                    </div>
                @endforeach
            </dl>
            <p class="mt-4 text-sm/6 text-muted">{{ $site->hours_note }}</p>
        </div>
        <div>
            <h3 class="text-sm font-semibold text-ink">Find us</h3>
            <address class="mt-5 border-t border-line pt-3 text-base/7 text-ink not-italic">
                {{ $site->address }}<br>{{ $site->city }}
            </address>
            <a href="{{ $site->directions_url }}" class="mt-4 inline-flex items-center gap-2 rounded-sm text-base font-semibold text-ink underline decoration-ink/30 underline-offset-4 hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">Get directions</a>
            <p class="mt-8 text-base/7 text-muted"><a href="mailto:{{ $site->email }}" class="rounded-sm break-all text-ink hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $site->email }}</a></p>
        </div>
    </div>
</section>
