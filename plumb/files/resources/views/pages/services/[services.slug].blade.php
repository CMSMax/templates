<x-layouts.main :title="$services->title" :description="$services->description" :image="$services->image">
    <x-sections.service-detail :service="$services" :others="$entries"/>
    <x-sections.call/>
</x-layouts.main>
