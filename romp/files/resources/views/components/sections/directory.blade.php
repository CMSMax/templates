@props([
    'heading' => 'Where to?',
    'body' => 'Four ways to spend a day at Romp. Book one, or mix them: daycare with a bath before pick-up is the most popular trail.',
    'linkLabel' => 'Every service and price',
    'items' => [],
])
<section id="services" aria-labelledby="directory-heading" class="pb-20 lg:pb-28">
    <div class="mx-auto max-w-6xl px-5 sm:px-8">
        <div class="sign-plate relative px-6 py-10 sm:px-12 sm:py-14 lg:px-16">
            <span class="rivet absolute top-5 left-5" aria-hidden="true"></span>
            <span class="rivet absolute top-5 right-5" aria-hidden="true"></span>
            <span class="rivet absolute bottom-5 left-5" aria-hidden="true"></span>
            <span class="rivet absolute right-5 bottom-5" aria-hidden="true"></span>
            <div class="grid gap-6 border-b-2 border-secondary-foreground/25 pb-8 md:grid-cols-12 md:items-end md:gap-10">
                <h2 id="directory-heading" class="font-display text-[clamp(2.5rem,6vw,4.25rem)] leading-none font-extrabold tracking-[-0.03em] md:col-span-6">{{ $heading }}</h2>
                <p class="text-lg/8 text-secondary-foreground/80 md:col-span-6">{{ $body }}</p>
            </div>
            <ul role="list" class="divide-y-2 divide-secondary-foreground/25">
                @foreach ($items as $group)
                    <li>
                        <a href="/services#{{ $group->id }}" class="group grid grid-cols-[auto_1fr] items-center sm:grid-cols-[auto_1fr_auto] gap-x-5 gap-y-1 rounded-xl py-6 transition-colors duration-150 hover:bg-secondary-foreground/5 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary sm:gap-x-8 sm:py-8 md:grid-cols-[auto_minmax(0,5fr)_minmax(0,6fr)_auto]">
                            <span class="grid size-12 place-items-center self-start rounded-full bg-secondary-foreground text-secondary sm:size-16 md:self-center">
                                <x-icon :name="$group->icon" class="size-6 sm:size-8"/>
                            </span>
                            <span class="flex flex-col gap-1">
                                <span class="font-display text-2xl font-extrabold tracking-tight sm:text-[2rem]">{{ $group->name }}</span>
                                <span class="font-display text-lg font-bold text-primary tabular-nums md:hidden">{{ $group->from }}</span>
                            </span>
                            <span class="text-base text-secondary-foreground/80 max-md:col-start-2 max-md:row-start-2 md:flex md:items-center md:justify-between md:gap-6 md:text-lg">
                                <span>{{ $group->body }}</span>
                                <span class="shrink-0 font-display text-xl font-extrabold text-primary tabular-nums max-md:hidden">{{ $group->from }}</span>
                            </span>
                            <span class="grid size-12 place-items-center rounded-full ring-2 ring-secondary-foreground/40 transition-all duration-200 group-hover:bg-primary group-hover:text-primary-foreground group-hover:ring-primary max-sm:hidden max-md:col-start-3 max-md:row-span-2 max-md:row-start-1">
                                <x-icon name="arrow" class="size-5"/>
                            </span>
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="border-t-2 border-secondary-foreground/25 pt-8">
                <a href="/services" class="inline-flex items-center gap-2 rounded-sm font-display text-lg font-extrabold text-secondary-foreground underline decoration-primary decoration-2 underline-offset-[6px] transition-colors duration-150 hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $linkLabel }}<x-icon name="arrow" class="size-5"/></a>
            </div>
        </div>
    </div>
</section>
