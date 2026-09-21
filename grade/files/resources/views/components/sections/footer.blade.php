@props(['links' => []])
<footer class="bg-ink text-canvas">
    <div class="mx-auto max-w-7xl px-5 pt-16 pb-10 md:px-8 md:pt-24">
        <p class="font-display text-[clamp(3rem,8.2vw,9rem)] leading-[0.88] font-extrabold uppercase" aria-hidden="true">{{ $site->name }}</p>
        <div class="mt-14 grid gap-10 border-t border-canvas/20 pt-10 sm:grid-cols-2 lg:grid-cols-4">
            <div class="flex flex-col gap-3">
                <a href="/" aria-label="Homepage" class="flex items-center gap-2.5 self-start">
                    @if ($site->logo_inverted)
                        <img src="{{ $site->logo_inverted }}" alt="{{ $site->name }}" class="h-7 w-auto">
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" class="size-6 shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="M2 2h28v28H2Zm5 23h18V9Z"/></svg>
                        <span class="font-display text-xl font-extrabold uppercase">{{ $site->name }}</span>
                    @endif
                </a>
                <p class="text-sm text-canvas/70">{{ $site->license }}</p>
            </div>
            <div class="flex flex-col text-sm">
                <p class="mb-1 font-semibold">Call or write</p>
                <a href="{{ $site->phone_href }}" class="self-start py-1.5 text-canvas/75 tabular-nums transition-colors duration-150 hover:text-canvas">{{ $site->phone }}</a>
                <a href="mailto:{{ $site->email }}" class="self-start py-1.5 break-all text-canvas/75 transition-colors duration-150 hover:text-canvas">{{ $site->email }}</a>
            </div>
            <div class="flex flex-col gap-2 text-sm">
                <p class="font-semibold">Office</p>
                <p class="text-canvas/75">{{ $site->address }}</p>
                <p class="text-canvas/75">{{ $site->hours_note }}</p>
            </div>
            <nav aria-label="Footer" class="text-sm">
                <ul role="list" class="flex flex-col">
                    @foreach ($links as $link)
                        <li><a href="{{ $link->href }}" class="inline-flex py-1.5 text-canvas/75 transition-colors duration-150 hover:text-canvas">{{ $link->label }}</a></li>
                    @endforeach
                </ul>
            </nav>
        </div>
        <p class="mt-14 text-sm text-canvas/60">© {{ $site->name }} · Serving {{ $site->service_area }}</p>
    </div>
</footer>
