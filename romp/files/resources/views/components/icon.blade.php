@props(['name' => 'dog', 'class' => 'size-6'])
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="{{ $class }}" aria-hidden="true">
@if ($name == 'scissors')
    <path d="M3 7a3 3 0 1 0 6 0a3 3 0 1 0-6 0m0 10a3 3 0 1 0 6 0a3 3 0 1 0-6 0m5.6-8.4L19 19M8.6 15.4L19 5"/>
@elseif ($name == 'ball')
    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0-18 0"/><path d="M6 5.3a9 9 0 0 1 0 13.4M18 5.3a9 9 0 0 0 0 13.4"/>
@elseif ($name == 'moon')
    <path d="M12 3h.393a7.5 7.5 0 0 0 7.92 12.446A9 9 0 1 1 12 2.992z"/>
@elseif ($name == 'walk')
    <path d="M12 4a1 1 0 1 0 2 0a1 1 0 1 0-2 0M7 21l3-4m6 4l-2-4l-3-3l1-6"/><path d="m6 12l2-3l4-1l3 3l3 1"/>
@elseif ($name == 'bath')
    <path d="M4 12h16a1 1 0 0 1 1 1v3a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4v-3a1 1 0 0 1 1-1m2 0V5a2 2 0 0 1 2-2h3v2.25M4 21l1-1.5M20 21l-1-1.5"/>
@elseif ($name == 'arrow')
    <path d="M5 12h14m-6 6l6-6m-6-6l6 6"/>
@elseif ($name == 'phone')
    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2"/>
@elseif ($name == 'pin')
    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0-6 0"/><path d="M17.657 16.657L13.414 20.9a2 2 0 0 1-2.827 0l-4.244-4.243a8 8 0 1 1 11.314 0"/>
@elseif ($name == 'clock')
    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0-18 0"/><path d="M12 7v5l3 3"/>
@elseif ($name == 'check')
    <path d="m5 12l5 5L20 7"/>
@elseif ($name == 'external')
    <path d="M17 7L7 17M8 7h9v9"/>
@else
    <path d="M11 5h2m6 7q-1 8-5 8h-4q-4 0-5-8"/><path d="M11 16q0 1 1 1c1 0 1-.333 1-1zm1 2v2m-2-9v.01m4-.01v.01M5 4l6 .97l-6.238 6.688a1.02 1.02 0 0 1-1.41.111a.95.95 0 0 1-.327-.954zm14 0l-6 .97l6.238 6.688c.358.408.989.458 1.41.111a.95.95 0 0 0 .327-.954z"/>
@endif
</svg>
