@props([
    'heading' => 'Starting is the hard part.',
    'headingItalic' => 'The rest can be gentle.',
    'body' => 'No referral, no waiting list, no forms before we’ve even spoken. Here’s how the first few weeks usually go.',
])
<section aria-labelledby="steps-heading" class="px-3 py-3 sm:px-4">
    <div class="sky-dawn mx-auto max-w-[88rem] overflow-hidden rounded-[clamp(1.25rem,2.5vw,2.25rem)] py-24 lg:py-32">
        <div class="mx-auto max-w-6xl px-5 sm:px-8">
            <h2 id="steps-heading" class="text-[clamp(2.25rem,4.6vw,3.75rem)] leading-[1.02] text-ink">
                <span class="block font-sans font-medium tracking-[-0.04em]">{{ $heading }}</span>
                <span class="block font-display font-light tracking-[-0.025em] italic">{{ $headingItalic }}</span>
            </h2>
            <p class="mt-6 max-w-[48ch] text-lg/8 text-ink/80">{{ $body }}</p>
            <ol role="list" class="mt-16 grid gap-4 md:grid-cols-3">
                @foreach ($site->steps as $step)
                    <li class="flex flex-col rounded-[1.25rem] bg-card/90 p-7 ring-1 ring-ink/5">
                        <div class="flex items-end justify-between gap-4">
                            <span class="font-display text-5xl leading-none font-light text-ink italic tabular-nums">{{ $loop->iteration }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 28" class="h-7 w-12 text-ink" aria-hidden="true">
                                @if ($loop->first)
                                    <path fill="var(--color-primary)" d="M17 23a7 7 0 0 1 14 0Z"/>
                                @elseif ($loop->last)
                                    <circle cx="24" cy="11" r="7" fill="var(--color-primary)"/>
                                @else
                                    <path fill="var(--color-primary)" d="M17 23a7 7 0 0 1 14 0Z" transform="translate(0 -5)"/>
                                    <rect x="17" y="18" width="14" height="5" fill="var(--color-primary)"/>
                                @endif
                                <path fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" d="M4 23.5h40"/>
                            </svg>
                        </div>
                        <h3 class="mt-10 text-xl font-semibold tracking-tight text-ink">{{ $step->title }}</h3>
                        <p class="mt-3 text-base/7 text-muted">{{ $step->body }}</p>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
</section>
