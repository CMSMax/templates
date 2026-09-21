<x-layouts.main :title="$program->title" :description="$program->description">
    <x-sections.page-header :heading="$program->title" :intro="$program->summary"/>
    <section class="border-b border-line py-16 lg:py-24">
        <div class="mx-auto grid max-w-6xl items-start gap-12 px-6 lg:grid-cols-[minmax(0,1fr)_minmax(0,20rem)] lg:gap-20">
            <div class="prose max-w-[66ch]">{!! $program->content !!}</div>
            <aside class="lg:sticky lg:top-32">
                <dl class="border-t border-ink/80 text-base/6">
                    <div class="border-b border-line py-4">
                        <dt class="text-sm text-muted">Who it is for</dt>
                        <dd class="mt-1 text-ink">{{ $program->ages }}</dd>
                    </div>
                    <div class="border-b border-line py-4">
                        <dt class="text-sm text-muted">Levels</dt>
                        <dd class="mt-1 text-ink">{{ $program->grades }}</dd>
                    </div>
                    <div class="border-b border-line py-4">
                        <dt class="text-sm text-muted">Format</dt>
                        <dd class="mt-1 text-ink">{{ $program->format }}</dd>
                    </div>
                    <div class="border-b border-line py-4">
                        <dt class="text-sm text-muted">Cost</dt>
                        <dd class="mt-1 font-medium text-ink">{{ $program->price }}</dd>
                    </div>
                </dl>
                <a href="/contact" class="mt-8 block rounded-xs bg-accent px-5 py-3.5 text-center font-medium text-accent-ink transition duration-150 ease-out hover:bg-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent active:scale-[0.98]">Book a free assessment</a>
                <p class="mt-4 text-center text-sm text-muted">or call <a href="{{ $site->phone_href }}" class="text-ink tabular-nums underline decoration-rule underline-offset-4 hover:decoration-accent focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ $site->phone }}</a></p>
            </aside>
        </div>
    </section>
    <section class="border-b border-line py-16 lg:py-24">
        <div class="mx-auto max-w-6xl px-6">
            <h2 class="font-display text-[clamp(1.75rem,3vw,2.5rem)]/[1.1] font-normal tracking-[-0.015em] text-ink">The other programs.</h2>
            <ul role="list" class="mt-10 grid gap-x-8 border-t border-ink/80 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($entries as $other)
                    <li class="border-b border-line">
                        <a href="{{ $other->link }}" class="group flex flex-col gap-1.5 py-6 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">
                            <span class="font-display text-xl text-ink transition-colors duration-150 group-hover:text-accent">{{ $other->title }}</span>
                            <span class="max-w-[38ch] text-[0.9375rem]/6 text-muted">{{ $other->summary }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
    <x-sections.close/>
</x-layouts.main>
