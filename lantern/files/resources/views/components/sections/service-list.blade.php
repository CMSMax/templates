@props(['items'])
<section class="border-b border-line">
    <ul role="list" class="mx-auto max-w-6xl px-6">
        @foreach ($items as $item)
            <li class="border-line not-first:border-t">
                <a href="{{ $item->link }}" class="group grid items-center gap-8 py-8 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent lg:grid-cols-[minmax(0,16rem)_minmax(0,1fr)_auto] lg:py-10">
                    <img src="{{ $item->image }}" alt="" width="1400" height="1050" loading="lazy" decoding="async" class="aspect-4/3 w-full rounded-xs object-cover outline-1 -outline-offset-1 outline-ink/5">
                    <span class="flex flex-col gap-2">
                        <span class="font-display text-2xl font-semibold tracking-tight text-ink group-hover:text-accent">{{ $item->title }}</span>
                        <span class="max-w-[52ch] text-base/7 text-muted">{{ $item->summary }}</span>
                        <span class="mt-1 flex flex-wrap gap-x-6 gap-y-1 text-base/6 text-muted sm:text-sm/6">
                            <span>{{ $item->price }}</span>
                            <span>{{ $item->response }}</span>
                        </span>
                    </span>
                    <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0 text-muted group-hover:text-accent max-lg:hidden" aria-hidden="true"><path d="M2.5 8h11m-4.5-4.5L13.5 8 9 12.5"/></svg>
                </a>
            </li>
        @endforeach
    </ul>
</section>
