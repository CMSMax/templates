@props([
    'heading' => 'What a visit costs.',
    'body' => 'The same prices we quote on the phone, for dogs and for cats. No surprises at the front desk.',
    'dogLabel' => 'Dog',
    'catLabel' => 'Cat',
    'show' => 'featured',
    'linkLabel' => 'See every service and price',
    'linkHref' => '/services',
])
<section id="prices" aria-labelledby="fees-heading" class="scroll-mt-8 pb-20 lg:pb-28">
    <div class="mx-auto max-w-6xl px-5 sm:px-8">
        <div class="grid gap-6 lg:grid-cols-[5fr_7fr] lg:items-end lg:gap-16">
            <h2 id="fees-heading" class="font-display text-[clamp(2rem,4vw,3.25rem)] leading-[1.05] font-semibold tracking-[-0.03em] text-balance text-ink">{{ $heading }}</h2>
            <p class="max-w-[52ch] text-lg/8 text-muted">{{ $body }}</p>
        </div>

        <div class="mt-12 overflow-hidden rounded-[1.75rem] bg-card shadow-sm shadow-ink/5 ring-1 ring-ink/8">
            <table class="-mb-px w-full table-fixed border-collapse text-left">
                <caption class="sr-only">{{ $heading }}</caption>
                <thead>
                    <tr class="border-b border-ink">
                        <th scope="col" class="px-5 pt-7 pb-5 text-sm font-semibold whitespace-nowrap text-muted sm:px-8">Service</th>
                        <th scope="col" class="w-[6.25rem] sm:bg-surface/60 px-2 pt-7 pb-5 text-right sm:w-36 sm:px-6">
                            <span class="inline-flex items-center gap-2 font-display text-lg font-semibold whitespace-nowrap text-ink sm:text-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-6 shrink-0 text-primary max-sm:hidden" aria-hidden="true"><path d="M11.25 16.25h1.5L12 17zM16 14v.5M4.42 11.247A13.2 13.2 0 0 0 4 14.556C4 18.728 7.582 21 12 21s8-2.272 8-6.444a11.7 11.7 0 0 0-.493-3.309M8 14v.5M8.5 8.5c-.384 1.05-1.083 2.028-2.344 2.5-1.931.722-3.576-.297-3.656-1-.113-.994 1.177-6.53 4-7 1.923-.321 3.651.845 3.651 2.235A7.5 7.5 0 0 1 14 5.277c0-1.39 1.844-2.598 3.767-2.277 2.823.47 4.113 6.006 4 7-.08.703-1.725 1.722-3.656 1-1.261-.472-1.855-1.45-2.239-2.5"/></svg>
                                {{ $dogLabel }}
                            </span>
                        </th>
                        <th scope="col" class="w-[6.25rem] px-2 pt-7 pb-5 pr-5 text-right sm:w-36 sm:px-6 sm:pr-8">
                            <span class="inline-flex items-center gap-2 font-display text-lg font-semibold whitespace-nowrap text-ink sm:text-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-6 shrink-0 text-primary max-sm:hidden" aria-hidden="true"><path d="M12 5c.67 0 1.35.09 2 .26 1.78-2 5.03-2.84 6.42-2.26 1.4.58-.42 7-.42 7 .57 1.07 1 2.24 1 3.44C21 17.9 16.97 21 12 21s-9-3-9-7.56c0-1.25.5-2.4 1-3.44 0 0-1.89-6.42-.5-7s4.72.23 6.5 2.23A9 9 0 0 1 12 5m-4 9v.5m8-.5v.5M11.25 16.25h1.5L12 17z"/></svg>
                                {{ $catLabel }}
                            </span>
                        </th>
                    </tr>
                </thead>
                @if ($show == 'all')
                    @foreach ($site->service_groups as $group)
                        <tbody>
                            <tr class="border-b border-line">
                                <th scope="colgroup" colspan="3" class="relative px-5 pt-9 pb-4 text-left sm:px-8">
                                    <span class="absolute inset-y-0 right-36 w-36 bg-surface/60 max-sm:hidden" aria-hidden="true"></span>
                                    <span class="relative block font-display text-xl font-semibold tracking-tight text-ink sm:text-2xl">{{ $group->name }}</span>
                                    <span class="relative mt-1 block text-sm/6 font-normal text-muted">{{ $group->body }}</span>
                                </th>
                            </tr>
                            @foreach ($services as $service)
                                @if ($service->category == $group->name)
                                    <tr class="border-line max-sm:[&>*]:pb-2 sm:border-b sm:last:border-b-0">
                                        <th scope="row" class="px-5 py-5 align-top font-normal sm:px-8">
                                            <span class="block text-base font-semibold text-ink sm:text-lg">{{ $service->name }}</span>
                                            <span class="mt-1 block max-w-[56ch] text-base/7 text-muted max-sm:hidden">{{ $service->description }}</span>
                                        </th>
                                        <td class="sm:bg-surface/60 px-2 py-5 text-right align-top font-display text-base font-semibold whitespace-nowrap text-primary tabular-nums sm:px-6 sm:text-xl">{{ $service->dog_price }}</td>
                                        <td class="px-2 py-5 pr-5 text-right align-top font-display text-base font-semibold whitespace-nowrap text-primary tabular-nums sm:px-6 sm:pr-8 sm:text-xl">{{ $service->cat_price }}</td>
                                    </tr>
                                    <tr class="border-b border-line sm:hidden">
                                        <td colspan="3" class="px-5 pb-5 text-sm/6 text-muted">{{ $service->description }}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    @endforeach
                @else
                    <tbody>
                        @foreach ($services as $service)
                            @if ($service->featured)
                                <tr class="border-line max-sm:[&>*]:pb-2 sm:border-b sm:last:border-b-0">
                                    <th scope="row" class="px-5 py-5 align-top font-normal sm:px-8 sm:py-6">
                                        <span class="block text-base font-semibold text-ink sm:text-lg">{{ $service->name }}</span>
                                        <span class="mt-1 block max-w-[56ch] text-base/7 text-muted max-sm:hidden">{{ $service->description }}</span>
                                    </th>
                                    <td class="sm:bg-surface/60 px-2 py-5 text-right align-top font-display text-base font-semibold whitespace-nowrap text-primary tabular-nums sm:px-6 sm:py-6 sm:text-xl">{{ $service->dog_price }}</td>
                                    <td class="px-2 py-5 pr-5 text-right align-top font-display text-base font-semibold whitespace-nowrap text-primary tabular-nums sm:px-6 sm:py-6 sm:pr-8 sm:text-xl">{{ $service->cat_price }}</td>
                                </tr>
                                <tr class="border-b border-line last:border-b-0 sm:hidden">
                                    <td colspan="3" class="px-5 pb-5 text-sm/6 text-muted">{{ $service->description }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                @endif
            </table>
        </div>

        <div class="mt-6 flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between sm:gap-10">
            <p class="flex max-w-[60ch] gap-2.5 text-sm/6 text-muted">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mt-0.5 size-4 shrink-0 text-primary" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>
                {{ $site->fees_note }}
            </p>
            @if ($linkLabel)
                <a href="{{ $linkHref }}" class="group inline-flex shrink-0 items-center gap-2 rounded-sm text-base font-semibold text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                    <span class="underline decoration-ink/25 underline-offset-[6px] group-hover:decoration-ink">{{ $linkLabel }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0 transition-transform duration-200 group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </a>
            @endif
        </div>
    </div>
</section>
