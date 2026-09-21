@props([
    'heading' => 'Services & prices',
    'body' => 'Every job we do most weeks, with what it includes, how long it usually takes, and what it costs.',
    'image' => '/images/bay.jpg',
    'imageAlt' => 'Inside the shop: a technician working under an SUV raised on the lift, a red tool chest against the white wall',
])
<section class="border-b border-line pt-14 pb-14 sm:pt-20 lg:pb-20">
    <div class="mx-auto flex max-w-7xl flex-col gap-10 px-5 sm:px-8 lg:flex-row lg:items-end lg:justify-between">
        <div>
            <nav aria-label="Breadcrumb">
                <ol role="list" class="flex items-center gap-2 text-sm text-muted">
                    <li><a href="/" class="rounded-sm hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Home</a></li>
                    <li aria-hidden="true">/</li>
                    <li aria-current="page" class="text-ink">{{ $heading }}</li>
                </ol>
            </nav>
            <h1 class="mt-6 max-w-[14ch] font-display text-[clamp(3rem,7vw,5.75rem)] leading-[0.92] font-bold text-balance text-ink uppercase">{{ $heading }}</h1>
            <p class="mt-6 max-w-[52ch] text-lg/8 text-muted">{{ $body }}</p>
        </div>
        <ul role="list" class="flex flex-col gap-3 lg:max-w-sm">
            @foreach ($site->promises as $promise)
                <li class="flex gap-3 text-base/6 text-ink">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="mt-0.5 size-5 shrink-0 text-primary" aria-hidden="true"><path fill-rule="evenodd" d="M16.7 5.3a1 1 0 0 1 0 1.4l-8 8a1 1 0 0 1-1.4 0l-4-4a1 1 0 1 1 1.4-1.4L8 12.6l7.3-7.3a1 1 0 0 1 1.4 0Z" clip-rule="evenodd"/></svg>
                    <span>{{ $promise }}</span>
                </li>
            @endforeach
        </ul>
    </div>
    @if ($image)
        <div class="mx-auto mt-14 max-w-7xl px-5 sm:px-8 lg:mt-16">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1584" height="672" decoding="async" class="aspect-[2/1] w-full rounded-xl object-cover ring-1 ring-line sm:aspect-[21/9]">
        </div>
    @endif
</section>
