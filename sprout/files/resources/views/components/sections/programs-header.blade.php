@props([
    'eyebrow' => 'Programs',
    'heading' => 'A classroom for every stage',
    'body' => 'Four age groups, one warm community. Every program includes meals, supplies, daily updates, and teachers who stay with your child as they grow.',
])
<section class="pt-16 pb-12 sm:pt-24 lg:pb-16">
    <div class="mx-auto max-w-6xl px-5 sm:px-8">
        <p class="text-sm font-semibold text-muted">{{ $eyebrow }}</p>
        <h1 class="mt-4 max-w-[16ch] font-display text-[clamp(2.75rem,6.4vw,5rem)] leading-[1.02] font-semibold tracking-tight text-balance text-ink">{{ $heading }}</h1>
        <p class="mt-6 max-w-[60ch] text-lg/8 text-muted">{{ $body }}</p>
        <nav aria-label="Programs" class="mt-10">
            <ul role="list" class="flex flex-wrap gap-2">
                @foreach ($programs as $program)
                    <li>
                        <a href="#{{ $program->slug }}" class="inline-flex min-h-12 items-center gap-2 rounded-full bg-card px-5 text-base font-medium text-ink ring-1 ring-line transition-colors duration-150 hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink">
                            {{ $program->name }}
                            <span class="text-sm text-muted">{{ $program->ages }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</section>
