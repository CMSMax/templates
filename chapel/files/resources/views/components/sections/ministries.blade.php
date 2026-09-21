@props([
    'heading' => 'Life together',
    'headingEmphasis' => 'the rest of the week.',
    'body' => 'Sunday is where it starts. Most of what we do happens between Sundays — in classrooms, kitchens and living rooms all over town.',
    'image' => '',
    'imageAlt' => '',
])
<section id="ministries" aria-labelledby="ministries-heading" class="scroll-mt-8 py-24 sm:py-28 lg:py-36">
    <div class="mx-auto grid max-w-6xl gap-14 px-5 sm:px-8 lg:grid-cols-[5fr_7fr] lg:gap-20">
        <div class="lg:sticky lg:top-12 lg:self-start">
            <h2 id="ministries-heading" class="font-display text-[clamp(2.5rem,5vw,4rem)] leading-[1.05] font-normal tracking-[-0.02em] text-balance text-ink">
                <span class="block">{{ $heading }}</span>
                <span class="block italic">{{ $headingEmphasis }}</span>
            </h2>
            <p class="mt-6 max-w-[44ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
            <div class="mt-12 h-72 w-full max-w-[18rem] max-lg:hidden">
                <x-window :image="$image" :alt="$imageAlt"/>
            </div>
        </div>
        <ul role="list" class="border-b border-line">
            @foreach ($ministries as $ministry)
                <li class="grid gap-x-8 gap-y-2 border-t border-line py-8 sm:grid-cols-[1fr_auto] sm:items-baseline">
                    <h3 class="font-display text-[1.875rem] leading-tight font-normal tracking-[-0.01em] text-ink">{{ $ministry->name }}</h3>
                    <p class="smallcaps text-base text-primary sm:row-span-2 sm:text-right">{{ $ministry->when }}</p>
                    <p class="max-w-[52ch] text-base/7 text-pretty text-muted">{{ $ministry->description }}</p>
                </li>
            @endforeach
        </ul>
    </div>
</section>
