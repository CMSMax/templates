@props(['links' => [], 'heading' => 'The next storm is already on the radar.', 'body' => "Book a free roof check now and you'll know where your roof stands before it arrives."])
<footer class="bg-storm text-secondary-foreground">
    <div class="mx-auto max-w-7xl px-5 pt-20 pb-10 md:px-8 md:pt-28">
        <div class="grid gap-10 lg:grid-cols-12 lg:items-end">
            <div class="lg:col-span-8">
                <p class="max-w-[20ch] font-display text-section font-semibold text-balance">{{ $heading }}</p>
                <p class="mt-5 max-w-[48ch] text-lg text-pretty text-storm-muted">{{ $body }}</p>
            </div>
            <div class="flex flex-wrap items-center gap-x-6 gap-y-4 lg:col-span-4 lg:justify-end">
                <a href="{{ $site->cta_link }}" class="inline-flex min-h-12 items-center rounded-md bg-primary px-5 py-3 text-base font-semibold text-primary-foreground hover:bg-primary/85 active:translate-y-px">{{ $site->cta_label }}</a>
                <a href="{{ $site->phone_href }}" class="inline-flex min-h-12 items-center text-base font-semibold tabular-nums underline-offset-4 hover:underline">{{ $site->phone }}</a>
            </div>
        </div>
        <div class="mt-16 grid gap-10 border-t border-storm-line pt-10 sm:grid-cols-2 lg:grid-cols-4">
            <div class="flex flex-col gap-3">
                <a href="/" aria-label="Homepage" class="flex items-center gap-2.5 self-start">
                    @if ($site->logo_inverted)
                        <img src="{{ $site->logo_inverted }}" alt="{{ $site->name }}" class="h-7 w-auto">
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="size-6 shrink-0" aria-hidden="true"><path fill="currentColor" d="M1 21 16 6l15 15h-5.2L16 11.2 6.2 21Z"/><path class="fill-primary" d="M1 25h30v3.5H1Z"/></svg>
                        <span class="font-display text-lg font-semibold tracking-tight">{{ $site->name }}</span>
                    @endif
                </a>
                <p class="text-sm text-storm-muted">{{ $site->license }}</p>
            </div>
            <div class="flex flex-col text-sm">
                <p class="mb-1 font-semibold">Call or write</p>
                <a href="{{ $site->phone_href }}" class="self-start py-1.5 text-storm-muted tabular-nums hover:text-secondary-foreground">{{ $site->phone }}</a>
                <a href="mailto:{{ $site->email }}" class="self-start py-1.5 break-all text-storm-muted hover:text-secondary-foreground">{{ $site->email }}</a>
            </div>
            <div class="flex flex-col gap-2 text-sm">
                <p class="font-semibold">Office</p>
                <p class="text-storm-muted">{{ $site->address }}</p>
                <p class="text-storm-muted">{{ $site->hours_note }}</p>
            </div>
            <nav aria-label="Footer" class="text-sm">
                <ul role="list" class="flex flex-col">
                    @foreach ($links as $link)
                        <li><a href="{{ $link->href }}" class="inline-flex py-1.5 text-storm-muted hover:text-secondary-foreground">{{ $link->label }}</a></li>
                    @endforeach
                </ul>
            </nav>
        </div>
        <p class="mt-14 text-sm text-storm-muted">© {{ $site->name }} · Serving {{ $site->service_area }} since {{ $site->founded }}</p>
    </div>
</footer>
