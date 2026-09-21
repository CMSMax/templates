@props([
    'items' => [],
    'heading' => 'Three chairs. Three hands.',
    'body' => 'Every artist here draws their own work. Pick the one whose style you keep saving, and check whether their books are open.',
    'full' => '0',
    'linkLabel' => 'Meet the artists',
    'linkUrl' => '/artists',
])
<section id="artists" class="scroll-mt-16 py-20 lg:py-32">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        @if ($heading)
            <div class="mb-16 flex flex-col justify-between gap-6 lg:mb-20 lg:flex-row lg:items-end">
                <h2 class="max-w-[12ch] font-display text-[clamp(2.25rem,5vw,4rem)] leading-[1] tracking-[-0.02em] text-balance text-ink uppercase">{{ $heading }}</h2>
                <p class="max-w-[44ch] text-lg/8 text-muted">{{ $body }}</p>
            </div>
        @endif
        <ul role="list" class="grid gap-x-8 gap-y-16 sm:grid-cols-2 lg:grid-cols-3 lg:gap-x-12">
            @foreach ($items as $artist)
                <li class="lg:even:mt-20">
                    <div class="relative bg-surface p-2.5 shadow-[0_12px_28px_-16px_rgb(14_14_14/0.4)] @if ($loop->even) rotate-1 @else -rotate-1 @endif">
                        <span class="tape -top-3 left-6 -rotate-6" aria-hidden="true"></span>
                        <img src="{{ $artist->image }}" alt="{{ $artist->alt }}" width="900" height="1125" loading="lazy" decoding="async" class="aspect-[4/5] w-full object-cover">
                    </div>
                    <div class="mt-7 flex items-baseline justify-between gap-4 border-b-2 border-ink pb-3">
                        <h3 class="font-display text-2xl text-ink uppercase">{{ $artist->name }}</h3>
                        <p class="text-sm whitespace-nowrap text-muted">{{ $artist->role }}</p>
                    </div>
                    <p class="mt-3 text-base/7 font-medium text-ink">{{ $artist->styles }}</p>
                    @if ($full == '1')
                        <p class="mt-3 text-base/7 text-muted">{{ $artist->bio }}</p>
                    @endif
                    <p class="mt-4 flex items-center gap-2 text-sm font-semibold text-ink">
                        @if ($artist->open)
                            <span class="size-2.5 rounded-full border-2 border-ink bg-primary" aria-hidden="true"></span>
                        @else
                            <span class="size-2.5 rounded-full border-2 border-ink" aria-hidden="true"></span>
                        @endif
                        {{ $artist->status }}
                    </p>
                </li>
            @endforeach
        </ul>
        @if ($linkLabel)
            <div class="mt-16">
                <a href="{{ $linkUrl }}" class="text-lg font-semibold text-ink underline decoration-2 underline-offset-[6px] hover:decoration-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $linkLabel }}</a>
            </div>
        @endif
    </div>
</section>
