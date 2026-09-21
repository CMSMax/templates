@props([
    'heading' => 'Pick the roof for the house.',
    'body' => 'Four materials we install every week. We will tell you honestly which one your roof and budget call for.',
    'items' => [],
])
<section class="py-20 md:py-32">
    <div class="mx-auto grid max-w-7xl gap-10 px-5 md:px-8 lg:grid-cols-12">
        <div class="lg:col-span-4">
            <h2 class="max-w-[14ch] font-display text-section font-semibold text-balance">{{ $heading }}</h2>
            <p class="mt-5 max-w-[36ch] text-lg text-pretty text-muted">{{ $body }}</p>
        </div>
        <div class="lg:col-span-8">
            <table class="w-full text-left text-base max-md:hidden">
                <thead>
                    <tr class="border-b border-ink">
                        <th scope="col" class="py-3 pr-4 text-sm font-semibold">Material</th>
                        <th scope="col" class="px-4 py-3 text-sm font-semibold">Expected life</th>
                        <th scope="col" class="px-4 py-3 text-sm font-semibold">Hail rating</th>
                        <th scope="col" class="py-3 pl-4 text-sm font-semibold">Best for</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $material)
                        <tr class="border-b border-line">
                            <th scope="row" class="py-5 pr-4 font-display text-lg font-semibold tracking-tight">{{ $material->name }}</th>
                            <td class="px-4 py-5 tabular-nums">{{ $material->life }}</td>
                            <td class="px-4 py-5">{{ $material->hail }}</td>
                            <td class="py-5 pl-4 text-muted">{{ $material->best }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <ul role="list" class="border-t border-ink md:hidden">
                @foreach ($items as $material)
                    <li class="border-b border-line py-5">
                        <p class="font-display text-lg font-semibold tracking-tight">{{ $material->name }}</p>
                        <p class="mt-1 text-base text-muted">{{ $material->life }} · {{ $material->hail }} · {{ $material->best }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
