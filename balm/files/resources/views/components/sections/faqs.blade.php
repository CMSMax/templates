@props([
    'heading' => 'The questions people are shy to ask.',
    'body' => 'Ask them anyway — by phone, by email, or on the table. There are no strange questions in this room.',
    'image' => '/images/stones.jpg',
    'imageAlt' => 'Five black basalt stones warming on a folded grey towel beside an amber bottle of massage oil and a sprig of eucalyptus',
])
<section id="faqs" class="scroll-mt-20 border-t border-line py-24 lg:py-32">
    <div class="mx-auto grid max-w-7xl gap-16 px-6 lg:grid-cols-[5fr_7fr] lg:gap-20 lg:px-8">
        <div class="flex flex-col gap-10">
            <div>
                <h2 class="max-w-[14ch] font-display text-[clamp(2.25rem,4.5vw,3.75rem)] leading-[1.04] font-normal tracking-[-0.03em] text-balance text-ink">{{ $heading }}</h2>
                <p class="mt-6 max-w-[44ch] text-lg/8 text-muted">{{ $body }}</p>
            </div>
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="880" height="1100" loading="lazy" decoding="async" class="aspect-[4/3] w-full rounded-3xl object-cover max-lg:hidden">
        </div>
        <div class="self-start border-b border-line">
            @foreach ($faqs as $faq)
                <details class="group border-t border-line">
                    <summary class="flex cursor-pointer items-start justify-between gap-6 rounded-sm py-6 text-left focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">
                        <h3 class="font-display text-[1.375rem] leading-[1.3] tracking-tight text-ink sm:text-2xl">{{ $faq->question }}</h3>
                        <span class="mt-1 grid size-8 shrink-0 place-items-center rounded-full ring-1 ring-line transition-colors duration-150 ring-inset group-hover:bg-surface group-open:bg-primary group-open:ring-primary" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" class="size-4 text-ink transition-transform duration-200 group-open:rotate-45"><path d="M10 4v12M4 10h12"/></svg>
                        </span>
                    </summary>
                    <p class="max-w-[62ch] pb-7 text-base/7 text-muted">{{ $faq->answer }}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>
