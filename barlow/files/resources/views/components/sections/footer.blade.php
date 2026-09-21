<footer class="border-t border-line bg-surface">
    <div class="mx-auto grid max-w-7xl gap-12 px-6 pt-16 pb-10 sm:grid-cols-2 lg:grid-cols-[4fr_3fr_3fr_2fr]">
        <div>
            <a href="/" aria-label="Homepage" class="inline-flex text-ink hover:text-ink/80 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                <x-brand/>
            </a>
            <p class="mt-5 max-w-[34ch] text-base/7 text-pretty text-muted">{{ $site->tagline }}</p>
        </div>
        <div>
            <h2 class="font-display text-base font-semibold tracking-[0.12em] text-ink uppercase">Find us</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 text-muted sm:text-sm/6">
                <li><a href="{{ $site->directions_url }}" class="hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->address }}, {{ $site->city }}</a></li>
                <li><a href="{{ $site->phone_href }}" class="hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->phone }}</a></li>
                <li><a href="mailto:{{ $site->email }}" class="hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->email }}</a></li>
            </ul>
        </div>
        <div>
            <h2 class="font-display text-base font-semibold tracking-[0.12em] text-ink uppercase">Hours</h2>
            <dl class="mt-4 flex flex-col gap-2 text-base/7 sm:text-sm/6">
                @foreach ($hours as $slot)
                    <div class="flex justify-between gap-4">
                        <dt class="text-muted">{{ $slot->day }}</dt>
                        <dd class="text-ink tabular-nums">{{ $slot->hours }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
        <div>
            <h2 class="font-display text-base font-semibold tracking-[0.12em] text-ink uppercase">Explore</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 sm:text-sm/6">
                <li><a href="/services" class="font-normal text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Services</a></li>
                <li><a href="/about" class="font-normal text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">About</a></li>
                <li><a href="/#visit" class="font-normal text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Visit</a></li>
                <li><a href="{{ $site->instagram }}" class="font-normal text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Instagram</a></li>
            </ul>
        </div>
    </div>
    <div class="mx-auto max-w-7xl px-6">
        <div class="flex flex-wrap items-center justify-between gap-2 border-t border-line py-6 text-sm text-muted">
            <p>© {{ $site->name }} · Est. {{ $site->established }}</p>
            <p>{{ $site->hours_note }}.</p>
        </div>
    </div>
</footer>
