@props([
    'items' => [],
    'heading' => 'How a custom piece happens.',
    'body' => 'Four steps, no surprises. Most custom work is on skin within three weeks of the consult.',
    'image' => '/images/stencil.jpg',
    'imageAlt' => 'A tattoo artist in black gloves tracing a design onto stencil paper at a bright desk',
])
<section class="bg-secondary py-20 text-secondary-foreground lg:py-32">
    <div class="mx-auto grid max-w-7xl gap-14 px-5 sm:px-8 lg:grid-cols-[5fr_7fr] lg:gap-20">
        <div>
            <h2 class="max-w-[12ch] font-display text-[clamp(2.25rem,5vw,4rem)] leading-[1] tracking-[-0.02em] text-balance uppercase">{{ $heading }}</h2>
            <p class="mt-6 max-w-[40ch] text-lg/8 text-secondary-foreground/75">{{ $body }}</p>
            <div class="relative mt-12 max-w-sm -rotate-2 bg-surface p-2.5 max-lg:hidden">
                <span class="tape -top-3 right-8 rotate-6" aria-hidden="true"></span>
                <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1000" height="1250" loading="lazy" decoding="async" class="aspect-[4/5] w-full object-cover">
            </div>
        </div>
        <ol role="list" class="border-t border-secondary-foreground/25">
            @foreach ($items as $step)
                <li class="grid grid-cols-[3.5rem_1fr] gap-x-4 border-b border-secondary-foreground/25 py-8 sm:grid-cols-[5rem_1fr] sm:py-10">
                    <p class="font-display text-3xl leading-none text-primary tabular-nums sm:text-4xl" aria-hidden="true">{{ $loop->iteration }}</p>
                    <div>
                        <h3 class="font-display text-2xl uppercase sm:text-3xl">{{ $step->title }}</h3>
                        <p class="mt-3 max-w-[48ch] text-base/7 text-secondary-foreground/75 sm:text-lg/8">{{ $step->body }}</p>
                    </div>
                </li>
            @endforeach
        </ol>
    </div>
</section>
