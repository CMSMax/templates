@props(['items', 'linkLabel' => 'What the program covers'])
<section class="border-b border-line py-16 lg:py-24">
    <div class="mx-auto max-w-6xl px-6">
        <ul role="list" class="border-t border-ink/80">
            @foreach ($items as $program)
                <li class="border-b border-line">
                    <a href="{{ $program->link }}" class="group grid gap-x-10 gap-y-5 py-10 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent lg:grid-cols-[7rem_minmax(0,1fr)_minmax(0,17rem)] lg:py-12">
                        <span aria-hidden="true" class="font-display text-5xl/none font-light text-rule transition-colors duration-200 group-hover:text-accent lg:text-6xl/none">{{ $program->mark }}</span>
                        <span>
                            <span class="block font-display text-[clamp(1.75rem,3vw,2.5rem)]/[1.1] font-normal tracking-[-0.015em] text-ink">{{ $program->title }}</span>
                            <span class="mt-3 block max-w-[52ch] text-base/7 text-muted">{{ $program->summary }}</span>
                            <span class="mt-5 inline-flex items-center gap-2 font-medium text-ink underline decoration-rule decoration-2 underline-offset-[6px] transition-colors duration-150 group-hover:decoration-accent">{{ $linkLabel }}<svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-4 transition-transform duration-200 ease-out group-hover:translate-x-1" aria-hidden="true"><path d="M4 10h12m-5-5 5 5-5 5"/></svg></span>
                        </span>
                        <span class="grid content-start gap-2 text-[0.9375rem]/6 lg:border-l lg:border-line lg:pl-8">
                            <span class="block text-ink">{{ $program->grades }}</span>
                            <span class="block text-muted">{{ $program->ages }}</span>
                            <span class="block text-muted">{{ $program->format }}</span>
                            <span class="block font-medium text-ink">{{ $program->price }}</span>
                        </span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>
