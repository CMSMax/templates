@props(['project' => []])
{{-- One finished roof: the photo, then its roof report as a ruled readout. --}}
<a href="{{ $project->link }}" class="group flex h-full flex-col">
    <div class="overflow-hidden rounded-lg">
        <img src="{{ $project->image }}" alt="{{ $project->imageAlt }}" width="1600" height="1205" loading="lazy" decoding="async" class="aspect-[4/3] w-full object-cover transition-transform duration-500 ease-out group-hover:scale-[1.03] lg:in-[.work-grid>li:first-child]:aspect-[5/6]">
    </div>
    <div class="mt-5 flex items-start justify-between gap-6">
        <div class="min-w-0">
            <p class="bulletin text-muted">{{ $project->place }} · {{ $project->storm }}</p>
            <h3 class="mt-1.5 font-display text-xl font-semibold tracking-tight text-balance group-hover:underline group-hover:decoration-primary group-hover:decoration-2 group-hover:underline-offset-4 md:text-2xl">{{ $project->title }}</h3>
        </div>
        <span class="flex size-10 shrink-0 items-center justify-center rounded-full border border-line transition-colors duration-150 group-hover:border-primary group-hover:bg-primary" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4"><path d="M6 14 14 6M7 6h7v7"/></svg>
        </span>
    </div>
    <dl class="mt-4 grid grid-cols-3 border-t border-line pt-3 text-sm">
        <div>
            <dt class="text-muted">Material</dt>
            <dd class="font-semibold">{{ $project->material }}</dd>
        </div>
        <div>
            <dt class="text-muted">Size</dt>
            <dd class="font-semibold tabular-nums">{{ $project->size }}</dd>
        </div>
        <div>
            <dt class="text-muted">On site</dt>
            <dd class="font-semibold tabular-nums">{{ $project->days }}</dd>
        </div>
    </dl>
</a>
