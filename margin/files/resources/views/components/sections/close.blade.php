@props(['heading' => 'Start with forty minutes and a plan.', 'body' => 'The first assessment is free. You leave with a written summary of where your child is and what we would teach first.', 'ctaLabel' => 'Book a free assessment', 'ctaUrl' => '/contact', 'margin' => 'no obligation'])
<section class="relative overflow-hidden bg-deep text-deep-ink">
    <div aria-hidden="true" class="ruled-deep absolute inset-0"></div>
    <div class="relative mx-auto grid max-w-6xl gap-12 px-6 py-20 lg:grid-cols-[minmax(0,1.3fr)_minmax(0,1fr)] lg:items-end lg:py-32">
        <div class="relative lg:pl-10">
            <div aria-hidden="true" class="absolute top-0 bottom-0 -left-px w-px bg-accent max-lg:hidden"></div>
            <h2 class="max-w-[16ch] font-display text-[clamp(2.25rem,4.4vw,4rem)]/[1.03] font-normal tracking-[-0.02em] text-balance text-deep-ink">{{ $heading }}</h2>
            <p class="mt-6 max-w-[46ch] text-lg/8 text-deep-muted">{{ $body }}</p>
        </div>
        <div class="flex flex-col items-start gap-6 lg:items-end">
            <p class="-rotate-3 font-hand text-[1.75rem]/none text-deep-ink">{{ $margin }}</p>
            <a href="{{ $ctaUrl }}" class="rounded-xs bg-accent px-6 py-3.5 text-center font-medium text-accent-ink transition duration-150 ease-out hover:bg-deep-ink hover:text-deep focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-deep-ink active:scale-[0.98] max-sm:w-full">{{ $ctaLabel }}</a>
            <a href="{{ $site->phone_href }}" class="font-medium text-deep-ink tabular-nums underline decoration-deep-muted/50 underline-offset-[6px] hover:decoration-deep-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-deep-ink">or call {{ $site->phone }}</a>
        </div>
    </div>
</section>
