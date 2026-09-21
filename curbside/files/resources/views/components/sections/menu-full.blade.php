<section class="py-16 lg:py-24">
    <div class="mx-auto grid max-w-7xl grid-cols-1 gap-x-16 gap-y-16 px-5 sm:px-8 lg:grid-cols-2">
        @foreach ($site->menu_sections as $group)
            <div>
                <div class="flex flex-wrap items-baseline justify-between gap-x-6 gap-y-1 border-b-2 border-ink pb-3">
                    <h2 class="font-display text-5xl font-black text-ink uppercase">{{ $group->name }}</h2>
                    <p class="text-sm font-medium text-muted">{{ $group->note }}</p>
                </div>
                <ul role="list" class="divide-y divide-ink/10">
                    @foreach ($menu as $item)
                        @if ($item->section == $group->name)
                            <li class="py-5">
                                <div class="flex items-baseline gap-3">
                                    <h3 class="min-w-0 font-display text-2xl font-extrabold text-ink uppercase sm:text-3xl">{{ $item->name }}</h3>
                                    @if ($item->tag)
                                        <p class="shrink-0 bg-surface px-1.5 py-0.5 text-xs font-semibold text-ink">{{ $item->tag }}</p>
                                    @endif
                                    <span class="leader" aria-hidden="true"></span>
                                    <p class="font-display text-3xl font-black text-ink tabular-nums">{{ $site->currency }}{{ $item->price }}</p>
                                </div>
                                <p class="mt-1 max-w-[52ch] text-base text-pretty text-muted">{{ $item->description }}</p>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</section>
