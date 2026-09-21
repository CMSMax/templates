@props(['items', 'heading' => 'Call, email or come by.', 'body' => 'Tell us the student’s age, the subject and what the last report said. We reply the same day and book the assessment at a time that suits you.', 'slipTitle' => 'The free assessment', 'slipNote' => 'bring the last report card'])
<section class="border-b border-line py-16 lg:py-24">
    <div class="mx-auto grid max-w-6xl items-start gap-14 px-6 lg:grid-cols-[minmax(0,1fr)_minmax(0,1fr)] lg:gap-20">
        <div>
            <h2 class="max-w-[14ch] font-display text-[clamp(2rem,3.6vw,3.25rem)]/[1.05] font-normal tracking-[-0.015em] text-balance text-ink">{{ $heading }}</h2>
            <p class="mt-5 max-w-[44ch] text-base/7 text-muted">{{ $body }}</p>
            <dl class="mt-10 border-t border-ink/80 text-base/6">
                <div class="grid grid-cols-[7rem_minmax(0,1fr)] gap-4 border-b border-line py-5">
                    <dt class="text-muted">Phone</dt>
                    <dd><a href="{{ $site->phone_href }}" class="font-display text-2xl text-ink tabular-nums hover:text-accent focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">{{ $site->phone }}</a></dd>
                </div>
                <div class="grid grid-cols-[7rem_minmax(0,1fr)] gap-4 border-b border-line py-5">
                    <dt class="text-muted">Email</dt>
                    <dd><a href="mailto:{{ $site->email }}" class="text-ink underline decoration-rule decoration-2 underline-offset-[6px] hover:decoration-accent focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">{{ $site->email }}</a></dd>
                </div>
                <div class="grid grid-cols-[7rem_minmax(0,1fr)] gap-4 border-b border-line py-5">
                    <dt class="text-muted">Centre</dt>
                    <dd class="text-ink">{{ $site->address }}</dd>
                </div>
                <div class="grid grid-cols-[7rem_minmax(0,1fr)] gap-4 border-b border-line py-5">
                    <dt class="text-muted">Hours</dt>
                    <dd class="text-ink">{{ $site->hours_note }}</dd>
                </div>
                <div class="grid grid-cols-[7rem_minmax(0,1fr)] gap-4 border-b border-line py-5">
                    <dt class="text-muted">We teach</dt>
                    <dd class="text-ink">{{ $site->area }}</dd>
                </div>
            </dl>
        </div>
        <div class="relative -rotate-1 rounded-sm bg-surface px-8 pt-8 pb-10 shadow-sheet outline-1 -outline-offset-1 outline-ink/8 sm:px-12 sm:pt-10 lg:mt-4">
            <div aria-hidden="true" class="absolute top-0 bottom-0 left-5 w-px bg-accent/60 sm:left-8"></div>
            <div class="relative">
                <h2 class="font-display text-2xl font-medium text-ink">{{ $slipTitle }}</h2>
                <ol role="list" class="mt-8 grid gap-7">
                    @foreach ($items as $item)
                        <li class="grid grid-cols-[2rem_minmax(0,1fr)] gap-x-3">
                            <span class="font-hand text-[1.75rem]/none text-accent">{{ $loop->iteration }}</span>
                            <span>
                                <span class="block font-medium text-ink">{{ $item->title }}</span>
                                <span class="mt-1 block text-[0.9375rem]/6 text-muted">{{ $item->body }}</span>
                            </span>
                        </li>
                    @endforeach
                </ol>
                <p class="mt-10 -rotate-2 text-right font-hand text-[1.75rem]/none text-accent">{{ $slipNote }}</p>
            </div>
        </div>
    </div>
</section>
