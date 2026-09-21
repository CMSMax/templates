@props([
    'heading' => 'One doctor, who remembers your back.',
    'body' => 'Dr. Nia Okafor opened Axis after a decade in busy multi-doctor clinics, where patients saw someone new every visit. Here you see her every time. She will tell you when chiropractic is the right answer — and when it isn’t, who to see instead.',
])
<section id="doctor" aria-labelledby="doctor-heading" class="scroll-mt-8 py-20 sm:py-28">
    <div class="mx-auto grid max-w-7xl gap-12 px-5 sm:px-8 lg:grid-cols-12 lg:gap-8">
        <figure class="relative self-start lg:col-span-5">
            <img src="{{ $site->doctor->photo }}" alt="{{ $site->doctor->photo_alt }}" width="880" height="1168" loading="lazy" decoding="async" class="aspect-[3/4] w-full rounded-[1.5rem] object-cover outline-1 -outline-offset-1 outline-ink/5 max-lg:max-h-[36rem]">
            <figcaption class="absolute bottom-4 left-4 rounded-2xl bg-card px-5 py-4 shadow-md shadow-ink/10 ring-1 ring-ink/5 sm:bottom-6 sm:left-6">
                <p class="font-display text-2xl leading-7 font-semibold text-ink">{{ $site->doctor->name }}</p>
                <p class="mt-1 text-sm text-muted">{{ $site->doctor->role }}</p>
            </figcaption>
        </figure>
        <div class="flex flex-col justify-between gap-12 lg:col-span-6 lg:col-start-7">
            <div>
                <h2 id="doctor-heading" class="max-w-[14ch] font-display text-[clamp(2.75rem,6vw,5rem)] leading-[0.95] font-semibold tracking-[-0.02em] text-balance text-ink">{{ $heading }}</h2>
                <p class="mt-6 max-w-[52ch] text-lg/8 text-muted">{{ $body }}</p>
                <ul role="list" class="mt-8 flex flex-col border-t border-line">
                    @foreach ($site->doctor->credentials as $credential)
                        <li class="flex items-center gap-3 border-b border-line py-3.5 text-base font-medium text-ink">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4 shrink-0 text-primary" aria-hidden="true"><path fill-rule="evenodd" d="M12.416 3.376a.75.75 0 0 1 .208 1.04l-5 7.5a.75.75 0 0 1-1.154.114l-3-3a.75.75 0 0 1 1.06-1.06l2.353 2.353 4.493-6.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd"/></svg>
                            {{ $credential }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <blockquote class="rounded-[1.5rem] bg-surface p-8 sm:p-10">
                <p class="relative font-display text-[1.875rem] leading-9 font-medium tracking-[-0.01em] text-ink before:absolute before:-translate-x-full before:content-['\201C'] after:content-['\201D'] sm:text-4xl sm:leading-10">{{ $site->testimonial->quote }}</p>
                <footer class="mt-6 flex flex-wrap items-center gap-x-3 text-base">
                    <cite class="font-semibold text-ink not-italic">{{ $site->testimonial->name }}</cite>
                    <span class="text-muted">{{ $site->testimonial->detail }}</span>
                </footer>
            </blockquote>
        </div>
    </div>
</section>
