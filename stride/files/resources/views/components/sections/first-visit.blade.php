@props([
    'heading' => 'Your first visit, minute by minute.',
    'body' => 'Fifty-five minutes, one therapist, no hand-offs to an aide. Here’s where the time goes.',
    'image' => '/images/squat.jpg',
    'imageAlt' => 'A patient holds a controlled split squat against a lime resistance band while his physical therapist watches his form',
])
<section id="first-visit" aria-labelledby="first-visit-heading" class="scroll-mt-8 py-20 lg:py-28">
    <div class="mx-auto grid max-w-6xl items-center gap-12 px-5 sm:px-8 lg:grid-cols-[5fr_7fr] lg:gap-16">
        <img src="{{ $image }}" alt="{{ $imageAlt }}" width="896" height="1120" loading="lazy" decoding="async" class="aspect-[4/5] w-full rounded-[1.75rem] object-cover outline-1 -outline-offset-1 outline-ink/5 max-lg:max-h-[32rem] max-lg:aspect-[4/3]">
        <div>
            <h2 id="first-visit-heading" class="max-w-[16ch] font-display text-[clamp(2.25rem,4.4vw,3.5rem)] leading-[1.02] font-semibold tracking-[-0.04em] text-balance text-ink">{{ $heading }}</h2>
            <p class="mt-5 text-lg/8 text-muted">{{ $body }}</p>
            <ol role="list" class="relative mt-12 flex flex-col gap-9 before:absolute before:top-3 before:bottom-3 before:left-[5rem] before:w-px before:bg-line sm:before:left-[6rem]">
                @foreach ($site->first_visit as $moment)
                    <li class="relative grid grid-cols-[4rem_1fr] gap-x-8 sm:grid-cols-[5rem_1fr]">
                        <p class="pt-0.5 text-right font-display text-lg font-semibold text-ink">{{ $moment->time }}</p>
                        <div class="relative">
                            <span class="absolute top-2 -left-[1.4375rem] size-3.5 rounded-full bg-primary ring-4 ring-canvas outline-1 outline-ink/20" aria-hidden="true"></span>
                            <h3 class="font-display text-xl font-semibold tracking-[-0.02em] text-ink">{{ $moment->title }}</h3>
                            <p class="mt-1.5 text-base/7 text-muted">{{ $moment->body }}</p>
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
</section>
