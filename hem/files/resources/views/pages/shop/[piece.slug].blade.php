<x-layouts.main :title="$piece->title" :description="$piece->description">
    <section class="py-10 sm:py-14">
        <div class="mx-auto max-w-7xl px-5 sm:px-8">
            <nav aria-label="Breadcrumb">
                <ol role="list" class="flex flex-wrap items-center gap-2 text-sm text-muted">
                    <li><a href="/shop" class="hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">Shop</a></li>
                    <li aria-hidden="true">/</li>
                    <li>{{ $piece->category }}</li>
                </ol>
            </nav>
            <div class="mt-8 grid gap-x-12 gap-y-10 lg:grid-cols-12">
                <div class="lg:col-span-7">
                    <img src="{{ $piece->image }}" alt="{{ $piece->imageAlt }}" width="896" height="1120" fetchpriority="high" class="aspect-4/5 w-full bg-surface object-cover">
                </div>
                <div class="lg:col-span-5">
                    <div class="lg:sticky lg:top-32">
                        <p class="text-sm font-medium text-muted">{{ $piece->brand }}</p>
                        <h1 class="mt-2 font-display text-[clamp(2.5rem,5vw,4rem)] leading-[0.95] font-semibold tracking-[-0.04em] text-balance text-ink">{{ $piece->title }}</h1>
                        <p class="mt-4 font-display text-2xl text-ink tabular-nums">{{ $piece->price }}</p>
                        <p class="mt-6 max-w-[42ch] text-lg/8 text-pretty text-muted">{{ $piece->summary }}</p>
                        <dl class="mt-8 border-t border-ink text-base/6 sm:text-sm/6">
                            <div class="flex justify-between gap-6 border-b border-line py-3"><dt class="text-muted">Colour</dt><dd class="text-right text-ink">{{ $piece->colour }}</dd></div>
                            <div class="flex justify-between gap-6 border-b border-line py-3"><dt class="text-muted">Cloth</dt><dd class="text-right text-ink">{{ $piece->cloth }}</dd></div>
                            <div class="flex justify-between gap-6 border-b border-line py-3"><dt class="text-muted">Made in</dt><dd class="text-right text-ink">{{ $piece->madeIn }}</dd></div>
                            <div class="flex justify-between gap-6 border-b border-line py-3"><dt class="text-muted">Sizes</dt><dd class="text-right text-ink tabular-nums">{{ $piece->sizes }}</dd></div>
                        </dl>
                        <div class="mt-8 flex flex-wrap items-center gap-x-8 gap-y-4">
                            <a href="{{ $site->phone_href }}" class="bg-primary px-6 py-3.5 font-medium text-primary-foreground hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink active:translate-y-px">Call to hold it</a>
                            <a href="/visit" class="border-b border-ink pb-1 font-medium text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">Plan a visit</a>
                        </div>
                        <p class="mt-5 text-sm/6 text-muted">We keep a held piece behind the counter for three days, and post anywhere the same day.</p>
                    </div>
                </div>
            </div>
            <div class="mt-16 grid gap-x-12 border-t border-line pt-12 lg:grid-cols-12">
                <h2 class="font-display text-2xl font-medium tracking-tight text-ink lg:col-span-4">About this piece</h2>
                <div class="prose mt-6 max-w-[65ch] lg:col-span-7 lg:col-start-6 lg:mt-0">{!! $piece->content !!}</div>
            </div>
        </div>
    </section>
    <section class="border-t border-line py-16 sm:py-24">
        <div class="mx-auto max-w-7xl px-5 sm:px-8">
            <div class="flex flex-wrap items-baseline justify-between gap-4">
                <h2 class="font-display text-[clamp(1.75rem,3vw,2.5rem)] leading-none font-semibold tracking-tight text-ink">Also on the rail</h2>
                <a href="/shop" class="border-b border-ink pb-1 font-medium text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">See everything</a>
            </div>
            <ul role="list" class="mt-10 grid grid-cols-2 gap-x-5 gap-y-10 lg:grid-cols-4">
                @foreach ($entries as $other)
                    @if ($other->slug != $piece->slug)
                        <li>
                            <a href="{{ $other->link }}" class="group block focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">
                                <div class="overflow-hidden bg-surface">
                                    <img src="{{ $other->image }}" alt="" aria-hidden="true" width="896" height="1120" loading="lazy" decoding="async" class="aspect-4/5 w-full object-cover transition-transform duration-500 ease-out group-hover:scale-[1.03]">
                                </div>
                                <p class="mt-3 text-sm text-muted">{{ $other->brand }}</p>
                                <h3 class="font-display text-base font-medium tracking-tight text-ink group-hover:underline group-hover:underline-offset-4 sm:text-lg">{{ $other->title }}</h3>
                                <p class="mt-0.5 text-sm text-ink tabular-nums">{{ $other->price }}</p>
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </section>
    <x-sections.close/>
</x-layouts.main>
