<x-layouts.main title="Services — Keystone Home Services" description="Plumbing, electrical, heating and cooling, carpentry, painting, and pest control — every job priced upfront and done by licensed pros.">
    <section class="py-16 lg:py-24">
        <div class="mx-auto max-w-6xl px-6">
            <h1 class="max-w-[24ch] font-display text-4xl font-semibold tracking-tight text-balance text-ink sm:text-5xl">Everything your house asks of you</h1>
            <p class="mt-5 max-w-[52ch] text-lg text-pretty text-muted">One call covers it. Every visit starts with a written estimate, and the estimate is the price — no surprises when the work is done.</p>
        </div>
    </section>
    <section class="pb-16 lg:pb-24">
        <div class="mx-auto max-w-6xl px-6">
            <dl>
                @foreach ($services as $service)
                    <div class="grid gap-4 border-t border-line py-8 lg:grid-cols-[1fr_2fr] lg:gap-8">
                        <dt class="flex items-start gap-3 font-display text-xl font-semibold tracking-tight text-ink">
                            {!! $service->icon !!}
                            {{ $service->name }}
                        </dt>
                        <dd>
                            <p class="max-w-[60ch] text-base/7 text-pretty text-ink">{{ $service->blurb }}</p>
                            <p class="mt-2 max-w-[60ch] text-base/7 text-pretty text-muted sm:text-sm/6">{{ $service->detail }}</p>
                        </dd>
                    </div>
                @endforeach
            </dl>
            <div class="flex flex-wrap items-center gap-4 border-t border-line pt-8">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0 text-ink" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12l2 2l4-4"/></svg>
                <p class="max-w-[64ch] text-base/7 text-pretty text-ink">Don't see your job listed? Ask anyway — if we can't do it well, we'll say so and point you to someone who can.</p>
            </div>
        </div>
    </section>
    <x-sections.steps/>
    <x-sections.cta/>
</x-layouts.main>
