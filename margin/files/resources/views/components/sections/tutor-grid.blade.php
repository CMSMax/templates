@props(['items'])
<section class="border-b border-line py-20 lg:py-28">
    <div class="mx-auto max-w-6xl px-6">
        <ul role="list" class="grid gap-x-8 gap-y-16 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($items as $tutor)
                <li>
                    <img src="{{ $tutor->image }}" alt="{{ $tutor->imageAlt }}" width="640" height="640" loading="lazy" class="aspect-4/5 w-full rounded-sm object-cover outline-1 -outline-offset-1 outline-ink/8">
                    <h2 class="mt-6 font-display text-2xl font-normal tracking-[-0.01em] text-ink">{{ $tutor->name }}</h2>
                    <p class="mt-1 text-[0.9375rem] font-medium text-accent">{{ $tutor->role }}</p>
                    <dl class="mt-5 border-t border-line text-[0.9375rem]/6">
                        <div class="flex gap-4 border-b border-line py-3">
                            <dt class="w-24 shrink-0 text-muted">Teaches</dt>
                            <dd class="text-ink">{{ $tutor->subjects }}</dd>
                        </div>
                        <div class="flex gap-4 border-b border-line py-3">
                            <dt class="w-24 shrink-0 text-muted">Background</dt>
                            <dd class="text-ink">{{ $tutor->credential }}</dd>
                        </div>
                    </dl>
                    <p class="mt-5 font-display text-lg/7 text-ink italic">“{{ $tutor->quote }}”</p>
                </li>
            @endforeach
        </ul>
    </div>
</section>
