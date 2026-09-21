@props([
    'callHeading' => 'Call the office',
    'callBody' => 'The quickest way to a first conversation. If we can’t take your call, we return it the same day.',
    'emailHeading' => 'Write to us',
    'emailBody' => 'Tell us briefly what has happened and how to reach you. Please don’t send original documents yet.',
    'visitHeading' => 'Visit the office',
    'hoursHeading' => 'Office hours',
])
<section class="pb-24 lg:pb-36">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-y-16 lg:grid-cols-12 lg:gap-x-16">
            <ul role="list" class="divide-y divide-line border-y border-line lg:col-span-7">
                <li class="grid gap-5 py-10 sm:grid-cols-[1fr_auto] sm:items-center sm:gap-10">
                    <div>
                        <h2 class="font-display text-3xl tracking-tight text-ink">{{ $callHeading }}</h2>
                        <p class="mt-2 max-w-[46ch] text-base/7 text-pretty text-muted">{{ $callBody }}</p>
                    </div>
                    <a href="{{ $site->phone_href }}" class="justify-self-start rounded-full bg-primary px-6 py-3.5 font-medium whitespace-nowrap text-primary-foreground transition-colors duration-150 hover:bg-primary/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->phone }}</a>
                </li>
                <li class="grid gap-5 py-10 sm:grid-cols-[1fr_auto] sm:items-center sm:gap-10">
                    <div>
                        <h2 class="font-display text-3xl tracking-tight text-ink">{{ $emailHeading }}</h2>
                        <p class="mt-2 max-w-[46ch] text-base/7 text-pretty text-muted">{{ $emailBody }}</p>
                    </div>
                    <a href="mailto:{{ $site->email }}" class="justify-self-start rounded-full border border-ink/15 px-6 py-3.5 font-medium whitespace-nowrap text-ink transition-colors duration-150 hover:border-ink/40 hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Email the firm</a>
                </li>
                <li class="grid gap-5 py-10 sm:grid-cols-[1fr_auto] sm:items-center sm:gap-10">
                    <div>
                        <h2 class="font-display text-3xl tracking-tight text-ink">{{ $visitHeading }}</h2>
                        <p class="mt-2 max-w-[46ch] text-base/7 text-pretty text-muted">{{ $site->address }}, {{ $site->city }}. {{ $site->hours_note }}.</p>
                    </div>
                    <a href="{{ $site->map_url }}" class="justify-self-start rounded-full border border-ink/15 px-6 py-3.5 font-medium whitespace-nowrap text-ink transition-colors duration-150 hover:border-ink/40 hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Get directions</a>
                </li>
            </ul>
            <aside class="lg:col-span-4 lg:col-start-9">
                <h2 class="text-sm font-medium text-ink">{{ $hoursHeading }}</h2>
                <dl class="mt-4 divide-y divide-line border-y border-line">
                    @foreach ($site->hours as $slot)
                        <div class="flex items-baseline justify-between gap-6 py-4">
                            <dt class="text-base text-ink">{{ $slot->day }}</dt>
                            <dd class="text-base text-muted tabular-nums">{{ $slot->hours }}</dd>
                        </div>
                    @endforeach
                </dl>
                <p class="mt-8 max-w-[40ch] text-base/7 text-pretty text-muted">{{ $site->response_note }}</p>
                <p class="mt-4 max-w-[40ch] text-base/7 text-pretty text-muted">{{ $site->confidentiality_note }}</p>
            </aside>
        </div>
    </div>
</section>
