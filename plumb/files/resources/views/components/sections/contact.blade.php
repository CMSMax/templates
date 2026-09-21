@props([
    'heading' => 'Book a plumber',
    'body' => 'Call for anything urgent. For everything else, email us what is going on and a photo if you can, and we will reply with a time and a price.',
    'phoneLabel' => 'Call, day or night',
    'emailLabel' => 'Email a booking',
    'emailSubject' => 'Booking request',
    'emailButton' => 'Write the email',
    'addressLabel' => 'Workshop',
    'hoursLabel' => 'Hours',
    'readyHeading' => 'Useful to have ready',
    'items' => [],
    'lidText' => 'Licensed master plumbers · Denver · Est. 2009 ·',
])
<section class="relative isolate overflow-hidden">
    <div class="absolute inset-x-0 top-0 -z-10 h-[26rem] bg-primary md:h-[30rem]" aria-hidden="true"></div>
    <div class="mx-auto max-w-7xl px-5 pt-16 pb-24 md:px-8 md:pt-24 md:pb-32">
        <div class="grid gap-10 text-primary-foreground lg:grid-cols-12 lg:gap-10">
            <div class="lg:col-span-7">
                <h1 class="font-display text-hero font-extrabold text-balance">{{ $heading }}</h1>
                <p class="mt-6 max-w-[48ch] text-lg text-pretty text-primary-foreground/85 md:text-xl/8">{{ $body }}</p>
            </div>
            <div class="w-28 max-lg:hidden lg:col-span-2 lg:col-start-11 lg:w-full">
                <x-lid :text="$lidText" key="contact-lid"/>
            </div>
        </div>
        <div class="mt-14 grid gap-6 lg:grid-cols-12 lg:gap-10">
            <div class="flex flex-col gap-8 rounded-[1.75rem] bg-surface p-7 shadow-ticket ring-1 ring-line md:p-10 lg:col-span-7">
                <div class="flex flex-col gap-2 border-b border-dashed border-line pb-8">
                    <p class="text-sm font-semibold text-muted">{{ $phoneLabel }}</p>
                    <a href="{{ $site->phone_href }}" class="font-display text-[clamp(2rem,5vw,3.5rem)] leading-none font-extrabold tabular-nums [font-stretch:125%] hover:text-primary">{{ $site->phone }}</a>
                </div>
                <div class="flex flex-col gap-4 border-b border-dashed border-line pb-8 sm:flex-row sm:items-end sm:justify-between">
                    <div class="flex flex-col gap-2">
                        <p class="text-sm font-semibold text-muted">{{ $emailLabel }}</p>
                        <a href="mailto:{{ $site->email }}" class="text-xl font-semibold break-all hover:text-primary">{{ $site->email }}</a>
                    </div>
                    <a href="mailto:{{ $site->email }}?subject={{ $emailSubject }}" class="inline-flex min-h-12 shrink-0 items-center justify-center gap-2 rounded-full bg-primary py-3 pr-4 pl-5 text-base font-semibold text-primary-foreground hover:bg-ink active:translate-y-px">
                        {{ $emailButton }}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0" aria-hidden="true"><path d="M4 10h11M11 5l5 5-5 5"/></svg>
                    </a>
                </div>
                <div class="grid gap-8 sm:grid-cols-2">
                    <div class="flex flex-col gap-2">
                        <p class="text-sm font-semibold text-muted">{{ $addressLabel }}</p>
                        <p class="text-base text-pretty">{{ $site->address }}</p>
                        <p class="text-sm text-muted">{{ $site->license }}</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p class="text-sm font-semibold text-muted">{{ $hoursLabel }}</p>
                        <dl class="flex flex-col gap-1.5">
                            @foreach ($site->hours as $row)
                                <div class="flex justify-between gap-4 text-base">
                                    <dt class="text-muted">{{ $row->days }}</dt>
                                    <dd class="text-right font-medium">{{ $row->time }}</dd>
                                </div>
                            @endforeach
                        </dl>
                    </div>
                </div>
            </div>
            <div class="rounded-[1.75rem] bg-tint p-7 md:p-10 lg:col-span-5">
                <h2 class="font-display text-xl font-extrabold md:text-2xl">{{ $readyHeading }}</h2>
                <ul role="list" class="mt-6 flex flex-col gap-4">
                    @foreach ($items as $item)
                        <li class="flex gap-3 text-lg text-pretty">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="mt-1 size-5 shrink-0 text-primary" aria-hidden="true"><path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd"/></svg>
                            {{ $item->text }}
                        </li>
                    @endforeach
                </ul>
                <p class="mt-8 border-t border-primary/15 pt-6 text-base text-pretty text-muted">{{ $site->emergency_note }}</p>
            </div>
        </div>
    </div>
</section>
