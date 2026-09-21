@props([
    'heading' => 'Page title',
    'body' => '',
])
<section class="pt-16 pb-4 sm:pt-24">
    <div class="mx-auto max-w-6xl px-6 text-center">
        <h1 class="mx-auto max-w-[18ch] font-display text-6xl text-balance text-ink sm:text-7xl">{{ $heading }}</h1>
        @if ($body)
            <p class="mx-auto mt-6 max-w-[48ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
        @endif
    </div>
</section>
