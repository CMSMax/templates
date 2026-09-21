@props([
    'label' => 'Programs',
    'heading' => 'Four programs, one coach watching every rep.',
    'body' => 'Every class is written by our head coach and taught by someone who knows your name and your numbers. Pick the program that fits your week — most members mix two.',
    'image' => '/images/coach.jpg',
    'imageAlt' => 'A coach watches a small group class swing kettlebells on a bright concrete floor',
])
<section id="programs" class="border-b border-line py-20 lg:py-32">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="grid gap-6 lg:grid-cols-12 lg:gap-8">
            <p class="font-display text-[0.9375rem] font-bold tracking-[0.14em] text-muted uppercase lg:col-span-3">{{ $label }}</p>
            <div class="lg:col-span-9">
                <h2 class="max-w-[22ch] font-display text-[clamp(2.75rem,6vw,5rem)] leading-[0.9] font-black text-ink uppercase">{{ $heading }}</h2>
                <p class="mt-6 max-w-[58ch] text-lg/8 text-muted">{{ $body }}</p>
            </div>
        </div>
        <div class="mt-14 grid gap-12 lg:mt-20 lg:grid-cols-12 lg:gap-8">
            <ol class="lg:col-span-8">
                @foreach ($programs as $program)
                    <li data-plate="{{ $program->plate }}" class="grid grid-cols-[auto_minmax(0,1fr)] gap-x-5 gap-y-4 border-t border-line py-8 last:border-b sm:grid-cols-[5.5rem_minmax(0,1fr)_auto] sm:gap-x-8">
                        <span class="font-display text-6xl leading-[0.8] font-black text-ink/15 tabular-nums sm:text-7xl" aria-hidden="true">{{ $program->number }}</span>
                        <div>
                            <h3 class="flex items-center gap-3 font-display text-4xl leading-none font-black tracking-wide text-ink uppercase">
                                <span class="plate size-6" aria-hidden="true"></span>
                                {{ $program->name }}
                            </h3>
                            <p class="mt-3 max-w-[52ch] text-base/7 text-muted">{{ $program->summary }}</p>
                        </div>
                        <dl class="col-span-2 flex flex-wrap gap-x-6 gap-y-1 text-sm text-muted sm:col-span-1 sm:flex-col sm:gap-y-1.5 sm:text-right">
                            <div><dt class="sr-only">Class length</dt><dd class="font-semibold text-ink">{{ $program->length }}</dd></div>
                            <div><dt class="sr-only">How often</dt><dd>{{ $program->frequency }}</dd></div>
                            <div><dt class="sr-only">Level</dt><dd>{{ $program->level }}</dd></div>
                        </dl>
                    </li>
                @endforeach
            </ol>
            <div class="lg:col-span-4">
                <img src="{{ $image }}" alt="{{ $imageAlt }}" width="896" height="1120" loading="lazy" decoding="async" class="aspect-[4/5] w-full rounded-sm object-cover lg:sticky lg:top-28">
            </div>
        </div>
    </div>
</section>
