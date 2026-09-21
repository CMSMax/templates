@props([
    'heading' => 'The job log',
    'body' => 'Every job we finish gets a number, a stamp, and a page here: what we built, how long it took, and how it went.',
])
<section class="pt-12 pb-14 md:pt-20 md:pb-20">
    <div class="mx-auto grid max-w-7xl gap-8 px-5 md:px-8 lg:grid-cols-12 lg:items-end lg:gap-10">
        <h1 class="font-display text-hero font-extrabold uppercase lg:col-span-8">{{ $heading }}</h1>
        <p class="max-w-[44ch] text-lg text-pretty text-muted lg:col-span-4 lg:pb-3">{{ $body }}</p>
    </div>
</section>
