@props([
    'tuitionNote' => 'Tuition is billed monthly. Sibling and part-day rates are available — ask us on your tour.',
])
<section aria-label="All programs" class="pb-20 lg:pb-28">
    <div class="mx-auto flex max-w-6xl flex-col gap-4 px-5 sm:px-8">
        @foreach ($programs as $program)
            <article id="{{ $program->slug }}" class="grid scroll-mt-8 items-center gap-8 rounded-[2.5rem] bg-card p-3 ring-1 ring-line sm:p-4 lg:grid-cols-2 lg:gap-14">
                <img src="{{ $program->image }}" alt="{{ $program->image_alt }}" width="1168" height="880" loading="lazy" decoding="async" class="aspect-[4/3] w-full rounded-[2rem] object-cover @if ($loop->even) lg:order-last @endif">
                <div class="px-4 pb-6 sm:px-6 lg:px-4 lg:py-8">
                    <p class="inline-flex rounded-full bg-primary px-3.5 py-1 text-sm font-semibold text-primary-foreground tabular-nums">{{ $program->ages }}</p>
                    <h2 class="mt-5 font-display text-4xl font-semibold tracking-tight text-ink sm:text-5xl">{{ $program->name }}</h2>
                    <p class="mt-5 text-lg/8 text-muted">{{ $program->details }}</p>
                    <dl class="mt-8 grid grid-cols-1 gap-x-8 gap-y-4 border-t border-line pt-6 sm:grid-cols-3">
                        <div>
                            <dt class="text-sm text-muted">Ratio</dt>
                            <dd class="mt-1 font-medium text-ink">{{ $program->ratio }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm text-muted">Schedule</dt>
                            <dd class="mt-1 font-medium text-ink">{{ $program->schedule }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm text-muted">Tuition</dt>
                            <dd class="mt-1 font-medium text-ink">{{ $program->tuition }}</dd>
                        </div>
                    </dl>
                </div>
            </article>
        @endforeach
        <p class="mt-4 text-center text-sm text-muted">{{ $tuitionNote }}</p>
    </div>
</section>
