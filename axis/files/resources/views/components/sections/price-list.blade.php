@props([
    'visitsTitle' => 'Visits',
    'rehabTitle' => 'Soft tissue & rehab',
    'plansTitle' => 'Plans',
])
<section id="pricing" aria-label="Services and prices" class="scroll-mt-8 py-20 sm:py-28">
    <div class="mx-auto flex max-w-7xl flex-col gap-16 px-5 sm:px-8">
            <div class="grid gap-6 border-t border-ink pt-8 lg:grid-cols-12 lg:gap-8">
                <h2 class="font-display text-[2.25rem] leading-10 font-semibold tracking-[-0.01em] text-ink lg:col-span-4">{{ $visitsTitle }}</h2>
                <ul role="list" class="flex flex-col lg:col-span-8">
                    @foreach ($services as $service)
                        @if ($service->category == $visitsTitle)
                            <li class="grid grid-cols-[1fr_auto] gap-x-6 gap-y-1 border-line py-5 not-first:border-t first:pt-0 sm:grid-cols-[1fr_7rem_6rem]">
                                <h3 class="text-lg/7 font-semibold text-ink sm:col-start-1 sm:row-start-1">{{ $service->name }}</h3>
                                <p class="text-right font-display text-2xl leading-7 font-semibold text-primary sm:col-start-3 sm:row-start-1">{{ $service->price }}</p>
                                <p class="text-sm/7 text-muted tabular-nums max-sm:col-span-2 max-sm:row-start-3 sm:col-start-2 sm:row-start-1 sm:text-right">{{ $service->duration }}</p>
                                <p class="col-span-2 max-w-[56ch] text-base/7 text-muted sm:col-span-1 sm:col-start-1 sm:row-start-2 sm:text-sm/6">{{ $service->description }}</p>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="grid gap-6 border-t border-ink pt-8 lg:grid-cols-12 lg:gap-8">
                <h2 class="font-display text-[2.25rem] leading-10 font-semibold tracking-[-0.01em] text-ink lg:col-span-4">{{ $rehabTitle }}</h2>
                <ul role="list" class="flex flex-col lg:col-span-8">
                    @foreach ($services as $service)
                        @if ($service->category == $rehabTitle)
                            <li class="grid grid-cols-[1fr_auto] gap-x-6 gap-y-1 border-line py-5 not-first:border-t first:pt-0 sm:grid-cols-[1fr_7rem_6rem]">
                                <h3 class="text-lg/7 font-semibold text-ink sm:col-start-1 sm:row-start-1">{{ $service->name }}</h3>
                                <p class="text-right font-display text-2xl leading-7 font-semibold text-primary sm:col-start-3 sm:row-start-1">{{ $service->price }}</p>
                                <p class="text-sm/7 text-muted tabular-nums max-sm:col-span-2 max-sm:row-start-3 sm:col-start-2 sm:row-start-1 sm:text-right">{{ $service->duration }}</p>
                                <p class="col-span-2 max-w-[56ch] text-base/7 text-muted sm:col-span-1 sm:col-start-1 sm:row-start-2 sm:text-sm/6">{{ $service->description }}</p>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="grid gap-6 border-t border-ink pt-8 lg:grid-cols-12 lg:gap-8">
                <h2 class="font-display text-[2.25rem] leading-10 font-semibold tracking-[-0.01em] text-ink lg:col-span-4">{{ $plansTitle }}</h2>
                <ul role="list" class="flex flex-col lg:col-span-8">
                    @foreach ($services as $service)
                        @if ($service->category == $plansTitle)
                            <li class="grid grid-cols-[1fr_auto] gap-x-6 gap-y-1 border-line py-5 not-first:border-t first:pt-0 sm:grid-cols-[1fr_7rem_6rem]">
                                <h3 class="text-lg/7 font-semibold text-ink sm:col-start-1 sm:row-start-1">{{ $service->name }}</h3>
                                <p class="text-right font-display text-2xl leading-7 font-semibold text-primary sm:col-start-3 sm:row-start-1">{{ $service->price }}</p>
                                <p class="text-sm/7 text-muted tabular-nums max-sm:col-span-2 max-sm:row-start-3 sm:col-start-2 sm:row-start-1 sm:text-right">{{ $service->duration }}</p>
                                <p class="col-span-2 max-w-[56ch] text-base/7 text-muted sm:col-span-1 sm:col-start-1 sm:row-start-2 sm:text-sm/6">{{ $service->description }}</p>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        <p class="flex max-w-[64ch] gap-3 rounded-[1.5rem] bg-surface p-6 text-base/7 text-ink sm:p-8">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mt-0.5 size-6 shrink-0 text-primary" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>
            {{ $site->insurance_note }}
        </p>
    </div>
</section>
