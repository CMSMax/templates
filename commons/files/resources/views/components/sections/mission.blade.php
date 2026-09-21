@props([
    'lead' => 'We started with a borrowed van and six neighbors who were tired of watching families choose between',
    'highlight' => 'dinner and the heating bill.',
    'rest' => 'Fifteen years on, the choice still shouldn’t exist — so we keep the shelves full and the door open.',
    'body' => 'Everything we do happens within a mile of the hall, and everyone who walks in is treated like a shopper, not a case number. The people deciding where the money goes live on these streets too.',
    'signoff' => 'Mara Okafor, founding volunteer',
    'image' => '/images/pantry.jpg',
    'imageAlt' => 'A neighbor taking a can from the pantry shelves, stocked with tins, rice and crates of apples',
])
<section aria-labelledby="mission-heading" class="border-t border-line">
    <div class="mx-auto max-w-7xl px-5 py-20 sm:px-6 lg:px-8 lg:py-32">
        <h2 id="mission-heading" class="sr-only">Why we’re here</h2>
        <p class="max-w-[30ch] font-display text-[clamp(1.875rem,4vw,3.25rem)] leading-[1.12] font-semibold tracking-[-0.02em] text-ink">{{ $lead }} <mark class="box-decoration-clone bg-primary px-1.5 text-ink">{{ $highlight }}</mark> {{ $rest }}</p>
        <div class="mt-14 grid items-end gap-x-8 gap-y-12 lg:mt-20 lg:grid-cols-12">
            @if ($image)
                <div class="max-w-xl lg:col-span-5">
                    <x-riso :image="$image" :alt="$imageAlt"/>
                </div>
            @endif
            <div class="lg:col-span-6 lg:col-start-7">
                <p class="text-lg/8 text-muted">{{ $body }}</p>
                <p class="mt-6 flex items-center gap-3 text-base font-bold text-ink"><span class="h-0.5 w-8 bg-primary" aria-hidden="true"></span>{{ $signoff }}</p>
            </div>
        </div>
    </div>
</section>
