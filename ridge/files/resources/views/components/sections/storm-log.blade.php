@props([
    'label' => 'Storm log',
    'stormDate' => 'June 14, 2026 · 4:52 pm',
    'heading' => 'Hail came through on June 14. We were on 214 roofs by the 17th.',
    'body' => 'Every storm that crosses our service area gets logged: where the hail fell, how big it was, and which roofs we checked after. If your street is inside the swath, your roof is worth a look.',
    'hailMax' => '1.75 in',
    'gusts' => '62 mph',
    'roofsChecked' => '214',
    'claimsApproved' => '171',
    'mapCaption' => 'Hail swath over west Fort Worth, June 14. Squares mark roofs we inspected.',
    'ctaLabel' => 'Is my street in the swath?',
    'ctaLink' => '/contact',
    'legendHeading' => 'Hail size',
    'items' => [],
])
<section class="bg-storm py-20 text-secondary-foreground md:py-32">
    <div class="mx-auto grid max-w-7xl gap-12 px-5 md:px-8 lg:grid-cols-12 lg:gap-10">
        <div class="flex flex-col lg:col-span-5">
            <p class="bulletin flex flex-wrap items-center gap-x-3 gap-y-1 text-storm-muted">
                <span class="inline-flex items-center gap-2 text-secondary-foreground"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4" aria-hidden="true"><path d="M6 13.5a4 4 0 1 1 1-7.9A5 5 0 0 1 16.5 8 3 3 0 0 1 15 13.5Z"/><path d="M7 16.5v.5M10 16v1.5M13 16.5v.5"/></svg>{{ $label }}</span>
                <span class="h-3 w-px bg-storm-line" aria-hidden="true"></span>
                <span>{{ $stormDate }}</span>
            </p>
            <h2 class="mt-6 max-w-[18ch] font-display text-section font-semibold text-balance">{{ $heading }}</h2>
            <p class="mt-6 max-w-[46ch] text-lg text-pretty text-storm-muted">{{ $body }}</p>
            <dl class="mt-10 grid grid-cols-2 gap-px overflow-hidden rounded-md border border-storm-line bg-storm-line">
                <div class="bg-storm p-4">
                    <dt class="text-sm text-storm-muted">Largest hail</dt>
                    <dd class="mt-1 font-display text-3xl font-semibold tabular-nums">{{ $hailMax }}</dd>
                </div>
                <div class="bg-storm p-4">
                    <dt class="text-sm text-storm-muted">Peak gusts</dt>
                    <dd class="mt-1 font-display text-3xl font-semibold tabular-nums">{{ $gusts }}</dd>
                </div>
                <div class="bg-storm p-4">
                    <dt class="text-sm text-storm-muted">Roofs we checked</dt>
                    <dd class="mt-1 font-display text-3xl font-semibold tabular-nums">{{ $roofsChecked }}</dd>
                </div>
                <div class="bg-storm p-4">
                    <dt class="text-sm text-storm-muted">Claims approved</dt>
                    <dd class="mt-1 font-display text-3xl font-semibold tabular-nums">{{ $claimsApproved }}</dd>
                </div>
            </dl>
            <a href="{{ $ctaLink }}" class="group mt-10 inline-flex min-h-12 items-center gap-2 self-start text-base font-semibold underline decoration-primary decoration-2 underline-offset-6 hover:decoration-secondary-foreground">
                {{ $ctaLabel }}
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0 transition-transform duration-150 group-hover:translate-x-0.5" aria-hidden="true"><path d="M4 10h11M11 5l5 5-5 5"/></svg>
            </a>
        </div>
        <figure class="lg:col-span-7" data-reveal>
            <div class="relative aspect-[5/4] overflow-hidden rounded-lg border border-storm-line bg-storm">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 520" class="absolute inset-0 size-full" preserveAspectRatio="xMidYMid slice" aria-hidden="true">
                    <g transform="rotate(-8 320 260)" fill="none" stroke="currentColor" class="text-storm-line">
                        <g stroke-width="1"><path d="M-200 -120V640"/><path d="M-162 -120V640"/><path d="M-124 -120V640"/><path d="M-86 -120V640"/><path d="M-48 -120V640"/><path d="M-10 -120V640"/><path d="M28 -120V640"/><path d="M66 -120V640"/><path d="M104 -120V640"/><path d="M142 -120V640"/><path d="M180 -120V640"/><path d="M218 -120V640"/><path d="M256 -120V640"/><path d="M294 -120V640"/><path d="M332 -120V640"/><path d="M370 -120V640"/><path d="M408 -120V640"/><path d="M446 -120V640"/><path d="M484 -120V640"/><path d="M522 -120V640"/><path d="M560 -120V640"/><path d="M598 -120V640"/><path d="M636 -120V640"/><path d="M674 -120V640"/><path d="M712 -120V640"/><path d="M750 -120V640"/><path d="M788 -120V640"/><path d="M826 -120V640"/><path d="M-160 -200H800"/><path d="M-160 -170H800"/><path d="M-160 -140H800"/><path d="M-160 -110H800"/><path d="M-160 -80H800"/><path d="M-160 -50H800"/><path d="M-160 -20H800"/><path d="M-160 10H800"/><path d="M-160 40H800"/><path d="M-160 70H800"/><path d="M-160 100H800"/><path d="M-160 130H800"/><path d="M-160 160H800"/><path d="M-160 190H800"/><path d="M-160 220H800"/><path d="M-160 250H800"/><path d="M-160 280H800"/><path d="M-160 310H800"/><path d="M-160 340H800"/><path d="M-160 370H800"/><path d="M-160 400H800"/><path d="M-160 430H800"/><path d="M-160 460H800"/><path d="M-160 490H800"/><path d="M-160 520H800"/><path d="M-160 550H800"/><path d="M-160 580H800"/><path d="M-160 610H800"/><path d="M-160 640H800"/><path d="M-160 670H800"/><path d="M-160 700H800"/></g>
                        <g stroke-width="3"><path d="M-160 172H800"/><path d="M-160 382H800"/><path d="M266 -120V640"/><path d="M-120 620 700 -80"/></g>
                    </g>
                    <path fill="none" stroke="currentColor" stroke-width="10" stroke-linecap="round" class="text-storm-line" d="M-40 470C60 430 90 360 170 350S300 400 360 330 430 210 520 200 640 150 700 120"/>
                    <g opacity="0.78"><path class="swath-band text-radar-1" fill="currentColor" d="M576.0 96.3Q585.0 102.8 598.8 107.6Q612.6 112.4 620.9 121.6Q629.3 130.8 621.0 147.2Q612.8 163.6 592.4 182.3Q572.0 201.0 551.5 217.6Q531.0 234.1 514.1 249.0Q497.2 263.8 479.9 278.1Q462.7 292.3 443.9 306.0Q425.1 319.6 406.1 334.3Q387.1 349.0 365.8 365.8Q344.4 382.6 319.6 397.2Q294.7 411.8 271.0 418.4Q247.3 425.0 228.0 425.8Q208.6 426.6 189.3 428.9Q170.0 431.1 148.4 435.4Q126.7 439.6 109.6 438.6Q92.4 437.5 86.2 428.2Q80.0 418.8 80.4 406.3Q80.9 393.8 81.2 382.4Q81.5 371.0 83.1 359.4Q84.6 347.7 90.5 334.6Q96.3 321.4 102.4 308.1Q108.4 294.9 111.3 281.0Q114.1 267.0 120.7 250.2Q127.3 233.3 145.8 215.2Q164.3 197.1 191.3 182.7Q218.3 168.2 244.5 157.8Q270.7 147.3 293.6 136.9Q316.6 126.5 339.1 115.9Q361.6 105.3 383.4 98.1Q405.2 90.8 425.0 87.0Q444.7 83.2 464.4 79.3Q484.1 75.5 503.8 72.5Q523.4 69.6 537.6 72.3Q551.8 74.9 559.5 82.4Q567.1 89.9 576.0 96.3Z"/><path class="swath-band text-radar-2" fill="currentColor" d="M525.6 129.9Q540.4 129.5 552.9 132.1Q565.5 134.8 567.3 143.7Q569.2 152.7 562.8 165.1Q556.3 177.4 547.2 190.2Q538.0 203.0 526.2 216.0Q514.3 229.0 498.2 241.6Q482.1 254.1 465.0 265.4Q448.0 276.6 433.0 287.7Q418.1 298.8 402.8 310.8Q387.6 322.9 369.8 333.1Q352.0 343.3 334.4 348.7Q316.7 354.1 300.9 357.7Q285.1 361.3 267.8 368.0Q250.5 374.7 230.4 383.0Q210.2 391.3 192.1 395.3Q174.0 399.2 162.2 396.8Q150.3 394.4 143.1 388.6Q135.9 382.8 132.5 374.8Q129.1 366.9 132.7 355.7Q136.3 344.5 145.8 331.8Q155.3 319.0 162.5 308.3Q169.6 297.6 170.2 288.7Q170.8 279.8 172.2 269.3Q173.5 258.7 183.5 246.0Q193.5 233.2 210.1 220.9Q226.7 208.6 243.8 197.1Q261.0 185.7 277.8 173.8Q294.6 161.9 313.0 150.8Q331.5 139.7 350.5 131.9Q369.5 124.1 387.4 118.7Q405.3 113.4 422.5 108.8Q439.8 104.3 454.6 102.9Q469.5 101.5 477.9 106.0Q486.4 110.6 490.5 117.5Q494.5 124.4 502.6 127.4Q510.8 130.4 525.6 129.9Z"/><path class="swath-band text-radar-3" fill="currentColor" d="M510.6 140.2Q512.7 146.4 508.8 155.2Q504.9 164.1 501.8 171.9Q498.7 179.7 498.3 186.3Q498.0 193.0 494.9 200.9Q491.9 208.8 482.6 218.0Q473.4 227.2 461.5 235.9Q449.7 244.6 439.2 252.6Q428.7 260.6 418.7 268.9Q408.8 277.2 397.4 285.3Q386.0 293.4 373.4 301.0Q360.9 308.6 347.3 316.8Q333.7 325.1 318.5 333.3Q303.3 341.5 289.4 345.5Q275.4 349.6 266.8 347.1Q258.1 344.6 253.9 339.4Q249.6 334.1 244.2 331.1Q238.8 328.1 231.1 327.0Q223.4 325.8 217.6 323.0Q211.8 320.1 210.1 314.7Q208.4 309.3 208.0 303.1Q207.7 297.0 207.9 290.3Q208.0 283.7 211.9 275.5Q215.9 267.3 224.3 258.1Q232.7 249.0 241.9 240.0Q251.2 231.0 259.7 221.5Q268.2 212.0 279.0 202.1Q289.8 192.1 304.2 184.3Q318.5 176.5 332.9 172.7Q347.2 168.8 359.3 166.4Q371.3 164.1 382.6 160.2Q394.0 156.3 406.1 151.5Q418.2 146.8 430.1 143.5Q441.9 140.2 453.6 137.9Q465.2 135.6 477.4 133.8Q489.5 132.0 499.0 133.0Q508.6 134.1 510.6 140.2Z"/><path class="swath-band text-radar-4" fill="currentColor" d="M465.6 168.8Q470.5 170.5 470.5 175.1Q470.5 179.7 468.0 185.3Q465.4 190.8 461.7 196.5Q458.1 202.2 452.4 208.1Q446.8 214.0 440.0 219.7Q433.1 225.3 427.5 230.4Q422.0 235.5 417.9 241.1Q413.7 246.6 408.1 252.9Q402.5 259.2 394.3 264.7Q386.1 270.3 377.1 274.1Q368.2 277.9 359.7 281.3Q351.2 284.7 342.4 288.8Q333.6 292.9 324.8 296.1Q315.9 299.4 308.6 300.2Q301.3 301.0 295.9 300.2Q290.4 299.3 285.8 297.9Q281.2 296.5 278.4 293.9Q275.6 291.3 276.1 286.9Q276.5 282.5 278.0 278.0Q279.6 273.5 278.2 270.4Q276.9 267.3 273.4 264.6Q269.9 261.8 269.4 257.2Q268.8 252.6 273.7 246.5Q278.7 240.3 286.5 234.0Q294.3 227.8 302.1 222.0Q310.0 216.1 318.1 210.7Q326.1 205.3 334.7 200.7Q343.3 196.2 351.7 192.6Q360.1 189.0 368.2 185.2Q376.3 181.4 384.7 177.5Q393.2 173.5 401.0 171.4Q408.8 169.2 414.5 169.7Q420.1 170.2 425.1 170.9Q430.1 171.6 437.2 170.5Q444.4 169.4 452.5 168.3Q460.7 167.1 465.6 168.8Z"/><path class="swath-band text-radar-5" fill="currentColor" d="M413.7 201.2Q413.3 203.3 414.4 204.5Q415.6 205.6 416.9 206.9Q418.3 208.1 418.1 210.1Q417.9 212.2 416.5 214.7Q415.0 217.2 413.2 219.8Q411.3 222.5 409.0 225.3Q406.7 228.1 403.3 230.9Q399.9 233.7 395.9 236.2Q391.9 238.7 388.1 241.2Q384.2 243.6 380.2 246.2Q376.1 248.8 371.9 250.8Q367.6 252.7 364.0 253.2Q360.3 253.6 357.7 253.2Q355.0 252.7 352.3 252.8Q349.6 253.0 346.0 253.9Q342.5 254.9 338.9 255.5Q335.3 256.2 332.6 255.9Q329.9 255.6 327.9 254.7Q325.8 253.8 324.5 252.4Q323.1 251.0 323.6 248.6Q324.1 246.2 326.7 243.1Q329.3 240.1 332.3 237.2Q335.4 234.3 337.4 231.8Q339.3 229.3 341.2 226.6Q343.0 224.0 346.0 221.3Q349.1 218.6 353.1 216.3Q357.1 214.0 360.9 212.0Q364.8 210.0 368.4 207.8Q372.1 205.6 376.0 203.2Q380.0 200.9 384.1 199.0Q388.3 197.2 392.3 195.8Q396.4 194.4 400.6 193.2Q404.8 191.9 408.4 191.6Q412.0 191.2 413.5 192.6Q415.0 194.0 414.5 196.5Q414.0 199.1 413.7 201.2Z"/></g>
                    <g stroke-width="2" class="fill-surface stroke-storm"><rect x="328" y="274" width="8" height="8" rx="1.5"/><rect x="311" y="238" width="8" height="8" rx="1.5"/><rect x="239" y="287" width="8" height="8" rx="1.5"/><rect x="470" y="185" width="8" height="8" rx="1.5"/><rect x="462" y="181" width="8" height="8" rx="1.5"/><rect x="398" y="216" width="8" height="8" rx="1.5"/><rect x="220" y="342" width="8" height="8" rx="1.5"/><rect x="416" y="222" width="8" height="8" rx="1.5"/><rect x="204" y="261" width="8" height="8" rx="1.5"/><rect x="239" y="274" width="8" height="8" rx="1.5"/><rect x="382" y="213" width="8" height="8" rx="1.5"/><rect x="390" y="177" width="8" height="8" rx="1.5"/><rect x="392" y="231" width="8" height="8" rx="1.5"/><rect x="319" y="320" width="8" height="8" rx="1.5"/><rect x="426" y="246" width="8" height="8" rx="1.5"/><rect x="262" y="247" width="8" height="8" rx="1.5"/><rect x="302" y="255" width="8" height="8" rx="1.5"/><rect x="425" y="204" width="8" height="8" rx="1.5"/><rect x="277" y="228" width="8" height="8" rx="1.5"/><rect x="319" y="309" width="8" height="8" rx="1.5"/><rect x="261" y="298" width="8" height="8" rx="1.5"/><rect x="358" y="164" width="8" height="8" rx="1.5"/><rect x="377" y="279" width="8" height="8" rx="1.5"/><rect x="181" y="319" width="8" height="8" rx="1.5"/><rect x="315" y="211" width="8" height="8" rx="1.5"/><rect x="404" y="199" width="8" height="8" rx="1.5"/></g>
                </svg>
                <div class="radar-sweep pointer-events-none absolute top-1/2 left-1/2 aspect-square w-[160%] -translate-x-1/2 -translate-y-1/2 bg-[conic-gradient(from_0deg,transparent_0deg,transparent_300deg,color-mix(in_oklab,var(--color-primary)_22%,transparent)_360deg)]" aria-hidden="true"></div>
                <div class="absolute top-4 left-4 rounded-md bg-storm/90 p-3 backdrop-blur-sm max-sm:hidden">
                    <p class="bulletin text-storm-muted">{{ $legendHeading }}</p>
                    <ul role="list" class="hail-legend mt-2 flex flex-col gap-1.5 text-sm">
                        @foreach ($items as $hail)
                            <li class="flex items-center gap-2.5">
                                <span class="chip size-3 shrink-0 rounded-sm" aria-hidden="true"></span>
                                <span class="w-14 tabular-nums">{{ $hail->size }}</span>
                                <span class="text-storm-muted">{{ $hail->name }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <ul role="list" class="hail-legend mt-4 flex flex-wrap gap-x-4 gap-y-2 text-sm sm:hidden" aria-label="{{ $legendHeading }}">
                @foreach ($items as $hail)
                    <li class="flex items-center gap-2"><span class="chip size-3 shrink-0 rounded-sm" aria-hidden="true"></span><span class="tabular-nums">{{ $hail->size }}</span></li>
                @endforeach
            </ul>
            <figcaption class="mt-4 flex items-start gap-2.5 text-sm text-storm-muted">
                <span class="mt-1 size-2.5 shrink-0 rounded-[2px] border-2 border-storm bg-surface outline outline-storm-muted" aria-hidden="true"></span>
                {{ $mapCaption }}
            </figcaption>
        </figure>
    </div>
</section>
