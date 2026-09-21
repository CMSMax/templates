@props([
    'heading' => 'Session fees',
    'note' => 'Fees are the same in person and online. Payment is due at each session by card or HSA/FSA card.',
])
<section aria-labelledby="fees-heading" class="py-24 lg:py-32">
    <div class="mx-auto grid max-w-6xl gap-12 px-5 sm:px-8 lg:grid-cols-[4fr_8fr] lg:gap-20">
        <div>
            <h2 id="fees-heading" class="font-display text-[clamp(2rem,3.6vw,3rem)] leading-[1.05] font-light tracking-[-0.025em] text-ink italic">{{ $heading }}</h2>
            <p class="mt-5 max-w-[36ch] text-base/7 text-muted">{{ $note }}</p>
        </div>
        <ul role="list" class="border-t border-ink">
            @foreach ($fees as $fee)
                <li class="border-b border-line py-6">
                    <div class="flex items-baseline gap-3">
                        <h3 class="text-lg font-semibold tracking-tight text-ink sm:text-xl">{{ $fee->name }}</h3>
                        <span class="min-w-6 flex-1 translate-y-[-0.3em] border-b border-dotted border-ink/35" aria-hidden="true"></span>
                        <p class="shrink-0 text-sm text-muted tabular-nums">{{ $fee->length }}</p>
                        <p class="shrink-0 font-display text-2xl text-ink tabular-nums sm:text-3xl">{{ $fee->price }}</p>
                    </div>
                    <p class="mt-1.5 max-w-[52ch] text-base/7 text-muted">{{ $fee->detail }}</p>
                </li>
            @endforeach
        </ul>
    </div>
</section>
