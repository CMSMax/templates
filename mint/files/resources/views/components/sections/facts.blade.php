@props(['items' => []])
<section aria-label="Practice at a glance" class="px-5 sm:px-8">
    <ul role="list" class="mx-auto grid max-w-7xl grid-cols-2 gap-y-8 py-12 lg:grid-cols-4 lg:py-14">
        @foreach ($items as $fact)
            <li class="flex items-start gap-3 pr-4 lg:border-l lg:border-line lg:pl-6 lg:first:border-l-0 lg:first:pl-0">
                <span class="mt-0.5 grid size-6 shrink-0 place-items-center rounded-full bg-mint text-accent" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="size-3.5"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg>
                </span>
                <span>
                    <span class="block font-semibold text-ink">{{ $fact->title }}</span>
                    <span class="mt-0.5 block text-sm text-muted">{{ $fact->detail }}</span>
                </span>
            </li>
        @endforeach
    </ul>
</section>
