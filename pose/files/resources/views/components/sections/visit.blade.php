@props([
    'eyebrow' => 'Visit',
    'heading' => 'Second floor, above the bakery on Alder.',
    'body' => 'Take the green door beside Rise Bakery and follow the stairs up. There is a lift at the back of the building if you need it.',
    'checklistHeading' => 'Your first class',
    'image' => '/images/props.jpg',
    'imageAlt' => 'A rolled teal yoga mat beside two lilac foam blocks',
])
<section id="contact" aria-labelledby="visit-heading" class="scroll-mt-8 py-20 sm:py-24 lg:py-32">
    <div class="mx-auto grid max-w-7xl gap-12 px-5 sm:px-8 lg:grid-cols-12 lg:gap-10">
        <div class="lg:col-span-6">
            <p class="text-sm font-semibold text-primary">{{ $eyebrow }}</p>
            <h2 id="visit-heading" class="mt-4 max-w-[16ch] font-display text-[clamp(2.25rem,4.5vw,3.75rem)] leading-[1.02] font-medium tracking-[-0.035em] text-ink">{{ $heading }}</h2>
            <p class="mt-6 max-w-[46ch] text-lg/8 text-muted">{{ $body }}</p>
            <dl class="mt-10 grid gap-x-8 gap-y-6 border-t border-line pt-8 sm:grid-cols-2">
                <div>
                    <dt class="text-sm text-muted">Address</dt>
                    <dd class="mt-1 text-base font-semibold text-ink">{{ $site->address }}<br>{{ $site->city }}</dd>
                    <dd class="mt-2"><a href="{{ $site->directions_url }}" class="rounded-sm text-base font-semibold text-primary underline decoration-primary/30 underline-offset-4 hover:decoration-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Get directions</a></dd>
                </div>
                <div>
                    <dt class="text-sm text-muted">Hours</dt>
                    <dd class="mt-1 text-base font-semibold text-ink">{{ $site->hours_short }}</dd>
                </div>
                <div>
                    <dt class="text-sm text-muted">Call or text</dt>
                    <dd class="mt-1"><a href="{{ $site->phone_href }}" class="rounded-sm text-base font-semibold text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->phone }}</a></dd>
                </div>
                <div>
                    <dt class="text-sm text-muted">Email</dt>
                    <dd class="mt-1"><a href="mailto:{{ $site->email }}" class="rounded-sm text-base font-semibold text-ink hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $site->email }}</a></dd>
                </div>
            </dl>
        </div>
        <div class="flex flex-col gap-6 lg:col-span-6">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1024" height="683" loading="lazy" class="aspect-[3/2] w-full rounded-[1.75rem] bg-card object-cover outline-1 -outline-offset-1 outline-ink/5">
            <div class="rounded-3xl bg-surface p-7 sm:p-9">
                <h3 class="font-display text-2xl font-medium tracking-tight text-ink">{{ $checklistHeading }}</h3>
                <ol role="list" class="mt-6 flex flex-col gap-4">
                    @foreach ($site->first_visit as $step)
                        <li class="flex gap-4 text-base/7 text-ink">
                            <span class="grid size-7 shrink-0 place-items-center rounded-full bg-card text-sm font-semibold text-primary tabular-nums">{{ $loop->iteration }}</span>
                            {{ $step->text }}
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</section>
