@props([
    'eyebrow' => 'What’s included',
    'heading' => 'Know exactly what you are paying for.',
    'body' => 'Every clean follows the same printed list, room by room. Your cleaner works through it on every visit and leaves a note of anything they noticed on the way.',
    'note' => 'Want something that is not on the list? Add it when you book — the extras have their own prices on the services page.',
    'labelTitle' => 'Clean Facts',
    'servingSize' => 'One two-bedroom home',
    'timeOnSite' => '3 to 6 hours',
    'footnote' => 'Every clean includes plant-based products, colour-coded cloths, a HEPA vacuum and our 24-hour promise.',
    'rooms' => ['Kitchen', 'Bathrooms', 'Living areas', 'Whole home'],
    'image' => '/images/kitchen-counter.jpg',
    'imageAlt' => 'A hand in a yellow rubber glove wiping a white kitchen counter with a pale blue cloth.',
    'items' => [],
])
<section id="clean-facts" class="bg-surface py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-y-14 lg:grid-cols-12 lg:gap-x-16">
            <div class="flex flex-col lg:col-span-5">
                <p class="text-[0.9375rem] font-medium text-muted">{{ $eyebrow }}</p>
                <h2 class="mt-4 max-w-[15ch] font-display text-4xl font-semibold tracking-tight text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
                <p class="mt-6 max-w-[44ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
                <p class="mt-5 max-w-[44ch] text-base/7 text-pretty text-muted">{{ $note }}</p>
                @if ($image)
                    <div class="mt-12 overflow-hidden rounded-[1.5rem] max-lg:hidden lg:mt-auto">
                        <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1024" height="688" loading="lazy" decoding="async" class="aspect-[3/2] w-full object-cover">
                    </div>
                @endif
            </div>
            <div class="lg:col-span-7">
                <div class="mx-auto max-w-[36rem] border-2 border-ink bg-canvas p-4 text-ink sm:p-7">
                    <h3 id="clean-facts-title" class="font-display text-[2.75rem] font-bold tracking-tight sm:text-6xl">{{ $labelTitle }}</h3>
                    <dl class="mt-2 border-t border-ink">
                        <div class="flex items-baseline justify-between gap-4 pt-2">
                            <dt class="font-semibold">Serving size</dt>
                            <dd class="text-right font-semibold">{{ $servingSize }}</dd>
                        </div>
                        <div class="flex items-baseline justify-between gap-4 pb-2">
                            <dt class="text-muted">Time on site</dt>
                            <dd class="text-right text-muted tabular-nums">{{ $timeOnSite }}</dd>
                        </div>
                    </dl>
                    <div class="h-3 bg-ink" aria-hidden="true"></div>
                    <table aria-labelledby="clean-facts-title" class="w-full border-collapse text-left">
                        <thead>
                            <tr class="border-b-[5px] border-ink">
                                <th scope="col" class="py-2 pr-2 align-bottom text-[0.8125rem] font-semibold whitespace-nowrap">Per visit</th>
                                <th scope="col" class="w-12 py-2 text-center align-bottom font-display text-[0.6875rem] font-semibold sm:w-18 sm:text-[0.8125rem]">Regular</th>
                                <th scope="col" class="w-12 py-2 text-center align-bottom font-display text-[0.6875rem] font-semibold sm:w-18 sm:text-[0.8125rem]">Deep</th>
                                <th scope="col" class="w-12 py-2 text-center align-bottom font-display text-[0.6875rem] font-semibold sm:w-18 sm:text-[0.8125rem]">Move out</th>
                            </tr>
                        </thead>
                        @foreach ($rooms as $room)
                            <tbody class="border-b border-ink last:border-b-0">
                                <tr>
                                    <th scope="colgroup" colspan="4" class="pt-3 pb-1 font-display text-lg font-bold tracking-tight">{{ $room }}</th>
                                </tr>
                                @foreach ($items as $item)
                                    @if ($item->room == $room)
                                        <tr class="border-t border-ink/20">
                                            <th scope="row" class="py-2 pr-2 text-[0.9375rem]/5 font-normal">{{ $item->task }}</th>
                                            <td class="py-2 text-center"><x-sections.tick :on="$item->standard"/></td>
                                            <td class="py-2 text-center"><x-sections.tick :on="$item->deep"/></td>
                                            <td class="py-2 text-center"><x-sections.tick :on="$item->move_out"/></td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        @endforeach
                    </table>
                    <div class="h-3 bg-ink" aria-hidden="true"></div>
                    <p class="pt-3 text-[0.8125rem]/5 text-pretty">* {{ $footnote }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
