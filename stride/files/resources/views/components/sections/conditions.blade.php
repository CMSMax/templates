@props([
    'heading' => 'Where does it hurt?',
    'body' => 'Most of what walks through our door fits on this list. If yours doesn’t, call — if we’re not the right people, we’ll tell you who is.',
    'image' => '/images/hands.jpg',
    'imageAlt' => 'A physical therapist’s hands assessing a patient’s hip and knee on a treatment table',
    'askLabel' => 'Not sure? Ask a therapist',
])
<section id="conditions" aria-labelledby="conditions-heading" class="scroll-mt-8 border-t border-line py-20 lg:py-28">
    <div class="mx-auto grid max-w-6xl gap-12 px-5 sm:px-8 lg:grid-cols-[5fr_7fr] lg:gap-16">
        <div class="lg:sticky lg:top-10 lg:self-start">
            <h2 id="conditions-heading" class="font-display text-[clamp(2.25rem,4.4vw,3.5rem)] leading-[1.02] font-semibold tracking-[-0.04em] text-balance text-ink">{{ $heading }}</h2>
            <p class="mt-5 text-lg/8 text-muted">{{ $body }}</p>
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1024" height="688" loading="lazy" decoding="async" class="mt-10 aspect-[3/2] w-full rounded-[1.25rem] object-cover outline-1 -outline-offset-1 outline-ink/5 max-lg:hidden">
        </div>
        <div>
            <ol role="list" class="border-t border-ink">
                @foreach ($site->conditions as $condition)
                    <li class="grid grid-cols-[3rem_1fr] gap-x-4 gap-y-2 border-b border-line py-7 sm:grid-cols-[4rem_14rem_1fr] sm:gap-x-6">
                        <p class="font-display text-base font-semibold text-muted sm:pt-1.5" aria-hidden="true">0{{ $loop->iteration }}</p>
                        <h3 class="font-display text-2xl font-semibold tracking-[-0.03em] text-ink">{{ $condition->area }}</h3>
                        <p class="text-base/7 text-muted max-sm:col-start-2 sm:pt-1">{{ $condition->examples }}</p>
                    </li>
                @endforeach
            </ol>
            <a href="{{ $site->phone_href }}" class="group mt-8 inline-flex min-h-12 items-center gap-3 rounded-full text-base font-semibold text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">
                <span class="grid size-10 place-items-center rounded-full bg-surface group-hover:bg-primary" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </span>
                <span class="underline decoration-ink/25 underline-offset-[6px] group-hover:decoration-ink">{{ $askLabel }} · <span class="whitespace-nowrap tabular-nums">{{ $site->phone }}</span></span>
            </a>
        </div>
    </div>
</section>
