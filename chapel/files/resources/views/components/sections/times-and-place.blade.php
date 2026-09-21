@props([
    'heading' => 'When and where',
    'body' => 'Come to whichever service suits you. The 9:00 is quiet and short; the 11:00 has the choir, the organ and the children’s blessing.',
    'image' => '',
    'imageAlt' => '',
])
<section aria-labelledby="times-heading" class="pb-24 sm:pb-28 lg:pb-32">
    <div class="mx-auto grid max-w-6xl gap-14 px-5 sm:px-8 lg:grid-cols-[5fr_7fr] lg:gap-20">
        <div class="h-[24rem] w-full max-w-[20rem] sm:h-[30rem] sm:max-w-[24rem] lg:max-w-none">
            <x-window :image="$image" :alt="$imageAlt"/>
        </div>
        <div>
            <h2 id="times-heading" class="font-display text-[clamp(2.25rem,4.4vw,3.5rem)] leading-[1.05] font-normal tracking-[-0.02em] text-balance text-ink">{{ $heading }}</h2>
            <p class="mt-5 max-w-[48ch] text-lg/8 text-pretty text-muted">{{ $body }}</p>
            <ul role="list" class="mt-10 border-b border-line">
                @foreach ($gatherings as $gathering)
                    <li class="grid gap-x-8 gap-y-1 border-t border-line py-6 sm:grid-cols-[9rem_1fr]">
                        <p class="flex items-baseline gap-3 sm:flex-col sm:gap-0">
                            <span class="smallcaps text-base text-muted">{{ $gathering->day }}</span>
                            <span class="oldstyle font-display text-3xl text-ink">{{ $gathering->time }}</span>
                        </p>
                        <div>
                            <h3 class="font-display text-2xl text-ink italic">{{ $gathering->name }}</h3>
                            <p class="mt-1 text-base/7 text-pretty text-muted">{{ $gathering->note }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
            <dl class="mt-10 grid gap-8 sm:grid-cols-2">
                <div>
                    <dt class="smallcaps text-base text-muted">Address</dt>
                    <dd class="mt-1 text-lg/7 text-ink">{{ $site->address }}<br>{{ $site->city }}</dd>
                    <dd class="mt-3"><a href="{{ $site->directions_url }}" class="rounded-sm font-semibold text-ink underline decoration-ink/25 underline-offset-[6px] hover:decoration-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">Get directions</a></dd>
                </div>
                <div>
                    <dt class="smallcaps text-base text-muted">Church office</dt>
                    <dd class="mt-1 text-lg/7 text-ink"><a href="{{ $site->phone_href }}" class="rounded-sm hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $site->phone }}</a></dd>
                    <dd class="mt-1 text-base/7 text-muted">{{ $site->office_hours }}</dd>
                </div>
            </dl>
        </div>
    </div>
</section>
