@props([
    'eyebrow' => 'Always included',
    'heading' => 'Everything they need, nothing to pack',
    'body' => 'Just bring a change of clothes and a comfort item. We take care of the rest.',
])
<section aria-labelledby="included-heading" class="bg-surface py-20 lg:py-28">
    <div class="mx-auto grid max-w-6xl gap-12 px-5 sm:px-8 lg:grid-cols-[5fr_7fr] lg:gap-20">
        <div>
            <p class="text-sm font-semibold text-muted">{{ $eyebrow }}</p>
            <h2 id="included-heading" class="mt-4 font-display text-[clamp(2.25rem,4.4vw,3.5rem)] leading-[1.05] font-semibold tracking-tight text-balance text-ink">{{ $heading }}</h2>
            <p class="mt-6 text-lg/8 text-muted">{{ $body }}</p>
        </div>
        <ul role="list" class="grid content-start gap-x-8 sm:grid-cols-2">
            @foreach ($site->included as $item)
                <li class="flex items-start gap-3 border-b border-line py-5 text-base/7 text-ink">
                    <span class="mt-0.5 grid size-6 shrink-0 place-items-center rounded-full bg-primary text-primary-foreground" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="size-3.5"><path d="M20 6 9 17l-5-5"/></svg>
                    </span>
                    {{ $item }}
                </li>
            @endforeach
        </ul>
    </div>
</section>
