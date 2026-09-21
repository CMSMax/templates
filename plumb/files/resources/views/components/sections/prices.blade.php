@props([
    'heading' => 'Our price book, in public.',
    'body' => 'These are the flat prices our plumbers quote from at the door. Parts and labour included, no hourly clock running.',
    'show' => 'featured',
    'jobLabel' => 'Job',
    'priceLabel' => 'Flat price',
    'visitNote' => 'Every visit starts with a $59 diagnosis, taken off the price when you go ahead with the work.',
    'linkLabel' => 'See the full price book',
    'linkHref' => '/prices',
    'items' => [],
])
<section id="prices" class="py-24 md:py-32">
    <div class="mx-auto grid max-w-7xl gap-12 px-5 md:px-8 lg:grid-cols-12 lg:gap-10">
        <div class="lg:col-span-4">
            <div class="lg:sticky lg:top-40">
                <h2 class="font-display text-section font-extrabold text-balance">{{ $heading }}</h2>
                <p class="mt-5 max-w-[38ch] text-lg text-pretty text-muted">{{ $body }}</p>
                <p class="mt-8 flex max-w-[38ch] gap-3 rounded-2xl bg-tint p-5 text-base text-pretty text-ink">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="mt-0.5 size-5 shrink-0 text-primary" aria-hidden="true"><path fill-rule="evenodd" d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0Zm-7-4a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM9 9a.75.75 0 0 0 0 1.5h.253a.25.25 0 0 1 .244.304l-.459 2.066A1.75 1.75 0 0 0 10.747 15H11a.75.75 0 0 0 0-1.5h-.253a.25.25 0 0 1-.244-.304l.459-2.066A1.75 1.75 0 0 0 9.253 9H9Z" clip-rule="evenodd"/></svg>
                    <span>{{ $visitNote }}</span>
                </p>
            </div>
        </div>
        <div class="lg:col-span-8">
            @if ($show == 'all')
                @foreach ($site->price_groups as $group)
                    <div class="not-first:mt-16" data-reveal>
                        <div class="flex flex-col gap-1 border-b-2 border-ink pb-4 sm:flex-row sm:items-baseline sm:justify-between sm:gap-6">
                            <h3 class="font-display text-2xl font-extrabold md:text-3xl">{{ $group->name }}</h3>
                            <p class="text-base text-muted">{{ $group->body }}</p>
                        </div>
                        <table class="w-full">
                            <thead class="sr-only">
                                <tr>
                                    <th scope="col">{{ $jobLabel }}</th>
                                    <th scope="col">{{ $priceLabel }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $price)
                                    @if ($price->category == $group->name)
                                        <tr class="border-b border-line">
                                            <td class="py-5 pr-6 align-top">
                                                <p class="text-lg font-semibold">{{ $price->job }}</p>
                                                <p class="mt-1 max-w-[52ch] text-base text-pretty text-muted">{{ $price->note }}</p>
                                            </td>
                                            <td class="py-5 text-right align-top font-display text-xl font-extrabold whitespace-nowrap tabular-nums [font-stretch:125%] md:text-2xl">{{ $price->price }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endforeach
            @else
                <table class="w-full border-t-2 border-ink" data-reveal>
                    <thead>
                        <tr class="border-b border-line">
                            <th scope="col" class="py-4 text-left text-sm font-semibold whitespace-nowrap text-muted">{{ $jobLabel }}</th>
                            <th scope="col" class="py-4 text-right text-sm font-semibold whitespace-nowrap text-muted">{{ $priceLabel }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $price)
                            @if ($price->featured)
                                <tr class="border-b border-line">
                                    <td class="py-5 pr-6 align-top">
                                        <p class="text-lg font-semibold">{{ $price->job }}</p>
                                        <p class="mt-1 max-w-[52ch] text-base text-pretty text-muted">{{ $price->note }}</p>
                                    </td>
                                    <td class="py-5 text-right align-top font-display text-xl font-extrabold whitespace-nowrap tabular-nums [font-stretch:125%] md:text-2xl">{{ $price->price }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
                @if ($linkLabel)
                    <a href="{{ $linkHref }}" class="group mt-8 inline-flex min-h-11 items-center gap-2 text-base font-semibold text-ink">
                        <span class="underline decoration-ink/25 underline-offset-[6px] group-hover:decoration-primary">{{ $linkLabel }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0 text-primary transition-transform duration-200 group-hover:translate-x-0.5" aria-hidden="true"><path d="M4 10h11M11 5l5 5-5 5"/></svg>
                    </a>
                @endif
            @endif
        </div>
    </div>
</section>
