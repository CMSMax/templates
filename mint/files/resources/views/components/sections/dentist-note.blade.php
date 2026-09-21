@props(['quote' => 'Most people who are scared of the dentist were never told what was happening. So we tell you everything, before we do anything.', 'name' => 'Dr. Helen Marsh', 'role' => 'Principal dentist, founded the practice in 2011', 'image' => '/images/team-helen.jpg', 'imageAlt' => 'Dr. Helen Marsh in navy scrubs, smiling in a bright treatment room', 'linkLabel' => 'Meet the team', 'linkHref' => '/about'])
<section class="px-3 sm:px-4">
    <div class="overflow-hidden rounded-[2rem] bg-mint-soft">
        <div class="mx-auto grid max-w-7xl items-center gap-10 px-5 py-16 sm:px-10 lg:grid-cols-12 lg:gap-8 lg:py-24">
            <div data-reveal class="lg:col-span-4">
                <img src="{{ $image }}" alt="{{ $imageAlt }}" width="1000" height="1250" loading="lazy" class="aspect-[4/5] w-full max-w-sm rounded-[1.5rem] object-cover lg:max-w-none">
            </div>
            <figure data-reveal class="lg:col-span-7 lg:col-start-6">
                <svg viewBox="0 0 48 36" fill="currentColor" class="h-9 w-auto text-pop" aria-hidden="true"><path d="M0 36V21.6C0 9.6 6.2 2.4 18.6 0l2.2 5.2C13.9 7 10.6 11 10.4 17H20v19H0Zm27.6 0V21.6C27.6 9.6 33.8 2.4 46.2 0l1.8 5.2C41.5 7 38.2 11 38 17h9.6v19h-20Z"/></svg>
                <blockquote class="mt-6 font-display text-3xl leading-[1.15] font-medium tracking-[-0.02em] text-balance text-ink sm:text-4xl lg:text-[2.75rem]">{{ $quote }}</blockquote>
                <figcaption class="mt-8 flex flex-wrap items-center justify-between gap-6">
                    <span>
                        <span class="block font-semibold text-ink">{{ $name }}</span>
                        <span class="block text-muted">{{ $role }}</span>
                    </span>
                    <a href="{{ $linkHref }}" class="rounded-full bg-canvas px-6 py-3.5 font-semibold text-ink transition duration-200 hover:bg-mint active:scale-[0.97] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ $linkLabel }}</a>
                </figcaption>
            </figure>
        </div>
    </div>
</section>
