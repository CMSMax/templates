@props([
    'kicker' => 'How we work',
    'heading' => 'From the first call to the last dance',
    'body' => 'Four stages, one planner who knows your wedding by heart, and a shared checklist you can open any time.',
    'items' => [],
])
<section id="process" class="bg-surface py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <p class="label-caps text-muted">{{ $kicker }}</p>
        <div class="mt-5 grid gap-x-16 gap-y-6 lg:grid-cols-12 lg:items-end">
            <h2 class="max-w-[18ch] font-display text-4xl tracking-tight text-balance text-ink sm:text-5xl lg:col-span-7">{{ $heading }}</h2>
            <p class="max-w-[46ch] text-lg/8 text-muted lg:col-span-5">{{ $body }}</p>
        </div>
        <ol role="list" class="mt-16 grid gap-y-12 border-l border-ink/20 pl-8 sm:mt-20 lg:grid-cols-4 lg:gap-x-10 lg:border-t lg:border-l-0 lg:pl-0">
            @foreach ($items as $step)
                <li class="relative lg:pt-10">
                    <span class="absolute top-2 -left-[2.3125rem] size-2.5 rounded-full bg-primary ring-4 ring-surface lg:-top-[0.3125rem] lg:left-0" aria-hidden="true"></span>
                    <p class="font-display text-5xl text-primary tabular-nums" aria-hidden="true">0{{ $loop->iteration }}</p>
                    <h3 class="mt-5 font-display text-2xl tracking-tight text-ink">{{ $step->title }}</h3>
                    <p class="mt-3 text-base/7 text-muted">{{ $step->body }}</p>
                    <p class="label-caps mt-5 text-ink/70">{{ $step->when }}</p>
                </li>
            @endforeach
        </ol>
    </div>
</section>
