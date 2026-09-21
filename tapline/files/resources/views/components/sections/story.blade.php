@props([
    'items' => [],
    'heading' => 'Twenty feet from tank to tap.',
    'body' => 'We started with a secondhand brewhouse and a lease on an old machine shop. The tanks are through that window behind the bar, so everything on the board was brewed by the people pouring it — and if you ask what’s in the fermenter this week, somebody will walk you back to show you.',
    'image' => '/images/brewhouse.jpg',
    'imageAlt' => 'Three stainless steel fermentation tanks against a cobalt blue brick wall, with a stack of kegs on a pallet',
])
<section id="story" class="scroll-mt-20 border-t border-line py-20 lg:py-28">
    <div class="mx-auto grid max-w-7xl grid-cols-1 gap-14 px-5 sm:px-8 lg:grid-cols-12 lg:items-center lg:gap-16">
        <div class="relative lg:col-span-7">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1024" height="688" loading="lazy" decoding="async" class="aspect-[3/2] w-full rounded-2xl object-cover outline-1 -outline-offset-1 outline-ink/10">
            <div class="absolute -right-3 -bottom-10 grid size-32 place-items-center overflow-hidden rounded-full bg-primary text-primary-foreground sm:-right-6 sm:size-40 lg:-top-12 lg:-right-12 lg:bottom-auto" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" class="stamp-turn absolute inset-0 size-full" fill="currentColor">
                    <defs><path id="stamp-ring" d="M100 100m-74 0a74 74 0 1 1 148 0a74 74 0 1 1-148 0"/></defs>
                    <text class="font-sans text-[17px] font-bold uppercase"><textPath href="#stamp-ring" textLength="460" lengthAdjust="spacing">{{ $site->stamp }}</textPath></text>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" class="size-10 sm:size-12"><path d="M7.5 10.2V9a3 3 0 0 1 4.3-2.7 3.6 3.6 0 0 1 6.4-.7A3 3 0 0 1 24.5 8v2.2Z"/><path fill-rule="evenodd" d="M8.2 11.6h15.6l-1.9 15.2a1.4 1.4 0 0 1-1.4 1.2h-9a1.4 1.4 0 0 1-1.4-1.2Zm3.3 2.4h1.5l-.6 10.5h-1.3Z"/></svg>
            </div>
        </div>
        <div class="lg:col-span-5">
            <h2 class="font-display text-[clamp(2.25rem,3.8vw,3.125rem)] leading-[1.02] font-black tracking-tight text-balance text-ink">{{ $heading }}</h2>
            <p class="mt-6 text-lg/8 text-muted">{{ $body }}</p>
            <dl class="mt-10 divide-y divide-line border-y border-line">
                @foreach ($items as $fact)
                    <div class="flex items-baseline gap-5 py-4">
                        <dt class="w-32 shrink-0 whitespace-nowrap font-display text-3xl font-black text-ink tabular-nums sm:w-40 sm:text-4xl">{{ $fact->value }}</dt>
                        <dd class="text-base text-muted">{{ $fact->label }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</section>
