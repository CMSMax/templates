@props(['blurb' => 'Seasonal catering for weddings, offices and every table in between. Cooked in our own kitchen, served at yours.'])
<footer class="bg-canvas">
    <div class="mx-auto grid max-w-7xl grid-cols-1 gap-12 px-5 py-16 sm:grid-cols-2 sm:px-8 lg:grid-cols-[2fr_1fr_1fr]">
        <div>
            <a href="/" aria-label="Homepage" class="inline-flex rounded-sm text-ink hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                <x-brand/>
            </a>
            <p class="mt-5 max-w-[40ch] text-base/7 text-muted sm:text-sm/6">{{ $blurb }}</p>
        </div>
        <div>
            <h2 class="text-sm font-medium text-ink">Visit the site</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 text-muted sm:text-sm/6">
                <li><a href="/menus" class="rounded-sm hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Menus</a></li>
                <li><a href="/#included" class="rounded-sm hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">What we bring</a></li>
                <li><a href="/#booking" class="rounded-sm hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">How booking works</a></li>
                <li><a href="{{ $site->instagram }}" class="rounded-sm hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Instagram {{ $site->instagram_handle }}</a></li>
            </ul>
        </div>
        <div>
            <h2 class="text-sm font-medium text-ink">The kitchen</h2>
            <ul role="list" class="mt-4 flex flex-col gap-2 text-base/7 text-muted sm:text-sm/6">
                <li>{{ $site->kitchen }}</li>
                <li><a href="{{ $site->phone_href }}" class="rounded-sm tabular-nums hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->phone }}</a></li>
                <li><a href="mailto:{{ $site->email }}" class="rounded-sm break-all hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->email }}</a></li>
            </ul>
        </div>
    </div>
    <div class="border-t border-ink/10">
        <div class="mx-auto flex max-w-7xl flex-wrap items-center justify-between gap-2 px-5 py-6 text-sm text-muted sm:px-8">
            <p>© {{ $site->name }}</p>
            <p>{{ $site->season }}</p>
        </div>
    </div>
</footer>
