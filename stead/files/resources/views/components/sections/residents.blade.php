@props([
    'eyebrow' => 'For residents',
    'heading' => 'Already live in one of our homes?',
    'body' => 'Pay rent, send a repair request with photos, or find your next place — all without a phone call.',
    'payLabel' => 'Pay rent',
    'payNote' => 'Bank transfer or card, through the resident portal',
    'repairLabel' => 'Request a repair',
    'repairNote' => 'Most requests get a reply the same day',
    'rentalsLabel' => 'See available homes',
    'rentalsNote' => 'Every home we are leasing right now',
])
<section id="residents" class="py-20 lg:py-28">
    <div class="mx-auto grid max-w-7xl gap-12 px-6 lg:grid-cols-[5fr_7fr] lg:gap-16 lg:px-8">
        <div>
            <p class="text-sm font-medium text-muted">{{ $eyebrow }}</p>
            <h2 class="mt-4 max-w-[16ch] font-display text-4xl font-medium tracking-tight text-balance sm:text-5xl">{{ $heading }}</h2>
            <p class="mt-5 max-w-[40ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
            <p class="mt-8 max-w-[40ch] rounded-xl border border-ink/12 p-5 text-base/7 text-ink">Water, gas, or no heat? Call the emergency line any hour: <a href="{{ $site->emergency_phone_href }}" class="font-medium whitespace-nowrap underline decoration-ink/30 underline-offset-4 hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">{{ $site->emergency_phone }}</a></p>
        </div>
        <ul role="list" class="border-t border-ink/12">
            <li>
                <a href="{{ $site->resident_portal_url }}" class="group flex items-center justify-between gap-6 border-b border-ink/12 py-7 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">
                    <span class="flex flex-col gap-1"><span class="font-display text-3xl font-medium tracking-tight">{{ $payLabel }}</span><span class="text-muted">{{ $payNote }}</span></span>
                    <span class="grid size-12 shrink-0 place-items-center rounded-full border border-ink/15 group-hover:border-ink group-hover:bg-ink group-hover:text-canvas" aria-hidden="true"><svg viewBox="0 0 20 20" fill="currentColor" class="size-5"><path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 0 0 1.06 0l7.22-7.22v5.69a.75.75 0 0 0 1.5 0v-7.5a.75.75 0 0 0-.75-.75h-7.5a.75.75 0 0 0 0 1.5h5.69l-7.22 7.22a.75.75 0 0 0 0 1.06Z" clip-rule="evenodd"/></svg></span>
                </a>
            </li>
            <li>
                <a href="{{ $site->maintenance_url }}" class="group flex items-center justify-between gap-6 border-b border-ink/12 py-7 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">
                    <span class="flex flex-col gap-1"><span class="font-display text-3xl font-medium tracking-tight">{{ $repairLabel }}</span><span class="text-muted">{{ $repairNote }}</span></span>
                    <span class="grid size-12 shrink-0 place-items-center rounded-full border border-ink/15 group-hover:border-ink group-hover:bg-ink group-hover:text-canvas" aria-hidden="true"><svg viewBox="0 0 20 20" fill="currentColor" class="size-5"><path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 0 0 1.06 0l7.22-7.22v5.69a.75.75 0 0 0 1.5 0v-7.5a.75.75 0 0 0-.75-.75h-7.5a.75.75 0 0 0 0 1.5h5.69l-7.22 7.22a.75.75 0 0 0 0 1.06Z" clip-rule="evenodd"/></svg></span>
                </a>
            </li>
            <li>
                <a href="/rentals" class="group flex items-center justify-between gap-6 border-b border-ink/12 py-7 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">
                    <span class="flex flex-col gap-1"><span class="font-display text-3xl font-medium tracking-tight">{{ $rentalsLabel }}</span><span class="text-muted">{{ $rentalsNote }}</span></span>
                    <span class="grid size-12 shrink-0 place-items-center rounded-full border border-ink/15 group-hover:border-ink group-hover:bg-ink group-hover:text-canvas" aria-hidden="true"><svg viewBox="0 0 20 20" fill="currentColor" class="size-5"><path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd"/></svg></span>
                </a>
            </li>
        </ul>
    </div>
</section>
