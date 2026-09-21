@props([
    'heading' => 'Services & prices',
    'body' => 'Every price we charge, on one page. Grooming depends on size and coat, so we confirm the exact figure when we meet your dog, and never add anything without asking.',
])
<section class="pt-6 pb-16 lg:pt-10 lg:pb-20">
    <div class="mx-auto grid max-w-6xl gap-6 px-5 sm:px-8 lg:grid-cols-12 lg:items-end lg:gap-16">
        <h1 class="font-display text-[clamp(3rem,8vw,5.5rem)] leading-[0.92] font-extrabold tracking-[-0.035em] text-balance lg:col-span-7">{{ $heading }}</h1>
        <p class="text-lg/8 text-muted lg:col-span-5">{{ $body }}</p>
    </div>
</section>
