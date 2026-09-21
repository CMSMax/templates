<section class="pb-20 lg:pb-28">
    <div class="mx-auto max-w-6xl px-6">
        <div class="rounded-[2rem] bg-card p-2 shadow-xl shadow-ink/5 ring-1 ring-line">
            <div class="grid gap-x-20 gap-y-16 rounded-[1.5rem] border border-line px-6 py-12 sm:px-12 sm:py-16 lg:grid-cols-2 lg:px-16">
                @foreach ($site->menu_sections as $group)
                    <div>
                        <h2 class="font-serif text-4xl text-ink italic sm:text-5xl">{{ $group->name }}</h2>
                        <p class="mt-2 text-base text-muted">{{ $group->note }}</p>
                        <ul role="list" class="mt-8 flex flex-col gap-6">
                            @foreach ($menu as $item)
                                @if ($item->section == $group->name)
                                    <li>
                                        <div class="flex items-baseline gap-3">
                                            <h3 class="text-lg font-medium text-ink">{{ $item->name }}</h3>
                                            <span class="leader" aria-hidden="true"></span>
                                            <p class="text-lg font-medium text-ink tabular-nums">{{ $site->currency }}{{ $item->price }}</p>
                                        </div>
                                        <p class="mt-1 max-w-[46ch] text-base/6 text-pretty text-muted">{{ $item->description }}</p>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
        <p class="mt-8 text-center text-base text-pretty text-muted">{{ $site->menu_note }}</p>
    </div>
</section>
