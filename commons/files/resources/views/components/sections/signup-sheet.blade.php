@props([
    'heading' => 'The sign-up sheet',
    'body' => 'Every shift comes with a short orientation and someone who has done it before. Choose a role and we’ll write back within two days with dates.',
    'signupLabel' => 'Sign up',
])
<section id="volunteer" aria-labelledby="signup-heading" class="scroll-mt-20 border-t border-line bg-surface">
    <div class="mx-auto max-w-7xl px-5 py-20 sm:px-6 lg:px-8 lg:py-28">
        <div class="relative mx-auto max-w-5xl">
            <div class="absolute -top-5 left-1/2 z-10 h-10 w-40 -translate-x-1/2 rounded-md bg-ink" aria-hidden="true">
                <div class="mx-auto mt-3 h-2 w-20 rounded-full bg-canvas/30"></div>
            </div>
            <div class="bg-canvas px-5 pt-14 pb-6 shadow-[0_24px_48px_-28px] shadow-ink/40 ring-1 ring-line sm:px-10 lg:px-14 lg:pt-16">
                <div class="flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
                    <h2 id="signup-heading" class="font-display text-[clamp(2.25rem,5vw,3.75rem)] leading-none font-extrabold tracking-[-0.03em] text-ink">{{ $heading }}</h2>
                    <p class="max-w-[42ch] text-base/7 text-muted">{{ $body }}</p>
                </div>
                <div class="mt-10 hidden grid-cols-[1.1fr_1.3fr_2fr_auto] gap-6 border-b-2 border-ink pb-3 text-sm font-bold text-muted md:grid" aria-hidden="true">
                    <span>Role</span><span>When</span><span>What you’ll do</span><span class="w-28"></span>
                </div>
                <ul role="list" class="max-md:mt-10 max-md:border-t-2 max-md:border-ink">
                    @foreach ($roles as $role)
                        <li class="grid gap-3 border-b border-line py-6 md:grid-cols-[1.1fr_1.3fr_2fr_auto] md:items-center md:gap-6">
                            <h3 class="font-display text-2xl leading-tight font-bold text-ink">{{ $role->role }}</h3>
                            <p class="text-base/6 text-ink"><span class="tabular-nums">{{ $role->when }}</span><span class="block text-sm text-muted">{{ $role->commitment }}</span></p>
                            <p class="text-base/7 text-muted">{{ $role->task }}</p>
                            <a href="mailto:{{ $site->volunteer_email }}?subject={{ $role->role }}" class="inline-flex min-h-12 w-28 items-center justify-center self-start rounded-full bg-ink px-5 font-bold text-canvas transition-colors duration-150 hover:bg-primary hover:text-primary-foreground focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink md:self-center">{{ $signupLabel }}<span class="sr-only"> for {{ $role->role }}</span></a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
