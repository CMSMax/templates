@props(['lines' => []])
<figure class="rounded-2xl bg-surface p-6 text-ink shadow-[0_24px_48px_-24px_rgb(20_28_45/0.45)] ring-1 ring-ink/8 sm:p-7">
    <figcaption class="flex items-start justify-between gap-6 border-b border-ink/10 pb-4">
        <div>
            <p class="font-display text-lg font-medium tracking-tight">{{ $site->statement->title }}</p>
            <p class="mt-0.5 text-sm text-muted">{{ $site->statement->property }}</p>
        </div>
        <p class="shrink-0 whitespace-nowrap rounded-full border border-ink/12 px-2.5 py-1 text-xs font-medium text-muted tabular-nums">{{ $site->statement->period }}</p>
    </figcaption>
    <dl class="flex flex-col gap-3 py-5 text-[0.9375rem]">
        @foreach ($lines as $line)
            <div class="flex items-baseline gap-3">
                <dt class="text-muted">{{ $line->label }}</dt>
                <span class="leader" aria-hidden="true"></span>
                <dd class="font-medium whitespace-nowrap tabular-nums">{{ $line->amount }}</dd>
            </div>
        @endforeach
    </dl>
    <div class="flex items-center justify-between gap-4 rounded-xl bg-primary px-4 py-3.5 text-primary-foreground">
        <p class="text-sm font-medium">{{ $site->statement->net_label }}</p>
        <p class="font-display text-2xl font-medium tracking-tight tabular-nums">{{ $site->statement->net }}</p>
    </div>
    <p class="mt-3 flex items-center gap-2 text-sm text-muted">
        <svg viewBox="0 0 16 16" fill="currentColor" class="size-4 shrink-0" aria-hidden="true"><path fill-rule="evenodd" d="M12.416 3.376a.75.75 0 0 1 .208 1.04l-5 7.5a.75.75 0 0 1-1.154.114l-3-3a.75.75 0 0 1 1.06-1.06l2.353 2.353 4.493-6.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd"/></svg>
        {{ $site->statement->deposit_note }}
    </p>
</figure>
