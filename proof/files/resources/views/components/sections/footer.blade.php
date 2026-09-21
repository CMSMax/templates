<footer class="bg-secondary text-secondary-foreground">
    <div class="grid grid-cols-1 gap-px bg-secondary-foreground/15 lg:grid-cols-12">
        <div class="bg-secondary px-5 py-14 sm:px-8 lg:col-span-5 lg:px-12 lg:py-20">
            <a href="/" aria-label="Homepage" class="inline-flex text-secondary-foreground hover:text-secondary-foreground/80 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-secondary-foreground">
                <x-brand/>
            </a>
            <p class="mt-8 max-w-[22ch] font-display text-[clamp(1.875rem,3.2vw,2.75rem)] leading-[1.1] text-balance">{{ $site->tagline }}</p>
        </div>
        <div class="grid grid-cols-1 gap-px bg-secondary-foreground/15 sm:grid-cols-[4fr_4fr_5fr] lg:col-span-7">
            <div class="bg-secondary px-5 py-10 sm:px-8 lg:py-20">
                <h2 class="text-sm font-semibold text-secondary-foreground/70">Visit</h2>
                <p class="mt-4 text-base/7">{{ $site->address }}<br>{{ $site->city }}</p>
                <p class="mt-3"><a href="{{ $site->map_link }}" class="text-base font-medium underline underline-offset-4 hover:text-secondary-foreground/80 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary-foreground">Directions</a></p>
            </div>
            <div class="bg-secondary px-5 py-10 sm:px-8 lg:py-20">
                <h2 class="text-sm font-semibold text-secondary-foreground/70">Hours</h2>
                <p class="mt-4 text-base/7">{{ $site->hours_summary }}</p>
                <p class="mt-3 text-base/7 text-secondary-foreground/80">{{ $site->hours_note }}</p>
            </div>
            <div class="bg-secondary px-5 py-10 sm:px-8 lg:py-20">
                <h2 class="text-sm font-semibold text-secondary-foreground/70">Contact</h2>
                <ul role="list" class="mt-4 flex flex-col gap-2 text-base">
                    <li><a href="{{ $site->phone_href }}" class="hover:underline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary-foreground">{{ $site->phone }}</a></li>
                    <li><a href="mailto:{{ $site->email }}" class="[overflow-wrap:anywhere] hover:underline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary-foreground">{{ $site->email }}</a></li>
                    <li><a href="{{ $site->instagram }}" class="hover:underline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary-foreground">{{ $site->instagram_handle }}</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="flex flex-wrap items-center justify-between gap-x-8 gap-y-3 border-t border-secondary-foreground/15 px-5 py-6 text-sm text-secondary-foreground/80 sm:px-8 lg:px-12">
        <p>© {{ $site->name }}</p>
        <nav aria-label="Footer" class="flex gap-6">
            <a href="/menu" class="hover:text-secondary-foreground focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary-foreground">Menu</a>
            <a href="/#oven" class="hover:text-secondary-foreground focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary-foreground">Oven times</a>
            <a href="/#visit" class="hover:text-secondary-foreground focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary-foreground">Visit</a>
        </nav>
    </div>
</footer>
