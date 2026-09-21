@props([
    'eyebrow' => 'Teachers',
    'heading' => 'Four teachers, and they will learn your name.',
    'body' => 'Between them, fifty-one years of teaching. None of them will ask you to do anything they would not show you first.',
    'linkLabel' => 'Meet the teachers',
    'linkHref' => '/teachers',
    'showBio' => '0',
])
<section id="teachers" aria-labelledby="teachers-heading" class="scroll-mt-8 py-20 sm:py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="grid gap-6 lg:grid-cols-12 lg:items-end lg:gap-10">
            <div class="lg:col-span-7">
                <p class="text-sm font-semibold text-primary">{{ $eyebrow }}</p>
                <h2 id="teachers-heading" class="mt-4 max-w-[18ch] font-display text-[clamp(2.25rem,4.5vw,3.75rem)] leading-[1.02] font-medium tracking-[-0.035em] text-ink">{{ $heading }}</h2>
            </div>
            <div class="flex flex-col items-start gap-6 lg:col-span-5">
                <p class="max-w-[46ch] text-lg/8 text-muted">{{ $body }}</p>
                @if ($linkLabel)
                    <a href="{{ $linkHref }}" class="group inline-flex min-h-12 items-center gap-2 rounded-full text-base font-semibold text-ink focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                        <span class="underline decoration-ink/25 underline-offset-[6px] group-hover:decoration-ink">{{ $linkLabel }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0 transition-transform duration-200 group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                @endif
            </div>
        </div>
        @if ($showBio == '1')
        <ul role="list" class="mt-14 grid gap-x-6 gap-y-12 sm:grid-cols-2 lg:mt-16 lg:grid-cols-4">
        @else
        <ul role="list" class="mt-14 grid grid-cols-2 gap-x-4 gap-y-10 sm:gap-x-6 sm:gap-y-12 lg:mt-16 lg:grid-cols-4">
        @endif
            @foreach ($teachers as $teacher)
                <li class="flex flex-col">
                    <img src="{{ $teacher->image }}" alt="" aria-hidden="true" width="512" height="640" loading="lazy" class="aspect-[4/5] w-full rounded-[1.75rem] bg-surface object-cover outline-1 -outline-offset-1 outline-ink/5">
                    <h3 class="mt-4 font-display text-xl font-medium tracking-tight text-ink sm:mt-5 sm:text-2xl">{{ $teacher->name }}</h3>
                    <p class="mt-1 text-sm text-muted sm:text-base">{{ $teacher->role }}</p>
                    @if ($showBio == '1')
                        <p class="mt-4 max-w-[40ch] text-base/7 text-muted">{{ $teacher->bio }}</p>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</section>
