<footer class="bg-surface">
    <div class="mx-auto grid max-w-6xl gap-12 px-6 pt-16 pb-10 sm:grid-cols-2 lg:grid-cols-[3fr_2fr_2fr_2fr]">
        <div>
            <a href="/" aria-label="Homepage" class="inline-flex rounded-md text-ink hover:text-ink/75 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                <x-brand/>
            </a>
            <p class="mt-4 max-w-[34ch] text-base/7 text-pretty text-muted">{{ $site->tagline }}</p>
        </div>
        <div>
            <h2 class="text-sm font-semibold text-ink">Find us</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 text-muted sm:text-sm/6">
                <li>{{ $site->address }}, {{ $site->city }}</li>
                <li><a href="{{ $site->phone_href }}" class="rounded-sm hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->phone }}</a></li>
                <li><a href="mailto:{{ $site->email }}" class="rounded-sm hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->email }}</a></li>
            </ul>
        </div>
        <div>
            <h2 class="text-sm font-semibold text-ink">Hours</h2>
            <dl class="mt-4 flex flex-col gap-2 text-base/7 sm:text-sm/6">
                @foreach ($hours as $slot)
                    <div>
                        <dt class="text-muted">{{ $slot->day }}</dt>
                        <dd class="text-ink tabular-nums">{{ $slot->hours }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
        <div>
            <h2 class="text-sm font-semibold text-ink">Explore</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 sm:text-sm/6">
                <li><a href="/menu" class="rounded-sm font-normal text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Menu</a></li>
                <li><a href="/#story" class="rounded-sm font-normal text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Our story</a></li>
                <li><a href="/#visit" class="rounded-sm font-normal text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Visit</a></li>
                <li><a href="{{ $site->instagram }}" class="rounded-sm font-normal text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Instagram</a></li>
            </ul>
        </div>
    </div>
    <div class="mx-auto max-w-6xl px-6">
        <div class="flex flex-wrap items-center justify-between gap-2 border-t border-line py-6 text-sm text-muted">
            <p>© {{ $site->name }}</p>
            <p>{{ $site->hours_note }}.</p>
        </div>
    </div>
</footer>
