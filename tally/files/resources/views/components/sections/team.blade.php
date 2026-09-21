@props([
    'heading' => 'The people who’ll do your work',
    'body' => 'No call centre, no juniors you’ll never meet. One of these four will know your file.',
    'items' => [],
])
<section class="border-t border-line bg-surface py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
            <h2 class="max-w-[16ch] font-display text-4xl leading-[1.08] font-medium tracking-[-0.03em] text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
            <p class="max-w-[40ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
        </div>
        <ul role="list" class="mt-16 grid gap-x-8 gap-y-14 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($items as $person)
                <li>
                    <div class="overflow-hidden rounded-lg bg-canvas">
                        <img src="{{ $person->image }}" alt="Portrait of {{ $person->name }}" width="480" height="560" loading="lazy" class="aspect-[6/7] w-full object-cover object-top">
                    </div>
                    <h3 class="mt-5 font-display text-lg font-medium tracking-tight text-ink">{{ $person->name }}</h3>
                    <p class="text-sm text-primary">{{ $person->role }}</p>
                    <p class="mt-3 text-base/7 text-pretty text-muted">{{ $person->bio }}</p>
                </li>
            @endforeach
        </ul>
    </div>
</section>
