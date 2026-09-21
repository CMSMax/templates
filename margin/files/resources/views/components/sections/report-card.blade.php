@props([
    'items',
    'heading' => 'Last term, on paper.',
    'body' => 'Five of our students, shared with their families’ permission: the grade they arrived with, and the one on their spring report.',
    'margin' => 'every one moved up',
    'cardTitle' => 'Spring term report',
    'cardMeta' => 'Term 2 · 2026',
    'signedBy' => 'C. Whitlock',
    'signedRole' => 'Head of maths',
    'footnote' => 'Grades as they appeared on each student’s school report.',
])
<section class="relative overflow-hidden border-b border-line bg-panel py-20 lg:py-32">
    <div aria-hidden="true" class="ruled absolute inset-0 opacity-50"></div>
    <div class="relative mx-auto grid max-w-6xl grid-cols-1 items-start gap-14 px-6 lg:grid-cols-[minmax(0,20rem)_minmax(0,1fr)] lg:gap-20">
        <div class="lg:sticky lg:top-32">
            <h2 class="max-w-[12ch] font-display text-[clamp(2.25rem,4vw,3.5rem)]/[1.02] font-normal tracking-[-0.02em] text-balance text-ink">{{ $heading }}</h2>
            <p class="mt-6 max-w-[38ch] text-base/7 text-muted">{{ $body }}</p>
            <p class="mt-8 flex -rotate-2 items-center gap-2 font-hand text-[1.75rem]/none text-accent">
                <svg viewBox="0 0 40 24" fill="none" class="h-6 w-10 shrink-0 max-lg:rotate-90 lg:-scale-x-100" aria-hidden="true"><path d="M2 12c10-8 22-8 34 0m0 0-7-7m7 7-8 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                {{ $margin }}
            </p>
        </div>
        <div class="relative min-w-0 rounded-sm bg-surface shadow-sheet outline-1 -outline-offset-1 outline-ink/8">
            <div aria-hidden="true" class="absolute top-0 bottom-0 left-6 w-px bg-accent/60 sm:left-10"></div>
            <div class="flex flex-wrap items-baseline justify-between gap-x-6 gap-y-1 border-b-2 border-ink/80 py-6 pr-6 pl-10 sm:pr-10 sm:pl-16">
                <p class="font-display text-2xl font-medium tracking-[-0.01em] text-ink">{{ $site->name }} — {{ $cardTitle }}</p>
                <p class="text-sm text-muted tabular-nums">{{ $cardMeta }}</p>
            </div>
            <ul role="list" class="sm:hidden">
                @foreach ($items as $row)
                    <li class="flex items-center justify-between gap-4 border-b border-rule py-4 pr-5 pl-10 last:border-b-0">
                        <p class="min-w-0">
                            <span class="block font-medium text-ink">{{ $row->student }}</span>
                            <span class="block text-sm text-muted">{{ $row->subject }} · {{ $row->year }}</span>
                        </p>
                        <p class="flex shrink-0 items-center gap-2">
                            <span class="sr-only">Started on</span>
                            <span class="font-display text-lg text-muted tabular-nums">{{ $row->started }}</span>
                            <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-4 text-muted" aria-hidden="true"><path d="M3 8h10m-4-4 4 4-4 4"/></svg>
                            <span class="sr-only">now</span>
                            <span class="relative inline-grid min-w-14 place-items-center px-2.5 py-1">
                                <svg viewBox="0 0 90 56" fill="none" preserveAspectRatio="none" class="absolute inset-0 size-full text-accent" aria-hidden="true"><path d="M12 34C7 18 30 5 54 7c20 2 31 15 24 29-7 13-36 17-56 10C8 41 5 32 14 23" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" vector-effect="non-scaling-stroke"/></svg>
                                <span class="font-hand text-[1.75rem]/none text-accent tabular-nums">{{ $row->now }}</span>
                            </span>
                        </p>
                    </li>
                @endforeach
            </ul>
            <div class="overflow-x-auto max-sm:hidden">
                <table class="w-full min-w-[34rem] text-left">
                    <thead>
                        <tr class="border-b border-rule text-[0.8125rem] font-medium tracking-[0.04em] text-muted uppercase">
                            <th scope="col" class="py-3.5 pr-4 pl-10 font-medium sm:pl-16">Student</th>
                            <th scope="col" class="py-3.5 pr-4 font-medium">Subject</th>
                            <th scope="col" class="py-3.5 pr-4 text-center font-medium">Started</th>
                            <th scope="col" class="py-3.5 pr-4 text-center font-medium">Now</th>
                            <th scope="col" class="py-3.5 pr-6 text-right font-medium sm:pr-10">Weeks</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $row)
                            <tr class="border-b border-rule last:border-b-0">
                                <th scope="row" class="py-5 pr-4 pl-10 text-left font-normal sm:pl-16">
                                    <span class="block font-medium text-ink">{{ $row->student }}</span>
                                    <span class="block text-sm text-muted">{{ $row->year }}</span>
                                </th>
                                <td class="py-5 pr-4 text-ink">{{ $row->subject }}</td>
                                <td class="py-5 pr-4 text-center font-display text-xl text-muted tabular-nums">{{ $row->started }}</td>
                                <td class="py-5 pr-4 text-center">
                                    <span class="relative inline-grid min-w-16 place-items-center px-3 py-1.5">
                                        <svg viewBox="0 0 90 56" fill="none" preserveAspectRatio="none" class="absolute inset-0 size-full text-accent" aria-hidden="true"><path data-pen data-pen-later pathLength="1" d="M12 34C7 18 30 5 54 7c20 2 31 15 24 29-7 13-36 17-56 10C8 41 5 32 14 23" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" vector-effect="non-scaling-stroke"/></svg>
                                        <span class="font-hand text-[2rem]/none text-accent tabular-nums">{{ $row->now }}</span>
                                    </span>
                                </td>
                                <td class="py-5 pr-6 text-right text-muted tabular-nums sm:pr-10">{{ $row->weeks }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="flex flex-wrap items-end justify-between gap-x-8 gap-y-4 border-t border-rule py-6 pr-6 pl-10 sm:pr-10 sm:pl-16">
                <p class="max-w-[40ch] text-sm/6 text-muted">{{ $footnote }}</p>
                <p class="text-right">
                    <span class="block font-hand text-[1.75rem]/none text-ink">{{ $signedBy }}</span>
                    <span class="mt-1 block border-t border-ink/40 pt-1 text-xs text-muted">{{ $signedRole }}</span>
                </p>
            </div>
        </div>
    </div>
</section>
