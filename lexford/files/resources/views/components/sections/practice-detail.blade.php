@props([
    'mattersLabel' => 'Typical matters',
    'items' => [],
])
<section class="pb-24 lg:pb-36">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="border-b border-line">
            @foreach ($items as $area)
                <article id="{{ $area->slug }}" class="grid scroll-mt-28 gap-y-6 border-t border-line py-12 lg:grid-cols-12 lg:gap-x-16 lg:py-16">
                    <h2 class="font-display text-3xl tracking-tight text-balance text-ink sm:text-4xl lg:col-span-4">{{ $area->name }}</h2>
                    <div class="lg:col-span-7 lg:col-start-6">
                        <p class="max-w-[62ch] text-lg/8 text-pretty text-ink/85">{{ $area->description }}</p>
                        <div class="mt-8 grid gap-2 sm:grid-cols-[10rem_1fr] sm:gap-8">
                            <h3 class="text-sm/7 font-medium text-ink">{{ $mattersLabel }}</h3>
                            <p class="max-w-[58ch] text-base/7 text-pretty text-muted">{{ $area->matters }}</p>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
