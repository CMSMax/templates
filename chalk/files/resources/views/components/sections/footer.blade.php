@props([
    'blurb' => 'A coached strength gym. Small classes, real programming, and a coach who knows your numbers.',
])
<footer class="overflow-hidden border-t border-line bg-surface text-ink">
    <div class="mx-auto max-w-7xl px-5 pt-16 sm:px-8 lg:pt-20">
        <div class="grid gap-12 lg:grid-cols-12 lg:gap-8">
            <div class="lg:col-span-5">
                <a href="/" aria-label="{{ $site->name }} — homepage" class="inline-flex rounded-sm text-ink hover:text-ink/80 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                    <x-brand/>
                </a>
                <p class="mt-5 max-w-[38ch] text-base/7 text-muted">{{ $blurb }}</p>
            </div>
            <nav aria-label="Footer" class="lg:col-span-3">
                <ul role="list" class="flex flex-col gap-1">
                    <li><a href="/#programs" class="inline-flex min-h-11 items-center rounded-sm text-base text-muted transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Programs</a></li>
                    <li><a href="/schedule" class="inline-flex min-h-11 items-center rounded-sm text-base text-muted transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Schedule</a></li>
                    <li><a href="/#memberships" class="inline-flex min-h-11 items-center rounded-sm text-base text-muted transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Memberships</a></li>
                    <li><a href="/#visit" class="inline-flex min-h-11 items-center rounded-sm text-base text-muted transition-colors duration-150 hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Visit</a></li>
                </ul>
            </nav>
            <div class="flex flex-col gap-1 text-base lg:col-span-4">
                <a href="{{ $site->phone_href }}" class="inline-flex min-h-11 items-center self-start rounded-sm text-ink tabular-nums hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->phone }}</a>
                <a href="mailto:{{ $site->email }}" class="inline-flex min-h-11 items-center self-start rounded-sm text-ink hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->email }}</a>
                <a href="{{ $site->instagram }}" class="inline-flex min-h-11 items-center self-start rounded-sm text-ink hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->instagram_handle }}</a>
                <p class="mt-3 text-muted">{{ $site->address }}, {{ $site->city }}</p>
            </div>
        </div>
        <p class="mt-16 flex flex-wrap justify-between gap-4 border-t border-line pt-6 text-sm text-muted">
            <span>© {{ $site->name }}</span>
            <span>{{ $site->open_summary }}</span>
        </p>
        <p class="-mb-[0.18em] pt-6 font-display text-[clamp(6rem,43vw,38rem)] leading-[0.8] font-black tracking-[-0.02em] text-ink/[0.07] uppercase select-none" aria-hidden="true">{{ $site->short_name }}</p>
    </div>
</footer>
