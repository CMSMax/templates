@props([
    'eyebrow' => 'Your first 30 days',
    'heading' => 'From keys handed over to your first deposit.',
    'steps' => [],
])
<section class="bg-ink py-20 text-canvas lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <p class="text-sm font-medium text-canvas/70">{{ $eyebrow }}</p>
        <h2 class="mt-4 max-w-[20ch] font-display text-4xl font-medium tracking-tight text-balance sm:text-5xl">{{ $heading }}</h2>
        <ol role="list" class="mt-16 grid gap-10 sm:grid-cols-2 lg:grid-cols-4 lg:gap-0">
            @foreach ($steps as $step)
                <li class="relative border-l border-canvas/15 pl-6 lg:border-l-0 lg:border-t lg:pt-8 lg:pr-8 lg:pl-0">
                    <span class="absolute top-1.5 -left-[5px] size-2.5 rounded-full bg-primary lg:-top-[5px] lg:left-0" aria-hidden="true"></span>
                    <p class="text-sm font-medium text-primary tabular-nums">{{ $step->marker }}</p>
                    <h3 class="mt-3 font-display text-2xl font-medium tracking-tight">{{ $step->title }}</h3>
                    <p class="mt-3 max-w-[36ch] text-base/7 text-pretty text-canvas/70">{{ $step->body }}</p>
                </li>
            @endforeach
        </ol>
    </div>
</section>
