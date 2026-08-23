@props(['status' => 'Job scheduled', 'detail' => 'Today, 2:00 – 4:00pm', 'meta' => '482 Alder Street, Springfield'])
<div class="flex w-72 max-w-full items-start justify-between gap-3 rounded-xl bg-canvas p-4 shadow-xl shadow-ink/10 ring-1 ring-ink/5">
    <div class="min-w-0">
        <p class="flex items-center gap-2 text-sm font-semibold text-ink">
            <span class="size-2 shrink-0 rounded-full bg-ok" aria-hidden="true"></span>
            {{ $status }}
        </p>
        <p class="mt-1.5 text-sm text-ink tabular-nums">{{ $detail }}</p>
        <p class="mt-0.5 text-sm text-pretty text-muted">{{ $meta }}</p>
    </div>
    <span class="grid size-9 shrink-0 place-items-center rounded-lg border border-line text-muted" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-5 shrink-0"><path d="M8 2v3m8-3v3"/><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M3 9h18M9 15l2 2l4-4"/></svg>
    </span>
</div>
