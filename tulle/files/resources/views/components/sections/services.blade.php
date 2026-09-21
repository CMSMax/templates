@props([
    'kicker' => 'Services',
    'heading' => 'Three ways to work together',
    'body' => 'Whether you are starting from a date or from a finished plan, there is a way in. Every package ends the same way: two of us on site, carrying the day.',
    'linkLabel' => 'What each package includes',
    'items' => [],
])
<section class="py-24 sm:py-32">
    <div class="mx-auto grid max-w-7xl gap-x-16 gap-y-12 px-6 lg:grid-cols-12 lg:px-8">
        <div class="lg:col-span-5">
            <div class="lg:sticky lg:top-28">
                <p class="label-caps text-muted">{{ $kicker }}</p>
                <h2 class="mt-5 max-w-[16ch] font-display text-4xl tracking-tight text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
                <p class="mt-6 max-w-[44ch] text-lg/8 text-muted">{{ $body }}</p>
                <a href="/services" class="group mt-8 inline-flex min-h-12 items-center gap-2 font-medium text-ink underline decoration-ink/30 underline-offset-8 hover:decoration-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                    {{ $linkLabel }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-4 transition-transform duration-200 group-hover:translate-x-0.5" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </a>
            </div>
        </div>
        <ol role="list" class="border-t border-ink/15 lg:col-span-7">
            @foreach ($items as $package)
                <li class="grid gap-x-8 gap-y-3 border-b border-ink/15 py-9 sm:grid-cols-[3rem_1fr_auto]">
                    <p class="font-display text-2xl text-primary italic tabular-nums" aria-hidden="true">0{{ $loop->iteration }}</p>
                    <div>
                        <h3 class="font-display text-3xl tracking-tight text-ink">{{ $package->name }}</h3>
                        <p class="mt-3 max-w-[48ch] text-base/7 text-muted">{{ $package->bestFor }} {{ $package->summary }}</p>
                        <p class="label-caps mt-5 text-muted">{{ $package->timing }}</p>
                    </div>
                    <p class="font-display text-xl text-ink tabular-nums sm:text-right">{{ $package->price }}</p>
                </li>
            @endforeach
        </ol>
    </div>
</section>
