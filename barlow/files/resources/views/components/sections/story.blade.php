@props([
    'items' => [],
    'heading' => 'Same chairs. Same standards.',
    'body' => 'We opened with two chairs and a promise: nobody leaves until the cut is right. The chairs got a little older, the team got a little bigger, and the promise never changed.',
    'image' => '/images/razor-shave.jpg',
    'imageAlt' => 'A barber shaving a lathered cheek with a straight razor',
    'detail' => '/images/chair.jpg',
    'detailAlt' => 'An oxblood leather barber chair beside a brass lamp',
    'linkLabel' => 'Our story',
    'linkUrl' => '/about',
])
<section id="story" class="scroll-mt-20 py-20 lg:py-32">
    <div class="mx-auto grid max-w-7xl items-center gap-16 px-6 lg:grid-cols-2 lg:gap-24">
        <div class="relative pr-10 pb-16 sm:pr-24 sm:pb-24">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="896" height="1120" loading="lazy" decoding="async" class="aspect-[4/5] w-full object-cover">
            <img src="{{ $detail }}" alt="{{ $detailAlt }}" width="896" height="1120" loading="lazy" decoding="async" class="absolute right-0 bottom-0 aspect-[4/5] w-2/5 border-8 border-canvas object-cover">
        </div>
        <div>
            <h2 class="max-w-[14ch] font-display text-5xl leading-[0.95] font-semibold text-balance text-ink uppercase sm:text-6xl">{{ $heading }}</h2>
            <p class="mt-8 max-w-[48ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
            <dl class="mt-12 grid grid-cols-2 gap-8 border-t border-line pt-10">
                @foreach ($items as $fact)
                    <div class="flex flex-col-reverse gap-3">
                        <dt class="max-w-[22ch] text-base/7 text-pretty text-muted">{{ $fact->label }}</dt>
                        <dd class="font-display text-6xl font-semibold text-ink tabular-nums">{{ $fact->value }}</dd>
                    </div>
                @endforeach
            </dl>
            @if ($linkLabel)
                <p class="mt-12">
                    <a href="{{ $linkUrl }}" class="inline-flex items-center gap-2 font-display text-base font-semibold tracking-[0.12em] text-primary uppercase underline-offset-4 hover:underline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                        {{ $linkLabel }}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                </p>
            @endif
        </div>
    </div>
</section>
