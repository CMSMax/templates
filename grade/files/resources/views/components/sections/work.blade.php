@props([
    'heading' => 'Recent work',
    'body' => 'Every job gets a number, a stamp, and a sign-off. Here are three from the last two years.',
    'linkLabel' => 'See every job',
    'linkHref' => '/projects',
    'items' => [],
])
<section id="work" class="bg-surface py-20 md:py-32">
    <div class="mx-auto max-w-7xl px-5 md:px-8">
        <div class="flex flex-col gap-6 md:flex-row md:items-end md:justify-between">
            <div>
                <h2 class="font-display text-section font-extrabold uppercase text-balance">{{ $heading }}</h2>
                <p class="mt-5 max-w-[48ch] text-lg text-pretty text-muted">{{ $body }}</p>
            </div>
            <a href="{{ $linkHref }}" class="group inline-flex min-h-12 items-center gap-2 self-start border-b-2 border-ink text-base font-semibold text-ink transition-colors duration-150 hover:border-primary md:self-auto">
                {{ $linkLabel }}
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="square" class="size-4 shrink-0 transition-transform duration-150 group-hover:translate-x-0.5" aria-hidden="true"><path d="M4 10h11M11 5l5 5-5 5"/></svg>
            </a>
        </div>
        <ul role="list" class="mt-14 grid gap-x-10 gap-y-20 md:mt-20 lg:grid-cols-12">
            @foreach ($items as $project)
                @break($loop->iteration == 4)
                <li class="group/card [--tilt:-2deg] even:[--tilt:1.5deg] lg:col-span-5 lg:first:col-span-7 lg:first:row-span-2 lg:[&:nth-child(2)]:mt-24" data-reveal>
                    <a href="{{ $project->link }}" class="group block">
                        <div class="relative">
                            <div class="overflow-hidden">
                                <img src="{{ $project->image }}" alt="{{ $project->imageAlt }}" width="1168" height="880" loading="lazy" decoding="async" class="aspect-[4/3] w-full object-cover transition-transform duration-500 ease-out group-hover:scale-[1.03] lg:group-first/card:aspect-[4/5]">
                            </div>
                            <div class="absolute -bottom-8 left-4 md:left-6">
                                <x-stamp :number="$project->number" :title="$project->title" :location="$project->location" :year="$project->year" :scope="$project->scope" :weeks="$project->weeks"/>
                            </div>
                        </div>
                        <div class="mt-14 flex items-start justify-between gap-6">
                            <p class="max-w-[52ch] text-base text-pretty text-muted">{{ $project->description }}</p>
                            <span class="flex size-11 shrink-0 items-center justify-center border border-ink transition-colors duration-150 group-hover:bg-primary group-hover:border-primary" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="square" class="size-4"><path d="M6 14 14 6M7 6h7v7"/></svg>
                            </span>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>
