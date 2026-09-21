@props([
    'lineOne' => 'Sharp cuts.',
    'lineTwo' => 'Close shaves.',
    'lineThree' => 'No rush.',
    'body' => 'A classic neighborhood barbershop. Skin fades, scissor work, and hot towel shaves from barbers who still take the time to get it right.',
    'image' => '/images/hero.jpg',
    'imageAlt' => 'A man with a full, groomed beard in profile, lit by warm light against a dark background',
])
<section class="relative isolate overflow-hidden">
    <div class="absolute inset-y-0 right-0 -z-10 w-full lg:w-[54%]">
        <img src="{{ $image }}" alt="{{ $imageAlt }}" width="880" height="1168" fetchpriority="high" class="size-full object-cover object-[60%_20%]">
        <div class="absolute inset-0 bg-canvas/75 lg:bg-transparent lg:bg-linear-to-r lg:from-canvas lg:via-canvas/60 lg:to-transparent lg:to-70%" aria-hidden="true"></div>
        <div class="absolute inset-x-0 bottom-0 h-40 bg-linear-to-t from-canvas to-transparent" aria-hidden="true"></div>
    </div>
    <div class="mx-auto flex min-h-[min(calc(100svh-4.5rem),52rem)] max-w-7xl flex-col px-6 pt-16 pb-10 lg:min-h-[48rem] lg:pt-24">
        <div class="flex flex-1 flex-col justify-center">
            <p data-rise class="inline-flex items-center gap-3 self-start rounded-xs border border-line bg-canvas/60 p-1 pr-4 text-sm text-ink">
                <span class="rounded-xs bg-primary px-2.5 py-1 font-medium text-primary-foreground">{{ $site->offer_label }}</span>
                {{ $site->offer_text }}
            </p>
            <h1 class="mt-8 font-display text-[clamp(3.5rem,9vw,7.25rem)] leading-[0.9] font-semibold text-ink uppercase">
                <span data-rise class="block [--i:1]">{{ $lineOne }}</span>
                <span data-rise class="block text-primary [--i:2]">{{ $lineTwo }}</span>
                <span data-rise class="block [--i:3]">{{ $lineThree }}</span>
            </h1>
            <div data-rise class="mt-10 flex items-center gap-4 [--i:4]">
                <div class="flex gap-0.5 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor" class="size-4 shrink-0" aria-hidden="true"><path d="m234.29 114.85-45 38.83L203 211.75a16.4 16.4 0 0 1-24.5 17.82L128 198.49l-50.53 31.08A16.4 16.4 0 0 1 53 211.75l13.76-58.07-45-38.83A16.46 16.46 0 0 1 31.08 86l59-4.76 22.76-55.08a16.36 16.36 0 0 1 30.27 0l22.75 55.08 59 4.76a16.46 16.46 0 0 1 9.37 28.86Z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor" class="size-4 shrink-0" aria-hidden="true"><path d="m234.29 114.85-45 38.83L203 211.75a16.4 16.4 0 0 1-24.5 17.82L128 198.49l-50.53 31.08A16.4 16.4 0 0 1 53 211.75l13.76-58.07-45-38.83A16.46 16.46 0 0 1 31.08 86l59-4.76 22.76-55.08a16.36 16.36 0 0 1 30.27 0l22.75 55.08 59 4.76a16.46 16.46 0 0 1 9.37 28.86Z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor" class="size-4 shrink-0" aria-hidden="true"><path d="m234.29 114.85-45 38.83L203 211.75a16.4 16.4 0 0 1-24.5 17.82L128 198.49l-50.53 31.08A16.4 16.4 0 0 1 53 211.75l13.76-58.07-45-38.83A16.46 16.46 0 0 1 31.08 86l59-4.76 22.76-55.08a16.36 16.36 0 0 1 30.27 0l22.75 55.08 59 4.76a16.46 16.46 0 0 1 9.37 28.86Z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor" class="size-4 shrink-0" aria-hidden="true"><path d="m234.29 114.85-45 38.83L203 211.75a16.4 16.4 0 0 1-24.5 17.82L128 198.49l-50.53 31.08A16.4 16.4 0 0 1 53 211.75l13.76-58.07-45-38.83A16.46 16.46 0 0 1 31.08 86l59-4.76 22.76-55.08a16.36 16.36 0 0 1 30.27 0l22.75 55.08 59 4.76a16.46 16.46 0 0 1 9.37 28.86Z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor" class="size-4 shrink-0" aria-hidden="true"><path d="m234.29 114.85-45 38.83L203 211.75a16.4 16.4 0 0 1-24.5 17.82L128 198.49l-50.53 31.08A16.4 16.4 0 0 1 53 211.75l13.76-58.07-45-38.83A16.46 16.46 0 0 1 31.08 86l59-4.76 22.76-55.08a16.36 16.36 0 0 1 30.27 0l22.75 55.08 59 4.76a16.46 16.46 0 0 1 9.37 28.86Z"/></svg>
                </div>
                <p class="text-sm text-muted"><span class="font-semibold text-ink tabular-nums">{{ $site->rating }}</span> {{ $site->rating_note }}</p>
            </div>
        </div>
        <div data-rise class="mt-16 flex flex-col gap-8 border-t border-line pt-8 lg:flex-row lg:items-end lg:justify-between [--i:5]">
            <p class="max-w-[52ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
            <div class="flex flex-wrap items-center gap-3">
                <a href="{{ $site->phone_href }}" class="inline-flex items-center gap-2.5 rounded-xs py-3.5 pr-5 pl-4 text-base font-medium text-ink ring-1 ring-ink/25 ring-inset hover:bg-ink/5 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
                    <span class="tabular-nums">{{ $site->phone }}</span>
                </a>
                <a href="{{ $site->booking_url }}" class="inline-flex items-center gap-2 rounded-xs bg-primary py-3.5 pr-4 pl-6 font-display text-lg font-semibold tracking-[0.08em] text-primary-foreground uppercase hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                    {{ $site->cta_label }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>
