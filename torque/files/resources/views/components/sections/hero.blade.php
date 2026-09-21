@props([
    'heading' => 'Here’s what’s wrong. Here’s what it costs.',
    'body' => 'An independent shop for every make and model. We find the problem, show you photos, and price every line before we start — then fix only what you say yes to.',
    'callLabel' => 'or call',
])
<section class="overflow-hidden pt-12 pb-20 sm:pt-16 lg:pt-20 lg:pb-28">
    <div class="mx-auto grid max-w-7xl grid-cols-1 items-center gap-14 px-5 sm:px-8 lg:grid-cols-12 lg:gap-12">
        <div class="lg:col-span-6">
            <p data-rise class="flex flex-wrap items-center gap-x-3 gap-y-1 text-base text-muted sm:text-sm">
                <span class="flex items-center gap-2 font-semibold text-ink">
                    <span class="relative flex size-2.5" aria-hidden="true">
                        <span class="absolute inset-0 rounded-full bg-primary/30 motion-safe:animate-ping"></span>
                        <span class="relative size-2.5 rounded-full bg-primary"></span>
                    </span>
                    {{ $site->open_summary }}
                </span>
                <span aria-hidden="true">/</span>
                <span>{{ $site->address }}, {{ $site->city }}</span>
            </p>
            <h1 data-rise style="--i: 1" class="mt-6 max-w-[14ch] font-display text-[clamp(3rem,7vw,5.75rem)] leading-[0.92] font-bold tracking-[-0.01em] text-balance text-ink uppercase">{{ $heading }}</h1>
            <p data-rise style="--i: 2" class="mt-7 max-w-[52ch] text-lg/8 text-muted">{{ $body }}</p>
            <div data-rise style="--i: 3" class="mt-9 flex flex-wrap items-center gap-x-5 gap-y-4">
                <a href="{{ $site->cta_link }}" class="inline-flex items-center gap-2 rounded-md bg-primary py-3.5 pr-4 pl-6 text-base font-semibold text-primary-foreground transition-colors duration-150 hover:bg-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">
                    {{ $site->cta_label }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.64l-4.16-3.96a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.16-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd"/></svg>
                </a>
                <p class="text-base text-muted">
                    {{ $callLabel }}
                    <a href="{{ $site->phone_href }}" class="rounded-sm font-display text-xl font-semibold tracking-wide text-ink tabular-nums underline decoration-ink/30 decoration-2 underline-offset-6 transition-colors duration-150 hover:decoration-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $site->phone }}</a>
                </p>
            </div>
            <dl data-rise style="--i: 4" class="mt-12 grid max-w-xl grid-cols-1 gap-x-8 gap-y-4 border-t border-line pt-6 sm:grid-cols-3">
                <div>
                    <dt class="text-sm text-muted">Warranty</dt>
                    <dd class="mt-1 font-display text-lg font-semibold text-ink uppercase">{{ $site->warranty_short }}</dd>
                </div>
                <div>
                    <dt class="text-sm text-muted">Labor rate</dt>
                    <dd class="mt-1 font-display text-lg font-semibold text-ink uppercase">{{ $site->labor_short }}</dd>
                </div>
                <div>
                    <dt class="text-sm text-muted">Works on</dt>
                    <dd class="mt-1 font-display text-lg font-semibold text-ink uppercase">{{ $site->makes }}</dd>
                </div>
            </dl>
        </div>
        <div class="lg:col-span-6 lg:pl-6">
            <div data-mount class="mx-auto max-w-[40rem]">
                <x-plate
                    :characters="$site->short_name"
                    :top="$site->plate_top"
                    :slogan="$site->plate_slogan"
                    :frameTop="$site->plate_frame"
                    :frameBottom="$site->phone"
                    :stickerTop="$site->sticker_top"
                    :stickerBottom="$site->sticker_bottom"
                    :label="$site->plate_label"
                />
            </div>
        </div>
    </div>
</section>
