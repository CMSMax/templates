@props([
    'bookLabel' => 'See times',
    'bookLink' => '#schedule',
])
<section aria-label="Class guide" class="pb-20 sm:pb-24 lg:pb-32">
    <div class="mx-auto flex max-w-7xl flex-col gap-4 px-5 sm:px-8 lg:gap-6">
        @foreach ($classes as $class)
            <article id="{{ $class->slug }}" class="grid scroll-mt-8 overflow-hidden rounded-[2rem] bg-card ring-1 ring-ink/5 md:grid-cols-12">
                <img src="{{ $class->image }}" alt="{{ $class->imageAlt }}" width="512" height="640" loading="lazy" class="aspect-[4/3] w-full object-cover object-[center_60%] md:col-span-5 md:aspect-auto md:h-full lg:col-span-4">
                <div class="flex flex-col justify-between gap-10 p-7 sm:p-10 md:col-span-7 lg:col-span-8 lg:p-14">
                    <div>
                        <div class="flex items-center justify-between gap-6">
                            <span class="text-sm font-semibold text-muted tabular-nums">No. 0{{ $loop->iteration }}</span>
                            <span class="grid size-16 place-items-center rounded-2xl bg-surface text-primary" aria-hidden="true">
                                <x-pose :name="$class->pose" size="size-11"/>
                            </span>
                        </div>
                        <h2 class="mt-6 font-display text-[clamp(2rem,3.6vw,3rem)] leading-[1.02] font-medium tracking-[-0.035em] text-ink">{{ $class->name }}</h2>
                        <p class="mt-4 max-w-[56ch] text-lg/8 text-muted">{{ $class->detail }}</p>
                    </div>
                    <div class="flex flex-wrap items-center justify-between gap-6 border-t border-line pt-6">
                        <p class="flex flex-wrap items-center gap-x-6 gap-y-2 text-base text-ink">
                            <x-level :value="$class->level"/>
                            <span class="text-muted">{{ $class->length }}</span>
                        </p>
                        <a href="{{ $bookLink }}" class="rounded-full px-5 py-3 text-sm font-semibold text-ink ring-1 ring-ink/15 ring-inset hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $bookLabel }}</a>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
</section>
