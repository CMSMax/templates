@props([
    'heading' => 'The tax year, on one page.',
    'body' => 'Every date that matters to a small business or a family, marked where it falls. We track them all, so you never have to.',
    'todayLabel' => 'Today',
    'nextLabel' => 'Next',
    'items' => [],
    'months' => [],
])
<section class="bg-primary py-24 text-primary-foreground lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-6 lg:grid-cols-12 lg:items-end lg:gap-16">
            <h2 class="max-w-[14ch] font-display text-4xl leading-[1.08] font-medium tracking-[-0.03em] text-balance sm:text-5xl lg:col-span-7">{{ $heading }}</h2>
            <p class="max-w-[44ch] text-lg/8 text-pretty text-primary-foreground/80 lg:col-span-5">{{ $body }}</p>
        </div>

        <div data-year-rail class="relative mt-16 lg:mt-20" aria-hidden="true">
            <div class="grid grid-cols-12">
                @foreach ($months as $month)
                    <span class="border-l border-primary-foreground/25 pb-12 pl-1.5 font-mono text-[0.625rem] uppercase text-primary-foreground/75 sm:pl-2.5 sm:text-xs lg:pb-16 lg:text-sm">{{ $month->label }}</span>
                @endforeach
            </div>
            <span data-elapsed class="absolute top-0 bottom-4 left-0 bg-primary-foreground/10"></span>
            <div class="absolute inset-x-0 bottom-4 h-px bg-primary-foreground/60"></div>
            @foreach ($items as $deadline)
                <span data-mark style="--m: {{ $deadline->month }}; --d: {{ $deadline->day }}" class="absolute bottom-4 flex h-6 w-px lg:h-9 -translate-x-1/2 flex-col items-center justify-end bg-primary-foreground/40">
                    <span class="-mb-1 size-2 rounded-full bg-primary-foreground lg:-mb-1.5 lg:size-3"></span>
                </span>
            @endforeach
            <span data-today class="absolute top-6 bottom-2 w-px bg-primary-foreground">
                <span class="absolute top-full left-0 mt-1 -translate-x-1/2 rounded-sm bg-primary-foreground px-1.5 py-0.5 font-mono text-[0.625rem] whitespace-nowrap text-primary uppercase sm:text-xs">{{ $todayLabel }}</span>
            </span>
        </div>

        <ol role="list" class="mt-16 grid grid-cols-2 gap-px overflow-hidden rounded-lg bg-primary-foreground/20 lg:grid-cols-4">
            @foreach ($items as $deadline)
                <li data-deadline data-month="{{ $deadline->month }}" data-day="{{ $deadline->day }}" class="flex flex-col gap-3 bg-primary p-4 sm:p-6">
                    <span class="flex items-center gap-3">
                        <span data-dot class="size-2.5 shrink-0 rounded-full border border-primary-foreground/80" aria-hidden="true"></span>
                        <span class="font-mono tabular-nums sm:text-lg">{{ $deadline->date }}</span>
                        <span data-next-label class="ml-auto hidden rounded-sm bg-primary-foreground px-1.5 py-0.5 font-mono text-xs text-primary uppercase">{{ $nextLabel }}</span>
                    </span>
                    <span class="text-sm font-medium text-pretty sm:text-base">{{ $deadline->title }}</span>
                    <span class="mt-auto text-sm text-primary-foreground/75">{{ $deadline->who }}</span>
                </li>
            @endforeach
        </ol>
    </div>
    <script>
    (() => {
        const mark = () => {
            const rail = document.querySelector('[data-year-rail]');
            if (!rail) return;
            const now = new Date();
            const start = new Date(now.getFullYear(), 0, 1), end = new Date(now.getFullYear() + 1, 0, 1);
            rail.style.setProperty('--today', ((now - start) / (end - start)).toFixed(4));
            const m = now.getMonth() + 1, d = now.getDate();
            const items = [...document.querySelectorAll('[data-deadline]')];
            const next = items.find((el) => +el.dataset.month > m || (+el.dataset.month === m && +el.dataset.day >= d)) || items[0];
            items.forEach((el) => el.classList.toggle('is-next', el === next));
        };
        mark();
        if (!window.__tallyRail) { window.__tallyRail = true; document.addEventListener('mab:navigated', mark); }
    })();
    </script>
</section>
