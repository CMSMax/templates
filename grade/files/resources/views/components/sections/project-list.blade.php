@props(['linkLabel' => 'Read the job', 'items' => []])
<section class="pb-20 md:pb-32">
    <ul role="list" class="mx-auto flex max-w-7xl flex-col px-5 md:px-8">
        @foreach ($items as $project)
            <li class="group/row border-t-2 border-ink py-10 [--tilt:-2deg] even:[--tilt:1.5deg] md:py-16" data-reveal>
                <div class="grid gap-y-14 lg:grid-cols-12 lg:gap-x-10">
                    <a href="{{ $project->link }}" class="group relative block lg:col-span-7 lg:group-even/row:order-last lg:group-even/row:col-start-6" tabindex="-1" aria-hidden="true">
                        <div class="overflow-hidden">
                            <img src="{{ $project->image }}" alt="" width="1168" height="880" loading="lazy" decoding="async" class="aspect-[4/3] w-full object-cover transition-transform duration-500 ease-out group-hover:scale-[1.03]">
                        </div>
                        <div class="absolute -bottom-8 left-4 md:left-6">
                            <x-stamp :number="$project->number" :title="$project->title" :location="$project->location" :year="$project->year" :scope="$project->scope" :weeks="$project->weeks"/>
                        </div>
                    </a>
                    <div class="flex flex-col justify-between gap-8 lg:col-span-5 lg:group-even/row:col-start-1 lg:group-even/row:row-start-1">
                        <div>
                            <p class="text-sm font-semibold tabular-nums text-muted">Job {{ $project->number }} · {{ $project->location }} · {{ $project->year }}</p>
                            <h2 class="mt-3 font-display text-5xl leading-[0.92] font-extrabold uppercase text-balance md:text-6xl">
                                <a href="{{ $project->link }}" class="transition-colors duration-150 hover:text-muted">{{ $project->title }}</a>
                            </h2>
                            <p class="mt-5 max-w-[46ch] text-lg text-pretty text-muted">{{ $project->description }}</p>
                        </div>
                        <dl class="grid grid-cols-2 border-t border-line">
                            <div class="flex flex-col gap-1 border-r border-line py-4 pr-4">
                                <dt class="text-sm text-muted">Scope</dt>
                                <dd class="font-semibold">{{ $project->scope }}</dd>
                            </div>
                            <div class="flex flex-col gap-1 py-4 pl-4">
                                <dt class="text-sm text-muted">On site</dt>
                                <dd class="font-semibold tabular-nums">{{ $project->weeks }} weeks</dd>
                            </div>
                        </dl>
                        <a href="{{ $project->link }}" class="group/link inline-flex min-h-12 items-center gap-2 self-start border-b-2 border-ink text-base font-semibold transition-colors duration-150 hover:border-primary">
                            {{ $linkLabel }}<span class="sr-only">: {{ $project->title }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="square" class="size-4 shrink-0 transition-transform duration-150 group-hover/link:translate-x-0.5" aria-hidden="true"><path d="M4 10h11M11 5l5 5-5 5"/></svg>
                        </a>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</section>
