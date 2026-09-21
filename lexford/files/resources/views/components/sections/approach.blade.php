@props([
    'heading' => 'What working with us looks like',
    'body' => 'Legal trouble is stressful enough. Our process is short, written down, and the same for every client.',
    'image' => '/images/consultation.jpg',
    'imageAlt' => 'An attorney taking notes on a legal pad while listening to a client across her desk.',
    'steps' => [],
])
<section class="bg-surface py-24 lg:py-36">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid items-center gap-y-14 lg:grid-cols-12 lg:gap-x-16">
            <div class="overflow-hidden rounded-[min(3vw,1.5rem)] bg-line lg:col-span-5">
                <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1400" height="1750" loading="lazy" class="aspect-4/5 w-full object-cover">
            </div>
            <div class="lg:col-span-6 lg:col-start-7">
                <h2 class="max-w-[16ch] font-display text-4xl font-light tracking-tight text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
                <p class="mt-6 max-w-[46ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
                <ol role="list" class="mt-12 flex flex-col gap-10">
                    @foreach ($steps as $step)
                        <li class="grid grid-cols-[2.75rem_1fr] gap-x-5">
                            <span class="grid size-11 place-items-center rounded-full border border-line font-display text-lg text-ink tabular-nums" aria-hidden="true">{{ $loop->iteration }}</span>
                            <div class="pt-1.5">
                                <h3 class="font-display text-2xl tracking-tight text-ink">{{ $step->title }}</h3>
                                <p class="mt-2 max-w-[48ch] text-base/7 text-pretty text-muted">{{ $step->body }}</p>
                            </div>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</section>
