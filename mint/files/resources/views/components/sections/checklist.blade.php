@props(['eyebrow' => 'Before you come in', 'heading' => 'What to bring.', 'intro' => 'Arrive ten minutes early for your first visit. Everything else we’ll handle together.', 'itemOne' => 'Photo ID and your insurance card', 'itemTwo' => 'A list of any medicines you take', 'itemThree' => 'Recent X-rays, if another dentist has them', 'itemFour' => 'Questions — write them down, we’ll answer every one'])
<section class="px-3 sm:px-4">
    <div class="rounded-[2rem] bg-mint-soft">
        <div class="mx-auto grid max-w-7xl gap-10 px-5 py-16 sm:px-10 lg:grid-cols-12 lg:gap-8 lg:py-24">
            <div data-reveal class="lg:col-span-5">
                <p class="flex items-center gap-2.5 text-sm font-semibold tracking-wide text-muted uppercase"><span class="size-2 rounded-full bg-pop" aria-hidden="true"></span>{{ $eyebrow }}</p>
                <h2 class="mt-5 font-display text-4xl leading-[1.02] font-semibold tracking-[-0.03em] text-ink sm:text-5xl">{{ $heading }}</h2>
                <p class="mt-5 max-w-[36ch] text-lg/relaxed text-pretty text-muted">{{ $intro }}</p>
            </div>
            <ul role="list" data-reveal class="lg:col-span-6 lg:col-start-7">
                <li class="flex items-center gap-4 border-b border-ink/10 py-5 text-lg text-ink"><span class="grid size-8 shrink-0 place-items-center rounded-full bg-canvas text-accent" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="size-4"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg></span>{{ $itemOne }}</li>
                <li class="flex items-center gap-4 border-b border-ink/10 py-5 text-lg text-ink"><span class="grid size-8 shrink-0 place-items-center rounded-full bg-canvas text-accent" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="size-4"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg></span>{{ $itemTwo }}</li>
                <li class="flex items-center gap-4 border-b border-ink/10 py-5 text-lg text-ink"><span class="grid size-8 shrink-0 place-items-center rounded-full bg-canvas text-accent" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="size-4"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg></span>{{ $itemThree }}</li>
                <li class="flex items-center gap-4 py-5 text-lg text-ink"><span class="grid size-8 shrink-0 place-items-center rounded-full bg-canvas text-accent" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="size-4"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg></span>{{ $itemFour }}</li>
            </ul>
        </div>
    </div>
</section>
