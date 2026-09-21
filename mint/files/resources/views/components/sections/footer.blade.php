@props(['links' => [], 'hours' => [], 'note' => 'Gentle, modern dentistry for the whole family. Prices written down before we start.', 'legal' => 'General dentistry practice. Cosmetic results vary from patient to patient.'])
<footer class="px-3 pb-3 sm:px-4 sm:pb-4">
    <div class="rounded-[2rem] bg-surface">
        <div class="mx-auto grid max-w-7xl gap-12 px-5 py-16 sm:px-10 lg:grid-cols-12 lg:py-20">
            <div class="lg:col-span-5">
                <a href="/" aria-label="{{ $site->name }} — home" class="inline-flex items-center gap-2.5 rounded-full font-display text-xl font-semibold tracking-tight text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">
                    <span class="grid size-9 place-items-center rounded-full bg-mint text-accent">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5" aria-hidden="true"><path d="M7.2 2.5c-3 0-5 2.3-5 5.6 0 2.6 1 4.4 1.7 7.2.6 2.5 1 6.2 3.1 6.2 1.7 0 2-3.1 2.6-5.1.4-1.3.8-1.9 1.4-1.9s1 .6 1.4 1.9c.6 2 .9 5.1 2.6 5.1 2.1 0 2.5-3.7 3.1-6.2.7-2.8 1.7-4.6 1.7-7.2 0-3.3-2-5.6-5-5.6-2.1 0-3.3 1.1-4.8 1.1s-2.7-1.1-4.8-1.1z"/></svg>
                    </span>
                    <span>{{ $site->name }}</span>
                </a>
                <p class="mt-5 max-w-[34ch] text-pretty text-muted">{{ $note }}</p>
                <a href="{{ $site->phone_href }}" class="mt-8 inline-block font-display text-3xl font-semibold tracking-tight text-ink tabular-nums underline decoration-mint decoration-4 underline-offset-8 transition-colors hover:decoration-accent focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent sm:text-4xl">{{ $site->phone }}</a>
            </div>
            <div class="lg:col-span-3">
                <h2 class="font-display text-sm font-semibold tracking-wide text-ink uppercase">Visit</h2>
                <p class="mt-4 max-w-[28ch] text-muted">{{ $site->address }}</p>
                <a href="{{ $site->map_href }}" class="mt-2 inline-flex items-center gap-1.5 font-medium text-ink underline decoration-line underline-offset-4 hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">Get directions</a>
                <a href="mailto:{{ $site->email }}" class="mt-4 block text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ $site->email }}</a>
                <ul role="list" class="mt-8 flex flex-col gap-2">
                    @foreach ($links as $link)
                        <li><a href="{{ $link->href }}" class="text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ $link->label }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="lg:col-span-4">
                <h2 class="font-display text-sm font-semibold tracking-wide text-ink uppercase">Hours</h2>
                <dl class="mt-4">
                    @foreach ($hours as $slot)
                        <div class="flex justify-between gap-4 border-b border-line py-2">
                            <dt class="text-ink">{{ $slot->day }}</dt>
                            <dd class="text-muted tabular-nums">{{ $slot->hours }}</dd>
                        </div>
                    @endforeach
                </dl>
                <p class="mt-4 flex items-start gap-2 text-sm text-muted"><span class="mt-1.5 size-2 shrink-0 rounded-full bg-pop" aria-hidden="true"></span>{{ $site->emergency_note }}</p>
            </div>
        </div>
        <div class="mx-auto flex max-w-7xl flex-wrap items-center justify-between gap-2 border-t border-line px-5 py-6 text-sm text-muted sm:px-10">
            <p>© {{ $site->name }}</p>
            <p>{{ $legal }}</p>
        </div>
    </div>
</footer>
