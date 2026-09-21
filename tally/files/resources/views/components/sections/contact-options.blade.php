@props([
    'callLabel' => 'Call',
    'callNote' => 'The quickest way to book. A person answers.',
    'emailLabel' => 'Email',
    'emailNote' => 'Send a few lines about your business and we’ll suggest times.',
    'visitLabel' => 'Visit',
    'visitNote' => 'Street-level office, two minutes from the Maple Street stop.',
    'mapLabel' => 'Open in Maps',
    'hoursHeading' => 'Office hours',
])
<section class="py-20 lg:py-28">
    <div class="mx-auto grid max-w-7xl gap-y-14 px-6 lg:grid-cols-12 lg:gap-x-16 lg:px-8">
        <div class="grid border-t border-ink sm:grid-cols-3 lg:col-span-8">
            <div class="border-line py-8 sm:pr-8 max-sm:border-b">
                <h2 class="text-sm font-medium text-muted">{{ $callLabel }}</h2>
                <a href="{{ $site->phone_href }}" class="mt-3 block font-mono text-xl text-ink tabular-nums hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $site->phone }}</a>
                <p class="mt-3 text-base/7 text-pretty text-muted">{{ $callNote }}</p>
            </div>
            <div class="border-line py-8 sm:border-l sm:px-8 max-sm:border-b">
                <h2 class="text-sm font-medium text-muted">{{ $emailLabel }}</h2>
                <a href="{{ $site->email_href }}" class="mt-3 block text-xl break-words text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $site->email }}</a>
                <p class="mt-3 text-base/7 text-pretty text-muted">{{ $emailNote }}</p>
            </div>
            <div class="border-line py-8 sm:border-l sm:pl-8">
                <h2 class="text-sm font-medium text-muted">{{ $visitLabel }}</h2>
                <p class="mt-3 text-xl text-ink">{{ $site->address }}, {{ $site->city }}</p>
                <p class="mt-3 text-base/7 text-pretty text-muted">{{ $visitNote }}</p>
                <a href="{{ $site->map_url }}" class="mt-3 inline-block font-medium text-ink underline decoration-ink/25 underline-offset-4 hover:decoration-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $mapLabel }}</a>
            </div>
        </div>
        <div class="rounded-lg border border-line bg-surface p-8 lg:col-span-4">
            <h2 class="font-display text-xl font-medium tracking-tight text-ink">{{ $hoursHeading }}</h2>
            <dl class="mt-6 divide-y divide-line">
                @foreach ($site->hours as $row)
                    <div class="flex items-baseline justify-between gap-4 py-3">
                        <dt class="text-muted">{{ $row->day }}</dt>
                        <dd class="font-mono text-sm text-ink tabular-nums">{{ $row->hours }}</dd>
                    </div>
                @endforeach
            </dl>
            <p class="mt-6 text-sm text-pretty text-muted">{{ $site->response_note }}</p>
        </div>
    </div>
</section>
