@props([
    'eyebrow' => 'Yoga on Alder Street · Seven days a week',
    'heading' => 'Yoga for the body you have today.',
    'body' => 'Six classes, twelve mats a room, four teachers who know your name. New here? Your first week of unlimited classes is $25.',
    'secondaryLabel' => 'See this week’s schedule',
    'secondaryLink' => '/classes#schedule',
    'plateNote' => 'Pick a class by how you want to feel',
])
<section class="overflow-hidden pt-4 pb-20 sm:pt-8 lg:pb-28">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <p data-rise class="flex items-center gap-3 text-sm font-semibold text-primary">
            <span class="size-2 rounded-full bg-primary" aria-hidden="true"></span>
            {{ $eyebrow }}
        </p>
        <h1 data-rise class="mt-6 max-w-[15ch] font-display text-[clamp(3.25rem,8.5vw,7.5rem)] leading-[0.93] font-medium tracking-[-0.05em] text-ink [--i:1]">{{ $heading }}</h1>
        <div class="mt-12 grid gap-12 lg:mt-16 lg:grid-cols-12 lg:gap-10">
            <div class="lg:col-span-4">
                <p data-rise class="max-w-[40ch] text-lg/8 text-muted [--i:2]">{{ $body }}</p>
                <div data-rise class="mt-9 flex flex-wrap items-center gap-x-7 gap-y-4 [--i:3]">
                    <a href="{{ $site->cta_link }}" class="inline-flex items-center gap-2 rounded-full bg-primary py-4 pr-4 pl-7 text-base font-semibold text-primary-foreground hover:bg-primary/90 active:bg-primary/80 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                        {{ $site->cta_label }}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                    @if ($secondaryLabel)
                        <a href="{{ $secondaryLink }}" class="group inline-flex min-h-12 items-center rounded-full text-base font-semibold text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                            <span class="underline decoration-ink/25 underline-offset-[6px] group-hover:decoration-ink">{{ $secondaryLabel }}</span>
                        </a>
                    @endif
                </div>
            </div>
            <div data-rise class="lg:col-span-8 [--i:3]">
                <p class="text-sm text-muted">{{ $plateNote }}</p>
                <ul role="list" class="mt-4 grid grid-cols-2 gap-3 sm:grid-cols-3">
                    @foreach ($classes as $class)
                        <li>
                            @if ($loop->first)
                                <a href="/classes#{{ $class->slug }}" class="group flex h-full flex-col justify-between gap-6 rounded-3xl bg-spark p-5 text-spark-ink hover:bg-spark/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:p-6">
                                    <span class="flex items-start justify-between gap-3">
                                        <span class="text-xs font-semibold tabular-nums">0{{ $loop->iteration }}</span>
                                        <x-pose :name="$class->pose" size="size-14 sm:size-16"/>
                                    </span>
                                    <span class="flex flex-col gap-1">
                                        <span class="font-display text-xl font-medium tracking-tight sm:text-2xl">{{ $class->name }}</span>
                                        <span class="text-sm"><x-level :value="$class->level"/></span>
                                    </span>
                                </a>
                            @else
                                <a href="/classes#{{ $class->slug }}" class="group flex h-full flex-col justify-between gap-6 rounded-3xl bg-card p-5 text-ink ring-1 ring-ink/5 hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:p-6">
                                    <span class="flex items-start justify-between gap-3">
                                        <span class="text-xs font-semibold text-muted tabular-nums">0{{ $loop->iteration }}</span>
                                        <span class="text-primary"><x-pose :name="$class->pose" size="size-14 sm:size-16"/></span>
                                    </span>
                                    <span class="flex flex-col gap-1">
                                        <span class="font-display text-xl font-medium tracking-tight sm:text-2xl">{{ $class->name }}</span>
                                        <span class="text-sm text-muted"><x-level :value="$class->level"/></span>
                                    </span>
                                </a>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
