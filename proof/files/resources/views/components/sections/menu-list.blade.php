@props([
    'footnote' => 'Prices include tax. Tell us about allergies at the counter — our kitchen handles wheat, nuts, dairy and eggs.',
    'items' => [],
])
<section class="border-b border-line">
    @foreach ($site->menu_sections as $group)
        <div id="{{ $group->slug }}" class="grid scroll-mt-20 grid-cols-1 border-b border-line lg:grid-cols-12">
            <div class="px-5 pt-12 pb-4 sm:px-8 lg:col-span-4 lg:border-r lg:border-line lg:px-12 lg:py-16">
                <div class="lg:sticky lg:top-28">
                    <h2 class="font-display text-[clamp(2.25rem,3.6vw,3.25rem)] leading-none tracking-[-0.02em] text-ink">{{ $group->name }}</h2>
                    <p class="mt-4 text-base/7 text-muted">{{ $group->note }}</p>
                </div>
            </div>
            <ul role="list" class="divide-y divide-line lg:col-span-8">
                @foreach ($items as $item)
                    @if ($item->section == $group->name)
                        <li class="grid grid-cols-[1fr_auto] gap-x-8 gap-y-2 px-5 py-7 sm:px-8 lg:px-12">
                            <div class="flex flex-wrap items-center gap-x-3 gap-y-2">
                                <h3 class="font-display text-[1.75rem] leading-tight text-ink">{{ $item->name }}</h3>
                                @if ($item->tag)
                                    <p class="border border-ink/25 px-2 py-0.5 text-sm font-medium text-ink">{{ $item->tag }}</p>
                                @endif
                            </div>
                            <p class="row-span-2 font-display text-[1.75rem] leading-tight text-primary tabular-nums">{{ $site->currency }}{{ $item->price }}</p>
                            <p class="max-w-[56ch] text-base/7 text-muted">{{ $item->description }}</p>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    @endforeach
    <p class="px-5 py-8 text-base/7 text-muted sm:px-8 lg:px-12">{{ $footnote }}</p>
</section>
