@props([
    'heading' => 'Order by phone, or come in and choose',
    'body' => 'Tell us who the flowers are for and what you would like to spend. We will ask a few questions, suggest what is best this week, and write the card for you.',
    'emailLabel' => 'Or email an order',
])
<section id="order" class="border-t border-line bg-surface py-20 sm:py-28">
    <div class="mx-auto grid max-w-7xl gap-x-10 gap-y-16 px-6 lg:grid-cols-12 lg:px-8">
        <div class="lg:col-span-7">
            <h2 class="max-w-[18ch] font-display text-4xl tracking-tight text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
            <p class="mt-5 max-w-[52ch] text-lg/8 text-muted">{{ $body }}</p>
            <p class="mt-10 font-display text-[clamp(2.5rem,6vw,4.5rem)] leading-none tracking-tight text-ink tabular-nums"><a href="{{ $site->phone_href }}" class="underline decoration-line decoration-1 underline-offset-[0.2em] transition-colors duration-200 hover:text-primary hover:decoration-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $site->phone }}</a></p>
            <div class="mt-10 flex flex-wrap items-center gap-x-8 gap-y-5">
                <a href="{{ $site->phone_href }}" class="rounded-full bg-primary px-7 py-3.5 font-medium text-primary-foreground transition-colors duration-200 hover:bg-primary/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Call to order</a>
                <a href="mailto:{{ $site->email }}" class="font-medium text-ink underline decoration-ink/30 underline-offset-8 transition-colors duration-200 hover:decoration-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $emailLabel }}</a>
            </div>
            <dl class="mt-14 grid gap-8 border-t border-line pt-10 sm:grid-cols-2">
                <div>
                    <dt class="font-medium text-ink">Same-day delivery</dt>
                    <dd class="mt-2 text-base/7 text-muted">{{ $site->delivery_cutoff }}, {{ $site->delivery_days }}.</dd>
                </div>
                <div>
                    <dt class="font-medium text-ink">Where we deliver</dt>
                    <dd class="mt-2 text-base/7 text-muted">{{ $site->delivery_area }}</dd>
                </div>
            </dl>
        </div>
        <div id="visit" class="lg:col-span-4 lg:col-start-9">
            <div class="border-t border-line pt-8 lg:border-t-0 lg:border-l lg:pt-0 lg:pl-10">
                <span class="grid size-8 text-primary"><x-sections.mark/></span>
                <h3 class="mt-6 font-display text-2xl text-ink">Visit the studio</h3>
                <address class="mt-4 text-base/7 text-muted not-italic">{{ $site->address }}<br>{{ $site->city }}</address>
                <p class="mt-2 text-base/7"><a href="{{ $site->map_url }}" class="text-ink underline decoration-ink/30 underline-offset-4 transition-colors duration-200 hover:decoration-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Get directions</a></p>
                <h3 class="mt-10 font-display text-2xl text-ink">Hours</h3>
                <dl class="mt-4 flex flex-col gap-3 text-base/7">
                    @foreach ($hours as $slot)
                        <div class="flex justify-between gap-6 border-b border-line pb-3">
                            <dt class="text-ink">{{ $slot->day }}</dt>
                            <dd class="text-muted tabular-nums">{{ $slot->hours }}</dd>
                        </div>
                    @endforeach
                </dl>
                <p class="mt-4 text-sm/6 text-muted">{{ $site->hours_note }}</p>
            </div>
        </div>
    </div>
</section>
