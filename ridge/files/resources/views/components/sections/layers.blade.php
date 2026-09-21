@props([
    'heading' => 'What goes on your roof.',
    'body' => 'Shingles are the part you see. The layers under them decide whether the next storm reaches your ceiling.',
    'note' => 'Tap a layer to find it in the drawing.',
    'items' => [],
])
<section class="border-y border-line bg-surface py-20 md:py-32">
    <div class="mx-auto grid max-w-7xl gap-12 px-5 md:px-8 lg:grid-cols-12 lg:items-center lg:gap-10" data-layers data-active="1">
        <div class="lg:col-span-5 lg:col-start-8 lg:row-start-1">
            <h2 class="max-w-[16ch] font-display text-section font-semibold text-balance">{{ $heading }}</h2>
            <p class="mt-5 max-w-[44ch] text-lg text-pretty text-muted">{{ $body }}</p>
            <ol role="list" class="mt-10 border-t border-line">
                @foreach ($items as $layer)
                    <li class="border-b border-line">
                        <button type="button" data-layer="{{ $loop->iteration }}" aria-pressed="false" class="group flex w-full items-start gap-4 py-4 text-left">
                            <span class="mt-0.5 flex size-7 shrink-0 items-center justify-center rounded-full border border-line text-sm font-semibold tabular-nums text-muted transition-colors duration-150 group-hover:border-ink group-hover:text-ink group-aria-pressed:border-primary group-aria-pressed:bg-primary group-aria-pressed:text-primary-foreground">{{ $loop->iteration }}</span>
                            <span class="flex min-w-0 flex-col gap-1">
                                <span class="font-display text-lg font-semibold tracking-tight">{{ $layer->name }}</span>
                                <span class="text-base text-pretty text-muted">{{ $layer->body }}</span>
                            </span>
                        </button>
                    </li>
                @endforeach
            </ol>
            <p class="mt-4 text-sm text-muted">{{ $note }}</p>
        </div>
        <div class="lg:col-span-6 lg:row-start-1" aria-hidden="true">
            <div class="roof-stack relative mx-auto aspect-[6/5] w-full max-w-xl">
                @foreach ($items as $layer)
                    <div data-slab="{{ $loop->iteration }}" data-tone="{{ $layer->tone }}" @if ($loop->first) data-on @endif class="roof-slab absolute left-[12%] h-[15%] w-[76%] rounded-[3px]"></div>
                @endforeach
            </div>
        </div>
    </div>
</section>
