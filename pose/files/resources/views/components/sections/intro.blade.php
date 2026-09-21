@props([
    'tag' => 'New here',
    'heading' => 'Your first week, every class, $25.',
    'body' => 'Seven days of unlimited classes from the day you first come in. Try the early flow, the slow evening class and everything between, then decide.',
    'pointOne' => 'Starts the day of your first class',
    'pointTwo' => 'Mat, props and a locker included',
    'pointThree' => 'No membership, nothing renews',
    'buttonLabel' => 'Claim your week',
    'buttonLink' => '/visit#contact',
    'image' => '/images/stillness.jpg',
    'imageAlt' => 'A woman sitting cross-legged with her eyes closed on a pink mat in a bright white room',
])
<section id="intro" aria-labelledby="intro-heading" class="scroll-mt-8 px-3 sm:px-4">
    <div class="mx-auto grid max-w-[88rem] overflow-hidden rounded-[2rem] bg-secondary text-secondary-foreground lg:grid-cols-2">
        <div class="px-6 py-16 sm:px-12 sm:py-20 lg:px-16 lg:py-24">
            <p class="inline-flex items-center gap-2 rounded-full bg-spark py-1.5 pr-3.5 pl-2 text-sm font-semibold text-spark-ink">
                <x-pose name="salute" size="size-5"/>
                {{ $tag }}
            </p>
            <h2 id="intro-heading" class="mt-7 max-w-[14ch] font-display text-[clamp(2.5rem,5vw,4.25rem)] leading-[1] font-medium tracking-[-0.04em]">{{ $heading }}</h2>
            <p class="mt-6 max-w-[46ch] text-lg/8 text-secondary-foreground/80">{{ $body }}</p>
            <ul role="list" class="mt-8 flex flex-col gap-3 text-base">
                <li class="flex gap-3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0 text-spark" aria-hidden="true"><path fill-rule="evenodd" d="M16.7 5.3a1 1 0 0 1 0 1.4l-8 8a1 1 0 0 1-1.4 0l-4-4a1 1 0 1 1 1.4-1.4L8 12.58l7.3-7.3a1 1 0 0 1 1.4 0Z" clip-rule="evenodd"/></svg>{{ $pointOne }}</li>
                <li class="flex gap-3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0 text-spark" aria-hidden="true"><path fill-rule="evenodd" d="M16.7 5.3a1 1 0 0 1 0 1.4l-8 8a1 1 0 0 1-1.4 0l-4-4a1 1 0 1 1 1.4-1.4L8 12.58l7.3-7.3a1 1 0 0 1 1.4 0Z" clip-rule="evenodd"/></svg>{{ $pointTwo }}</li>
                <li class="flex gap-3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0 text-spark" aria-hidden="true"><path fill-rule="evenodd" d="M16.7 5.3a1 1 0 0 1 0 1.4l-8 8a1 1 0 0 1-1.4 0l-4-4a1 1 0 1 1 1.4-1.4L8 12.58l7.3-7.3a1 1 0 0 1 1.4 0Z" clip-rule="evenodd"/></svg>{{ $pointThree }}</li>
            </ul>
            <a href="{{ $buttonLink }}" class="mt-10 inline-flex items-center gap-2 rounded-full bg-spark py-4 pr-4 pl-7 text-base font-semibold text-spark-ink hover:bg-spark/90 active:bg-spark/80 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-spark">
                {{ $buttonLabel }}
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
            </a>
        </div>
        <div class="relative min-h-72 lg:min-h-full">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="960" height="640" loading="lazy" class="absolute inset-0 size-full object-cover">
        </div>
    </div>
</section>
