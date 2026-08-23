@props(['heading' => 'What we handle', 'intro' => 'One call covers the whole house. Every job is done by a background-checked professional and backed by our workmanship guarantee.'])
<section class="border-t border-line py-16 lg:py-24">
    <div data-reveal class="mx-auto max-w-6xl px-6">
        <div class="flex flex-wrap items-end justify-between gap-6">
            <div>
                <h2 class="max-w-[35ch] font-display text-3xl font-semibold tracking-tight text-balance text-ink sm:text-4xl">{{ $heading }}</h2>
                <p class="mt-4 max-w-[52ch] text-lg text-pretty text-muted">{{ $intro }}</p>
            </div>
            <a href="/services" class="inline-flex items-center gap-1.5 font-medium text-ink hover:text-ink/70 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">
                All services
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0" aria-hidden="true"><path d="M5 12h14m-7-7l7 7l-7 7"/></svg>
            </a>
        </div>
        <dl class="mt-12 grid gap-x-8 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($services as $service)
                <div class="border-t border-line py-6">
                    <dt class="flex items-center gap-2.5 font-semibold text-ink">
                        {!! $service->icon !!}
                        {{ $service->name }}
                    </dt>
                    <dd class="mt-2 max-w-[44ch] text-base/7 text-pretty text-muted sm:text-sm/6">{{ $service->blurb }}</dd>
                </div>
            @endforeach
        </dl>
    </div>
</section>
