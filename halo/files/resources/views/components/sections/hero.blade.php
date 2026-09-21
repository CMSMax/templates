@props([
    'eyebrow' => 'Hair · Skin · Nails · Body',
    'heading' => 'Come in tired.',
    'headingAccent' => 'Leave lit.',
    'body' => 'A neighbourhood salon and day spa on Linden Avenue. Unhurried appointments, prices on the menu, and people who remember how you like it.',
    'secondaryLabel' => 'See the menu',
    'secondaryLink' => '/menu',
    'tagLabel' => 'Next opening',
    'tagText' => 'Today, 2:30pm with Mara',
    'imageOne' => '/images/hero-cut.jpg',
    'imageOneAlt' => 'A stylist cutting a smiling client’s hair beside a bright window',
    'imageTwo' => '/images/hero-blowout.jpg',
    'imageTwoAlt' => 'A woman turning her head, her glossy blow-dried hair in motion',
    'imageThree' => '/images/hero-facial.jpg',
    'imageThreeAlt' => 'An esthetician applying a cream mask during a calm facial',
])
<section class="overflow-hidden pt-6 pb-16 sm:pt-10 lg:pb-24">
    <div class="mx-auto grid max-w-7xl items-end gap-14 px-5 sm:px-8 lg:grid-cols-12 lg:gap-10">
        <div class="lg:col-span-5 lg:pb-6">
            <p data-rise class="text-xs font-semibold tracking-[0.22em] text-muted uppercase">{{ $eyebrow }}</p>
            <h1 data-rise class="mt-6 font-display text-[clamp(3.25rem,8vw,6.75rem)] leading-[0.95] font-normal tracking-[-0.03em] text-ink [--i:1]">{{ $heading }} <em class="block text-primary italic">{{ $headingAccent }}</em></h1>
            <p data-rise class="mt-8 max-w-[44ch] text-lg/8 text-muted [--i:2]">{{ $body }}</p>
            <div data-rise class="mt-10 flex flex-wrap items-center gap-x-7 gap-y-4 [--i:3]">
                <a href="{{ $site->cta_link }}" class="inline-flex items-center gap-2 rounded-full bg-primary py-4 pr-5 pl-7 text-base font-semibold text-primary-foreground transition-colors duration-150 hover:bg-primary/90 active:bg-primary/80 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                    {{ $site->cta_label }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </a>
                @if ($secondaryLabel)
                    <a href="{{ $secondaryLink }}" class="group inline-flex min-h-12 items-center rounded-full text-base font-semibold text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                        <span class="underline decoration-ink/25 underline-offset-[6px] transition-colors duration-150 group-hover:decoration-ink">{{ $secondaryLabel }}</span>
                    </a>
                @endif
            </div>
            <p data-rise class="mt-12 flex items-center gap-3 border-t border-line pt-6 text-sm text-muted [--i:4]">
                <span class="flex gap-0.5 text-primary" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4"><path d="M10 1.5l2.6 5.3 5.9.9-4.2 4.1 1 5.8L10 14.8l-5.3 2.8 1-5.8L1.5 7.7l5.9-.9Z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4"><path d="M10 1.5l2.6 5.3 5.9.9-4.2 4.1 1 5.8L10 14.8l-5.3 2.8 1-5.8L1.5 7.7l5.9-.9Z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4"><path d="M10 1.5l2.6 5.3 5.9.9-4.2 4.1 1 5.8L10 14.8l-5.3 2.8 1-5.8L1.5 7.7l5.9-.9Z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4"><path d="M10 1.5l2.6 5.3 5.9.9-4.2 4.1 1 5.8L10 14.8l-5.3 2.8 1-5.8L1.5 7.7l5.9-.9Z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4"><path d="M10 1.5l2.6 5.3 5.9.9-4.2 4.1 1 5.8L10 14.8l-5.3 2.8 1-5.8L1.5 7.7l5.9-.9Z"/></svg>
                </span>
                <span><span class="font-semibold text-ink">{{ $site->rating }}</span> {{ $site->rating_note }}</span>
            </p>
        </div>
        <div class="relative lg:col-span-7">
            <div class="grid h-[24rem] grid-cols-3 items-end gap-2.5 sm:h-[34rem] sm:gap-4 lg:h-[41rem]">
                <img data-rise src="{{ $imageOne }}" alt="{{ $imageOneAlt }}" width="800" height="1200" fetchpriority="high" class="arch h-[80%] w-full object-cover [--i:2]">
                <img data-rise src="{{ $imageTwo }}" alt="{{ $imageTwoAlt }}" width="800" height="1200" fetchpriority="high" class="arch h-full w-full object-cover [--i:3]">
                <img data-rise src="{{ $imageThree }}" alt="{{ $imageThreeAlt }}" width="800" height="1200" class="arch h-[64%] w-full object-cover [--i:4]">
            </div>
            @if ($tagText)
                <p data-rise class="absolute bottom-5 left-3 flex items-center gap-3 rounded-full bg-card/95 py-2.5 pr-5 pl-3 text-sm shadow-lg shadow-ink/10 ring-1 ring-ink/5 [--i:5] sm:bottom-10 sm:-left-6">
                    <span class="grid size-8 shrink-0 place-items-center rounded-full bg-primary text-primary-foreground" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>
                    </span>
                    <span class="flex flex-col leading-tight">
                        <span class="text-xs text-muted">{{ $tagLabel }}</span>
                        <span class="font-semibold text-ink">{{ $tagText }}</span>
                    </span>
                </p>
            @endif
        </div>
    </div>
</section>
