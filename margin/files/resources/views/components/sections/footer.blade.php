@props(['links', 'about' => 'Small-group and one-to-one tutoring in maths, English, the sciences and entrance exams, taught by qualified teachers.', 'note' => 'Margin is a demonstration tutoring centre. Swap the name, the tutors and the results for your own.'])
<footer class="bg-deep text-deep-ink">
    <div class="mx-auto max-w-6xl px-6 py-16 lg:py-20">
        <div class="grid gap-12 lg:grid-cols-[2fr_1fr_1fr] lg:gap-8">
            <div>
                <a href="/" aria-label="Homepage" class="inline-flex items-center gap-2.5 font-display text-xl font-medium tracking-tight text-deep-ink hover:text-rule focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-deep-ink">
                    <svg viewBox="0 0 28 32" class="h-6 w-auto shrink-0" aria-hidden="true"><path fill="currentColor" fill-rule="evenodd" d="M2 1h21a4 4 0 0 1 4 4v22a4 4 0 0 1-4 4H2V1Zm10 8.25h10v1.5H12v-1.5Zm0 6h10v1.5H12v-1.5Zm0 6h7v1.5h-7v-1.5Z"/><path class="text-accent" fill="currentColor" d="M7.5 1H10v30H7.5z"/></svg>
                    {{ $site->short_name }}
                </a>
                <p class="mt-5 max-w-[44ch] text-base/7 text-deep-muted">{{ $about }}</p>
            </div>
            <div>
                <h2 class="font-display text-base font-medium text-deep-ink">Programs</h2>
                <ul role="list" class="mt-5 flex flex-col gap-3">
                    @foreach ($links as $link)
                        <li class="text-base/6 sm:text-sm/6"><a href="{{ $link->url }}" class="text-deep-muted transition-colors duration-150 hover:text-deep-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-deep-ink">{{ $link->label }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h2 class="font-display text-base font-medium text-deep-ink">Visit or call</h2>
                <ul role="list" class="mt-5 flex flex-col gap-3">
                    <li class="text-base/6 sm:text-sm/6"><a href="{{ $site->phone_href }}" class="text-deep-muted tabular-nums hover:text-deep-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-deep-ink">{{ $site->phone }}</a></li>
                    <li class="text-base/6 sm:text-sm/6"><a href="mailto:{{ $site->email }}" class="text-deep-muted hover:text-deep-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-deep-ink">{{ $site->email }}</a></li>
                    <li class="text-base/6 text-deep-muted sm:text-sm/6">{{ $site->address }}</li>
                    <li class="text-base/6 text-deep-muted sm:text-sm/6">{{ $site->hours_note }}</li>
                </ul>
            </div>
        </div>
        <div class="mt-16 flex flex-wrap items-center justify-between gap-4 border-t border-deep-muted/25 pt-6">
            <p class="text-base/6 text-deep-muted sm:text-sm/6">{{ $site->name }}</p>
            <p class="max-w-[62ch] text-base/6 text-deep-muted sm:text-sm/6">{{ $note }}</p>
        </div>
    </div>
</footer>
