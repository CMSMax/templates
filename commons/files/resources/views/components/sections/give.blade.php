@props([
    'heading' => 'Pull a tab. We’ll handle the rest.',
    'body' => 'Every amount below buys something specific this month. Pick the one you can picture — it all goes to the same place.',
    'flyerHeading' => 'Help a neighbor this week',
    'flyerBody' => 'Tear off a tab and give online in two minutes. Card, bank transfer, or a monthly gift that keeps the pantry stocked through the lean months.',
    'monthlyNote' => 'Rather give monthly? $15 a month stocks one shelf, all year.',
])
<section id="give" aria-labelledby="give-heading" class="scroll-mt-20 bg-primary text-primary-foreground">
    <div class="mx-auto max-w-7xl px-5 py-20 sm:px-6 lg:px-8 lg:py-28">
        <div class="grid gap-6 lg:grid-cols-12 lg:items-end">
            <h2 id="give-heading" class="font-display text-[clamp(2.5rem,6vw,5rem)] leading-[0.95] font-extrabold tracking-[-0.035em] text-balance lg:col-span-7">{{ $heading }}</h2>
            <p class="max-w-[44ch] text-lg/8 lg:col-span-5">{{ $body }}</p>
        </div>

        <div class="relative mt-14 bg-canvas text-ink shadow-[0_30px_60px_-30px] shadow-primary-foreground/50 lg:mt-20 lg:rotate-[-0.6deg]">
            <div class="relative overflow-hidden px-6 pt-10 pb-12 sm:px-10 lg:px-14 lg:pt-14 lg:pb-16">
                <div class="pointer-events-none absolute -top-20 -right-24 size-48 sm:-top-24 sm:-right-20 sm:size-96" aria-hidden="true">
                    <div class="halftone absolute inset-0 rounded-full text-primary"></div>
                </div>
                <p class="relative max-w-[14ch] font-display text-[clamp(2.25rem,6vw,4.5rem)] leading-[0.92] font-extrabold tracking-[-0.035em] text-balance uppercase">{{ $flyerHeading }}</p>
                <p class="relative mt-6 max-w-[52ch] text-lg/8 text-muted">{{ $flyerBody }}</p>
            </div>
            <ul role="list" class="perforated-x grid grid-cols-2 text-ink/50 lg:grid-cols-4">
                @foreach ($gifts as $gift)
                    <li class="perforated relative text-ink/50 first:bg-none max-lg:[&:nth-child(3)]:bg-none max-lg:[&:nth-child(n+3)]:border-t-[1.5px] max-lg:[&:nth-child(n+3)]:border-dashed max-lg:[&:nth-child(n+3)]:border-current">
                        <a href="{{ $gift->link }}" class="group flex h-full min-h-44 flex-col justify-between gap-6 px-5 py-7 text-ink transition-[background-color,transform] duration-200 ease-out hover:translate-y-1.5 hover:rotate-1 hover:bg-surface focus-visible:outline-2 focus-visible:-outline-offset-4 focus-visible:outline-ink sm:px-8 lg:min-h-52">
                            <span class="flex items-start justify-between gap-3">
                                <span class="font-display text-[clamp(2.5rem,5vw,3.75rem)] leading-none font-extrabold tracking-[-0.03em] tabular-nums">{{ $gift->amount }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="mt-1 size-6 shrink-0 transition-transform duration-200 group-hover:translate-x-0.5 group-hover:-translate-y-0.5" aria-hidden="true"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h10v10M7 17L17 7"/></svg>
                            </span>
                            <span class="text-base/6 font-bold">{{ $gift->buys }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="mt-12 flex flex-col gap-5 sm:flex-row sm:items-center sm:justify-between">
            <p class="text-lg font-bold">{{ $monthlyNote }}</p>
            <a href="{{ $site->donate_url }}" class="inline-flex min-h-14 items-center justify-center gap-2.5 self-start rounded-full bg-primary-foreground px-7 text-lg font-bold text-canvas transition-[background-color,transform] duration-150 hover:-translate-y-0.5 hover:bg-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-foreground">{{ $site->cta_label }} monthly<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-5" aria-hidden="true"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.25" d="M7 7h10v10M7 17L17 7"/></svg></a>
        </div>
    </div>
</section>
