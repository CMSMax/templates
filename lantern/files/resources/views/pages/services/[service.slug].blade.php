<x-layouts.main :title="$service->title" :description="$service->description">
    <x-sections.page-header :heading="$service->title" :intro="$service->summary"/>
    <section class="border-b border-line py-16 lg:py-24">
        <div class="mx-auto max-w-6xl px-6">
            <img src="{{ $service->image }}" alt="{{ $service->imageAlt }}" width="1400" height="1050" class="aspect-3/2 w-full rounded-xs object-cover outline-1 -outline-offset-1 outline-ink/5">
            <div class="mt-14 grid items-start gap-8 lg:grid-cols-[minmax(0,1fr)_minmax(0,20rem)]">
                <div class="prose max-w-[68ch]">{!! $service->content !!}</div>
                <dl class="lg:pl-8">
                    <div class="border-t border-line py-4">
                        <dt class="font-medium text-ink">What it costs</dt>
                        <dd class="mt-1 text-base/7 text-muted">{{ $service->price }}</dd>
                    </div>
                    <div class="border-t border-line py-4">
                        <dt class="font-medium text-ink">How fast</dt>
                        <dd class="mt-1 text-base/7 text-muted">{{ $service->response }}</dd>
                    </div>
                    <div class="border-t border-b border-line py-4">
                        <dt class="font-medium text-ink">Where</dt>
                        <dd class="mt-1 text-base/7 text-muted">{{ $site->service_area }}</dd>
                    </div>
                    <div class="mt-8">
                        <a href="/contact" class="block rounded-xs bg-accent px-5 py-3 text-center font-medium text-accent-ink transition-transform duration-150 ease-out hover:bg-accent/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent active:scale-[0.98]">Book a visit</a>
                    </div>
                </dl>
            </div>
        </div>
    </section>
    <section class="border-b border-line py-16 lg:py-24">
        <div class="mx-auto max-w-6xl px-6">
            <h2 class="font-display text-[clamp(1.75rem,3vw,2.5rem)]/[1.05] font-semibold tracking-tight text-balance text-ink">The rest of what we do.</h2>
            <ul role="list" class="mt-10 grid gap-x-8 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($entries as $other)
                    <li class="border-t border-line">
                        <a href="{{ $other->link }}" class="group flex flex-col gap-1.5 py-5 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">
                            <span class="font-display text-lg font-semibold tracking-tight text-ink group-hover:text-accent">{{ $other->title }}</span>
                            <span class="max-w-[38ch] text-base/6 text-muted sm:text-sm/6">{{ $other->summary }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
    <x-sections.close/>
</x-layouts.main>
