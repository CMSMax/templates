@props([
    'items' => [],
    'heading' => 'A few favorites',
    'subheading' => 'From this week’s menu',
    'featuredOnly' => '1',
    'linkLabel' => 'See the full menu',
    'note' => 'Please tell your server about any allergies. Most dishes can be made without gluten, dairy, or nuts.',
])
{{-- SIGNATURE: the printed menu card. Paper surface, inset hairline frame,
     italic course titles between rules, dotted leaders to the price. --}}
<section class="py-20 lg:py-28">
    <div class="mx-auto max-w-6xl px-6">
        @if ($featuredOnly == '0')
            <nav aria-label="Menu courses" class="sticky top-20 z-30 mb-10 flex justify-center">
                <ul role="list" class="flex max-w-full gap-1 overflow-x-auto rounded-full border border-line bg-surface/95 p-1.5 backdrop-blur-sm">
                    @foreach ($site->courses as $course)
                        <li class="shrink-0"><a href="#{{ $course->slug }}" class="block rounded-full px-2.5 py-2 text-[0.8125rem] sm:px-4 sm:text-sm font-medium text-ink hover:bg-canvas focus-visible:outline-2 focus-visible:-outline-offset-2 focus-visible:outline-primary">{{ $course->name }}</a></li>
                    @endforeach
                </ul>
            </nav>
        @endif
        <div class="mx-auto max-w-3xl rounded-sm border border-line bg-surface px-6 py-14 outline-1 -outline-offset-8 outline-line sm:px-16 sm:py-20">
            <div class="text-center">
                <span class="mx-auto grid size-8 text-primary"><x-sections.mark/></span>
                <h2 class="mt-5 font-display text-5xl text-balance text-ink sm:text-6xl">{{ $heading }}</h2>
                <p class="mt-2 font-display text-xl text-muted italic">{{ $subheading }}</p>
            </div>

            @if ($featuredOnly == '1')
                <dl class="mt-12 flex flex-col gap-8">
                    @foreach ($items as $item)
                        @if ($item->featured)
                            <div>
                                <dt class="flex items-baseline gap-3 font-display text-2xl text-ink">
                                    <span>{{ $item->name }}</span>
                                    <span aria-hidden="true" class="min-w-6 flex-1 border-b border-dotted border-ink/30"></span>
                                    <span class="tabular-nums">{{ $item->price }}</span>
                                </dt>
                                <dd class="mt-1 max-w-[48ch] text-base/7 text-pretty text-muted">{{ $item->section }} · {{ $item->description }}</dd>
                            </div>
                        @endif
                    @endforeach
                </dl>
            @else
                @foreach ($site->courses as $course)
                    <div id="{{ $course->slug }}" class="mt-14 scroll-mt-40">
                        <h3 class="flex items-center gap-5 font-display text-3xl text-ink italic">
                            <span aria-hidden="true" class="h-px flex-1 bg-line"></span>
                            {{ $course->name }}
                            <span aria-hidden="true" class="h-px flex-1 bg-line"></span>
                        </h3>
                        <dl class="mt-8 flex flex-col gap-7">
                            @foreach ($items as $item)
                                @if ($item->section == $course->name)
                                    <div>
                                        <dt class="flex items-baseline gap-3 font-display text-2xl text-ink">
                                            <span>{{ $item->name }}</span>
                                            <span aria-hidden="true" class="min-w-6 flex-1 border-b border-dotted border-ink/30"></span>
                                            <span class="tabular-nums">{{ $item->price }}</span>
                                        </dt>
                                        <dd class="mt-1 max-w-[48ch] text-base/7 text-pretty text-muted">{{ $item->description }}</dd>
                                    </div>
                                @endif
                            @endforeach
                        </dl>
                    </div>
                @endforeach
            @endif

            <div class="mt-14 border-t border-line pt-8 text-center">
                <p class="mx-auto max-w-[46ch] text-base/7 text-pretty text-muted sm:text-sm/6">{{ $note }}</p>
                @if ($linkLabel)
                    <a href="/menu" class="mt-6 inline-flex rounded-full border border-ink/15 px-6 py-3 font-medium text-ink hover:border-ink/40 hover:bg-canvas focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">{{ $linkLabel }}</a>
                @endif
            </div>
        </div>
    </div>
</section>
