@props([
    'heading' => 'What happens after you call.',
    'stepOne' => 'A person answers',
    'stepOneBody' => 'No phone tree and no callback queue. Tell us what the house is doing and we book the window.',
    'stepTwo' => 'We look, then we price',
    'stepTwoBody' => 'The technician diagnoses on site and hands you a flat price before anything is opened up.',
    'stepThree' => 'It gets finished',
    'stepThreeBody' => 'Four out of five repairs are done on the first visit, because the common parts are already on the van.',
])
<section class="border-b border-line py-20 lg:py-32">
    <div class="mx-auto max-w-6xl px-6">
        <h2 class="max-w-[20ch] font-display text-[clamp(2rem,3.6vw,3rem)]/[1.05] font-semibold tracking-tight text-balance text-ink">{{ $heading }}</h2>
        <ol role="list" class="mt-12 grid gap-8 lg:grid-cols-3">
            <li class="flex items-start gap-5 border-t border-line pt-6">
                <span class="grid size-7 shrink-0 place-items-center bg-accent font-display text-sm font-semibold text-accent-ink tabular-nums">1</span>
                <div>
                    <h3 class="font-display text-xl font-semibold tracking-tight text-ink">{{ $stepOne }}</h3>
                    <p class="mt-2 max-w-[42ch] text-base/7 text-muted">{{ $stepOneBody }}</p>
                </div>
            </li>
            <li class="flex items-start gap-5 border-t border-line pt-6">
                <span class="grid size-7 shrink-0 place-items-center bg-accent font-display text-sm font-semibold text-accent-ink tabular-nums">2</span>
                <div>
                    <h3 class="font-display text-xl font-semibold tracking-tight text-ink">{{ $stepTwo }}</h3>
                    <p class="mt-2 max-w-[42ch] text-base/7 text-muted">{{ $stepTwoBody }}</p>
                </div>
            </li>
            <li class="flex items-start gap-5 border-t border-line pt-6">
                <span class="grid size-7 shrink-0 place-items-center bg-accent font-display text-sm font-semibold text-accent-ink tabular-nums">3</span>
                <div>
                    <h3 class="font-display text-xl font-semibold tracking-tight text-ink">{{ $stepThree }}</h3>
                    <p class="mt-2 max-w-[42ch] text-base/7 text-muted">{{ $stepThreeBody }}</p>
                </div>
            </li>
        </ol>
    </div>
</section>
