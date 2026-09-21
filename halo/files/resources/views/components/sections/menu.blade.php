@props([
    'eyebrow' => 'The menu',
    'heading' => 'Everything we do,',
    'headingAccent' => 'priced up front.',
    'body' => 'Five kinds of care under one roof. Every appointment starts with a conversation, and the price you see is the price you pay.',
    'show' => 'featured',
    'linkLabel' => 'See the full menu',
    'linkHref' => '/menu',
])
<section id="menu" aria-labelledby="menu-heading" class="scroll-mt-8 py-20 sm:py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="grid gap-6 lg:grid-cols-12 lg:items-end lg:gap-10">
            <div class="lg:col-span-7">
                <p class="text-xs font-semibold tracking-[0.22em] text-muted uppercase">{{ $eyebrow }}</p>
                <h2 id="menu-heading" class="mt-5 font-display text-[clamp(2.5rem,5vw,4.25rem)] leading-[1.02] tracking-[-0.025em] text-ink">{{ $heading }} <em class="text-primary italic">{{ $headingAccent }}</em></h2>
            </div>
            <p class="max-w-[46ch] text-lg/8 text-muted lg:col-span-5">{{ $body }}</p>
        </div>

        <div class="menu mt-14 grid gap-12 lg:mt-20 lg:grid-cols-12 lg:gap-10">
            <div class="max-lg:hidden lg:col-span-5">
                <div class="sticky top-8 aspect-[4/5] w-full overflow-hidden arch bg-surface">
                    @foreach ($site->menu_groups as $group)
                        <figure class="menu-shot absolute inset-0">
                            <img src="{{ $group->image }}" alt="{{ $group->imageAlt }}" width="1000" height="1250" loading="lazy" class="size-full object-cover">
                            <figcaption class="absolute bottom-5 left-5 rounded-full bg-card/95 px-4 py-1.5 font-display text-lg text-ink italic">{{ $group->name }}</figcaption>
                        </figure>
                    @endforeach
                </div>
            </div>
            <div class="lg:col-span-7 lg:pl-6">
                @foreach ($site->menu_groups as $group)
                    <div class="menu-group border-t border-ink pt-7 pb-12 last:pb-0">
                        <div class="flex items-center gap-5">
                            <img src="{{ $group->image }}" alt="" aria-hidden="true" width="1000" height="1250" loading="lazy" class="arch h-20 w-16 shrink-0 object-cover lg:hidden">
                            <div class="flex-1">
                                <h3 class="flex items-baseline gap-4 font-display text-3xl text-ink italic sm:text-4xl">
                                    <span class="font-sans text-xs font-semibold tracking-[0.2em] text-primary not-italic">0{{ $loop->iteration }}</span>
                                    {{ $group->name }}
                                </h3>
                                <p class="mt-2 max-w-[52ch] text-base/7 text-muted">{{ $group->body }}</p>
                            </div>
                        </div>
                        <ul role="list" class="mt-6">
                            @foreach ($services as $service)
                                @if ($service->category == $group->name)
                                    @if ($show == 'all')
                                        <li class="border-b border-line py-5 last:border-b-0">
                                            <div class="flex items-baseline gap-3">
                                                <span class="font-display text-xl text-ink sm:text-[1.375rem]">{{ $service->name }}</span>
                                                <span class="mb-1.5 min-w-6 flex-1 border-b border-dotted border-ink/30" aria-hidden="true"></span>
                                                <span class="text-sm whitespace-nowrap text-muted">{{ $service->duration }}</span>
                                                <span class="font-display text-xl whitespace-nowrap text-primary tabular-nums sm:text-[1.375rem]">{{ $service->price }}</span>
                                            </div>
                                            <p class="mt-1.5 max-w-[56ch] text-sm/6 text-muted sm:text-base/7">{{ $service->description }}</p>
                                        </li>
                                    @elseif ($service->featured)
                                        <li class="border-b border-line py-5 last:border-b-0">
                                            <div class="flex items-baseline gap-3">
                                                <span class="font-display text-xl text-ink sm:text-[1.375rem]">{{ $service->name }}</span>
                                                <span class="mb-1.5 min-w-6 flex-1 border-b border-dotted border-ink/30" aria-hidden="true"></span>
                                                <span class="text-sm whitespace-nowrap text-muted">{{ $service->duration }}</span>
                                                <span class="font-display text-xl whitespace-nowrap text-primary tabular-nums sm:text-[1.375rem]">{{ $service->price }}</span>
                                            </div>
                                            <p class="mt-1.5 max-w-[56ch] text-sm/6 text-muted sm:text-base/7">{{ $service->description }}</p>
                                        </li>
                                    @endif
                                @endif
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="mt-14 flex flex-col gap-5 border-t border-line pt-8 sm:flex-row sm:items-start sm:justify-between sm:gap-10 lg:ml-[calc(5/12*100%+2.5rem)]">
            <p class="max-w-[60ch] text-sm/6 text-muted">{{ $site->menu_note }}</p>
            @if ($linkLabel)
                <a href="{{ $linkHref }}" class="group inline-flex shrink-0 items-center gap-2 rounded-sm text-base font-semibold text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                    <span class="underline decoration-ink/25 underline-offset-[6px] transition-colors duration-150 group-hover:decoration-ink">{{ $linkLabel }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0 transition-transform duration-200 group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </a>
            @endif
        </div>
    </div>
</section>
