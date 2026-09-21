@props([
    'heading' => 'This pipe goes nowhere.',
    'body' => 'The page you were after has moved or never existed. The phone number still works.',
    'ctaLabel' => 'Back to the homepage',
    'ctaLink' => '/',
])
<section class="py-24 md:py-40">
    <div class="mx-auto grid max-w-7xl gap-12 px-5 md:px-8 lg:grid-cols-12 lg:items-center lg:gap-10">
        <div class="lg:col-span-8">
            <p class="font-display text-7xl font-extrabold text-primary tabular-nums [font-stretch:125%] md:text-9xl">404</p>
            <h1 class="mt-6 font-display text-section font-extrabold text-balance">{{ $heading }}</h1>
            <p class="mt-5 max-w-[46ch] text-lg text-pretty text-muted">{{ $body }}</p>
            <div class="mt-10 flex flex-wrap items-center gap-x-7 gap-y-4">
                <a href="{{ $ctaLink }}" class="inline-flex min-h-12 items-center gap-2 rounded-full bg-primary py-3 pr-4 pl-5 text-base font-semibold text-primary-foreground hover:bg-ink active:translate-y-px">
                    {{ $ctaLabel }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M4 10h11M11 5l5 5-5 5"/></svg>
                </a>
                <a href="{{ $site->phone_href }}" class="min-h-11 content-center text-base font-semibold tabular-nums underline decoration-ink/25 underline-offset-4 hover:decoration-primary">{{ $site->phone }}</a>
            </div>
        </div>
    </div>
</section>
