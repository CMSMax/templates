@props([
    'heading' => 'Light on? Here’s what it means.',
    'body' => 'Amber means get it looked at soon. Red means stop. Here’s what the common ones are telling you — and how long you have.',
    'helpText' => 'Not sure which one it is? Text us a photo of your dash and we’ll tell you whether it can wait.',
])
<section id="lights" class="scroll-mt-18 bg-field py-20 text-field-ink lg:py-28">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="grid gap-6 lg:grid-cols-12 lg:items-end lg:gap-12">
            <h2 class="max-w-[16ch] font-display text-[clamp(2.5rem,5vw,4.25rem)] leading-[0.95] font-bold text-balance uppercase lg:col-span-7">{{ $heading }}</h2>
            <p class="max-w-[48ch] text-lg/8 text-field-muted lg:col-span-5">{{ $body }}</p>
        </div>

        <ul role="list" class="mt-14 grid gap-px overflow-hidden rounded-xl bg-field-line ring-1 ring-field-line sm:grid-cols-2 lg:mt-16 lg:grid-cols-3">
            @foreach ($lights as $light)
                <li data-level="{{ $light->level }}" class="flex flex-col bg-field p-7 lg:p-8">
                    <div class="flex items-start justify-between gap-4">
                        <span class="lamp grid size-14 place-items-center rounded-full bg-field-raised ring-1 ring-field-line" aria-hidden="true">
                            @if ($light->icon == 'engine')
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-8"><path fill="currentColor" d="M8 10h8v8h-5l-2-2H7v-5m0-7v2h3v2H7l-2 2v3H3v-3H1v8h2v-3h2v3h3l2 2h8v-4h2v3h3V9h-3v3h-2V8h-6V6h3V4z"/></svg>
                            @elseif ($light->icon == 'oil')
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-8"><path fill="currentColor" d="M22 12.5s2 2.17 2 3.5a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.330 2-3.500 2-3.500M6 6h4a1 1 0 0 1 1 1a1 1 0 0 1-1 1H9v2h2c.74 0 1.39.4 1.73 1l6.51-3.76l3.26 1.89c.5.27.64.87.37 1.37c-.28.47-.87.64-1.37.36l-2.1-1.21l-3.65 6.32c-.34.61-1 1.03-1.75 1.03H5a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h2V8H6a1 1 0 0 1-1-1a1 1 0 0 1 1-1m-1 6v3h9l2.06-3.57l-3.460 2l-.91-1.43zM.38 9.21L2.09 7.5c.41-.39 1.02-.39 1.410 0s.39 1 0 1.410l-1.710 1.710c-.39.38-1.020.38-1.410 0C0 10.23 0 9.6.38 9.21"/></svg>
                            @elseif ($light->icon == 'brake')
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-8"><path fill="currentColor" d="M11 15h2v2h-2zm0-8h2v6h-2zm1-4a9 9 0 0 0-9 9a9 9 0 0 0 9 9a9 9 0 0 0 9-9a9 9 0 0 0-9-9m0 16c-3.860 0-7-3.140-7-7s3.140-7 7-7s7 3.140 7 7s-3.140 7-7 7m8.500 1.500c2.160-2.190 3.500-5.190 3.500-8.500s-1.340-6.310-3.500-8.500l-1.080 1.080C21.320 6.500 22.500 9.110 22.500 12c0 2.900-1.180 5.500-3.080 7.420zM4.580 19.420C2.680 17.500 1.500 14.900 1.500 12c0-2.890 1.180-5.500 3.080-7.420L3.500 3.500C1.340 5.690 0 8.690 0 12s1.340 6.310 3.500 8.500z"/></svg>
                            @elseif ($light->icon == 'battery')
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-8"><path fill="currentColor" d="M4 3v3H1v14h22V6h-3V3h-6v3h-4V3zM3 8h18v10H3zm12 2v2h-2v2h2v2h2v-2h2v-2h-2v-2zM5 12v2h6v-2z"/></svg>
                            @elseif ($light->icon == 'coolant')
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-8"><path fill="currentColor" d="M11.5 1A1.5 1.5 0 0 0 10 2.5v12c-.63.47-1 1.21-1 2a2.5 2.5 0 0 0 2.5 2.5a2.5 2.5 0 0 0 2.5-2.5c0-.79-.37-1.5-1-2V13h4v-2h-4V9h4V7h-4V5h4V3h-4v-.5A1.5 1.5 0 0 0 11.5 1M0 15v2c.67 0 .79.21 1.29.71S2.67 19 4 19s2.210-.79 2.710-1.290c.11-.12.2-.21.29-.3v-2.250c-.79.26-1.350.77-1.710 1.130c-.5.5-.62.71-1.290.71s-.79-.21-1.290-.71S1.330 15 0 15m16 0v2c.67 0 .79.21 1.290.71S18.670 19 20 19s2.210-.79 2.710-1.290S23.330 17 24 17v-2c-1.330 0-2.210.79-2.710 1.290S20.670 17 20 17s-.79-.21-1.290-.71S17.330 15 16 15"/></svg>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-8"><path fill="currentColor" d="M11 13h2v2h-2zm0-8h2v6h-2zm6-.24c1.86 1.43 3 3.85 3 6.24a8 8 0 0 1-4.14 7H8.14A8 8 0 0 1 4 11c0-2.39 1.09-4.83 3-6.24V2H5v1.86C3.15 5.68 2 8.2 2 11s1.15 5.32 3 7.14V22h2v-2h2v2h2v-2h2v2h2v-2h2v2h2v-3.86c1.85-1.82 3-4.34 3-7.14s-1.15-5.32-3-7.14V2h-2z"/></svg>
                            @endif
                        </span>
                        <p class="flex items-center gap-2 rounded-full bg-field-raised px-3 py-1.5 text-sm font-semibold ring-1 ring-field-line">
                            <span class="size-2 rounded-full bg-(--lamp)" aria-hidden="true"></span>
                            {{ $light->urgency }}
                        </p>
                    </div>
                    <h3 class="mt-7 font-display text-2xl font-bold tracking-wide uppercase">{{ $light->name }}</h3>
                    <p class="mt-3 text-base/7 text-field-muted">{{ $light->meaning }}</p>
                </li>
            @endforeach
        </ul>

        <div class="mt-10 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <p class="max-w-[60ch] text-base/7 text-field-muted">{{ $helpText }}</p>
            <a href="{{ $site->phone_href }}" class="inline-flex shrink-0 items-center gap-2 self-start rounded-md px-4 py-3 font-display text-lg font-semibold tracking-wide text-field-ink tabular-nums ring-1 ring-field-ink/35 transition-colors duration-150 ring-inset hover:bg-field-ink hover:text-field focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-field-ink sm:self-auto">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 0 1 3.5 2h1.148a1.5 1.5 0 0 1 1.465 1.175l.513 2.31a1.5 1.5 0 0 1-1.02 1.745l-.97.323a.5.5 0 0 0-.297.637 10.03 10.03 0 0 0 5.47 5.47.5.5 0 0 0 .637-.297l.323-.97a1.5 1.5 0 0 1 1.745-1.02l2.31.513A1.5 1.5 0 0 1 18 15.352V16.5a1.5 1.5 0 0 1-1.5 1.5H15C8.373 18 3 12.627 3 6V4.5" clip-rule="evenodd"/></svg>
                {{ $site->phone }}
            </a>
        </div>
    </div>
</section>
