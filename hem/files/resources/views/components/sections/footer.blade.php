@props([
    'blurb' => 'An independent shop for clothes and small goods, chosen for the cloth and the people who make it.',
    'visitHeading' => 'The shop',
    'hoursHeading' => 'Hours',
    'contactHeading' => 'Get in touch',
    'directionsLabel' => 'Get directions',
    'showWordmark' => '1',
])
<footer class="overflow-hidden bg-ink text-canvas">
    <div class="mx-auto grid max-w-7xl gap-12 px-5 py-16 sm:grid-cols-2 sm:px-8 lg:grid-cols-[2fr_1fr_1fr_1fr] lg:py-20">
        <div>
            <a href="/" aria-label="Homepage" class="inline-flex items-center gap-2 text-canvas focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-field">
                @if ($site->logo_inverted)
                    <img src="{{ $site->logo_inverted }}" alt="{{ $site->name }}" class="h-7 w-auto">
                @else
                    <span class="grid size-6 shrink-0 text-field"><x-sections.mark/></span>
                    <span class="font-display text-2xl font-semibold tracking-tight">{{ $site->name }}</span>
                @endif
            </a>
            <p class="mt-5 max-w-[38ch] text-base/7 text-canvas/70 sm:text-sm/6">{{ $blurb }}</p>
        </div>
        <div>
            <h2 class="font-display text-base font-medium text-canvas">{{ $visitHeading }}</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 text-canvas/70 sm:text-sm/6">
                <li>{{ $site->address }}</li>
                <li>{{ $site->city }}</li>
                <li><a href="{{ $site->map_url }}" class="text-canvas underline decoration-canvas/40 underline-offset-4 hover:decoration-field focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-field">{{ $directionsLabel }}</a></li>
            </ul>
        </div>
        <div>
            <h2 class="font-display text-base font-medium text-canvas">{{ $hoursHeading }}</h2>
            <dl class="mt-4 flex flex-col gap-2 text-base/7 sm:text-sm/6">
                @foreach ($hours as $slot)
                    <div class="flex justify-between gap-4 sm:block">
                        <dt class="text-canvas">{{ $slot->day }}</dt>
                        <dd class="text-canvas/70 tabular-nums">{{ $slot->hours }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
        <div>
            <h2 class="font-display text-base font-medium text-canvas">{{ $contactHeading }}</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 text-canvas/70 sm:text-sm/6">
                <li><a href="{{ $site->phone_href }}" class="font-normal tabular-nums hover:text-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-field">{{ $site->phone }}</a></li>
                <li><a href="mailto:{{ $site->email }}" class="font-normal break-all hover:text-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-field">{{ $site->email }}</a></li>
                <li><a href="{{ $site->instagram_url }}" class="font-normal hover:text-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-field">{{ $site->instagram_handle }}</a></li>
            </ul>
        </div>
    </div>
    <div class="border-t border-canvas/15">
        <div class="mx-auto flex max-w-7xl flex-wrap items-center justify-between gap-2 px-5 py-6 text-sm text-canvas/70 sm:px-8">
            <p>© {{ $site->name }}, {{ $site->city }}</p>
            <p>{{ $site->tagline }}</p>
        </div>
    </div>
    @if ($showWordmark == '1')
        <p class="-mb-[0.18em] px-3 text-center font-display text-[clamp(7rem,34vw,30rem)] leading-[0.8] font-semibold tracking-[-0.06em] text-field select-none" aria-hidden="true">{{ $site->name }}</p>
    @endif
</footer>
