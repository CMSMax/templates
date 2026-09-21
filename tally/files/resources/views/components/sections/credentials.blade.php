@props([
    'heading' => 'Qualified, and checked',
    'items' => [],
])
<section class="py-24 lg:py-32">
    <div class="mx-auto grid max-w-7xl gap-y-12 px-6 lg:grid-cols-12 lg:gap-x-16 lg:px-8">
        <h2 class="max-w-[12ch] font-display text-4xl leading-[1.08] font-medium tracking-[-0.03em] text-balance text-ink sm:text-5xl lg:col-span-5">{{ $heading }}</h2>
        <dl class="divide-y divide-line border-y border-line lg:col-span-7">
            @foreach ($items as $credential)
                <div class="grid gap-1 py-6 sm:grid-cols-2 sm:gap-8">
                    <dt class="font-medium text-ink">{{ $credential->name }}</dt>
                    <dd class="text-muted">{{ $credential->detail }}</dd>
                </div>
            @endforeach
        </dl>
    </div>
</section>
