@props([
    'backLabel' => 'All roofs',
    'moreHeading' => 'More roofs',
    'project' => [],
    'others' => [],
])
<article class="pt-10 pb-20 md:pt-14 md:pb-32">
    <div class="mx-auto max-w-7xl px-5 md:px-8">
        <nav aria-label="Breadcrumb">
            <a href="/projects" class="group inline-flex min-h-11 items-center gap-2 text-sm font-semibold text-muted hover:text-ink">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0 transition-transform duration-150 group-hover:-translate-x-0.5" aria-hidden="true"><path d="M16 10H5M9 5l-5 5 5 5"/></svg>
                {{ $backLabel }}
            </a>
        </nav>
        <div class="mt-8 grid gap-8 lg:grid-cols-12 lg:items-end lg:gap-10">
            <div class="lg:col-span-8">
                <p class="bulletin text-muted">{{ $project->place }} · {{ $project->storm }}</p>
                <h1 class="mt-4 max-w-[20ch] font-display text-hero font-semibold text-balance">{{ $project->title }}</h1>
            </div>
            <p class="max-w-[44ch] text-lg text-pretty text-muted lg:col-span-4 lg:pb-2">{{ $project->description }}</p>
        </div>
        <figure class="mt-12" data-reveal>
            <img src="{{ $project->image }}" alt="{{ $project->imageAlt }}" width="1600" height="1205" fetchpriority="high" class="aspect-[4/3] w-full rounded-lg object-cover md:aspect-[16/8]">
        </figure>
        <div class="mt-16 grid gap-16 lg:grid-cols-12 lg:gap-10">
            <div class="lg:col-span-7">
                <dl class="grid grid-cols-2 gap-px overflow-hidden rounded-md border border-line bg-line sm:grid-cols-4">
                    <div class="bg-surface p-4">
                        <dt class="text-sm text-muted">Where</dt>
                        <dd class="mt-1 font-semibold">{{ $project->place }}</dd>
                    </div>
                    <div class="bg-surface p-4">
                        <dt class="text-sm text-muted">Material</dt>
                        <dd class="mt-1 font-semibold">{{ $project->material }}</dd>
                    </div>
                    <div class="bg-surface p-4">
                        <dt class="text-sm text-muted">Roof size</dt>
                        <dd class="mt-1 font-semibold tabular-nums">{{ $project->size }}</dd>
                    </div>
                    <div class="bg-surface p-4">
                        <dt class="text-sm text-muted">On site</dt>
                        <dd class="mt-1 font-semibold tabular-nums">{{ $project->days }}</dd>
                    </div>
                </dl>
                <div class="prose-roof mt-12 max-w-[68ch]">{!! $project->content !!}</div>
            </div>
            <aside class="lg:col-span-4 lg:col-start-9">
                <h2 class="font-display text-2xl font-semibold tracking-tight">{{ $moreHeading }}</h2>
                <ul role="list" class="mt-6 border-t border-ink">
                    @foreach ($others as $other)
                        @if ($other->slug != $project->slug)
                            <li class="border-b border-line">
                                <a href="{{ $other->link }}" class="group flex items-center gap-4 py-4">
                                    <img src="{{ $other->image }}" alt="" aria-hidden="true" width="1600" height="1205" loading="lazy" decoding="async" class="aspect-square w-20 shrink-0 rounded-md object-cover">
                                    <span class="flex min-w-0 flex-col gap-1">
                                        <span class="font-semibold group-hover:underline group-hover:decoration-primary group-hover:decoration-2 group-hover:underline-offset-4">{{ $other->title }}</span>
                                        <span class="text-sm text-muted">{{ $other->material }} · {{ $other->place }}</span>
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
