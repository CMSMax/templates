@props(['eyebrow' => 'Family & cosmetic dentistry in Springfield', 'heading' => 'A fresh start for every smile.', 'intro' => 'Unhurried check-ups, honest prices and same-day help when something hurts — for kids, parents and the people who have put this off for years.', 'secondaryLabel' => 'See treatments & prices', 'secondaryHref' => '/treatments', 'rating' => '4.9', 'ratingNote' => 'from 640 Google reviews', 'image' => '/images/hero.jpg', 'imageAlt' => 'A patient laughing in a mint dental chair beside a sunny window'])
<section class="px-3 pt-1 sm:px-4">
    <div class="relative overflow-hidden rounded-[2rem] bg-mint">
        <div class="mx-auto max-w-7xl px-5 pt-12 sm:px-10 sm:pt-16 lg:pt-20">
            <p data-rise style="--i:0" class="flex items-center gap-2.5 text-sm font-semibold tracking-wide text-ink uppercase"><span class="size-2.5 rounded-full bg-pop" aria-hidden="true"></span>{{ $eyebrow }}</p>
            <h1 data-rise style="--i:1" class="mt-6 max-w-[13ch] font-display text-[clamp(3rem,8.4vw,7.25rem)] leading-[0.92] font-semibold tracking-[-0.045em] text-balance text-ink">{{ $heading }}</h1>
            <div class="mt-10 grid items-end gap-10 lg:mt-12 lg:grid-cols-12 lg:gap-8">
                <div data-rise style="--i:2" class="flex flex-col gap-8 pb-10 lg:col-span-4 lg:self-stretch lg:justify-between lg:pt-2 lg:pb-14">
                    <p class="flex items-center gap-3 text-sm text-ink/80">
                        <span class="flex text-pop" aria-hidden="true">
                            <svg viewBox="0 0 20 20" fill="currentColor" class="size-4"><path d="M10 1.5l2.6 5.3 5.9.9-4.3 4.1 1 5.8L10 14.9l-5.2 2.7 1-5.8L1.5 7.7l5.9-.9z"/></svg>
                            <svg viewBox="0 0 20 20" fill="currentColor" class="size-4"><path d="M10 1.5l2.6 5.3 5.9.9-4.3 4.1 1 5.8L10 14.9l-5.2 2.7 1-5.8L1.5 7.7l5.9-.9z"/></svg>
                            <svg viewBox="0 0 20 20" fill="currentColor" class="size-4"><path d="M10 1.5l2.6 5.3 5.9.9-4.3 4.1 1 5.8L10 14.9l-5.2 2.7 1-5.8L1.5 7.7l5.9-.9z"/></svg>
                            <svg viewBox="0 0 20 20" fill="currentColor" class="size-4"><path d="M10 1.5l2.6 5.3 5.9.9-4.3 4.1 1 5.8L10 14.9l-5.2 2.7 1-5.8L1.5 7.7l5.9-.9z"/></svg>
                            <svg viewBox="0 0 20 20" fill="currentColor" class="size-4"><path d="M10 1.5l2.6 5.3 5.9.9-4.3 4.1 1 5.8L10 14.9l-5.2 2.7 1-5.8L1.5 7.7l5.9-.9z"/></svg>
                        </span>
                        <span><strong class="font-semibold text-ink">{{ $rating }}</strong> {{ $ratingNote }}</span>
                    </p>
                    <div>
                    <p class="max-w-[38ch] text-lg/relaxed text-pretty text-ink/80">{{ $intro }}</p>
                    <div class="mt-8 flex flex-wrap items-center gap-3">
                        <a href="/contact" class="rounded-full bg-accent px-6 py-3.5 font-semibold text-accent-ink transition duration-200 hover:bg-ink active:scale-[0.97] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ $site->cta_label }}</a>
                        <a href="{{ $secondaryHref }}" class="rounded-full bg-canvas/60 px-6 py-3.5 font-semibold text-ink transition duration-200 hover:bg-canvas active:scale-[0.97] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ $secondaryLabel }}</a>
                    </div>
                    </div>
                </div>
                <div class="-mx-5 sm:mx-0 lg:col-span-8">
                    <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1600" height="1195" fetchpriority="high" class="aspect-[4/3] w-full object-cover sm:rounded-t-[1.5rem] lg:aspect-[16/11]">
                </div>
            </div>
        </div>
    </div>
</section>
