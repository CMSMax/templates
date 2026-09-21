@props(['phoneTitle' => 'Call or text', 'phoneNote' => 'A real person answers during opening hours.', 'emailTitle' => 'Email', 'emailNote' => 'Send your insurance details and we’ll confirm your cover before you visit.', 'visitTitle' => 'Visit', 'visitNote' => 'Free parking behind the building. Step-free entrance on Linden Avenue.', 'emergencyTitle' => 'Dental emergency?', 'hours' => []])
<section class="px-5 py-20 sm:px-8 lg:py-28">
    <div class="mx-auto grid max-w-7xl gap-12 lg:grid-cols-12 lg:gap-8">
        <ul role="list" class="lg:col-span-7">
            <li data-reveal class="border-t border-line py-8">
                <h2 class="text-sm font-semibold tracking-wide text-muted uppercase">{{ $phoneTitle }}</h2>
                <a href="{{ $site->phone_href }}" class="mt-3 inline-block font-display text-4xl font-semibold tracking-tight text-ink tabular-nums underline decoration-mint decoration-4 underline-offset-8 transition-colors hover:decoration-accent focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent sm:text-5xl">{{ $site->phone }}</a>
                <p class="mt-4 text-muted">{{ $phoneNote }}</p>
            </li>
            <li data-reveal class="border-t border-line py-8">
                <h2 class="text-sm font-semibold tracking-wide text-muted uppercase">{{ $emailTitle }}</h2>
                <a href="mailto:{{ $site->email }}" class="mt-3 inline-block font-display text-2xl font-semibold tracking-tight break-all text-ink underline decoration-mint decoration-4 underline-offset-8 transition-colors hover:decoration-accent focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent sm:text-3xl">{{ $site->email }}</a>
                <p class="mt-4 max-w-[48ch] text-muted">{{ $emailNote }}</p>
            </li>
            <li data-reveal class="border-t border-line py-8">
                <h2 class="text-sm font-semibold tracking-wide text-muted uppercase">{{ $visitTitle }}</h2>
                <p class="mt-3 font-display text-2xl font-semibold tracking-tight text-ink sm:text-3xl">{{ $site->address }}</p>
                <p class="mt-4 max-w-[48ch] text-muted">{{ $visitNote }}</p>
                <a href="{{ $site->map_href }}" class="mt-6 inline-flex rounded-full bg-surface px-6 py-3.5 font-semibold text-ink transition duration-200 hover:bg-mint active:scale-[0.97] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">Get directions</a>
            </li>
        </ul>
        <div data-reveal class="lg:col-span-4 lg:col-start-9">
            <div class="rounded-[1.5rem] bg-surface p-7">
                <h2 class="font-display text-xl font-semibold tracking-tight text-ink">Opening hours</h2>
                <dl class="mt-4">
                    @foreach ($hours as $slot)
                        <div class="flex justify-between gap-4 border-b border-line py-2.5 last:border-b-0">
                            <dt class="text-ink">{{ $slot->day }}</dt>
                            <dd class="text-muted tabular-nums">{{ $slot->hours }}</dd>
                        </div>
                    @endforeach
                </dl>
            </div>
            <div class="mt-4 rounded-[1.5rem] bg-accent p-7 text-accent-ink">
                <h2 class="flex items-center gap-2.5 font-display text-xl font-semibold tracking-tight"><span class="size-2.5 rounded-full bg-pop" aria-hidden="true"></span>{{ $emergencyTitle }}</h2>
                <p class="mt-3 text-accent-ink/80">{{ $site->emergency_note }}</p>
                <a href="{{ $site->phone_href }}" class="mt-6 inline-flex rounded-full bg-mint px-6 py-3.5 font-semibold text-ink tabular-nums transition duration-200 hover:bg-canvas active:scale-[0.97] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-canvas">Call {{ $site->phone }}</a>
            </div>
        </div>
    </div>
</section>
