@props([
    'priceLabel' => 'What the price covers',
    'items' => [],
])
<section class="pb-20 lg:pb-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="border-t-2 border-ink">
            @foreach ($items as $service)
                <article id="{{ $service->slug }}" class="grid gap-y-8 border-b border-line py-12 lg:grid-cols-12 lg:gap-x-16 lg:py-16">
                    <div class="lg:col-span-5">
                        <h2 class="font-display text-3xl font-semibold tracking-tight text-balance text-ink sm:text-4xl">{{ $service->name }}</h2>
                        <p class="mt-5 flex items-baseline gap-2">
                            <span class="text-[0.9375rem] text-muted">from</span>
                            <span class="font-display text-5xl font-semibold tracking-tight text-ink tabular-nums">{{ $service->price }}</span>
                            <span class="text-[0.9375rem] text-muted">{{ $service->unit }}</span>
                        </p>
                        <p class="mt-4 flex items-center gap-2 text-[0.9375rem] text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>{{ $service->duration }}
                        </p>
                    </div>
                    <div class="lg:col-span-7">
                        <p class="text-lg/8 text-pretty text-ink">{{ $service->summary }}</p>
                        <p class="mt-4 text-base/7 text-pretty text-muted">{{ $service->description }}</p>
                        <div class="mt-8 rounded-2xl bg-surface p-5 sm:p-6">
                            <p class="text-[0.9375rem] font-semibold text-ink">{{ $priceLabel }}</p>
                            <p class="mt-1.5 text-base/7 text-pretty text-muted sm:text-[0.9375rem]/6">{{ $service->price_note }}</p>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
