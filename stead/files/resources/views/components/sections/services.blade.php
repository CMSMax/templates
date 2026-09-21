@props([
    'eyebrow' => 'What we handle',
    'heading' => 'Everything between the listing and the deposit.',
    'body' => 'One team, one phone number, and one set of rules for every home we manage — written down before you sign.',
    'items' => [],
])
<section id="services" class="border-t border-ink/8 py-20 lg:py-28">
    <div class="mx-auto grid max-w-7xl gap-12 px-6 lg:grid-cols-[5fr_7fr] lg:gap-16 lg:px-8">
        <div class="lg:sticky lg:top-28 lg:self-start">
            <p class="text-sm font-medium text-muted">{{ $eyebrow }}</p>
            <h2 class="mt-4 max-w-[16ch] font-display text-4xl font-medium tracking-tight text-balance sm:text-5xl">{{ $heading }}</h2>
            <p class="mt-5 max-w-[40ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
        </div>
        <ol role="list" class="border-t border-ink/12">
            @foreach ($items as $item)
                <li class="grid gap-x-8 gap-y-3 border-b border-ink/12 py-8 sm:grid-cols-[4rem_1fr]">
                    <p class="font-display text-lg font-medium text-muted tabular-nums">0{{ $loop->iteration }}</p>
                    <div>
                        <h3 class="font-display text-2xl font-medium tracking-tight">{{ $item->title }}</h3>
                        <p class="mt-3 max-w-[56ch] text-base/7 text-pretty text-muted">{{ $item->description }}</p>
                        <p class="mt-4 text-sm/6 text-ink/80">{{ $item->includes }}</p>
                    </div>
                </li>
            @endforeach
        </ol>
    </div>
</section>
