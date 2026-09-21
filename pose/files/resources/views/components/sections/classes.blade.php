@props([
    'eyebrow' => 'Classes',
    'heading' => 'Six classes. Pick by how you want to feel.',
    'body' => 'Every class is capped at twelve mats and taught by the same four teachers, so you learn a pose once and keep it.',
    'linkLabel' => 'Read about every class',
    'linkHref' => '/classes',
])
<section id="classes" aria-labelledby="classes-heading" class="scroll-mt-8 py-20 sm:py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="grid gap-6 lg:grid-cols-12 lg:items-end lg:gap-10">
            <div class="lg:col-span-7">
                <p class="text-sm font-semibold text-primary">{{ $eyebrow }}</p>
                <h2 id="classes-heading" class="mt-4 max-w-[18ch] font-display text-[clamp(2.25rem,4.5vw,3.75rem)] leading-[1.02] font-medium tracking-[-0.035em] text-ink">{{ $heading }}</h2>
            </div>
            <p class="max-w-[46ch] text-lg/8 text-muted lg:col-span-5">{{ $body }}</p>
        </div>
        <ul role="list" class="mt-14 border-t border-ink lg:mt-20">
            @foreach ($classes as $class)
                <li class="border-b border-line">
                    <a href="/classes#{{ $class->slug }}" class="group grid grid-cols-[auto_1fr] items-center gap-x-5 gap-y-3 rounded-2xl py-6 hover:bg-card focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:grid-cols-[auto_auto_1fr_auto] sm:gap-x-8 lg:grid-cols-[3rem_4.5rem_5fr_4fr_auto_5rem] lg:px-4">
                        <span class="text-sm font-semibold text-muted tabular-nums max-sm:hidden">0{{ $loop->iteration }}</span>
                        <span class="grid size-16 place-items-center rounded-2xl bg-surface text-primary group-hover:bg-spark group-hover:text-spark-ink">
                            <x-pose :name="$class->pose" size="size-11"/>
                        </span>
                        <span class="flex flex-col gap-1">
                            <span class="font-display text-2xl font-medium tracking-tight text-ink sm:text-3xl">{{ $class->name }}</span>
                            <span class="text-sm text-muted lg:hidden">{{ $class->length }}</span>
                        </span>
                        <span class="text-base/7 text-muted max-lg:col-span-full lg:max-w-[40ch]">{{ $class->summary }}</span>
                        <span class="text-sm whitespace-nowrap text-ink max-lg:hidden">
                            <x-level :value="$class->level"/>
                            <span class="mt-1 block text-muted">{{ $class->length }}</span>
                        </span>
                        <img src="{{ $class->image }}" alt="" width="512" height="640" loading="lazy" class="aspect-[4/5] w-20 rounded-xl object-cover outline-1 -outline-offset-1 outline-ink/5 max-lg:hidden">
                    </a>
                </li>
            @endforeach
        </ul>
        @if ($linkLabel)
            <a href="{{ $linkHref }}" class="group mt-10 inline-flex min-h-12 items-center gap-2 rounded-full text-base font-semibold text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                <span class="underline decoration-ink/25 underline-offset-[6px] group-hover:decoration-ink">{{ $linkLabel }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0 transition-transform duration-200 group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
            </a>
        @endif
    </div>
</section>
