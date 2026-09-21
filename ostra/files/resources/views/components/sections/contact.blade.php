@props([
    'eyebrow' => 'Stay with us',
    'heading' => 'Your room is',
    'headingAccent' => 'waiting.',
    'body' => 'Tell us your dates and how many of you are coming. We answer every note ourselves, usually within the hour, and we will always tell you honestly which room we would pick.',
])
<section id="contact" class="scroll-mt-20 bg-ink text-canvas">
    <div class="awning" aria-hidden="true"></div>
    <div class="mx-auto grid max-w-7xl gap-14 px-6 pt-20 pb-24 lg:grid-cols-[7fr_5fr] lg:items-end lg:gap-24 lg:px-8 lg:pt-28 lg:pb-32">
        <div>
            <p class="text-xs font-medium tracking-[0.24em] text-canvas/70 uppercase">{{ $eyebrow }}</p>
            <h2 class="mt-6 font-display text-[clamp(2.75rem,7vw,6rem)] leading-none font-normal tracking-tight text-balance">{{ $heading }} <em class="italic">{{ $headingAccent }}</em></h2>
            <p class="mt-8 max-w-[48ch] text-lg/8 text-pretty text-canvas/80">{{ $body }}</p>
            <div class="mt-10 flex flex-wrap items-center gap-3">
                <a href="{{ $site->booking_url }}" class="rounded-full bg-primary px-6 py-3.5 text-base font-medium text-primary-foreground transition-colors duration-150 hover:bg-primary/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-canvas">{{ $site->cta_label }}</a>
                <a href="{{ $site->phone_href }}" class="rounded-full px-6 py-3.5 text-base font-medium text-canvas ring-1 ring-canvas/35 ring-inset transition-colors duration-150 hover:bg-canvas/10 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-canvas">Call {{ $site->phone }}</a>
            </div>
        </div>
        <dl class="grid gap-8 border-t border-canvas/20 pt-8 text-base">
            <div>
                <dt class="text-xs font-medium tracking-[0.2em] text-canvas/60 uppercase">Write</dt>
                <dd class="mt-2"><a href="mailto:{{ $site->email }}" class="rounded-sm font-display text-2xl text-canvas hover:text-canvas/80 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-canvas">{{ $site->email }}</a></dd>
            </div>
            <div>
                <dt class="text-xs font-medium tracking-[0.2em] text-canvas/60 uppercase">Call</dt>
                <dd class="mt-2"><a href="{{ $site->phone_href }}" class="rounded-sm font-display text-2xl text-canvas tabular-nums hover:text-canvas/80 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-canvas">{{ $site->phone }}</a></dd>
            </div>
            <div>
                <dt class="text-xs font-medium tracking-[0.2em] text-canvas/60 uppercase">Find us</dt>
                <dd class="mt-2 text-lg/8 text-canvas/85">{{ $site->address }}, {{ $site->city }}</dd>
            </div>
        </dl>
    </div>
</section>
