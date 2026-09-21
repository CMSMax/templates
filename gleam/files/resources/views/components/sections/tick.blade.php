@props(['on' => false])
@if ($on)
    <span class="mx-auto grid size-6 place-items-center rounded-full bg-primary text-primary-foreground"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="size-3.5" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span class="sr-only">Included</span></span>
@else
    <span class="mx-auto block h-0.5 w-3 bg-ink/25"><span class="sr-only">Not included</span></span>
@endif
