@props([
    'problems',
    'heading' => 'Tutoring that shows up on the report card.',
    'intro' => 'Maths, English, the sciences and entrance exams for ages 8 to 18 — taught by qualified teachers who still mark in red pen and tell you exactly what changed.',
    'ctaLabel' => 'Book a free assessment',
    'ctaUrl' => '/contact',
    'secondaryLabel' => 'See the programs',
    'secondaryUrl' => '/programs',
    'factOne' => 'Qualified teachers only',
    'factTwo' => 'Groups of four or fewer',
    'factThree' => 'A report every four weeks',
    'sheetTitle' => 'Algebra — worksheet 7',
    'sheetName' => 'Maya R., Grade 9',
    'grade' => 'A−',
    'gradeNote' => 'was a C+ in September',
    'sheetNote' => 'Nearly — square the whole bracket',
])
<section class="relative overflow-hidden border-b border-line">
    <div aria-hidden="true" class="ruled absolute inset-0 opacity-60"></div>
    <div class="relative mx-auto grid max-w-6xl items-center gap-14 px-6 pt-14 pb-20 lg:grid-cols-[minmax(0,1.15fr)_minmax(0,1fr)] lg:gap-16 lg:pt-24 lg:pb-28">
        <div class="relative lg:pl-10">
            <div aria-hidden="true" class="absolute top-0 bottom-0 -left-px w-px bg-accent/70 max-lg:hidden"></div>
            <h1 data-rise class="max-w-[15ch] font-display text-[clamp(2.75rem,5.6vw,5rem)]/[1.02] font-normal tracking-[-0.02em] text-balance text-ink">{{ $heading }}</h1>
            <p data-rise class="mt-7 max-w-[48ch] text-[1.125rem]/8 text-muted [--i:1]">{{ $intro }}</p>
            <div data-rise class="mt-10 flex flex-wrap items-center gap-x-7 gap-y-3 max-sm:flex-col max-sm:items-stretch [--i:2]">
                <a href="{{ $ctaUrl }}" class="rounded-xs bg-accent px-6 py-3.5 text-center font-medium text-accent-ink shadow-press transition duration-150 ease-out hover:bg-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent active:scale-[0.98]">{{ $ctaLabel }}</a>
                <a href="{{ $secondaryUrl }}" class="py-3 text-center font-medium text-ink underline decoration-rule decoration-2 underline-offset-[6px] transition-colors duration-150 hover:decoration-accent focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ $secondaryLabel }}</a>
            </div>
            <ul role="list" data-rise class="mt-14 flex flex-wrap gap-x-8 gap-y-3 text-[0.9375rem] text-muted [--i:3]">
                <li class="flex items-center gap-2"><svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0 text-accent" aria-hidden="true"><path d="m2.5 8.5 3.5 3.5 7.5-8"/></svg>{{ $factOne }}</li>
                <li class="flex items-center gap-2"><svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0 text-accent" aria-hidden="true"><path d="m2.5 8.5 3.5 3.5 7.5-8"/></svg>{{ $factTwo }}</li>
                <li class="flex items-center gap-2"><svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0 text-accent" aria-hidden="true"><path d="m2.5 8.5 3.5 3.5 7.5-8"/></svg>{{ $factThree }}</li>
            </ul>
        </div>
        <figure data-rise class="relative mx-auto w-full max-w-md [--i:2] lg:max-w-none">
            <div class="relative rotate-[1.25deg] rounded-sm bg-surface px-7 pt-7 pb-9 shadow-sheet outline-1 -outline-offset-1 outline-ink/8 sm:px-10 sm:pt-9">
                <div aria-hidden="true" class="absolute top-0 bottom-0 left-5 w-px bg-accent/60 sm:left-7"></div>
                <div class="flex items-start justify-between gap-4 pl-3 sm:pl-4">
                    <div>
                        <p class="font-display text-xl font-medium text-ink">{{ $sheetTitle }}</p>
                        <p class="mt-1 text-sm text-muted">{{ $sheetName }}</p>
                    </div>
                    <div class="relative -mt-1 grid size-20 shrink-0 place-items-center">
                        <svg viewBox="0 0 90 70" fill="none" class="absolute inset-0 size-full text-accent" aria-hidden="true"><path data-pen pathLength="1" d="M14 40C8 22 34 6 58 9c22 3 30 22 20 38-10 15-40 20-58 11C6 51 5 38 16 27" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/></svg>
                        <span class="font-hand text-[2.5rem]/none text-accent">{{ $grade }}</span>
                    </div>
                </div>
                <ol role="list" class="mt-7 pl-3 sm:pl-4">
                    @foreach ($problems as $problem)
                        <li class="grid grid-cols-[1.5rem_minmax(0,1fr)_auto] items-baseline gap-x-2 border-t border-rule py-3.5 text-[0.9375rem]">
                            <span class="text-muted tabular-nums">{{ $loop->iteration }}.</span>
                            <span>
                                <span class="block text-muted">{{ $problem->question }}</span>
                                @if ($problem->correct)
                                    <span class="mt-1 block font-medium text-ink tabular-nums">{{ $problem->answer }}</span>
                                @else
                                    <span class="mt-1 flex flex-wrap items-baseline gap-x-3 tabular-nums"><span class="font-medium text-ink line-through decoration-accent decoration-2">{{ $problem->answer }}</span><span class="font-hand text-2xl/none text-accent">{{ $problem->correction }}</span></span>
                                @endif
                            </span>
                            @if ($problem->correct)
                                <svg viewBox="0 0 26 20" fill="none" class="h-5 w-6 text-accent" aria-label="Correct"><path data-pen pathLength="1" style="--i: {{ $loop->iteration }}" d="M2 11.5 9 18 24 2" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            @else
                                <span class="sr-only">Corrected</span>
                            @endif
                        </li>
                    @endforeach
                </ol>
                <p class="mt-3 pl-3 font-hand text-2xl/tight text-accent sm:pl-4">{{ $sheetNote }}</p>
            </div>
            <figcaption class="absolute -bottom-6 -left-2 -rotate-2 rounded-xs bg-ink px-3.5 py-2 text-sm font-medium text-canvas shadow-tag sm:-left-6">{{ $gradeNote }}</figcaption>
        </figure>
    </div>
</section>
