<x-layouts.main :title="$sermons->title" :description="$sermons->description">
    <article class="pt-16 pb-24 sm:pt-20 lg:pt-24 lg:pb-32">
        <div class="mx-auto max-w-6xl px-5 sm:px-8">
            <a href="/sermons" class="group inline-flex min-h-12 items-center gap-2 rounded-full text-base font-semibold text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0" aria-hidden="true"><path d="M19 12H5m7 7-7-7 7-7"/></svg>
                All sermons
            </a>
            <header class="mt-10 grid gap-10 border-b border-line pb-14 lg:grid-cols-[8fr_4fr] lg:items-end lg:gap-20">
                <div>
                    <h1 class="font-display text-[clamp(2.75rem,6vw,4.75rem)] leading-[1.03] font-normal tracking-[-0.025em] text-balance text-ink">{{ $sermons->title }}</h1>
                    <p class="mt-6 max-w-[52ch] text-lg/8 text-pretty text-muted">{{ $sermons->description }}</p>
                </div>
                <dl class="grid grid-cols-2 gap-6 lg:grid-cols-1">
                    <div class="col-span-2 lg:col-span-1">
                        <dt class="smallcaps text-base text-muted">Series</dt>
                        <dd class="mt-1 text-base text-ink">{{ $sermons->series }}</dd>
                    </div>
                    <div>
                        <dt class="smallcaps text-base text-muted">Reading</dt>
                        <dd class="oldstyle mt-1 font-display text-2xl text-ink italic">{{ $sermons->scripture }}</dd>
                    </div>
                    <div>
                        <dt class="smallcaps text-base text-muted">Preached by</dt>
                        <dd class="mt-1 text-base text-ink">{{ $sermons->speaker }}</dd>
                        <dd class="oldstyle text-base text-muted">{{ $sermons->dateFormatted }}</dd>
                    </div>
                </dl>
            </header>
            @if ($sermons->image)
                <img src="{{ $sermons->image }}" alt="" width="1600" height="900" class="mt-14 aspect-[16/9] w-full rounded-t-[12rem] object-cover">
            @endif
            <div class="prose mx-auto mt-14 max-w-2xl">{!! $sermons->content !!}</div>
            <div class="mx-auto mt-20 max-w-2xl border-t border-line pt-10">
                <p class="font-display text-2xl text-ink">Keep reading</p>
                <ul role="list" class="mt-6 flex flex-col">
                    @foreach ($entries as $entry)
                        @if ($entry->slug != $sermons->slug)
                            <li class="border-b border-line">
                                <a href="{{ $entry->link }}" class="group flex min-h-12 flex-col gap-1 rounded-sm py-5 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:flex-row sm:items-baseline sm:justify-between sm:gap-6">
                                    <span class="font-display text-xl text-ink underline decoration-transparent underline-offset-[6px] group-hover:decoration-primary">{{ $entry->title }}</span>
                                    <span class="oldstyle shrink-0 text-sm text-muted">{{ $entry->scripture }}</span>
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </article>
</x-layouts.main>
