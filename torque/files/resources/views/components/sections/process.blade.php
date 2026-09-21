@props([
    'heading' => 'Nothing gets fixed until you say yes.',
    'body' => 'Here’s how every job goes, from the minute you hand over the keys.',
    'estimateLabel' => 'A real estimate, the way you’ll get it',
    'warrantyLabel' => 'Every repair is covered for',
])
<section id="process" class="scroll-mt-18 border-y border-line bg-surface py-20 lg:py-28">
    <div class="mx-auto grid max-w-7xl grid-cols-1 gap-16 px-5 sm:px-8 lg:grid-cols-12 lg:gap-12">
        <div class="lg:col-span-6">
            <h2 class="max-w-[14ch] font-display text-[clamp(2.5rem,5vw,4.25rem)] leading-[0.95] font-bold text-balance text-ink uppercase">{{ $heading }}</h2>
            <p class="mt-6 max-w-[44ch] text-lg/8 text-muted">{{ $body }}</p>

            <ol role="list" class="mt-12 flex flex-col">
                @foreach ($site->process_steps as $step)
                    <li class="relative flex gap-6 pb-10 last:pb-0">
                        @if (!$loop->last)
                            <span class="absolute top-10 bottom-0 left-5 w-px bg-line" aria-hidden="true"></span>
                        @endif
                        @if ($step->highlight)
                            <span class="relative grid size-10 shrink-0 place-items-center rounded-full bg-primary font-display text-lg font-bold text-primary-foreground tabular-nums">{{ $loop->iteration }}</span>
                        @else
                            <span class="relative grid size-10 shrink-0 place-items-center rounded-full bg-surface font-display text-lg font-bold text-ink tabular-nums ring-1 ring-line">{{ $loop->iteration }}</span>
                        @endif
                        <div class="pt-1.5">
                            <h3 class="font-display text-xl font-bold tracking-wide text-ink uppercase">{{ $step->title }}</h3>
                            <p class="mt-2 max-w-[46ch] text-base/7 text-muted">{{ $step->body }}</p>
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>

        <div class="lg:col-span-6 lg:pt-4">
            <p class="text-sm font-medium text-muted">{{ $estimateLabel }}</p>
            <figure class="mt-4 overflow-hidden rounded-xl bg-canvas ring-1 ring-line lg:-rotate-1">
                <div class="flex flex-wrap items-start justify-between gap-4 border-b border-line p-6 sm:p-8">
                    <div>
                        <p class="font-display text-sm font-semibold tracking-[0.14em] text-muted uppercase">{{ $site->estimate->number }}</p>
                        <p class="mt-2 text-lg font-semibold text-ink">{{ $site->estimate->vehicle }}</p>
                    </div>
                    <p class="rounded-md bg-surface px-3 py-1.5 font-display text-lg font-bold tracking-[0.12em] text-ink uppercase tabular-nums ring-2 ring-ink/80">{{ $site->estimate->plate }}</p>
                </div>
                <table class="w-full text-left">
                    <caption class="sr-only">Estimate line items</caption>
                    <thead class="sr-only">
                        <tr><th scope="col">Item</th><th scope="col">Amount</th></tr>
                    </thead>
                    <tbody class="divide-y divide-line">
                        @foreach ($site->estimate_lines as $line)
                            <tr>
                                <td class="py-4 pl-6 sm:pl-8">
                                    <p class="text-base font-medium text-ink">{{ $line->item }}</p>
                                    <p class="text-sm text-muted">{{ $line->detail }}</p>
                                </td>
                                <td class="py-4 pr-6 text-right font-display text-xl font-semibold text-ink tabular-nums sm:pr-8">{{ $line->amount }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr class="border-t-2 border-ink">
                            <th scope="row" class="py-5 pl-6 font-display text-lg font-bold tracking-wide text-ink uppercase sm:pl-8">Total</th>
                            <td class="py-5 pr-6 text-right font-display text-3xl font-bold text-ink tabular-nums sm:pr-8">{{ $site->estimate->total }}</td>
                        </tr>
                    </tfoot>
                </table>
                <figcaption class="flex flex-wrap items-center justify-between gap-x-6 gap-y-3 bg-field px-6 py-5 text-field-ink sm:px-8">
                    <span class="flex items-center gap-2.5 font-display text-lg font-bold tracking-wide uppercase">
                        <span class="relative flex size-2.5" aria-hidden="true">
                            <span class="absolute inset-0 rounded-full bg-telltale/40 motion-safe:animate-ping"></span>
                            <span class="relative size-2.5 rounded-full bg-telltale"></span>
                        </span>
                        {{ $site->estimate->status }}
                    </span>
                    <span class="text-base text-field-muted sm:text-sm">{{ $site->estimate->note }}</span>
                </figcaption>
            </figure>
            <div class="mt-8 flex items-center gap-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-9 shrink-0 text-ink" aria-hidden="true"><path d="M12 3 4.5 6v5.5c0 4.5 3.2 8.2 7.5 9.5 4.3-1.3 7.5-5 7.5-9.5V6L12 3Z"/><path d="m8.8 12 2.2 2.2 4.2-4.4"/></svg>
                <p class="text-base/6 text-muted">{{ $warrantyLabel }} <span class="font-semibold text-ink">{{ $site->warranty }}</span>, parts and labor.</p>
            </div>
        </div>
    </div>
</section>
