@props(['items' => []])
<section class="pb-20 md:pb-32">
    <div class="mx-auto max-w-7xl px-5 md:px-8">
        <ul role="list" class="grid gap-x-10 gap-y-14 border-t border-line pt-14 md:grid-cols-2">
            @foreach ($items as $project)
                <li data-reveal>
                    <x-roof-card :project="$project"/>
                </li>
            @endforeach
        </ul>
    </div>
</section>
