@props([
    'heading' => 'New here? Four things before the first visit.',
    'body' => 'The same rules the best dog parks post at the gate. They keep the yard safe and the groups happy.',
    'signTitle' => 'Yard rules',
    'signNote' => 'All dogs, all visits',
    'faqHeading' => 'Questions owners ask',
    'items' => [],
])
<section id="first-visit" aria-labelledby="first-visit-heading" class="bg-surface py-20 lg:py-28">
    <div class="mx-auto flex max-w-6xl flex-col gap-12 px-5 sm:px-8 lg:gap-16">
        <div class="grid gap-5 lg:grid-cols-12 lg:gap-16">
            <h2 id="first-visit-heading" class="font-display text-[clamp(2.25rem,4.5vw,3.5rem)] leading-[1.02] font-extrabold tracking-[-0.03em] text-balance lg:col-span-7">{{ $heading }}</h2>
            <p class="text-lg/8 text-muted lg:col-span-5 lg:self-end">{{ $body }}</p>
        </div>
        <div class="grid items-start gap-12 lg:grid-cols-12 lg:gap-16">
            <div class="sign-plate-light relative overflow-hidden lg:col-span-6">
                <div class="relative m-[11px] flex items-baseline justify-between gap-4 rounded-t-[1.1rem] bg-secondary px-7 pt-7 pb-6 text-secondary-foreground sm:px-9">
                    <span class="rivet absolute top-3 left-3" aria-hidden="true"></span>
                    <span class="rivet absolute top-3 right-3" aria-hidden="true"></span>
                    <p class="font-display text-3xl font-extrabold tracking-tight uppercase sm:text-4xl">{{ $signTitle }}</p>
                    <p class="text-right font-display text-sm font-bold text-primary">{{ $signNote }}</p>
                </div>
                <ul role="list" class="flex flex-col divide-y divide-line px-7 pt-2 pb-8 sm:px-9">
                    @foreach ($items as $rule)
                        <li class="flex gap-4 py-5">
                            <span class="mt-0.5 grid size-7 shrink-0 place-items-center rounded-full bg-secondary text-primary">
                                <x-icon name="check" class="size-4"/>
                            </span>
                            <div class="flex flex-col gap-1">
                                <h3 class="font-display text-lg font-extrabold tracking-tight">{{ $rule->title }}</h3>
                                <p class="text-base/7 text-muted">{{ $rule->body }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="flex flex-col gap-4 lg:col-span-6">
                <h3 class="font-display text-2xl font-extrabold tracking-tight">{{ $faqHeading }}</h3>
                <div class="flex flex-col divide-y divide-ink/15 border-y border-ink/15">
                    @foreach ($faqs as $faq)
                        <details class="group">
                            <summary class="flex min-h-12 cursor-pointer list-none items-center justify-between gap-6 rounded-sm py-5 font-display text-lg font-bold tracking-tight transition-colors duration-150 hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary">
                                {{ $faq->question }}
                                <span class="grid size-8 shrink-0 place-items-center rounded-full ring-1 ring-ink/20 transition-transform duration-200 group-open:rotate-45" aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" class="size-4"><path d="M12 5v14M5 12h14"/></svg>
                                </span>
                            </summary>
                            <p class="pr-12 pb-6 text-base/7 text-muted">{{ $faq->answer }}</p>
                        </details>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
