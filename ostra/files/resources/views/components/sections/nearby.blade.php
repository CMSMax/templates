@props([
    'eyebrow' => 'Nearby',
    'heading' => 'Everything is',
    'headingAccent' => 'downhill.',
    'body' => 'Leave the car behind. The harbour, the beach, and the market are a short walk from the gate — and we are happy to draw you a map at breakfast.',
    'directionsLabel' => 'Get directions',
])
<section id="nearby" class="scroll-mt-20 py-24 lg:py-32">
    <div class="mx-auto grid max-w-7xl gap-14 px-6 lg:grid-cols-[5fr_7fr] lg:gap-24 lg:px-8">
        <div class="flex flex-col items-start">
            <p class="text-xs font-medium tracking-[0.24em] text-primary uppercase">{{ $eyebrow }}</p>
            <h2 class="mt-6 font-display text-[clamp(2.25rem,4.5vw,3.75rem)] leading-[1.05] font-normal tracking-tight text-balance text-ink">{{ $heading }} <em class="italic">{{ $headingAccent }}</em></h2>
            <p class="mt-6 max-w-[42ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
            <address class="mt-10 border-l-2 border-primary pl-5 text-base/7 text-ink not-italic">
                {{ $site->name }}<br>
                {{ $site->address }}<br>
                {{ $site->city }}
            </address>
            <a href="{{ $site->directions_url }}" class="group mt-8 inline-flex items-center gap-2 rounded-sm border-b border-ink/30 pb-1 text-base font-medium text-ink transition-colors duration-150 hover:border-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                {{ $directionsLabel }}
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4 shrink-0 transition-transform duration-200 group-hover:-translate-y-0.5 group-hover:translate-x-0.5" aria-hidden="true"><path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 0 0 1.06 0l7.22-7.22v5.69a.75.75 0 0 0 1.5 0v-7.5a.75.75 0 0 0-.75-.75h-7.5a.75.75 0 0 0 0 1.5h5.69l-7.22 7.22a.75.75 0 0 0 0 1.06Z" clip-rule="evenodd"/></svg>
            </a>
        </div>
        <ul role="list" class="border-t border-ink">
            @foreach ($nearby as $spot)
                <li class="border-b border-line py-6">
                    <div class="flex items-baseline gap-4 text-ink">
                        <h3 class="font-display text-[1.375rem] leading-snug sm:text-2xl">{{ $spot->place }}</h3>
                        <span class="leader max-sm:hidden" aria-hidden="true"></span>
                        <p class="shrink-0 text-sm font-medium text-primary tabular-nums max-sm:hidden">{{ $spot->distance }}</p>
                    </div>
                    <p class="mt-1.5 text-base text-muted">{{ $spot->note }}<span class="sm:hidden"> · <span class="font-medium text-primary">{{ $spot->distance }}</span></span></p>
                </li>
            @endforeach
        </ul>
    </div>
</section>
