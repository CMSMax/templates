@props([
    'heading' => 'How a job runs',
    'body' => 'The same four steps on a bathroom or a whole house. You always know which one you are in.',
    'items' => [],
])
<section id="process" class="bg-ink py-20 text-canvas md:py-32">
    <div class="mx-auto max-w-7xl px-5 md:px-8">
        <div class="grid gap-6 lg:grid-cols-12 lg:items-end lg:gap-10">
            <h2 class="font-display text-section font-extrabold uppercase text-balance lg:col-span-7">{{ $heading }}</h2>
            <p class="max-w-[44ch] text-lg text-pretty text-canvas/75 lg:col-span-5">{{ $body }}</p>
        </div>
        <ol role="list" class="mt-14 grid border-t border-canvas/25 sm:grid-cols-2 md:mt-20 lg:grid-cols-4">
            @foreach ($items as $step)
                <li class="relative flex flex-col gap-4 border-b border-canvas/25 py-8 sm:pr-8 lg:border-b-0 lg:border-l lg:py-2 lg:pr-0 lg:pl-8 lg:first:border-l-0 lg:first:pl-0" data-reveal>
                    <div class="flex items-center justify-between gap-4 text-sm font-semibold">
                        <span class="flex items-center gap-2.5">
                            <span class="size-2.5 bg-primary" aria-hidden="true"></span>
                            <span class="tabular-nums">Step {{ $loop->iteration }}</span>
                        </span>
                        <span class="text-canvas/60">{{ $step->weeks }}</span>
                    </div>
                    <h3 class="font-display text-4xl leading-none font-extrabold uppercase">{{ $step->title }}</h3>
                    <p class="max-w-[34ch] text-base text-pretty text-canvas/75">{{ $step->body }}</p>
                </li>
            @endforeach
        </ol>
    </div>
</section>
