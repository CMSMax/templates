@props([
    'heading' => 'Tell us what’s happening. We’ll tell you where you stand.',
    'body' => 'The first conversation is free, confidential, and carries no obligation. Most people leave it with a clearer picture than they arrived with.',
])
<section class="px-3 pb-3 sm:px-6 sm:pb-6 lg:px-8 lg:pb-8">
    <div class="relative mx-auto max-w-[88rem] overflow-hidden rounded-[min(4vw,2rem)] bg-primary text-primary-foreground">
        <x-sections.arcs/>
        <div class="relative mx-auto grid max-w-7xl gap-y-14 px-6 py-20 sm:px-10 lg:grid-cols-12 lg:gap-x-16 lg:px-8 lg:py-28">
            <div class="lg:col-span-7">
                <h2 class="max-w-[18ch] font-display text-4xl font-light tracking-tight text-balance sm:text-5xl lg:text-6xl">{{ $heading }}</h2>
                <p class="mt-7 max-w-[46ch] text-lg/8 text-pretty text-primary-foreground/80">{{ $body }}</p>
                <div class="mt-10 flex flex-wrap items-center gap-x-8 gap-y-4">
                    <a href="/contact" class="rounded-full bg-canvas px-6 py-3.5 font-medium text-ink transition-colors duration-150 hover:bg-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-canvas">{{ $site->cta_label }}</a>
                    <a href="{{ $site->phone_href }}" class="py-2 font-medium underline decoration-primary-foreground/30 underline-offset-[6px] transition-colors duration-150 hover:decoration-primary-foreground focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-canvas">Or call {{ $site->phone }}</a>
                </div>
            </div>
            <dl class="divide-y divide-primary-foreground/15 border-y border-primary-foreground/15 lg:col-span-4 lg:col-start-9 lg:self-end">
                <div class="py-5">
                    <dt class="text-sm text-primary-foreground/70">Email</dt>
                    <dd class="mt-1"><a href="mailto:{{ $site->email }}" class="break-all hover:underline hover:underline-offset-4 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-canvas">{{ $site->email }}</a></dd>
                </div>
                <div class="py-5">
                    <dt class="text-sm text-primary-foreground/70">Office</dt>
                    <dd class="mt-1">{{ $site->address }}, {{ $site->city }}</dd>
                </div>
                <div class="py-5">
                    <dt class="text-sm text-primary-foreground/70">Response</dt>
                    <dd class="mt-1 text-pretty">{{ $site->response_note }}</dd>
                </div>
            </dl>
        </div>
    </div>
</section>
