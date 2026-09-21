@props([
    'heading' => 'Services',
    'body' => 'What we fix, what it usually costs, and how long it takes.',
])
<section class="border-b border-line pt-16 pb-14 md:pt-24 md:pb-20">
    <div class="mx-auto max-w-7xl px-5 md:px-8">
        <h1 class="max-w-[16ch] font-display text-hero font-extrabold text-balance">{{ $heading }}</h1>
        <p class="mt-6 max-w-[52ch] text-lg text-pretty text-muted md:text-xl/8">{{ $body }}</p>
    </div>
</section>
