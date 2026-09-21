@props([
    'heading' => 'Self-pay prices',
    'body' => 'Per visit, before insurance.',
])
<section id="prices" aria-labelledby="prices-heading" class="scroll-mt-8 py-16 lg:py-20">
    <div class="mx-auto max-w-6xl px-5 sm:px-8">
        <div class="flex flex-wrap items-baseline justify-between gap-x-8 gap-y-2 border-b border-ink pb-6">
            <h2 id="prices-heading" class="font-display text-[clamp(2rem,4vw,3rem)] leading-[1.05] font-semibold tracking-[-0.04em] text-ink">{{ $heading }}</h2>
            <p class="text-base text-muted">{{ $body }}</p>
        </div>
        @foreach ($site->service_groups as $group)
            <div class="grid gap-x-16 gap-y-4 border-b border-line py-10 lg:grid-cols-[4fr_8fr]">
                <div>
                    <h3 class="font-display text-2xl font-semibold tracking-[-0.03em] text-ink">{{ $group->name }}</h3>
                    <p class="mt-2 text-base/7 text-muted">{{ $group->body }}</p>
                </div>
                <ul role="list" class="divide-y divide-line">
                    @foreach ($services as $service)
                        @if ($service->category == $group->name)
                            <li class="grid grid-cols-[1fr_auto] gap-x-6 gap-y-1 py-5 first:pt-0 last:pb-0 sm:grid-cols-[1fr_6rem_5rem]">
                                <div class="max-sm:col-span-2">
                                    <p class="text-lg font-semibold text-ink">{{ $service->name }}</p>
                                    <p class="mt-1 text-base/7 text-muted">{{ $service->description }}</p>
                                </div>
                                <p class="text-base text-muted tabular-nums sm:pt-0.5 sm:text-right">{{ $service->duration }}</p>
                                <p class="text-right font-display text-xl font-semibold tracking-[-0.02em] text-ink">{{ $service->price }}</p>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</section>
