@props([
    'eyebrow' => 'Our approach',
    'heading' => 'Safe hands. Open minds.',
    'body' => 'We keep groups small so every child is known, and we hire teachers who love this age — then give them time to plan, train, and stay. Children learn through play; families get honest, daily communication.',
    'bodySecondary' => 'Secure keypad entry, allergy-aware kitchen, and daily cleaning checklists come standard.',
])
<section id="approach" aria-labelledby="approach-heading" class="scroll-mt-24 py-20 lg:py-28">
    <div class="mx-auto max-w-6xl px-5 sm:px-8">
        <div class="grid gap-12 rounded-[2.5rem] bg-secondary p-8 text-secondary-foreground sm:p-14 lg:grid-cols-[6fr_5fr] lg:gap-20 lg:p-20">
            <div>
                <p class="text-sm font-semibold text-primary">{{ $eyebrow }}</p>
                <h2 id="approach-heading" class="mt-4 max-w-[14ch] font-display text-[clamp(2.25rem,4.4vw,3.5rem)] leading-[1.05] font-semibold tracking-tight text-balance">{{ $heading }}</h2>
                <p class="mt-6 text-lg/8 text-secondary-foreground/80">{{ $body }}</p>
                <p class="mt-4 text-base/7 text-secondary-foreground/80">{{ $bodySecondary }}</p>
                <p class="mt-8 inline-flex items-center gap-2 rounded-full bg-secondary-foreground/10 px-4 py-2 text-sm font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0 text-primary" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12l2 2l4-4"/></svg>
                    {{ $site->license_note }}
                </p>
            </div>
            <dl class="flex flex-col justify-center divide-y divide-secondary-foreground/15">
                @foreach ($site->facts as $fact)
                    <div class="flex flex-col-reverse gap-1 py-6 first:pt-0 last:pb-0">
                        <dt class="text-base/7 text-secondary-foreground/80">{{ $fact->label }}</dt>
                        <dd class="font-display text-5xl font-semibold tracking-tight text-primary tabular-nums sm:text-6xl">{{ $fact->value }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</section>
