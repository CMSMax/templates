@props([
    'heading' => 'What we build',
    'body' => 'Four kinds of job, done by our own crew. We turn down work outside them rather than learn on your house.',
    'items' => [],
])
<section id="services" class="border-t border-line py-20 md:py-32">
    <div class="mx-auto grid max-w-7xl gap-12 px-5 md:px-8 lg:grid-cols-12 lg:gap-10">
        <div class="lg:col-span-4">
            <div class="lg:sticky lg:top-28">
                <h2 class="font-display text-section font-extrabold uppercase text-balance">{{ $heading }}</h2>
                <p class="mt-5 max-w-[40ch] text-lg text-pretty text-muted">{{ $body }}</p>
            </div>
        </div>
        <ul role="list" class="border-t-2 border-ink lg:col-span-8">
            @foreach ($items as $service)
                <li class="grid gap-3 border-b border-line py-8 md:grid-cols-[minmax(0,5fr)_minmax(0,6fr)] md:gap-10 md:py-10" data-reveal>
                    <h3 class="font-display text-4xl leading-none font-extrabold uppercase md:text-5xl">{{ $service->name }}</h3>
                    <div class="flex flex-col gap-3">
                        <p class="text-lg text-pretty">{{ $service->summary }}</p>
                        <p class="flex items-center gap-2 text-sm font-medium text-muted">
                            <span class="size-2 shrink-0 bg-primary" aria-hidden="true"></span>
                            {{ $service->tags }}
                        </p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>
