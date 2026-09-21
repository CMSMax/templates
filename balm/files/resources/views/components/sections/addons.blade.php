@props([
    'addonsHeading' => 'Add to any session',
    'addonsNote' => 'Ask when you book, or on the day.',
    'policiesHeading' => 'The small print, in plain words',
])
<section class="border-t border-line py-24 lg:py-32">
    <div class="mx-auto grid max-w-7xl gap-16 px-6 lg:grid-cols-2 lg:gap-20 lg:px-8">
        <div class="self-start rounded-3xl bg-primary p-8 text-primary-foreground sm:p-10">
            <h2 class="font-display text-[clamp(2rem,3.5vw,2.75rem)] leading-[1.05] tracking-[-0.025em]">{{ $addonsHeading }}</h2>
            <p class="mt-3 text-base/7">{{ $addonsNote }}</p>
            <ul role="list" class="mt-10 flex flex-col gap-5">
                @foreach ($site->addons as $addon)
                    <li class="flex items-baseline gap-3 text-lg">
                        <span>{{ $addon->name }}</span>
                        <span class="leader" aria-hidden="true"></span>
                        <span class="font-display text-2xl tabular-nums">+{{ $site->currency }}{{ $addon->price }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
        <div>
            <h2 class="font-display text-[clamp(2rem,3.5vw,2.75rem)] leading-[1.05] tracking-[-0.025em] text-ink">{{ $policiesHeading }}</h2>
            <dl class="mt-10 border-b border-line">
                @foreach ($site->policies as $policy)
                    <div class="grid gap-2 border-t border-line py-6 sm:grid-cols-[10rem_1fr] sm:gap-8">
                        <dt class="text-base font-semibold text-ink">{{ $policy->title }}</dt>
                        <dd class="text-base/7 text-muted">{{ $policy->note }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</section>
