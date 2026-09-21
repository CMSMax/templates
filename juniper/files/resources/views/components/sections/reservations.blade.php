@props([
    'callHeading' => 'Call the restaurant',
    'callBody' => 'The quickest way to a table. We answer from 2 pm, Tuesday to Sunday, and can usually seat you the same week.',
    'partyHeading' => 'Large parties and private dinners',
    'walkInHeading' => 'Walk in',
])
<section class="pt-12 pb-20 lg:pb-28">
    <div class="mx-auto max-w-3xl px-6">
        <ul role="list" class="divide-y divide-line border-y border-line">
            <li class="grid gap-4 py-10 sm:grid-cols-[1fr_auto] sm:items-center sm:gap-10">
                <div>
                    <h2 class="font-display text-3xl text-ink">{{ $callHeading }}</h2>
                    <p class="mt-2 max-w-[48ch] text-base/7 text-pretty text-muted">{{ $callBody }}</p>
                </div>
                <a href="{{ $site->phone_href }}" class="justify-self-start rounded-full bg-primary px-6 py-3.5 font-medium whitespace-nowrap text-primary-foreground tabular-nums hover:bg-primary/90 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->phone }}</a>
            </li>
            <li class="grid gap-4 py-10 sm:grid-cols-[1fr_auto] sm:items-center sm:gap-10">
                <div>
                    <h2 class="font-display text-3xl text-ink">{{ $partyHeading }}</h2>
                    <p class="mt-2 max-w-[48ch] text-base/7 text-pretty text-muted">{{ $site->large_party_note }}</p>
                </div>
                <a href="mailto:{{ $site->email }}" class="justify-self-start rounded-full border border-ink/15 px-6 py-3.5 font-medium whitespace-nowrap text-ink hover:border-ink/40 hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Email us</a>
            </li>
            <li class="grid gap-4 py-10 sm:grid-cols-[1fr_auto] sm:items-center sm:gap-10">
                <div>
                    <h2 class="font-display text-3xl text-ink">{{ $walkInHeading }}</h2>
                    <p class="mt-2 max-w-[48ch] text-base/7 text-pretty text-muted">{{ $site->walk_in_note }}</p>
                </div>
                <a href="{{ $site->map_url }}" class="justify-self-start rounded-full border border-ink/15 px-6 py-3.5 font-medium whitespace-nowrap text-ink hover:border-ink/40 hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Get directions</a>
            </li>
        </ul>
    </div>
</section>
