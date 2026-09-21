@props([
    'heading' => 'Come in and try it on.',
    'body' => 'Most things fit differently than the photograph suggests. Ruth will pin a hem while you wait.',
    'primaryLabel' => 'Get directions',
    'secondaryLabel' => 'Call the shop',
])
<section class="pinked-t relative bg-field pt-24 pb-20 sm:pt-32 sm:pb-28">
    <div class="mx-auto grid max-w-7xl items-end gap-x-10 gap-y-10 px-5 sm:px-8 lg:grid-cols-12">
        <div class="lg:col-span-8">
            <h2 class="max-w-[12ch] font-display text-[clamp(3rem,7.5vw,6.5rem)] leading-[0.92] font-semibold tracking-[-0.045em] text-balance text-ink">{{ $heading }}</h2>
            <p class="mt-6 max-w-[44ch] text-lg/8 text-pretty text-field-muted">{{ $body }}</p>
        </div>
        <div class="lg:col-span-4">
            <p class="font-display text-2xl font-medium tracking-tight text-ink">{{ $site->address }}</p>
            <p class="text-lg text-field-muted">{{ $site->city }}</p>
            <div class="mt-8 flex flex-wrap items-center gap-x-8 gap-y-4">
                <a href="{{ $site->map_url }}" class="bg-primary px-6 py-3.5 font-medium text-primary-foreground hover:bg-primary/85 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink active:translate-y-px">{{ $primaryLabel }}</a>
                <a href="{{ $site->phone_href }}" class="border-b border-ink pb-1 font-medium text-ink tabular-nums focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-ink">{{ $secondaryLabel }}</a>
            </div>
        </div>
    </div>
</section>
