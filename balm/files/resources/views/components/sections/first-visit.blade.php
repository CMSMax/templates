@props([
    'heading' => 'Your first hour, minute by minute.',
    'body' => 'Nobody should have to guess what happens behind the door. Here is the whole of a first session — booked with me, in my room, at my pace, which is slow.',
    'image' => '/images/therapist.jpg',
    'imageAlt' => 'The therapist, seen from behind in a linen apron, smoothing a white sheet over a massage table by a sunlit window',
])
<section id="first-visit" class="scroll-mt-20 py-24 lg:py-32">
    <div class="mx-auto grid max-w-7xl gap-16 px-6 lg:grid-cols-[5fr_7fr] lg:gap-20 lg:px-8">
        <div class="lg:sticky lg:top-28 lg:self-start">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="880" height="1100" loading="lazy" decoding="async" class="aspect-[4/5] w-full rounded-3xl object-cover">
            <p class="mt-5 text-base font-semibold text-ink">{{ $site->therapist }}</p>
            <p class="mt-1 text-sm text-muted">{{ $site->credentials }}</p>
        </div>
        <div>
            <h2 class="max-w-[14ch] font-display text-[clamp(2.5rem,5.5vw,4.5rem)] leading-[1.02] font-normal tracking-[-0.03em] text-balance text-ink">{{ $heading }}</h2>
            <p class="mt-6 max-w-[52ch] text-lg/8 text-muted">{{ $body }}</p>
            <ol role="list" class="mt-14 border-b border-line">
                @foreach ($site->first_visit as $step)
                    <li class="grid grid-cols-[4.5rem_1fr] gap-x-6 border-t border-line py-7 sm:grid-cols-[6rem_1fr]">
                        <p class="font-display text-2xl text-muted tabular-nums sm:text-3xl">{{ $step->time }}</p>
                        <div>
                            <h3 class="text-lg font-semibold text-ink">{{ $step->title }}</h3>
                            <p class="mt-2 text-base/7 text-muted">{{ $step->note }}</p>
                        </div>
                    </li>
                @endforeach
            </ol>
            <figure class="mt-16 rounded-3xl bg-surface p-8 sm:p-10">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 24" fill="currentColor" class="h-6 w-8 text-primary" aria-hidden="true"><path d="M0 24V14.4C0 6.4 4.3 1.6 12.8 0l1.6 3.2C9.6 4.6 7.4 7.4 7.2 11.2H13V24H0Zm18.4 0V14.4C18.4 6.4 22.7 1.6 31.2 0l1.6 3.2c-4.8 1.4-7 4.2-7.2 8H31V24H18.4Z"/></svg>
                <blockquote class="mt-6 font-display text-[1.625rem] leading-[1.3] tracking-tight text-ink sm:text-3xl">
                    <p>{{ $site->review->quote }}</p>
                </blockquote>
                <figcaption class="mt-8 flex flex-wrap items-baseline gap-x-3 gap-y-1 text-base">
                    <span class="font-semibold text-ink">{{ $site->review->name }}</span>
                    <span class="text-muted">{{ $site->review->detail }}</span>
                </figcaption>
            </figure>
        </div>
    </div>
</section>
