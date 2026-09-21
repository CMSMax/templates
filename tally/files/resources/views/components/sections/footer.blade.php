@props([
    'practiceHeading' => 'Practice',
    'servicesLabel' => 'Services',
    'aboutLabel' => 'About',
    'contactHeading' => 'Contact',
    'hoursHeading' => 'Office hours',
    'note' => 'Tally Accounting is a licensed CPA firm. Nothing on this website is tax advice for your situation until we’ve talked.',
])
<footer class="border-t border-line bg-canvas">
    <div class="mx-auto max-w-7xl px-6 pt-16 pb-10 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-12">
            <div class="lg:col-span-4">
                <a href="/" aria-label="Homepage" class="inline-flex items-center gap-2.5 rounded-md text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                    @if ($site->logo)
                        <img src="{{ $site->logo }}" alt="{{ $site->name }}" class="h-8 w-auto">
                    @else
                        <span class="grid size-7 shrink-0 text-primary"><x-sections.mark/></span>
                        <span class="font-display text-xl font-semibold tracking-tight">{{ $site->wordmark }}</span>
                    @endif
                </a>
                <p class="mt-4 max-w-[34ch] text-muted">{{ $site->tagline }}</p>
            </div>
            <div class="grid gap-10 sm:grid-cols-3 lg:col-span-8">
                <div>
                    <h2 class="text-sm font-medium text-ink">{{ $practiceHeading }}</h2>
                    <ul role="list" class="mt-4 flex flex-col gap-3 text-muted">
                        <li><a href="/services" class="hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $servicesLabel }}</a></li>
                        <li><a href="/about" class="hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $aboutLabel }}</a></li>
                        <li><a href="/contact" class="hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $site->cta_label }}</a></li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-sm font-medium text-ink">{{ $contactHeading }}</h2>
                    <ul role="list" class="mt-4 flex flex-col gap-3 text-muted">
                        <li><a href="{{ $site->phone_href }}" class="font-mono tabular-nums hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $site->phone }}</a></li>
                        <li><a href="{{ $site->email_href }}" class="hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $site->email }}</a></li>
                        <li><a href="{{ $site->map_url }}" class="hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $site->address }}, {{ $site->city }}</a></li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-sm font-medium text-ink">{{ $hoursHeading }}</h2>
                    <dl class="mt-4 flex flex-col gap-3 text-muted">
                        @foreach ($site->hours as $row)
                            <div>
                                <dt>{{ $row->day }}</dt>
                                <dd class="font-mono text-sm text-ink tabular-nums">{{ $row->hours }}</dd>
                            </div>
                        @endforeach
                    </dl>
                </div>
            </div>
        </div>
        <p class="mt-16 flex flex-col gap-2 border-t border-line pt-8 text-sm text-muted sm:flex-row sm:justify-between"><span>© {{ $site->name }}</span><span class="max-w-[70ch] sm:text-right">{{ $note }}</span></p>
    </div>
</footer>
