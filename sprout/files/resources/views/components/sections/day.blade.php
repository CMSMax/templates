@props([
    'eyebrow' => 'A day at Sprout',
    'heading' => 'Rhythm, not rush',
    'body' => 'Children thrive on a day they can predict. Ours moves gently between busy and calm, indoors and out — with plenty of time to finish what they started.',
    'imageMain' => '/images/garden.jpg',
    'imageMainAlt' => 'Preschoolers watering raised vegetable beds in a sunny garden',
    'imageInset' => '/images/story.jpg',
    'imageInsetAlt' => 'A teacher reading a picture book to toddlers on a woven rug',
])
<section id="day" aria-labelledby="day-heading" class="scroll-mt-24 bg-surface py-20 lg:py-28">
    <div class="mx-auto grid max-w-6xl gap-14 px-5 sm:px-8 lg:grid-cols-[5fr_6fr] lg:gap-20">
        <div class="relative lg:sticky lg:top-8 lg:self-start">
            <img src="{{ $imageMain }}" alt="{{ $imageMainAlt }}" width="896" height="1120" loading="lazy" decoding="async" class="aspect-[4/5] w-[82%] rounded-[2rem] object-cover">
            <img src="{{ $imageInset }}" alt="{{ $imageInsetAlt }}" width="896" height="1120" loading="lazy" decoding="async" class="absolute right-0 -bottom-8 aspect-square w-[52%] rounded-[1.75rem] object-cover ring-8 ring-surface">
        </div>
        <div class="max-lg:mt-4">
            <p class="text-sm font-semibold text-muted">{{ $eyebrow }}</p>
            <h2 id="day-heading" class="mt-4 font-display text-[clamp(2.25rem,4.4vw,3.5rem)] leading-[1.05] font-semibold tracking-tight text-balance text-ink">{{ $heading }}</h2>
            <p class="mt-6 text-lg/8 text-muted">{{ $body }}</p>
            <ol role="list" class="mt-12">
                @foreach ($site->day as $moment)
                    <li class="grid grid-cols-[5.5rem_1fr] gap-x-5 sm:grid-cols-[6.5rem_1fr]">
                        <p class="pt-0.5 font-display text-lg font-medium text-ink tabular-nums">{{ $moment->time }}</p>
                        <div class="relative border-l-2 border-line pl-7 @if ($loop->last) pb-0 @else pb-9 @endif">
                            <span class="absolute top-1.5 -left-[7px] size-3 rounded-full bg-primary ring-4 ring-surface" aria-hidden="true"></span>
                            <h3 class="font-display text-xl font-medium text-ink">{{ $moment->title }}</h3>
                            <p class="mt-1.5 text-base/7 text-muted">{{ $moment->body }}</p>
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
</section>
