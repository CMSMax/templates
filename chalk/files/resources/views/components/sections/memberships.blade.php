@props([
    'label' => 'Memberships',
    'heading' => 'Plans that fit a real week.',
    'body' => 'Month to month, no joining fee, no contract. Freeze for travel or injury whenever you need to.',
    'featuredLabel' => 'Most members',
])
<section id="memberships" class="border-b border-line py-20 lg:py-32">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="grid gap-6 lg:grid-cols-12 lg:gap-8">
            <p class="font-display text-[0.9375rem] font-bold tracking-[0.14em] text-muted uppercase lg:col-span-3">{{ $label }}</p>
            <div class="lg:col-span-9">
                <h2 class="max-w-[22ch] font-display text-[clamp(2.75rem,6vw,5rem)] leading-[0.9] font-black text-ink uppercase">{{ $heading }}</h2>
                <p class="mt-6 max-w-[58ch] text-lg/8 text-muted">{{ $body }}</p>
            </div>
        </div>

        {{-- Side by side on wide screens: one column per plan. --}}
        <div class="mt-16 max-md:hidden">
            <table class="w-full table-fixed border-collapse text-left">
                <caption class="sr-only">Membership plans compared</caption>
                <thead>
                    <tr>
                        <th scope="col" class="w-1/4"><span class="sr-only">Included</span></th>
                        @foreach ($plans as $plan)
                            <th scope="col" class="border-t-4 px-5 pt-6 pb-8 align-top font-normal @if ($plan->featured) border-primary @else border-ink @endif">
                                <span class="flex items-center justify-between gap-3">
                                    <span class="font-display text-3xl leading-none font-black tracking-wide text-ink uppercase">{{ $plan->name }}</span>
                                    @if ($plan->featured)
                                        <span class="rounded-xs bg-primary px-2 py-1 font-display text-sm leading-none font-bold tracking-[0.12em] text-primary-foreground uppercase">{{ $featuredLabel }}</span>
                                    @endif
                                </span>
                                <span class="mt-5 flex items-baseline gap-2">
                                    <span class="font-display text-7xl leading-none font-black text-ink tabular-nums">{{ $plan->price }}</span>
                                    <span class="text-base text-muted">{{ $plan->period }}</span>
                                </span>
                                <span class="mt-3 block text-base text-muted">{{ $plan->note }}</span>
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody class="text-base">
                    <tr class="border-t border-line">
                        <th scope="row" class="py-4 pr-4 font-display text-lg font-extrabold tracking-wide text-muted uppercase">Classes</th>
                        @foreach ($plans as $plan)<td class="px-5 py-4 font-semibold text-ink">{{ $plan->classes }}</td>@endforeach
                    </tr>
                    <tr class="border-t border-line">
                        <th scope="row" class="py-4 pr-4 font-display text-lg font-extrabold tracking-wide text-muted uppercase">Open gym</th>
                        @foreach ($plans as $plan)<td class="px-5 py-4 text-ink">{{ $plan->open_gym }}</td>@endforeach
                    </tr>
                    <tr class="border-t border-line">
                        <th scope="row" class="py-4 pr-4 font-display text-lg font-extrabold tracking-wide text-muted uppercase">Coaching</th>
                        @foreach ($plans as $plan)<td class="px-5 py-4 text-ink">{{ $plan->coaching }}</td>@endforeach
                    </tr>
                    <tr class="border-y border-line">
                        <th scope="row" class="py-4 pr-4 font-display text-lg font-extrabold tracking-wide text-muted uppercase">Extras</th>
                        @foreach ($plans as $plan)<td class="px-5 py-4 text-ink">{{ $plan->extras }}</td>@endforeach
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Stacked on phones. --}}
        <div class="mt-12 flex flex-col gap-10 md:hidden">
            @foreach ($plans as $plan)
                <div class="border-t-4 pt-5 @if ($plan->featured) border-primary @else border-ink @endif">
                    <div class="flex items-center justify-between gap-3">
                        <h3 class="font-display text-3xl leading-none font-black tracking-wide text-ink uppercase">{{ $plan->name }}</h3>
                        @if ($plan->featured)
                            <span class="rounded-xs bg-primary px-2 py-1 font-display text-sm leading-none font-bold tracking-[0.12em] text-primary-foreground uppercase">{{ $featuredLabel }}</span>
                        @endif
                    </div>
                    <p class="mt-4 flex items-baseline gap-2">
                        <span class="font-display text-6xl leading-none font-black text-ink tabular-nums">{{ $plan->price }}</span>
                        <span class="text-base text-muted">{{ $plan->period }}</span>
                    </p>
                    <p class="mt-2 text-base text-muted">{{ $plan->note }}</p>
                    <dl class="mt-5 divide-y divide-line border-y border-line text-base">
                        <div class="flex justify-between gap-4 py-3"><dt class="text-muted">Classes</dt><dd class="text-right font-semibold text-ink">{{ $plan->classes }}</dd></div>
                        <div class="flex justify-between gap-4 py-3"><dt class="text-muted">Open gym</dt><dd class="text-right text-ink">{{ $plan->open_gym }}</dd></div>
                        <div class="flex justify-between gap-4 py-3"><dt class="text-muted">Coaching</dt><dd class="text-right text-ink">{{ $plan->coaching }}</dd></div>
                        <div class="flex justify-between gap-4 py-3"><dt class="text-muted">Extras</dt><dd class="text-right text-ink">{{ $plan->extras }}</dd></div>
                    </dl>
                </div>
            @endforeach
        </div>

        <div class="mt-12 flex flex-col gap-5 sm:flex-row sm:items-center sm:justify-between">
            <p class="font-display text-2xl leading-tight font-extrabold tracking-wide text-ink uppercase">{{ $site->trial_note }}</p>
            <a href="{{ $site->cta_link }}" class="inline-flex items-center justify-center gap-3 self-start rounded-sm bg-ink py-4 pr-5 pl-6 font-display text-2xl leading-none font-extrabold tracking-[0.05em] text-canvas uppercase transition-colors duration-150 hover:bg-primary hover:text-primary-foreground focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:self-auto">
                {{ $site->cta_label }}
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="square" class="size-5 shrink-0" aria-hidden="true"><path d="M5 12h13m-6-6 6 6-6 6"/></svg>
            </a>
        </div>
    </div>
</section>
