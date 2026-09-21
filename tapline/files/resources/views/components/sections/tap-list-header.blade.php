@props([
    'heading' => 'The tap list.',
    'body' => 'Everything pouring today, in the order it sits on the wall. Ask for a taste of anything before you commit — that’s what the little glasses are for.',
    'image' => '/images/pour.jpg',
    'imageAlt' => 'A bartender’s hand pouring amber beer from a brass tap into a pint glass',
])
<section class="border-b border-line pt-12 pb-16 sm:pt-16 lg:pt-20 lg:pb-20">
    <div class="mx-auto grid max-w-7xl grid-cols-1 gap-12 px-5 sm:px-8 lg:grid-cols-12 lg:items-end lg:gap-16">
        <div class="lg:col-span-7">
            <h1 class="font-display text-[clamp(2.75rem,7vw,6rem)] leading-[0.94] font-black tracking-tight text-balance text-ink">{{ $heading }}</h1>
            <p class="mt-6 max-w-[48ch] text-lg/8 text-muted">{{ $body }}</p>
            <dl class="mt-10 flex flex-wrap gap-x-10 gap-y-4 text-base">
                <div>
                    <dt class="text-muted">Flights</dt>
                    <dd class="mt-1 font-medium text-ink">{{ $site->flight_note }}</dd>
                </div>
                <div>
                    <dt class="text-muted">Hours</dt>
                    <dd class="mt-1 font-medium text-ink">{{ $site->open_summary }}</dd>
                </div>
            </dl>
        </div>
        <div class="lg:col-span-5">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="896" height="1120" fetchpriority="high" decoding="async" class="aspect-[5/4] w-full rounded-2xl object-cover outline-1 -outline-offset-1 outline-ink/10 lg:aspect-[4/5]">
        </div>
    </div>
</section>
