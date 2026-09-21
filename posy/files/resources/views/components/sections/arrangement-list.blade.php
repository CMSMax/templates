@props(['items' => []])
<div class="pb-20 sm:pb-28">
    @foreach ($site->arrangement_sections as $group)
        <section id="{{ $group->slug }}" aria-labelledby="{{ $group->slug }}-heading" class="pt-16 first:pt-4">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="flex flex-wrap items-baseline justify-between gap-x-10 gap-y-3 border-t border-line pt-8">
                    <h2 id="{{ $group->slug }}-heading" class="font-display text-4xl tracking-tight text-ink">{{ $group->name }}</h2>
                    <p class="max-w-[52ch] text-base/7 text-muted">{{ $group->blurb }}</p>
                </div>
                <ul role="list" class="mt-10 grid gap-x-10 gap-y-14 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($items as $item)
                        @if ($item->section == $group->slug)
                            <li>
                                <img src="{{ $item->image }}" alt="{{ $item->image_alt }}" width="1200" height="1490" loading="lazy" decoding="async" class="aspect-4/5 w-full bg-surface object-cover">
                                <div class="mt-5 flex items-baseline justify-between gap-6">
                                    <h3 class="font-display text-2xl text-ink">{{ $item->name }}</h3>
                                    <p class="shrink-0 text-muted tabular-nums">from <span class="font-display text-xl text-ink">${{ $item->price }}</span></p>
                                </div>
                                <p class="mt-3 text-base/7 text-muted">{{ $item->description }}</p>
                                <p class="mt-4 border-t border-line pt-4 text-sm/6 text-ink/85 tabular-nums">{{ $item->sizes }}</p>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </section>
    @endforeach
</div>
