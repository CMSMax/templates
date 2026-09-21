@props([
    'heading' => 'Page title',
    'body' => '',
    'image' => '',
    'imageAlt' => '',
])
<section class="pt-20 pb-16 sm:pt-28 lg:pb-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-y-8 lg:grid-cols-12 lg:gap-x-16">
            <h1 class="font-display text-5xl font-light tracking-tight text-balance text-ink sm:text-6xl lg:col-span-7 xl:text-7xl">{{ $heading }}</h1>
            @if ($body)
                <p class="max-w-[46ch] text-lg/8 text-pretty text-muted lg:col-span-4 lg:col-start-9 lg:self-end">{{ $body }}</p>
            @endif
        </div>
        @if ($image)
            <div class="mt-14 overflow-hidden rounded-[min(3vw,1.5rem)] bg-line lg:mt-20">
                <img data-settle src="{{ $image }}" alt="{{ $imageAlt }}" width="2000" height="1125" fetchpriority="high" class="aspect-4/3 w-full object-cover sm:aspect-21/9">
            </div>
        @endif
    </div>
</section>
