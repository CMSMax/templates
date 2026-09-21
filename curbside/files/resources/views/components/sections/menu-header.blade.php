@props([
    'heading' => 'The whole menu.',
    'body' => 'Everything the truck makes, most days. When something sells out, it comes off the board at the window.',
])
<section class="border-b-2 border-ink">
    <div class="mx-auto grid max-w-7xl grid-cols-1 gap-8 px-5 pt-14 pb-14 sm:px-8 lg:grid-cols-[7fr_5fr] lg:items-end lg:gap-16 lg:pt-20 lg:pb-20">
        <h1 class="font-display text-[clamp(3.25rem,8vw,6rem)] leading-[0.92] font-black text-balance text-ink uppercase">{{ $heading }}</h1>
        <div>
            <p class="max-w-[46ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
            <p class="mt-4 max-w-[46ch] text-base/7 text-pretty text-ink">{{ $site->menu_note }}</p>
        </div>
    </div>
</section>
