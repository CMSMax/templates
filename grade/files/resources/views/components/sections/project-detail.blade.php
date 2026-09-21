@props([
    'backLabel' => 'All projects',
    'moreHeading' => 'More from the log',
    'project' => [],
    'others' => [],
])
<article class="pt-10 pb-20 md:pt-14 md:pb-32">
    <div class="mx-auto max-w-7xl px-5 md:px-8">
        <nav aria-label="Breadcrumb">
            <a href="/projects" class="group inline-flex min-h-11 items-center gap-2 text-sm font-semibold text-muted transition-colors duration-150 hover:text-ink">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="square" class="size-4 shrink-0 transition-transform duration-150 group-hover:-translate-x-0.5" aria-hidden="true"><path d="M16 10H5M9 5l-5 5 5 5"/></svg>
                {{ $backLabel }}
            </a>
        </nav>
        <div class="mt-8 grid gap-8 lg:grid-cols-12 lg:items-end lg:gap-10">
            <h1 class="font-display text-[clamp(3.25rem,8vw,7.5rem)] leading-[0.88] font-extrabold uppercase text-balance lg:col-span-8">{{ $project->title }}</h1>
            <p class="max-w-[44ch] text-lg text-pretty text-muted lg:col-span-4 lg:pb-2">{{ $project->description }}</p>
        </div>
        <dl class="mt-12 grid grid-cols-2 border-y-2 border-ink md:grid-cols-4">
            <div class="flex flex-col gap-1 border-r border-line p-4 pl-0">
                <dt class="text-sm text-muted">Job</dt>
                <dd class="font-semibold tabular-nums">No. {{ $project->number }}</dd>
            </div>
            <div class="flex flex-col gap-1 border-line p-4 md:border-r">
                <dt class="text-sm text-muted">Where</dt>
                <dd class="font-semibold">{{ $project->location }}</dd>
            </div>
            <div class="flex flex-col gap-1 border-t border-r border-line p-4 pl-0 md:border-t-0 md:pl-4">
                <dt class="text-sm text-muted">Scope</dt>
                <dd class="font-semibold">{{ $project->scope }}</dd>
            </div>
            <div class="flex flex-col gap-1 border-t border-line p-4 md:border-t-0">
                <dt class="text-sm text-muted">On site</dt>
                <dd class="font-semibold tabular-nums">{{ $project->weeks }} weeks · {{ $project->year }}</dd>
            </div>
        </dl>
        <figure class="relative mt-12 [--tilt:-2deg]" data-reveal>
            <img src="{{ $project->image }}" alt="{{ $project->imageAlt }}" width="1168" height="880" fetchpriority="high" class="aspect-[4/3] w-full object-cover md:aspect-[16/9]">
            <figcaption class="absolute -bottom-8 left-4 md:-bottom-10 md:left-10">
                <x-stamp :number="$project->number" :title="$project->title" :location="$project->location" :year="$project->year" :scope="$project->scope" :weeks="$project->weeks"/>
            </figcaption>
        </figure>
        <div class="mt-24 grid gap-16 lg:grid-cols-12 lg:gap-10">
            <div class="prose-job max-w-[68ch] lg:col-span-7">{!! $project->content !!}</div>
            <aside class="lg:col-span-4 lg:col-start-9">
                <h2 class="font-display text-3xl leading-none font-extrabold uppercase">{{ $moreHeading }}</h2>
                <ul role="list" class="mt-6 border-t-2 border-ink">
                    @foreach ($others as $other)
                        @if ($other->slug != $project->slug)
                            <li class="border-b border-line">
                                <a href="{{ $other->link }}" class="group flex items-center gap-4 py-4">
                                    <img src="{{ $other->image }}" alt="" width="1168" height="880" loading="lazy" decoding="async" class="aspect-square w-20 shrink-0 object-cover">
                                    <span class="flex min-w-0 flex-col gap-1">
                                        <span class="font-semibold transition-colors duration-150 group-hover:text-muted">{{ $other->title }}</span>
                                        <span class="text-sm text-muted">{{ $other->scope }} · {{ $other->year }}</span>
                                    </span>
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>
</article>
