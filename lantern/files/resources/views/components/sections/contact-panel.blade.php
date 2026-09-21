@props([
    'items',
    'heading' => 'How to reach us.',
    'note' => 'A photograph of the part, the panel or the puddle saves everyone a visit. Send one and we can usually price the work before we arrive.',
])
<section class="border-b border-line py-20 lg:py-32">
    <div class="mx-auto grid max-w-6xl items-start gap-8 px-6 lg:grid-cols-2">
        <div>
            <h2 class="max-w-[18ch] font-display text-[clamp(2rem,3.6vw,3rem)]/[1.05] font-semibold tracking-tight text-balance text-ink">{{ $heading }}</h2>
            <p class="mt-5 max-w-[46ch] text-[1.0625rem]/7 text-muted">{{ $note }}</p>
            <dl class="mt-10">
                <div class="flex flex-wrap items-baseline justify-between gap-x-6 gap-y-1 border-t border-line py-4">
                    <dt class="font-medium text-ink">Call or text</dt>
                    <dd><a href="{{ $site->phone_href }}" class="font-medium text-ink tabular-nums underline decoration-line underline-offset-4 hover:decoration-accent focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ $site->phone }}</a></dd>
                </div>
                <div class="flex flex-wrap items-baseline justify-between gap-x-6 gap-y-1 border-t border-line py-4">
                    <dt class="font-medium text-ink">Email</dt>
                    <dd><a href="mailto:{{ $site->email }}" class="font-medium text-ink underline decoration-line underline-offset-4 hover:decoration-accent focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ $site->email }}</a></dd>
                </div>
                <div class="flex flex-wrap items-baseline justify-between gap-x-6 gap-y-1 border-t border-b border-line py-4">
                    <dt class="font-medium text-ink">Workshop</dt>
                    <dd class="text-muted">{{ $site->address }}</dd>
                </div>
            </dl>
        </div>
        <div class="lg:pl-8">
            <h3 class="font-display text-xl font-semibold tracking-tight text-ink">Hours</h3>
            <dl class="mt-5">
                @foreach ($items as $slot)
                    <div class="flex flex-wrap items-baseline justify-between gap-x-6 gap-y-1 border-t border-line py-3.5 last:border-b">
                        <dt class="font-medium text-ink">{{ $slot->day }}</dt>
                        <dd class="text-muted tabular-nums">{{ $slot->hours }}</dd>
                    </div>
                @endforeach
            </dl>
            <p class="mt-8 max-w-[46ch] text-base/7 text-muted">{{ $site->license }}. Serving {{ $site->service_area }}.</p>
        </div>
    </div>
</section>
