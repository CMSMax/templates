<footer class="bg-secondary text-secondary-foreground">
    <div class="mx-auto grid max-w-6xl gap-12 px-5 py-16 sm:px-8 md:grid-cols-12 md:gap-10">
        <div class="flex flex-col gap-4 md:col-span-5">
            <a href="/" aria-label="{{ $site->name }} home" class="self-start rounded-lg focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                <x-brand inverted="1"/>
            </a>
            <p class="max-w-sm text-base text-secondary-foreground/80">{{ $site->tagline }}</p>
        </div>
        <div class="flex flex-col gap-3 md:col-span-3">
            <h2 class="font-display text-sm font-extrabold tracking-wide text-primary uppercase">Find us</h2>
            <address class="text-base not-italic">{{ $site->address }}<br>{{ $site->city }}</address>
            <a href="{{ $site->directions_url }}" class="self-start rounded-sm text-base font-bold underline decoration-secondary-foreground/40 underline-offset-4 transition-colors duration-150 hover:decoration-secondary-foreground focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Get directions</a>
        </div>
        <div class="flex flex-col gap-3 md:col-span-4">
            <h2 class="font-display text-sm font-extrabold tracking-wide text-primary uppercase">Say hello</h2>
            <a href="{{ $site->phone_href }}" class="self-start rounded-sm text-base font-bold transition-opacity duration-150 hover:opacity-80 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->phone }}</a>
            <a href="mailto:{{ $site->email }}" class="self-start rounded-sm text-base transition-opacity duration-150 hover:opacity-80 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->email }}</a>
            <p class="text-base text-secondary-foreground/80">{{ $site->hours_short }}</p>
        </div>
    </div>
    <div class="border-t border-secondary-foreground/15">
        <div class="mx-auto flex max-w-6xl flex-wrap items-center justify-between gap-x-6 gap-y-2 px-5 py-6 text-sm text-secondary-foreground/75 sm:px-8">
            <p>© {{ $site->name }}</p>
            <nav aria-label="Footer" class="flex flex-wrap gap-x-6 gap-y-2">
                <a href="/services" class="rounded-sm hover:text-secondary-foreground focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Services &amp; prices</a>
                <a href="/#first-visit" class="rounded-sm hover:text-secondary-foreground focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">First visit</a>
                <a href="/#visit" class="rounded-sm hover:text-secondary-foreground focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Hours</a>
            </nav>
        </div>
    </div>
</footer>
