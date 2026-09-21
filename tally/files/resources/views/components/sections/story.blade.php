@props([
    'heading' => 'A practice small enough to know your name.',
    'body' => 'Margaret Hale opened Tally above a hardware shop on Maple Street with six clients, a borrowed desk and an adding machine that still sits by the window. The idea was simple: the owner of a bakery deserves the same care as a company with a finance department.',
    'bodyTwo' => 'Fifteen years on there are nine of us and a little over four hundred clients. We still quote every fee in writing, still close the books by the fifth, and still answer the phone ourselves.',
    'image' => '/images/office.jpg',
    'imageAlt' => 'The Tally office on Maple Street: tall windows, oak desks, shelves of labelled binders and a vintage adding machine in the morning sun.',
    'figures' => [],
])
<section class="py-24 lg:py-32">
    <div class="mx-auto grid max-w-7xl items-start gap-x-16 gap-y-14 px-6 lg:grid-cols-12 lg:px-8">
        <div class="overflow-hidden rounded-lg bg-surface lg:col-span-5">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1280" height="1600" class="aspect-[4/5] w-full object-cover">
        </div>
        <div class="lg:col-span-7 lg:pt-8">
            <h2 class="max-w-[18ch] font-display text-4xl leading-[1.08] font-medium tracking-[-0.03em] text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
            <p class="mt-8 max-w-[60ch] text-lg/8 text-pretty text-ink">{{ $body }}</p>
            <p class="mt-5 max-w-[60ch] text-lg/8 text-pretty text-muted">{{ $bodyTwo }}</p>
            <dl class="mt-12 grid grid-cols-3 border-t border-ink">
                @foreach ($figures as $figure)
                    <div class="border-line pt-5 pr-4 [&:not(:first-child)]:border-l [&:not(:first-child)]:pl-4 sm:[&:not(:first-child)]:pl-6">
                        <dt class="text-sm text-muted">{{ $figure->label }}</dt>
                        <dd class="mt-1 font-mono text-2xl text-ink tabular-nums sm:text-3xl">{{ $figure->value }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</section>
