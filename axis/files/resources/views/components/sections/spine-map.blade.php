@props([
    'heading' => 'Find it on the spine.',
    'body' => 'Neck, mid back, low back or pelvis — almost everything we treat lives in one of four places. Find yours, then book, and we will take it from there.',
    'hint' => 'Point to a condition to light up its vertebrae.',
    'neckTitle' => 'Neck & head',
    'neckLabel' => 'Cervical spine · C1–C7',
    'midTitle' => 'Mid back',
    'midLabel' => 'Thoracic spine · T1–T12',
    'lowTitle' => 'Low back',
    'lowLabel' => 'Lumbar spine · L1–L5',
    'pelvisTitle' => 'Pelvis & hips',
    'pelvisLabel' => 'Sacrum and tailbone',
])
<section id="conditions" aria-labelledby="conditions-heading" class="scroll-mt-8 py-20 sm:py-28">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="grid gap-6 lg:grid-cols-12 lg:items-end lg:gap-8">
            <h2 id="conditions-heading" class="font-display text-[clamp(2.75rem,6vw,5rem)] leading-[0.95] font-semibold tracking-[-0.02em] text-balance text-ink lg:col-span-5">{{ $heading }}</h2>
            <p class="max-w-[52ch] text-lg/8 text-muted lg:col-span-6 lg:col-start-7">{{ $body }}</p>
        </div>

        <div class="spine-map mt-14 grid gap-8 lg:mt-20 lg:grid-cols-12">
            <figure class="max-lg:hidden lg:col-span-4">
                <div class="sticky top-10 flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 220 730" class="h-[44rem] w-auto" role="img" aria-label="A side view of the spine, from the neck to the tailbone">
                    <rect class="vertebra fill-ink" data-part="neck" x="94.7" y="6.0" width="30.0" height="13" rx="6.0" transform="rotate(-10.0 109.7 12.5)"/>
                    <rect class="vertebra fill-ink" data-part="neck" x="97.9" y="25.0" width="31.5" height="13" rx="6.0" transform="rotate(-12.9 113.7 31.5)"/>
                    <rect class="vertebra fill-ink" data-part="neck" x="101.3" y="44.0" width="33.0" height="13" rx="6.0" transform="rotate(-10.3 117.8 50.5)"/>
                    <rect class="vertebra fill-ink" data-part="neck" x="102.7" y="63.0" width="34.5" height="13" rx="6.0" transform="rotate(-2.0 120.0 69.5)"/>
                    <rect class="vertebra fill-ink" data-part="neck" x="101.5" y="82.0" width="36.0" height="13" rx="6.0" transform="rotate(4.2 119.5 88.5)"/>
                    <rect class="vertebra fill-ink" data-part="neck" x="98.7" y="101.0" width="37.5" height="13" rx="6.0" transform="rotate(8.1 117.4 107.5)"/>
                    <rect class="vertebra fill-ink" data-part="neck" x="94.8" y="120.0" width="39.0" height="13" rx="6.0" transform="rotate(9.8 114.3 126.5)"/>
                    <rect class="vertebra fill-ink" data-part="mid" x="89.9" y="141.0" width="40.0" height="17.0" rx="6.0" transform="rotate(13.1 109.9 149.5)"/>
                    <rect class="vertebra fill-ink" data-part="mid" x="83.2" y="164.0" width="41.3" height="17.3" rx="6.0" transform="rotate(15.8 103.9 172.7)"/>
                    <rect class="vertebra fill-ink" data-part="mid" x="75.8" y="187.3" width="42.6" height="17.6" rx="6.0" transform="rotate(16.0 97.1 196.1)"/>
                    <rect class="vertebra fill-ink" data-part="mid" x="70.1" y="210.9" width="43.9" height="17.9" rx="6.0" transform="rotate(12.3 92.1 219.8)"/>
                    <rect class="vertebra fill-ink" data-part="mid" x="64.0" y="234.8" width="45.2" height="18.2" rx="6.0" transform="rotate(12.8 86.6 243.9)"/>
                    <rect class="vertebra fill-ink" data-part="mid" x="58.3" y="259.0" width="46.5" height="18.5" rx="6.0" transform="rotate(10.1 81.6 268.2)"/>
                    <rect class="vertebra fill-ink" data-part="mid" x="54.5" y="283.5" width="47.8" height="18.8" rx="6.0" transform="rotate(4.1 78.4 292.9)"/>
                    <rect class="vertebra fill-ink" data-part="mid" x="53.7" y="308.3" width="49.1" height="19.1" rx="6.0" transform="rotate(-3.1 78.3 317.9)"/>
                    <rect class="vertebra fill-ink" data-part="mid" x="55.6" y="333.4" width="50.4" height="19.4" rx="6.0" transform="rotate(-7.7 80.8 343.1)"/>
                    <rect class="vertebra fill-ink" data-part="mid" x="58.9" y="358.8" width="51.7" height="19.7" rx="6.0" transform="rotate(-9.7 84.8 368.7)"/>
                    <rect class="vertebra fill-ink" data-part="mid" x="62.6" y="384.5" width="53.0" height="20.0" rx="6.0" transform="rotate(-9.0 89.1 394.5)"/>
                    <rect class="vertebra fill-ink" data-part="mid" x="67.8" y="410.5" width="54.3" height="20.3" rx="6.0" transform="rotate(-14.7 95.0 420.6)"/>
                    <rect class="vertebra fill-ink" data-part="low" x="74.3" y="438.8" width="58" height="25" rx="6.0" transform="rotate(-14.9 103.3 451.3)"/>
                    <rect class="vertebra fill-ink" data-part="low" x="81.3" y="470.8" width="60" height="25" rx="6.0" transform="rotate(-14.4 111.3 483.3)"/>
                    <rect class="vertebra fill-ink" data-part="low" x="88.0" y="502.8" width="62" height="25" rx="6.0" transform="rotate(-11.1 119.0 515.3)"/>
                    <rect class="vertebra fill-ink" data-part="low" x="90.0" y="534.8" width="64" height="25" rx="6.0" transform="rotate(2.2 122.0 547.3)"/>
                    <rect class="vertebra fill-ink" data-part="low" x="84.1" y="566.8" width="66" height="25" rx="6.0" transform="rotate(13.0 117.1 579.3)"/>
                    <path class="vertebra fill-ink" data-part="pelvis" d="M77.8 600.8 L145.8 600.8 Q126.2 650.8 93.9 686.8 L75.9 686.8 Q68.2 650.8 77.8 600.8 Z"/>
                    <rect class="vertebra fill-ink" data-part="pelvis" x="77.5" y="692.8" width="12" height="7" rx="3.5" transform="rotate(10.7 83.5 696.3)"/>
                    <rect class="vertebra fill-ink" data-part="pelvis" x="77.1" y="703.8" width="9" height="7" rx="3.5" transform="rotate(8.6 81.6 707.3)"/>
                    <rect class="vertebra fill-ink" data-part="pelvis" x="76.7" y="714.8" width="7" height="7" rx="3.5" transform="rotate(4.3 80.2 718.3)"/>
                    </svg>
                    <figcaption class="mt-6 flex items-center gap-2 text-sm text-muted">
                        <span class="size-2 shrink-0 rounded-full bg-primary" aria-hidden="true"></span>
                        {{ $hint }}
                    </figcaption>
                </div>
            </figure>
            <div class="border-b border-ink lg:col-span-8">
                <div data-region="neck" class="grid gap-x-8 gap-y-4 border-t border-ink py-8 sm:grid-cols-[13rem_1fr]">
                    <div class="flex items-start gap-4">
                        <span class="mt-2 flex flex-col gap-1 lg:hidden" aria-hidden="true"><span class="h-1.5 w-5 rounded-full bg-primary"></span><span class="h-1.5 w-5 rounded-full bg-ink/20"></span><span class="h-1.5 w-5 rounded-full bg-ink/20"></span><span class="h-1.5 w-5 rounded-full bg-ink/20"></span></span>
                        <div>
                            <h3 class="region-title font-display text-[1.75rem] leading-8 font-semibold tracking-[-0.01em] text-ink">{{ $neckTitle }}</h3>
                            <p class="mt-1 text-sm text-muted">{{ $neckLabel }}</p>
                        </div>
                    </div>
                    <ul role="list" class="flex flex-col">
                        @foreach ($conditions as $condition)
                            @if ($condition->region == 'neck')
                                <li class="border-line not-first:border-t">
                                    <a href="{{ $site->cta_link }}" class="group -mx-3 flex items-start justify-between gap-6 rounded-lg px-3 py-4 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                                        <span>
                                            <span class="block text-lg/7 font-semibold text-ink group-hover:text-primary">{{ $condition->name }}</span>
                                            <span class="mt-0.5 block text-base/7 text-muted sm:text-sm/6">{{ $condition->note }}</span>
                                        </span>
                                        <span class="mt-1 inline-flex shrink-0 items-center gap-1.5 text-sm font-semibold text-primary opacity-0 transition-opacity duration-200 group-hover:opacity-100 group-focus-visible:opacity-100 max-sm:hidden">
                                            Book<span class="sr-only"> a visit for {{ $condition->name }}</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4 shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="M2 8a.75.75 0 0 1 .75-.75h8.69L8.22 4.03a.75.75 0 0 1 1.06-1.06l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 0 1-1.06-1.06l3.22-3.22H2.75A.75.75 0 0 1 2 8Z" clip-rule="evenodd"/></svg>
                                        </span>
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div data-region="mid" class="grid gap-x-8 gap-y-4 border-t border-ink py-8 sm:grid-cols-[13rem_1fr]">
                    <div class="flex items-start gap-4">
                        <span class="mt-2 flex flex-col gap-1 lg:hidden" aria-hidden="true"><span class="h-1.5 w-5 rounded-full bg-ink/20"></span><span class="h-1.5 w-5 rounded-full bg-primary"></span><span class="h-1.5 w-5 rounded-full bg-ink/20"></span><span class="h-1.5 w-5 rounded-full bg-ink/20"></span></span>
                        <div>
                            <h3 class="region-title font-display text-[1.75rem] leading-8 font-semibold tracking-[-0.01em] text-ink">{{ $midTitle }}</h3>
                            <p class="mt-1 text-sm text-muted">{{ $midLabel }}</p>
                        </div>
                    </div>
                    <ul role="list" class="flex flex-col">
                        @foreach ($conditions as $condition)
                            @if ($condition->region == 'mid')
                                <li class="border-line not-first:border-t">
                                    <a href="{{ $site->cta_link }}" class="group -mx-3 flex items-start justify-between gap-6 rounded-lg px-3 py-4 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                                        <span>
                                            <span class="block text-lg/7 font-semibold text-ink group-hover:text-primary">{{ $condition->name }}</span>
                                            <span class="mt-0.5 block text-base/7 text-muted sm:text-sm/6">{{ $condition->note }}</span>
                                        </span>
                                        <span class="mt-1 inline-flex shrink-0 items-center gap-1.5 text-sm font-semibold text-primary opacity-0 transition-opacity duration-200 group-hover:opacity-100 group-focus-visible:opacity-100 max-sm:hidden">
                                            Book<span class="sr-only"> a visit for {{ $condition->name }}</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4 shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="M2 8a.75.75 0 0 1 .75-.75h8.69L8.22 4.03a.75.75 0 0 1 1.06-1.06l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 0 1-1.06-1.06l3.22-3.22H2.75A.75.75 0 0 1 2 8Z" clip-rule="evenodd"/></svg>
                                        </span>
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div data-region="low" class="grid gap-x-8 gap-y-4 border-t border-ink py-8 sm:grid-cols-[13rem_1fr]">
                    <div class="flex items-start gap-4">
                        <span class="mt-2 flex flex-col gap-1 lg:hidden" aria-hidden="true"><span class="h-1.5 w-5 rounded-full bg-ink/20"></span><span class="h-1.5 w-5 rounded-full bg-ink/20"></span><span class="h-1.5 w-5 rounded-full bg-primary"></span><span class="h-1.5 w-5 rounded-full bg-ink/20"></span></span>
                        <div>
                            <h3 class="region-title font-display text-[1.75rem] leading-8 font-semibold tracking-[-0.01em] text-ink">{{ $lowTitle }}</h3>
                            <p class="mt-1 text-sm text-muted">{{ $lowLabel }}</p>
                        </div>
                    </div>
                    <ul role="list" class="flex flex-col">
                        @foreach ($conditions as $condition)
                            @if ($condition->region == 'low')
                                <li class="border-line not-first:border-t">
                                    <a href="{{ $site->cta_link }}" class="group -mx-3 flex items-start justify-between gap-6 rounded-lg px-3 py-4 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                                        <span>
                                            <span class="block text-lg/7 font-semibold text-ink group-hover:text-primary">{{ $condition->name }}</span>
                                            <span class="mt-0.5 block text-base/7 text-muted sm:text-sm/6">{{ $condition->note }}</span>
                                        </span>
                                        <span class="mt-1 inline-flex shrink-0 items-center gap-1.5 text-sm font-semibold text-primary opacity-0 transition-opacity duration-200 group-hover:opacity-100 group-focus-visible:opacity-100 max-sm:hidden">
                                            Book<span class="sr-only"> a visit for {{ $condition->name }}</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4 shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="M2 8a.75.75 0 0 1 .75-.75h8.69L8.22 4.03a.75.75 0 0 1 1.06-1.06l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 0 1-1.06-1.06l3.22-3.22H2.75A.75.75 0 0 1 2 8Z" clip-rule="evenodd"/></svg>
                                        </span>
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div data-region="pelvis" class="grid gap-x-8 gap-y-4 border-t border-ink py-8 sm:grid-cols-[13rem_1fr]">
                    <div class="flex items-start gap-4">
                        <span class="mt-2 flex flex-col gap-1 lg:hidden" aria-hidden="true"><span class="h-1.5 w-5 rounded-full bg-ink/20"></span><span class="h-1.5 w-5 rounded-full bg-ink/20"></span><span class="h-1.5 w-5 rounded-full bg-ink/20"></span><span class="h-1.5 w-5 rounded-full bg-primary"></span></span>
                        <div>
                            <h3 class="region-title font-display text-[1.75rem] leading-8 font-semibold tracking-[-0.01em] text-ink">{{ $pelvisTitle }}</h3>
                            <p class="mt-1 text-sm text-muted">{{ $pelvisLabel }}</p>
                        </div>
                    </div>
                    <ul role="list" class="flex flex-col">
                        @foreach ($conditions as $condition)
                            @if ($condition->region == 'pelvis')
                                <li class="border-line not-first:border-t">
                                    <a href="{{ $site->cta_link }}" class="group -mx-3 flex items-start justify-between gap-6 rounded-lg px-3 py-4 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                                        <span>
                                            <span class="block text-lg/7 font-semibold text-ink group-hover:text-primary">{{ $condition->name }}</span>
                                            <span class="mt-0.5 block text-base/7 text-muted sm:text-sm/6">{{ $condition->note }}</span>
                                        </span>
                                        <span class="mt-1 inline-flex shrink-0 items-center gap-1.5 text-sm font-semibold text-primary opacity-0 transition-opacity duration-200 group-hover:opacity-100 group-focus-visible:opacity-100 max-sm:hidden">
                                            Book<span class="sr-only"> a visit for {{ $condition->name }}</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4 shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="M2 8a.75.75 0 0 1 .75-.75h8.69L8.22 4.03a.75.75 0 0 1 1.06-1.06l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 0 1-1.06-1.06l3.22-3.22H2.75A.75.75 0 0 1 2 8Z" clip-rule="evenodd"/></svg>
                                        </span>
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
