@props([
    'heading' => 'This week’s stops',
    'body' => 'Same truck, different curb. Most weeks look like this — lunch near the offices, dinner at the breweries, Saturday at the market.',
    'instagramLabel' => 'Live updates on Instagram',
])
<section id="stops" class="scroll-mt-18 bg-ink text-canvas">
    <div class="curb-stripe h-3" aria-hidden="true"></div>
    <div class="mx-auto max-w-7xl px-5 py-20 sm:px-8 lg:py-28">
        <div class="grid gap-8 lg:grid-cols-[7fr_5fr] lg:items-end lg:gap-16">
            <h2 class="font-display text-[clamp(3rem,7vw,5.5rem)] leading-[0.92] font-black text-balance text-canvas uppercase">{{ $heading }}</h2>
            <div>
                <p class="max-w-[46ch] text-lg/8 text-pretty text-canvas/70">{{ $body }}</p>
                <a href="{{ $site->instagram }}" class="mt-5 inline-flex items-center gap-2 text-base font-semibold text-primary underline decoration-primary/40 decoration-2 underline-offset-6 hover:decoration-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                    {{ $instagramLabel }} · {{ $site->instagram_handle }}
                </a>
            </div>
        </div>
        <ul role="list" class="mt-14 border-b border-canvas/15 lg:mt-20">
            @foreach ($stops as $stop)
                <li class="group border-t border-canvas/15 @if ($stop->next) is-next border-primary bg-primary text-primary-foreground @endif">
                    <div class="grid grid-cols-[4.5rem_1fr] gap-x-5 gap-y-4 py-6 group-[.is-next]:-mx-4 group-[.is-next]:px-4 sm:grid-cols-[6rem_1fr_auto] sm:items-center sm:gap-x-8 lg:grid-cols-[8rem_1fr_11rem_auto] lg:py-7 lg:group-[.is-next]:-mx-6 lg:group-[.is-next]:px-6">
                        <div>
                            <p class="font-display text-5xl font-black uppercase lg:text-6xl">{{ $stop->day }}</p>
                            <p class="mt-1 text-sm font-semibold text-canvas/65 group-[.is-next]:text-ink/85">{{ $stop->meal }}</p>
                        </div>
                        <div class="min-w-0">
                            <p class="flex flex-wrap items-center gap-x-3 gap-y-1 text-xl font-semibold sm:text-2xl">
                                {{ $stop->place }}
                                @if ($stop->next)
                                    <span class="bg-ink px-2 py-0.5 text-xs font-semibold tracking-wide text-primary uppercase">Next up</span>
                                @endif
                            </p>
                            <p class="mt-1 text-base text-canvas/65 group-[.is-next]:text-ink/85">{{ $stop->address }}</p>
                            <p class="mt-2 font-display text-2xl font-extrabold tabular-nums lg:hidden">{{ $stop->hours }}</p>
                        </div>
                        <p class="font-display text-3xl font-extrabold tabular-nums max-lg:hidden">{{ $stop->hours }}</p>
                        <a href="{{ $stop->map_url }}" class="col-start-2 inline-flex w-fit items-center gap-2 py-3 pr-3 pl-4 text-sm font-semibold ring-1 ring-canvas/30 ring-inset hover:bg-canvas hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary group-[.is-next]:ring-ink group-[.is-next]:hover:bg-ink group-[.is-next]:hover:text-primary group-[.is-next]:focus-visible:outline-ink sm:col-start-auto">
                            Directions<span class="sr-only"> to {{ $stop->place }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4 shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 0 0 1.06 0l7.22-7.22v5.69a.75.75 0 0 0 1.5 0v-7.5a.75.75 0 0 0-.75-.75h-7.5a.75.75 0 0 0 0 1.5h5.69l-7.22 7.22a.75.75 0 0 0 0 1.06Z" clip-rule="evenodd"/></svg>
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>
        <p class="mt-6 flex items-start gap-3 text-base text-canvas/70">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="mt-0.5 size-5 shrink-0 text-primary" aria-hidden="true"><path fill-rule="evenodd" d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0Zm-7-4a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM9 9a.75.75 0 0 0 0 1.5h.253a.25.25 0 0 1 .244.304l-.459 2.066A1.75 1.75 0 0 0 10.747 15H11a.75.75 0 0 0 0-1.5h-.253a.25.25 0 0 1-.244-.304l.459-2.066A1.75 1.75 0 0 0 9.253 9H9Z" clip-rule="evenodd"/></svg>
            {{ $site->schedule_note }}
        </p>
    </div>
</section>
