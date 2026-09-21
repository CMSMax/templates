@props([
    'heading' => 'Nobody on the east side goes without.',
    'body' => 'Groceries twice a week, supper every Thursday, help with the rent when a month goes wrong. Run by neighbors, out of one hall on Alder Street, since 2011.',
    'secondaryLabel' => 'Volunteer with us',
    'secondaryLink' => '/get-involved',
])
<section class="relative overflow-hidden">
    <div class="mx-auto max-w-7xl px-5 pt-14 pb-20 sm:px-6 lg:px-8 lg:pt-20 lg:pb-28">
        <div class="relative">
            <h1 data-settle class="relative max-w-[11ch] font-display text-[clamp(3.25rem,10vw,7.25rem)] leading-[0.9] font-extrabold tracking-[-0.04em] text-balance text-ink">{{ $heading }}</h1>
            <div data-drum class="overprint pointer-events-none absolute z-10 -top-6 right-[-22%] size-[clamp(12rem,48vw,40rem)] sm:-top-16 sm:right-[-6%] lg:right-[2%]" aria-hidden="true">
                <div class="halftone absolute inset-0 translate-x-[3%] translate-y-[4%] rounded-full text-ink/15"></div>
                <div class="absolute inset-0 rounded-full bg-primary"></div>
            </div>
        </div>
        <div class="relative z-20 mt-12 grid gap-12 lg:mt-10 lg:grid-cols-[1fr_minmax(0,26rem)] lg:items-start lg:gap-20">
            <div data-settle class="[--i:1]">
                <p class="max-w-[46ch] text-lg/8 text-ink sm:text-xl/9 lg:max-w-[36ch]">{{ $body }}</p>
                <div class="mt-9 flex flex-wrap items-center gap-3">
                    <a href="{{ $site->donate_url }}" class="inline-flex min-h-14 items-center gap-2.5 rounded-full bg-primary px-7 text-lg font-bold text-primary-foreground transition-[background-color,transform] duration-150 hover:-translate-y-0.5 hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $site->cta_label }}<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-5" aria-hidden="true"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.25" d="M7 7h10v10M7 17L17 7"/></svg></a>
                    <a href="{{ $secondaryLink }}" class="inline-flex min-h-14 items-center rounded-full px-7 text-lg font-bold text-ink ring-2 ring-ink ring-inset transition-colors duration-150 hover:bg-ink hover:text-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $secondaryLabel }}</a>
                </div>
            </div>
            <aside data-settle aria-labelledby="notice-heading" class="relative bg-canvas p-7 ring-2 ring-ink [--i:2] lg:-mt-16 lg:-rotate-2">
                <h2 id="notice-heading" class="font-display text-2xl leading-tight font-bold text-ink">{{ $site->notice_heading }}</h2>
                <p class="mt-3 text-base/7 text-muted">{{ $site->notice_body }}</p>
                <dl class="mt-5 flex flex-col">
                    @foreach ($site->hours as $row)
                        <div class="flex flex-wrap items-baseline justify-between gap-x-4 gap-y-1 border-t border-line py-3">
                            <dt class="font-bold text-ink">{{ $row->label }}</dt>
                            <dd class="text-muted tabular-nums">{{ $row->value }}</dd>
                        </div>
                    @endforeach
                </dl>
                <p class="perforated-x pt-4 text-sm text-muted">{{ $site->address }}, {{ $site->city }}</p>
            </aside>
        </div>
    </div>
</section>
