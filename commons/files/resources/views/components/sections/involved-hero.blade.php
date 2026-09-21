@props([
    'heading' => 'Give an hour. Give a Tuesday.',
    'body' => 'Most of what happens at the hall is done by volunteers — about 240 of them last year, ages 14 to 88. Pick a shift below, or find another way to pitch in.',
])
<section class="relative overflow-hidden">
    <div class="mx-auto max-w-7xl px-5 pt-14 pb-16 sm:px-6 lg:px-8 lg:pt-20 lg:pb-24">
        <div class="relative">
            <h1 data-settle class="relative max-w-[12ch] font-display text-[clamp(3rem,8.5vw,6.5rem)] leading-[0.92] font-extrabold tracking-[-0.04em] text-balance text-ink">{{ $heading }}</h1>
            <div data-drum class="overprint pointer-events-none absolute z-10 -top-6 right-[-24%] size-[clamp(11rem,36vw,28rem)] sm:right-[-4%] lg:right-[9%]" aria-hidden="true">
                <div class="halftone absolute inset-0 -translate-x-[4%] translate-y-[5%] rounded-full text-ink/15"></div>
                <div class="absolute inset-0 rounded-full bg-primary"></div>
            </div>
        </div>
        <div data-settle class="relative z-20 mt-10 flex flex-col items-start gap-8 [--i:1] lg:mt-14">
            <p class="max-w-[42ch] text-lg/8 text-ink sm:text-xl/9">{{ $body }}</p>
            <a href="mailto:{{ $site->volunteer_email }}" class="inline-flex min-h-14 shrink-0 items-center gap-2.5 self-start rounded-full px-7 text-lg font-bold text-ink ring-2 ring-ink ring-inset transition-colors duration-150 hover:bg-ink hover:text-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Write to our volunteer desk</a>
        </div>
    </div>
</section>
