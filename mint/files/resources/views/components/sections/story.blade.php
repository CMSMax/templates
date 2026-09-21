@props(['eyebrow' => 'Our practice', 'heading' => 'Built for people who used to dread the dentist.', 'body' => 'Dr. Helen Marsh opened Mint in 2011 with four chairs, big windows and one rule: explain everything before doing anything. Fifteen years on the rule hasn’t changed. We still book longer appointments than most practices, still write every plan down, and still answer the phone ourselves.', 'image' => '/images/practice.jpg', 'imageAlt' => 'A calm treatment room with a white dental chair, oak cabinets and a mint wall', 'statOne' => '2011', 'statOneLabel' => 'Opened on Linden Avenue', 'statTwo' => '9,400', 'statTwoLabel' => 'Patients on our books', 'statThree' => '45 min', 'statThreeLabel' => 'A standard check-up'])
<section class="px-5 py-20 sm:px-8 lg:py-32">
    <div class="mx-auto max-w-7xl">
        <div class="grid gap-10 lg:grid-cols-12 lg:gap-8">
            <div data-reveal class="lg:col-span-5">
                <p class="flex items-center gap-2.5 text-sm font-semibold tracking-wide text-muted uppercase"><span class="size-2 rounded-full bg-pop" aria-hidden="true"></span>{{ $eyebrow }}</p>
                <h2 class="mt-5 max-w-[16ch] font-display text-4xl leading-[1.02] font-semibold tracking-[-0.03em] text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
            </div>
            <p data-reveal class="max-w-[58ch] text-lg/relaxed text-pretty text-muted lg:col-span-6 lg:col-start-7 lg:pt-10">{{ $body }}</p>
        </div>
        <img data-reveal src="{{ $image }}" alt="{{ $imageAlt }}" width="1600" height="1062" loading="lazy" class="mt-14 aspect-[16/9] w-full rounded-[1.75rem] object-cover lg:aspect-[21/9]">
        <dl data-reveal class="mt-10 grid gap-8 sm:grid-cols-3">
            <div class="flex flex-col border-t border-line pt-5">
                <dt class="text-muted">{{ $statOneLabel }}</dt>
                <dd class="order-first font-display text-5xl font-semibold tracking-tight text-ink tabular-nums">{{ $statOne }}</dd>
            </div>
            <div class="flex flex-col border-t border-line pt-5">
                <dt class="text-muted">{{ $statTwoLabel }}</dt>
                <dd class="order-first font-display text-5xl font-semibold tracking-tight text-ink tabular-nums">{{ $statTwo }}</dd>
            </div>
            <div class="flex flex-col border-t border-line pt-5">
                <dt class="text-muted">{{ $statThreeLabel }}</dt>
                <dd class="order-first font-display text-5xl font-semibold tracking-tight text-ink tabular-nums">{{ $statThree }}</dd>
            </div>
        </dl>
    </div>
</section>
