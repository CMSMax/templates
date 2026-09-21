@props([
    'label' => 'The week',
    'heading' => 'Every class, on one board.',
    'body' => 'Classes start on the minute and cap at twelve. Book in the member app up to seven days ahead — drop-ins, call the desk.',
    'linkLabel' => 'Full schedule & class notes',
    'link' => '/schedule',
    'showLink' => '1',
    'headingLevel' => 'h2',
])
<section id="week" class="border-b border-line bg-surface py-20 lg:py-32">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="grid gap-8 lg:grid-cols-12 lg:items-end">
            <div class="lg:col-span-7">
                <p class="font-display text-[0.9375rem] font-bold tracking-[0.14em] text-muted uppercase">{{ $label }}</p>
                @if ($headingLevel == 'h1')
                    <h1 class="mt-5 max-w-[14ch] font-display text-[clamp(3.25rem,8vw,7rem)] leading-[0.86] font-black text-ink uppercase">{{ $heading }}</h1>
                @else
                    <h2 class="mt-5 max-w-[14ch] font-display text-[clamp(2.75rem,6vw,5rem)] leading-[0.9] font-black text-ink uppercase">{{ $heading }}</h2>
                @endif
                <p class="mt-6 max-w-[52ch] text-lg/8 text-muted">{{ $body }}</p>
            </div>
            <div class="lg:col-span-5 lg:justify-self-end">
                <ul role="list" class="flex flex-wrap gap-x-5 gap-y-3" aria-label="Program key">
                    @foreach ($programs as $program)
                        <li data-plate="{{ $program->plate }}" class="flex items-center gap-2 font-display text-lg font-extrabold tracking-wide text-ink uppercase">
                            <span class="plate size-5" aria-hidden="true"></span>
                            {{ $program->name }}
                        </li>
                    @endforeach
                </ul>
                @if ($showLink == '1')
                    <a href="{{ $link }}" class="mt-6 inline-flex items-center gap-2 rounded-sm py-2 text-base font-semibold text-ink underline decoration-ink/30 decoration-2 underline-offset-6 transition-colors duration-150 hover:decoration-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">{{ $linkLabel }}</a>
                @endif
            </div>
        </div>

        {{-- The board: a real table on wide screens. --}}
        <div class="mt-14 max-lg:hidden">
            <table class="w-full table-fixed border-collapse text-left">
                <caption class="sr-only">Weekly class timetable</caption>
                <thead>
                    <tr>
                        <th scope="col" class="w-24 pb-4 align-bottom"><span class="sr-only">Start time</span></th>
                        @foreach ($site->days as $day)
                            <th scope="col" data-day="{{ $day }}" class="border-b-2 border-ink px-2 pt-3 pb-3 align-bottom font-display text-2xl leading-none font-black tracking-wide whitespace-nowrap text-ink uppercase">
                                <span class="flex items-center justify-between gap-2">
                                    {{ $day }}
                                    <span class="today-mark hidden items-center rounded-xs bg-primary px-1.5 py-1 text-[0.6875rem] leading-none font-bold tracking-[0.12em] text-primary-foreground">Today</span>
                                </span>
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($site->time_slots as $slot)
                        <tr class="border-b border-line">
                            <th scope="row" class="py-3 pr-4 align-top font-display text-xl leading-tight font-extrabold tracking-wide whitespace-nowrap text-muted uppercase tabular-nums">{{ $slot }}</th>
                            @foreach ($site->days as $day)
                                <td data-day="{{ $day }}" class="h-20 p-1.5 align-top">
                                    @foreach ($sessions as $session)
                                        @if ($session->day == $day && $session->time == $slot)
                                            @foreach ($programs as $program)
                                                @if ($program->name == $session->program)
                                                    <div data-plate="{{ $program->plate }}" class="slot h-full rounded-xs bg-canvas py-2 pr-2 pl-3">
                                                        <p class="font-display text-lg leading-tight font-extrabold tracking-wide text-ink uppercase">{{ $session->program }}</p>
                                                        <p class="text-[0.8125rem] leading-snug text-muted">{{ $session->coach }}</p>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- The same week as a day-by-day list on phones and tablets. --}}
        <div class="mt-12 grid items-start gap-x-8 sm:grid-cols-2 lg:hidden">
            @foreach ($site->days as $day)
                <details data-day="{{ $day }}" class="group border-b border-line" @if ($loop->first) open @endif>
                    <summary class="flex min-h-14 cursor-pointer list-none items-center gap-3 py-3 font-display text-3xl leading-none font-black tracking-wide text-ink uppercase hover:text-muted focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary [&::-webkit-details-marker]:hidden">
                        {{ $day }}
                        <span class="today-mark hidden items-center rounded-xs bg-primary px-1.5 py-1 text-xs leading-none font-bold tracking-[0.12em] text-primary-foreground">Today</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="square" class="ml-auto size-5 shrink-0 text-muted transition-transform duration-200 group-open:rotate-45" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
                    </summary>
                    <ul role="list" class="divide-y divide-line border-t-2 border-ink pb-4">
                        @foreach ($site->time_slots as $slot)
                            @foreach ($sessions as $session)
                                @if ($session->day == $day && $session->time == $slot)
                                    @foreach ($programs as $program)
                                        @if ($program->name == $session->program)
                                            <li data-plate="{{ $program->plate }}" class="flex items-center gap-4 py-3">
                                                <span class="w-20 shrink-0 font-display text-lg font-extrabold tracking-wide text-muted uppercase tabular-nums">{{ $session->time }}</span>
                                                <span class="plate size-4" aria-hidden="true"></span>
                                                <span class="min-w-0 flex-1 font-display text-xl leading-tight font-extrabold tracking-wide text-ink uppercase">{{ $session->program }}</span>
                                                <span class="text-sm text-muted">{{ $session->coach }}</span>
                                            </li>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endforeach
                    </ul>
                </details>
            @endforeach
        </div>
    </div>
</section>
