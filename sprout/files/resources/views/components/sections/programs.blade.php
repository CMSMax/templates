@props([
    'eyebrow' => 'Programs by age',
    'heading' => 'Room to grow, at every age',
    'body' => 'Each classroom is built around what children that age need most — from cuddles and floor time to big questions and first letters. Small groups, the same caring teachers, all year.',
    'linkLabel' => 'Compare all programs',
    'linkHref' => '/programs',
])
<section id="programs" aria-labelledby="programs-heading" class="scroll-mt-24 py-20 lg:py-28">
    <div class="mx-auto max-w-6xl px-5 sm:px-8">
        <div class="grid gap-6 lg:grid-cols-2 lg:items-end lg:gap-16">
            <div>
                <p class="text-sm font-semibold text-muted">{{ $eyebrow }}</p>
                <h2 id="programs-heading" class="mt-4 max-w-[16ch] font-display text-[clamp(2.25rem,4.4vw,3.5rem)] leading-[1.05] font-semibold tracking-tight text-balance text-ink">{{ $heading }}</h2>
            </div>
            <div>
                <p class="text-lg/8 text-muted">{{ $body }}</p>
                <a href="{{ $linkHref }}" class="mt-5 inline-flex items-center gap-1.5 rounded-sm font-semibold text-ink underline decoration-primary decoration-2 underline-offset-[6px] transition-colors duration-150 hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">
                    {{ $linkLabel }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0" aria-hidden="true"><path d="M7 7h10v10M7 17L17 7"/></svg>
                </a>
            </div>
        </div>
        <div class="mt-14 flex items-end gap-4 lg:mt-20">
            <div class="ruler w-7 shrink-0 self-stretch border-r border-line max-lg:hidden" aria-hidden="true"></div>
            <ol role="list" class="grid flex-1 gap-3 sm:grid-cols-2 lg:grid-cols-4 lg:items-end lg:gap-4">
                @foreach ($programs as $program)
                    <li>
                        <a href="/programs#{{ $program->slug }}" class="group flex h-full flex-col rounded-[2rem] p-7 transition-transform duration-200 hover:-translate-y-1 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink @if ($loop->last) bg-secondary text-secondary-foreground @else bg-card text-ink ring-1 ring-line @endif @if ($loop->iteration == 1) lg:min-h-[20rem] @elseif ($loop->iteration == 2) lg:min-h-[24rem] @elseif ($loop->iteration == 3) lg:min-h-[28rem] @else lg:min-h-[32rem] @endif">
                            <span class="flex items-start justify-between gap-4">
                                <span class="grid shrink-0 place-items-center rounded-full bg-primary text-primary-foreground @if ($loop->iteration == 1) size-10 @elseif ($loop->iteration == 2) size-11 @elseif ($loop->iteration == 3) size-12 @else size-14 @endif" aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-1/2"><path d="M14 9.536V7a4 4 0 0 1 4-4h1.5a.5.5 0 0 1 .5.5V5a4 4 0 0 1-4 4a4 4 0 0 0-4 4c0 2 1 3 1 5a5 5 0 0 1-1 3M4 9a5 5 0 0 1 8 4a5 5 0 0 1-8-4m1 12h14"/></svg>
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0 opacity-50 transition-opacity duration-150 group-hover:opacity-100" aria-hidden="true"><path d="M7 7h10v10M7 17L17 7"/></svg>
                            </span>
                            <span class="mt-8 block text-sm font-semibold tabular-nums @if ($loop->last) text-primary @else text-muted @endif">{{ $program->ages }}</span>
                            <span class="mt-1.5 block font-display text-[1.75rem] leading-tight font-semibold tracking-tight">{{ $program->name }}</span>
                            <span class="mt-3 block text-base/7 @if ($loop->last) text-secondary-foreground/80 @else text-muted @endif">{{ $program->description }}</span>
                            <span class="min-h-8 flex-1" aria-hidden="true"></span>
                            <span class="flex flex-wrap gap-x-4 gap-y-1 border-t pt-4 text-sm font-medium @if ($loop->last) border-secondary-foreground/20 @else border-line @endif">
                                <span>{{ $program->ratio }}</span>
                                <span class="@if ($loop->last) text-secondary-foreground/80 @else text-muted @endif">{{ $program->schedule }}</span>
                            </span>
                        </a>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
</section>
