@props([
    'heading' => 'The same crew, the same schedule, the same standard.',
    'body' => 'Lantern started as two technicians and one van in Wrenfield. We kept the part people liked — you talk to the person who does the work — and added the trades they kept asking us for.',
    'image' => '/images/crew.jpg',
    'imageAlt' => 'Two Lantern technicians standing beside their van in a driveway on a bright morning',
    'pointOne' => 'One number for all of it',
    'pointOneBody' => 'No three-way call between a plumber, an electrician and whoever installed the furnace.',
    'pointTwo' => 'The price before the work',
    'pointTwoBody' => 'A flat quote in writing. If something turns up behind the wall, we stop and re-quote.',
    'pointThree' => 'We leave it clean',
    'pointThreeBody' => 'Floor protection on the way in, old parts on the counter, and a sweep before we go.',
    'statOne' => '14',
    'statOneLabel' => 'Years on these streets',
    'statTwo' => '6,200',
    'statTwoLabel' => 'Visits finished',
    'statThree' => '81%',
    'statThreeLabel' => 'Repairs done in one trip',
])
<section class="border-b border-line py-20 lg:py-32">
    <div class="mx-auto grid max-w-6xl items-start gap-8 px-6 lg:grid-cols-2">
        <div>
            <h2 class="max-w-[22ch] font-display text-[clamp(2rem,3.6vw,3rem)]/[1.05] font-semibold tracking-tight text-balance text-ink">{{ $heading }}</h2>
            <p class="mt-5 max-w-[48ch] text-[1.0625rem]/7 text-muted">{{ $body }}</p>
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1400" height="929" loading="lazy" decoding="async" class="mt-10 aspect-3/2 w-full rounded-xs object-cover outline-1 -outline-offset-1 outline-ink/5">
        </div>
        <dl class="lg:pl-8">
            <div class="border-t border-line py-6">
                <dt class="font-display text-lg font-semibold tracking-tight text-ink">{{ $pointOne }}</dt>
                <dd class="mt-2 max-w-[46ch] text-base/7 text-muted">{{ $pointOneBody }}</dd>
            </div>
            <div class="border-t border-line py-6">
                <dt class="font-display text-lg font-semibold tracking-tight text-ink">{{ $pointTwo }}</dt>
                <dd class="mt-2 max-w-[46ch] text-base/7 text-muted">{{ $pointTwoBody }}</dd>
            </div>
            <div class="border-t border-b border-line py-6">
                <dt class="font-display text-lg font-semibold tracking-tight text-ink">{{ $pointThree }}</dt>
                <dd class="mt-2 max-w-[46ch] text-base/7 text-muted">{{ $pointThreeBody }}</dd>
            </div>
            <div class="mt-10 grid grid-cols-3">
                <div class="pr-4">
                    <dt class="font-display text-3xl font-semibold tracking-tight text-ink tabular-nums">{{ $statOne }}</dt>
                    <dd class="mt-1.5 text-base/6 text-muted sm:text-sm/6">{{ $statOneLabel }}</dd>
                </div>
                <div class="border-l border-line px-4">
                    <dt class="font-display text-3xl font-semibold tracking-tight text-ink tabular-nums">{{ $statTwo }}</dt>
                    <dd class="mt-1.5 text-base/6 text-muted sm:text-sm/6">{{ $statTwoLabel }}</dd>
                </div>
                <div class="border-l border-line pl-4">
                    <dt class="font-display text-3xl font-semibold tracking-tight text-ink tabular-nums">{{ $statThree }}</dt>
                    <dd class="mt-1.5 text-base/6 text-muted sm:text-sm/6">{{ $statThreeLabel }}</dd>
                </div>
            </div>
        </dl>
    </div>
</section>
