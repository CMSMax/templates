@props([
    'kicker' => 'Inquire',
    'heading' => 'Tell us the date, even if it is only a season',
    'body' => 'Send three things and we will come back with availability, a rough quote, and a time to talk.',
    'firstLabel' => 'Your date',
    'firstNote' => 'Or the month you have in mind',
    'secondLabel' => 'Where',
    'secondNote' => 'A venue, a town, or still open',
    'thirdLabel' => 'How many',
    'thirdNote' => 'A guest count, give or take twenty',
])
<section id="inquire" class="bg-primary py-24 text-primary-foreground sm:py-32">
    <div class="mx-auto grid max-w-7xl gap-x-16 gap-y-14 px-6 lg:grid-cols-12 lg:px-8">
        <div class="lg:col-span-6">
            <p class="label-caps text-primary-foreground/80">{{ $kicker }}</p>
            <h2 class="mt-5 max-w-[16ch] font-display text-4xl tracking-tight text-balance sm:text-5xl">{{ $heading }}</h2>
            <p class="mt-6 max-w-[44ch] text-lg/8 text-primary-foreground/85">{{ $body }}</p>
            <div class="mt-10 flex flex-col gap-2 text-lg">
                <a href="mailto:{{ $site->email }}" class="w-fit font-display text-2xl underline decoration-primary-foreground/40 underline-offset-8 hover:decoration-primary-foreground focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary-foreground sm:text-3xl">{{ $site->email }}</a>
                <a href="{{ $site->phone_href }}" class="mt-3 w-fit text-primary-foreground/85 tabular-nums hover:text-primary-foreground focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary-foreground">{{ $site->phone }}</a>
            </div>
        </div>
        <div class="lg:col-span-5 lg:col-start-8 lg:self-end">
            <dl class="border-t border-primary-foreground/25">
                <div class="grid grid-cols-[2.5rem_1fr] gap-x-4 border-b border-primary-foreground/25 py-6">
                    <dt class="col-span-2 flex items-baseline gap-4 font-display text-2xl"><span class="w-10 text-primary-foreground/70 italic" aria-hidden="true">i.</span>{{ $firstLabel }}</dt>
                    <dd class="col-start-2 mt-1 text-primary-foreground/80">{{ $firstNote }}</dd>
                </div>
                <div class="grid grid-cols-[2.5rem_1fr] gap-x-4 border-b border-primary-foreground/25 py-6">
                    <dt class="col-span-2 flex items-baseline gap-4 font-display text-2xl"><span class="w-10 text-primary-foreground/70 italic" aria-hidden="true">ii.</span>{{ $secondLabel }}</dt>
                    <dd class="col-start-2 mt-1 text-primary-foreground/80">{{ $secondNote }}</dd>
                </div>
                <div class="grid grid-cols-[2.5rem_1fr] gap-x-4 border-b border-primary-foreground/25 py-6">
                    <dt class="col-span-2 flex items-baseline gap-4 font-display text-2xl"><span class="w-10 text-primary-foreground/70 italic" aria-hidden="true">iii.</span>{{ $thirdLabel }}</dt>
                    <dd class="col-start-2 mt-1 text-primary-foreground/80">{{ $thirdNote }}</dd>
                </div>
            </dl>
            <a href="mailto:{{ $site->email }}" class="mt-10 inline-flex min-h-12 items-center border border-primary-foreground/60 px-7 font-medium hover:border-primary-foreground hover:bg-primary-foreground hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-foreground">{{ $site->cta_label }}</a>
            <p class="mt-5 text-sm text-primary-foreground/80">{{ $site->reply_note }}</p>
        </div>
    </div>
</section>
