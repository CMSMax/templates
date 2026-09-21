@props([
    'groups' => [],
])
<section aria-label="Price list" class="pb-20 lg:pb-28">
    <div class="mx-auto grid max-w-6xl gap-8 px-5 sm:px-8 lg:grid-cols-2 lg:gap-10">
        @foreach ($groups as $group)
            <div id="{{ $group->id }}" class="sign-plate relative scroll-mt-8 px-6 py-9 sm:p-11">
                <span class="rivet absolute top-5 left-5" aria-hidden="true"></span>
                <span class="rivet absolute top-5 right-5" aria-hidden="true"></span>
                <div class="flex flex-col gap-8">
                    <div class="grid grid-cols-[auto_1fr] items-center gap-x-5 gap-y-3 border-b-2 border-secondary-foreground/25 pb-7">
                        <span class="grid size-14 place-items-center rounded-full bg-secondary-foreground text-secondary">
                            <x-icon :name="$group->icon" class="size-7"/>
                        </span>
                        <h2 class="font-display text-[2.25rem] leading-none font-extrabold tracking-[-0.03em]">{{ $group->name }}</h2>
                        <p class="col-span-2 text-lg/8 text-secondary-foreground/80">{{ $group->body }}</p>
                    </div>
                    <ul role="list" class="divide-y-2 divide-secondary-foreground/20">
                        @foreach ($services as $service)
                            @if ($service->group == $group->id)
                                <li class="grid gap-x-8 gap-y-2 py-5 first:pt-0 last:pb-0 sm:grid-cols-[1fr_auto]">
                                    <div class="flex flex-col gap-1">
                                        <h3 class="font-display text-xl font-extrabold tracking-tight">{{ $service->name }}</h3>
                                        <p class="text-base/7 text-secondary-foreground/80">{{ $service->description }}</p>
                                    </div>
                                    <p class="flex items-baseline gap-2 sm:flex-col sm:items-end sm:gap-0">
                                        <span class="font-display text-2xl font-extrabold text-primary tabular-nums">{{ $service->price }}</span>
                                        <span class="text-sm text-secondary-foreground/75">{{ $service->note }}</span>
                                    </p>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
</section>
