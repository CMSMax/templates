@props(['number' => '', 'title' => '', 'location' => '', 'year' => '', 'scope' => '', 'weeks' => ''])
{{-- The grade stamp: the inked tag logged onto every photo of finished work. --}}
<div class="stamp w-64 px-3.5 pt-2.5 pb-3 sm:w-72">
    <div class="flex items-baseline justify-between gap-3 text-xs font-semibold uppercase tracking-[0.14em]">
        <span>{{ $site->short_name }} · Job</span>
        <span class="tabular-nums">No. {{ $number }}</span>
    </div>
    <p class="mt-1.5 font-display text-2xl leading-none font-extrabold uppercase">{{ $title }}</p>
    <dl class="mt-2.5 grid grid-cols-[auto_1fr] gap-x-3 gap-y-0.5 border-t-2 border-ink pt-2 text-xs font-semibold uppercase tracking-[0.12em]">
        <dt class="sr-only">Where</dt>
        <dd class="col-span-2">{{ $location }} · {{ $year }}</dd>
        <dt class="sr-only">Scope</dt>
        <dd>{{ $scope }}</dd>
        <dt class="sr-only">Weeks on site</dt>
        <dd class="text-right whitespace-nowrap tabular-nums">{{ $weeks }} wks</dd>
    </dl>
</div>
