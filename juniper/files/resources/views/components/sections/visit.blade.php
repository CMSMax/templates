@props([
    'heading' => 'Come and stay a while',
    'body' => 'Book a table for dinner or Sunday lunch, or wander in for a seat at the bar. We keep the room calm and never rush the last course.',
    'image' => '/images/dining-room.jpg',
    'imageAlt' => 'The dining room at dusk: round oak tables, bentwood chairs, and warm pendant lights.',
])
<section id="visit" class="bg-ink text-canvas">
    <div class="mx-auto grid max-w-6xl items-center gap-12 px-6 py-20 lg:grid-cols-2 lg:gap-20 lg:py-28">
        <div>
            <h2 class="max-w-[16ch] font-display text-5xl text-balance sm:text-6xl">{{ $heading }}</h2>
            <p class="mt-6 max-w-[46ch] text-lg/8 text-pretty text-canvas/75">{{ $body }}</p>
            <div class="mt-10 grid gap-10 border-t border-canvas/15 pt-10 sm:grid-cols-2">
                <div>
                    <h3 class="text-sm font-medium text-canvas">Hours</h3>
                    <dl class="mt-4 flex flex-col gap-3 text-base/7">
                        @foreach ($hours as $slot)
                            <div>
                                <dt class="text-canvas">{{ $slot->day }}</dt>
                                <dd class="text-canvas/75 tabular-nums">{{ $slot->hours }}</dd>
                            </div>
                        @endforeach
                    </dl>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-canvas">Find us</h3>
                    <address class="mt-4 text-base/7 text-canvas/75 not-italic">
                        {{ $site->address }}<br>{{ $site->city }}
                    </address>
                    <p class="mt-3 text-base/7"><a href="{{ $site->map_url }}" class="text-canvas underline decoration-canvas/30 underline-offset-4 hover:decoration-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-canvas">Get directions</a></p>
                    <p class="mt-1 text-base/7"><a href="{{ $site->phone_href }}" class="text-canvas underline decoration-canvas/30 underline-offset-4 hover:decoration-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-canvas">{{ $site->phone }}</a></p>
                </div>
            </div>
            <div class="mt-12 flex flex-wrap items-center gap-x-6 gap-y-4">
                <a href="/reservations" class="rounded-full bg-canvas px-6 py-3.5 font-medium text-ink hover:bg-canvas/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-canvas">{{ $site->cta_label }}</a>
                <p class="text-base/7 text-canvas/75">or call <a href="{{ $site->phone_href }}" class="text-canvas underline decoration-canvas/30 underline-offset-4 hover:decoration-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-canvas">{{ $site->phone }}</a></p>
            </div>
        </div>
        <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1400" height="939" loading="lazy" class="aspect-4/5 w-full rounded-[min(3vw,1.75rem)] bg-canvas/10 object-cover sm:aspect-3/2 lg:aspect-4/5">
    </div>
</section>
