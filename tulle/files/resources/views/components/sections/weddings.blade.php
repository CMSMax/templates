@props([
    'kicker' => 'Weddings, by palette',
    'heading' => 'Every wedding starts as a board',
    'body' => 'Before a single vendor is booked, we pin down four colors. They decide the flowers, the linen, the paper, and the light. Here are three recent ones.',
    'boardLabel' => 'The board',
    'items' => [],
])
<section id="weddings" class="border-t border-ink/10 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-x-16 gap-y-6 lg:grid-cols-12 lg:items-end">
            <div class="lg:col-span-7">
                <p class="label-caps text-muted">{{ $kicker }}</p>
                <h2 class="mt-5 max-w-[18ch] font-display text-4xl tracking-tight text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
            </div>
            <p class="max-w-[46ch] text-lg/8 text-muted lg:col-span-5">{{ $body }}</p>
        </div>
        <ol role="list" class="mt-16 flex flex-col gap-24 sm:mt-24 sm:gap-32">
            @foreach ($items as $wedding)
                <li class="group/board grid gap-x-16 gap-y-10 lg:grid-cols-12 lg:items-center">
                    <div class="lg:col-span-7 lg:group-even/board:order-2">
                        <img src="{{ $wedding->image }}" alt="{{ $wedding->imageAlt }}" width="1200" height="1500" loading="lazy" decoding="async" class="aspect-4/5 w-full bg-surface object-cover sm:aspect-5/4 lg:aspect-4/5">
                    </div>
                    <div class="lg:col-span-5 lg:group-even/board:order-1">
                        <p class="font-display text-lg text-primary italic tabular-nums">No. 0{{ $loop->iteration }}</p>
                        <h3 class="mt-3 font-display text-4xl tracking-tight text-ink sm:text-5xl">{{ $wedding->couple }}</h3>
                        <p class="mt-5 max-w-[36ch] font-display text-xl/8 text-ink/80 italic">{{ $wedding->story }}</p>
                        <dl class="mt-8 grid grid-cols-2 gap-x-6 gap-y-4 border-t border-ink/15 pt-6 text-base/6">
                            <div class="col-span-2">
                                <dt class="label-caps text-muted">Venue</dt>
                                <dd class="mt-1.5 text-ink">{{ $wedding->place }}</dd>
                            </div>
                            <div>
                                <dt class="label-caps text-muted">When</dt>
                                <dd class="mt-1.5 text-ink">{{ $wedding->season }}</dd>
                            </div>
                            <div>
                                <dt class="label-caps text-muted">Guests</dt>
                                <dd class="mt-1.5 text-ink tabular-nums">{{ $wedding->guests }}</dd>
                            </div>
                        </dl>
                        <figure class="mt-8 bg-canvas p-4 shadow-md shadow-ink/5 ring-1 ring-ink/10">
                            <figcaption class="label-caps text-muted">{{ $boardLabel }}</figcaption>
                            <ul role="list" class="mt-4 grid grid-cols-4 gap-2.5">
                            <li>
                                <span class="block aspect-3/4 w-full ring-1 ring-ink/10 ring-inset" style="background-color: {{ $wedding->chip1 }}" aria-hidden="true"></span>
                                <p class="mt-2.5 text-[0.8125rem]/4 font-medium text-ink">{{ $wedding->chip1Name }}</p>
                                <p class="mt-1 text-xs/4 text-muted uppercase tabular-nums">{{ $wedding->chip1 }}</p>
                            </li>
                            <li>
                                <span class="block aspect-3/4 w-full ring-1 ring-ink/10 ring-inset" style="background-color: {{ $wedding->chip2 }}" aria-hidden="true"></span>
                                <p class="mt-2.5 text-[0.8125rem]/4 font-medium text-ink">{{ $wedding->chip2Name }}</p>
                                <p class="mt-1 text-xs/4 text-muted uppercase tabular-nums">{{ $wedding->chip2 }}</p>
                            </li>
                            <li>
                                <span class="block aspect-3/4 w-full ring-1 ring-ink/10 ring-inset" style="background-color: {{ $wedding->chip3 }}" aria-hidden="true"></span>
                                <p class="mt-2.5 text-[0.8125rem]/4 font-medium text-ink">{{ $wedding->chip3Name }}</p>
                                <p class="mt-1 text-xs/4 text-muted uppercase tabular-nums">{{ $wedding->chip3 }}</p>
                            </li>
                            <li>
                                <span class="block aspect-3/4 w-full ring-1 ring-ink/10 ring-inset" style="background-color: {{ $wedding->chip4 }}" aria-hidden="true"></span>
                                <p class="mt-2.5 text-[0.8125rem]/4 font-medium text-ink">{{ $wedding->chip4Name }}</p>
                                <p class="mt-1 text-xs/4 text-muted uppercase tabular-nums">{{ $wedding->chip4 }}</p>
                            </li>
                            </ul>
                        </figure>
                    </div>
                </li>
            @endforeach
        </ol>
    </div>
</section>
