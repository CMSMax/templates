@props(['groups' => []])
<section class="py-16 lg:py-24">
    <div class="mx-auto flex max-w-7xl flex-col gap-20 px-5 sm:px-8 lg:gap-24">
        @foreach ($groups as $group)
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-12 lg:gap-16">
                <div class="lg:col-span-4">
                    <div class="lg:sticky lg:top-28">
                        <h2 class="font-display text-3xl font-black tracking-tight text-ink sm:text-4xl">{{ $group->name }}</h2>
                        <p class="mt-3 text-base text-muted">{{ $group->note }}</p>
                    </div>
                </div>
                <ul role="list" class="divide-y divide-line border-y border-line lg:col-span-8">
                    @foreach ($taps as $tap)
                        @if ($tap->section == $group->name)
                            <li class="grid grid-cols-[3rem_1fr_auto] gap-x-5 py-6 sm:grid-cols-[4rem_1fr_auto] sm:gap-x-6">
                                <div class="flex flex-col items-start gap-3">
                                    <p class="font-display text-2xl font-black text-muted tabular-nums wide">{{ $tap->number }}</p>
                                    <span data-color="{{ $tap->color }}" class="glass w-6" aria-hidden="true"></span>
                                </div>
                                <div class="min-w-0">
                                    <div class="flex flex-wrap items-center gap-x-3 gap-y-1">
                                        <h3 class="font-display text-xl font-extrabold text-ink sm:text-2xl">{{ $tap->name }}</h3>
                                        @if ($tap->tag)
                                            <p class="rounded-full bg-primary px-2.5 py-0.5 text-sm font-semibold text-primary-foreground">{{ $tap->tag }}</p>
                                        @endif
                                    </div>
                                    <p class="mt-1 text-base font-medium text-ink/85">{{ $tap->style }} · {{ $tap->abv }}
                                        @if ($tap->ibu)
                                            <span>· {{ $tap->ibu }} IBU</span>
                                        @endif
                                    </p>
                                    <p class="mt-1.5 max-w-[56ch] text-base text-muted">{{ $tap->description }}</p>
                                </div>
                                <p class="text-right">
                                    <span class="font-display text-2xl font-black text-ink tabular-nums sm:text-3xl">{{ $site->currency }}{{ $tap->price }}</span>
                                    <span class="block text-sm text-muted">{{ $tap->pour }}</span>
                                </p>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</section>
