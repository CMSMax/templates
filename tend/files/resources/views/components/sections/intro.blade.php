@props([
    'eyebrow' => 'About the practice',
    'heading' => 'Hi, I’m Nora.',
    'headingItalic' => 'Pull up a chair.',
    'body' => 'I started Tend because most people I meet aren’t in crisis — they’re tired, stretched thin, and quietly wondering whether it’s supposed to feel this hard. Therapy here is a conversation first: practical, a little warm, and honest when honesty helps.',
    'bodyTwo' => 'I’ve spent twelve years working with adults and couples in community clinics and private practice. You won’t get homework you didn’t ask for or jargon you have to decode. You will get someone who remembers what you said last week.',
    'approaches' => 'Emotionally Focused Therapy · CBT · ACT · Gottman Method, Level 2',
    'signature' => 'Nora',
    'image' => '',
    'imageAlt' => 'Portrait of Nora Lind in her Portland office',
])
<section id="about" aria-labelledby="about-heading" class="scroll-mt-8 py-24 lg:py-32">
    <div class="mx-auto grid max-w-6xl items-start gap-12 px-5 sm:px-8 lg:grid-cols-[5fr_7fr] lg:gap-20">
        <figure class="max-w-md lg:sticky lg:top-10">
            @if ($image)
                <img src="{{ $image }}" alt="{{ $imageAlt }}" width="800" height="1000" loading="lazy" decoding="async" class="aspect-[4/5] w-full rounded-[1.5rem] object-cover outline-1 -outline-offset-1 outline-ink/5">
            @else
                <div class="sky-dawn relative isolate grid aspect-[4/5] w-full place-items-center overflow-hidden rounded-[1.5rem]" role="img" aria-label="{{ $imageAlt }}">
                    <div class="absolute -bottom-[34%] left-1/2 -z-10 size-[64%] -translate-x-1/2 rounded-full bg-primary blur-[1px]" aria-hidden="true"></div>
                    <p class="font-display text-[clamp(6rem,14vw,9rem)] leading-none font-light tracking-[-0.04em] text-ink italic" aria-hidden="true">{{ $site->clinician_initials }}</p>
                </div>
            @endif
            <figcaption class="mt-5 grid grid-cols-[auto_1fr] gap-x-4 border-t border-ink pt-4 text-sm/6">
                <span class="font-display text-base text-muted italic">fig. 1</span>
                <span>
                    <span class="block font-semibold text-ink">{{ $site->clinician }}, {{ $site->credentials }}</span>
                    <span class="block text-muted">{{ $site->clinician_focus }}</span>
                    <span class="mt-1 block text-muted">{{ $site->service_area }}</span>
                </span>
            </figcaption>
        </figure>
        <div class="lg:pt-6">
            <p class="text-sm font-medium text-muted">{{ $eyebrow }}</p>
            <h2 id="about-heading" class="mt-4 text-[clamp(2.25rem,4.6vw,3.75rem)] leading-[1.02] text-ink">
                <span class="block font-sans font-medium tracking-[-0.04em]">{{ $heading }}</span>
                <span class="block font-display font-light tracking-[-0.025em] italic">{{ $headingItalic }}</span>
            </h2>
            <div class="mt-9 flex flex-col gap-6 text-lg/8 text-ink/85">
                <p>{{ $body }}</p>
                <p>{{ $bodyTwo }}</p>
            </div>
            <p class="mt-8 font-display text-4xl font-light text-ink italic">— {{ $signature }}</p>
            <dl class="mt-12 grid gap-6 border-t border-line pt-8 sm:grid-cols-2">
                <div>
                    <dt class="text-sm font-semibold text-ink">Ways I work</dt>
                    <dd class="mt-1.5 text-base/7 text-muted">{{ $approaches }}</dd>
                </div>
                <div>
                    <dt class="text-sm font-semibold text-ink">Licensed in</dt>
                    <dd class="mt-1.5 text-base/7 text-muted">{{ $site->license_note }}</dd>
                </div>
            </dl>
        </div>
    </div>
</section>
