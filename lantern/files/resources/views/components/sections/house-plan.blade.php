@props([
    'items',
    'heading' => 'Every trade under one roof.',
    'intro' => 'Most homes keep three companies on the fridge. This is all of them, and the same crew answers whichever one you need.',
])
<section class="border-b border-line py-20 lg:py-32">
    <div class="mx-auto max-w-6xl px-6">
        <h2 class="max-w-[20ch] font-display text-[clamp(2rem,3.6vw,3rem)]/[1.05] font-semibold tracking-tight text-balance text-ink">{{ $heading }}</h2>
        <p class="mt-5 max-w-[48ch] text-[1.0625rem]/7 text-muted">{{ $intro }}</p>
        <div class="mt-14 grid items-start gap-8 lg:grid-cols-[minmax(0,1fr)_minmax(0,24rem)]">
            <svg viewBox="0 0 480 360" fill="none" class="w-full text-ink/40" aria-hidden="true">
                <g stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14 330h452"/>
                    <path d="M62 141 240 36l178 105"/>
                    <path d="M330 92V58h30v56"/>
                    <path d="M92 141h296v189H92z"/>
                    <path d="M100 141 240 58l140 83"/>
                    <path d="M92 240h296"/>
                    <path d="M240 240v90"/>
                    <path d="M124 172h44v42h-44zM146 172v42M124 193h44"/>
                    <path d="M312 172h44v42h-44zM334 172v42M312 193h44"/>
                    <path d="M136 268h46v62h-46z"/>
                    <path d="M268 300h102M298 300v-46"/>
                    <path d="M104 254h26v32h-26z"/>
                    <path d="M388 330h74v-28h-74"/>
                    <path d="M410 302v28M436 302v28"/>
                    <path d="M196 96h88v34h-88z"/>
                </g>
                @foreach ($items as $trade)
                    <g>
                        <circle cx="{{ $trade->pinX }}" cy="{{ $trade->pinY }}" r="15" class="fill-accent"/>
                        <text x="{{ $trade->pinX }}" y="{{ $trade->pinY }}" text-anchor="middle" dominant-baseline="central" font-size="15" font-weight="600" class="fill-accent-ink">{{ $loop->iteration }}</text>
                    </g>
                    @break($loop->iteration == 4)
                @endforeach
            </svg>
            <ol role="list" class="flex flex-col">
                @foreach ($items as $trade)
                    <li class="border-t border-line last:border-b">
                        <a href="{{ $trade->link }}" class="group flex items-start gap-5 py-5 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">
                            <span class="grid size-7 shrink-0 place-items-center bg-accent font-display text-sm font-semibold text-accent-ink tabular-nums">{{ $loop->iteration }}</span>
                            <span class="flex flex-col gap-1">
                                <span class="font-display text-lg font-semibold tracking-tight text-ink group-hover:text-accent">{{ $trade->title }}</span>
                                <span class="text-base/6 text-muted sm:text-sm/6">{{ $trade->summary }}</span>
                            </span>
                        </a>
                    </li>
                    @break($loop->iteration == 4)
                @endforeach
            </ol>
        </div>
    </div>
</section>
