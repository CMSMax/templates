@props([
    'heading' => 'Arrangements',
    'body' => 'Bouquets, vase pieces, and sympathy flowers, made to order from what is freshest this week. Each one comes in the sizes listed; tell us if you need something else.',
])
<section class="pt-16 pb-12 sm:pt-24 sm:pb-16">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h1 class="font-display text-[clamp(2.75rem,6.2vw,5.25rem)] leading-[1.02] tracking-tight text-balance text-ink">{{ $heading }}</h1>
        <div class="mt-8 grid gap-x-10 gap-y-6 border-t border-line pt-8 lg:grid-cols-12">
            <p class="max-w-[58ch] text-lg/8 text-muted lg:col-span-7">{{ $body }}</p>
            <nav aria-label="Arrangement sections" class="lg:col-span-4 lg:col-start-9">
                <ul role="list" class="flex flex-wrap gap-2">
                    @foreach ($site->arrangement_sections as $group)
                        <li><a href="#{{ $group->slug }}" class="block rounded-full border border-ink/25 px-4 py-2 text-[0.9375rem] text-ink transition-colors duration-200 hover:border-primary hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $group->name }}</a></li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</section>
