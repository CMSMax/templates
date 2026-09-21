@props(['items'])
<section class="border-b border-line">
    <ul role="list" class="mx-auto grid max-w-6xl grid-cols-1 px-6 lg:grid-cols-4">
        @foreach ($items as $trade)
            <li class="border-line py-8 not-first:border-t lg:py-10 lg:not-first:border-t-0 lg:not-first:border-l lg:not-first:pl-8 lg:not-last:pr-8">
                <a href="{{ $trade->link }}" class="group flex flex-col gap-3 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">
                    <span class="size-2.5 bg-accent" aria-hidden="true"></span>
                    <span class="font-display text-lg font-semibold tracking-tight text-ink group-hover:text-accent">{{ $trade->title }}</span>
                    <span class="max-w-[28ch] text-base/6 text-muted sm:text-sm/6">{{ $trade->summary }}</span>
                </a>
            </li>
        @break($loop->iteration == 4)
        @endforeach
    </ul>
</section>
