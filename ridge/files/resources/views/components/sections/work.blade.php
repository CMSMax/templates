@props([
    'heading' => 'Recent roofs.',
    'body' => 'Every job gets a roof report: the neighbourhood, the material, the size, and how long we were there.',
    'linkLabel' => 'See every roof',
    'linkHref' => '/projects',
    'items' => [],
])
<section class="py-20 md:py-32">
    <div class="mx-auto max-w-7xl px-5 md:px-8">
        <div class="flex flex-col gap-6 md:flex-row md:items-end md:justify-between">
            <div>
                <h2 class="font-display text-section font-semibold text-balance">{{ $heading }}</h2>
                <p class="mt-5 max-w-[48ch] text-lg text-pretty text-muted">{{ $body }}</p>
            </div>
            <a href="{{ $linkHref }}" class="group inline-flex min-h-12 items-center gap-2 self-start text-base font-semibold underline decoration-line decoration-2 underline-offset-6 hover:decoration-ink md:self-auto">
                {{ $linkLabel }}
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0 transition-transform duration-150 group-hover:translate-x-0.5" aria-hidden="true"><path d="M4 10h11M11 5l5 5-5 5"/></svg>
            </a>
        </div>
        <ul role="list" class="work-grid mt-14 grid gap-x-10 gap-y-14 md:mt-20 lg:grid-cols-12">
            @foreach ($items as $project)
                @break($loop->iteration == 4)
                <li class="lg:col-span-5 lg:first:col-span-7 lg:first:row-span-2 lg:[&:nth-child(3)]:col-start-8" data-reveal>
                    <x-roof-card :project="$project"/>
                </li>
            @endforeach
        </ul>
    </div>
</section>
