@props(['eyebrow' => 'Paying for care', 'heading' => 'Three ways to pay, all of them clear.', 'insuranceTitle' => 'Insurance', 'insuranceBody' => 'We accept most PPO plans and file every claim for you. Your written plan shows what your insurer pays and what you pay.', 'memberTitle' => 'Mint membership', 'memberPrice' => '$29 a month', 'memberBody' => 'No insurance? Two check-ups and cleans a year, X-rays when needed, and 15% off every treatment.', 'financeTitle' => 'Monthly payments', 'financeBody' => 'Spread any treatment over $500 across twelve months, interest-free, with no credit check under $2,000.'])
<section class="px-5 py-20 sm:px-8 lg:py-32">
    <div class="mx-auto max-w-7xl">
        <div data-reveal>
            <p class="flex items-center gap-2.5 text-sm font-semibold tracking-wide text-muted uppercase"><span class="size-2 rounded-full bg-pop" aria-hidden="true"></span>{{ $eyebrow }}</p>
            <h2 class="mt-5 max-w-[18ch] font-display text-4xl leading-[1.02] font-semibold tracking-[-0.03em] text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
        </div>
        <div data-reveal class="mt-14 grid gap-4 lg:grid-cols-3">
            <div class="rounded-[1.5rem] border border-line p-8">
                <h3 class="font-display text-2xl font-semibold tracking-tight text-ink">{{ $insuranceTitle }}</h3>
                <p class="mt-3 text-pretty text-muted">{{ $insuranceBody }}</p>
            </div>
            <div class="rounded-[1.5rem] bg-mint p-8">
                <h3 class="font-display text-2xl font-semibold tracking-tight text-ink">{{ $memberTitle }}</h3>
                <p class="mt-2 font-display text-4xl font-semibold tracking-tight text-ink tabular-nums">{{ $memberPrice }}</p>
                <p class="mt-3 text-pretty text-ink/80">{{ $memberBody }}</p>
            </div>
            <div class="rounded-[1.5rem] border border-line p-8">
                <h3 class="font-display text-2xl font-semibold tracking-tight text-ink">{{ $financeTitle }}</h3>
                <p class="mt-3 text-pretty text-muted">{{ $financeBody }}</p>
            </div>
        </div>
    </div>
</section>
