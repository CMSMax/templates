@props([
    'heading' => 'Something in the house needs looking at.',
    'body' => 'Call and a person picks up, or send the details and we will come back with a window today.',
    'ctaLabel' => 'Book a visit',
    'ctaUrl' => '/contact',
])
<section class="bg-deep py-20 text-deep-ink lg:py-28">
    <div class="mx-auto flex max-w-6xl flex-wrap items-end justify-between gap-x-8 gap-y-8 px-6">
        <div>
            <h2 class="max-w-[18ch] font-display text-[clamp(2rem,4vw,3.25rem)]/[1.05] font-semibold tracking-tight text-balance text-deep-ink">{{ $heading }}</h2>
            <p class="mt-5 max-w-[46ch] text-[1.0625rem]/7 text-deep-muted">{{ $body }}</p>
        </div>
        <div class="flex flex-wrap items-center gap-x-6 gap-y-3 max-sm:w-full max-sm:flex-col max-sm:items-stretch">
            <a href="{{ $ctaUrl }}" class="rounded-xs bg-canvas px-5 py-3 text-center font-medium text-ink transition-transform duration-150 ease-out hover:bg-canvas/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent-ink active:scale-[0.98]">{{ $ctaLabel }}</a>
            <a href="{{ $site->phone_href }}" class="py-3 text-center font-medium text-deep-ink underline decoration-deep-muted underline-offset-4 tabular-nums hover:decoration-deep-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent-ink">{{ $site->phone }}</a>
        </div>
    </div>
</section>
