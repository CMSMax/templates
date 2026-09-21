@props(['label' => 'Good to know'])
<section aria-label="{{ $label }}" class="ticker overflow-hidden border-y border-line bg-surface py-5">
    <div class="flex w-max">
        <div class="ticker-track flex shrink-0 items-center">
            <ul role="list" class="flex items-center">
                @foreach ($site->ticker as $item)
                    <li class="flex items-center font-display text-xl whitespace-nowrap text-ink italic sm:text-2xl">
                        <span class="px-7">{{ $item->text }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" fill="currentColor" class="size-3 text-primary" aria-hidden="true"><path d="M6 0l1.4 4.6L12 6l-4.6 1.4L6 12l-1.4-4.6L0 6l4.6-1.4Z"/></svg>
                    </li>
                @endforeach
            </ul>
            <div class="flex items-center" aria-hidden="true">
                @foreach ($site->ticker as $item)
                    <span class="flex items-center font-display text-xl whitespace-nowrap text-ink italic sm:text-2xl">
                        <span class="px-7">{{ $item->text }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" fill="currentColor" class="size-3 text-primary"><path d="M6 0l1.4 4.6L12 6l-4.6 1.4L6 12l-1.4-4.6L0 6l4.6-1.4Z"/></svg>
                    </span>
                @endforeach
            </div>
        </div>
    </div>
</section>
