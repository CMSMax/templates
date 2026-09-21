@props([
    'heading' => 'What you can expect from us',
    'items' => [],
])
<section class="bg-surface py-24 lg:py-36">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h2 class="max-w-[18ch] font-display text-4xl font-light tracking-tight text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
        <dl class="mt-16 grid gap-y-12 border-t border-line pt-12 md:grid-cols-3 md:gap-x-16 lg:mt-20">
            @foreach ($items as $value)
                <div>
                    <dt class="font-display text-3xl tracking-tight text-ink">{{ $value->name }}</dt>
                    <dd class="mt-4 max-w-[38ch] text-base/7 text-pretty text-muted">{{ $value->description }}</dd>
                </div>
            @endforeach
        </dl>
    </div>
</section>
