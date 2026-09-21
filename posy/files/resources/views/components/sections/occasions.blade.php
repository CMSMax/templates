@props([
    'heading' => 'For the days that ask for flowers',
    'body' => 'From a single thank-you to a wedding for two hundred, every order is designed by one of our three florists. Tell us the day, and we will do the rest.',
    'linkLabel' => 'Talk to a florist',
    'items' => [],
])
<section id="occasions" class="py-20 sm:py-28">
    <div class="mx-auto grid max-w-7xl gap-x-10 gap-y-12 px-6 lg:grid-cols-12 lg:px-8">
        <div class="lg:col-span-5">
            <div class="lg:sticky lg:top-28">
                <h2 class="font-display text-4xl tracking-tight text-balance text-ink sm:text-5xl">{{ $heading }}</h2>
                <p class="mt-5 max-w-[46ch] text-lg/8 text-muted">{{ $body }}</p>
                <a href="mailto:{{ $site->email }}" class="group mt-8 inline-flex items-center gap-2 font-medium text-ink underline decoration-ink/30 underline-offset-8 transition-colors duration-200 hover:decoration-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                    {{ $linkLabel }}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-4 transition-transform duration-200 group-hover:translate-x-0.5" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </a>
            </div>
        </div>
        <ul role="list" class="border-t border-line lg:col-span-7">
            @foreach ($items as $occasion)
                <li class="grid gap-x-8 gap-y-2 border-b border-line py-8 sm:grid-cols-[1fr_auto] sm:items-baseline">
                    <h3 class="font-display text-3xl text-ink">{{ $occasion->name }}</h3>
                    <p class="font-display text-xl text-ink tabular-nums sm:row-span-2 sm:text-right">{{ $occasion->price }}</p>
                    <p class="max-w-[50ch] text-base/7 text-muted">{{ $occasion->description }}</p>
                </li>
            @endforeach
        </ul>
    </div>
</section>
