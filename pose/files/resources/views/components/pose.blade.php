@props(['name' => 'mountain', 'size' => 'size-12'])
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" class="{{ $size }} shrink-0" aria-hidden="true">
@if ($name == 'mountain')
<circle cx="24" cy="8.5" r="3.75" fill="currentColor" stroke="none"/><path d="M24 15v13.5M24 28.5l-2.5 13.5M24 28.5l2.5 13.5M24 17l-4.5 10.5M24 17l4.5 10.5"/>
@elseif ($name == 'salute')
<circle cx="24" cy="11" r="3.75" fill="currentColor" stroke="none"/><path d="M24 17.5v11M24 28.5l-2 13.5M24 28.5l2 13.5M23 18.5L13 6M25 18.5L35 6"/>
@elseif ($name == 'lunge')
<circle cx="19.5" cy="10" r="3.75" fill="currentColor" stroke="none"/><path d="M21 16.5l1 13.5M22 30h10.5v11.5M22 30l-9 11.5H5M22.5 18.5L30 5"/>
@elseif ($name == 'fold')
<circle cx="24.5" cy="36" r="3.75" fill="currentColor" stroke="none"/><path d="M20 42V21M20 21l8.5 10.5M28.5 31.5V42"/>
@elseif ($name == 'halflift')
<circle cx="38.5" cy="23.5" r="3.75" fill="currentColor" stroke="none"/><path d="M21 42V24.5M21 24.5h12.5M32 25l-1 14.5"/>
@elseif ($name == 'plank')
<circle cx="38.5" cy="24.5" r="3.75" fill="currentColor" stroke="none"/><path d="M7 41l27-12.5M33.5 29v13"/>
@elseif ($name == 'updog')
<circle cx="35.5" cy="18.5" r="3.75" fill="currentColor" stroke="none"/><path d="M6 41.5l20-1.5M26 40l6-15.5M31 25.5l.5 16.5"/>
@elseif ($name == 'downdog')
<circle cx="31" cy="35" r="3.75" fill="currentColor" stroke="none"/><path d="M8 42l14-25.5M22 16.5L38 42"/>
@elseif ($name == 'child')
<circle cx="31.5" cy="37" r="3.75" fill="currentColor" stroke="none"/><path d="M7 42h13.5M10.5 37l15.5 3.5M29 42.5h13"/>
@elseif ($name == 'tree')
<circle cx="24" cy="11.5" r="3.75" fill="currentColor" stroke="none"/><path d="M24 17.5V29M24 29v13M24 29l-7 4.5 6.5 3.5M23 18L16.5 10 24 2.5 31.5 10 25 18"/>
@elseif ($name == 'warrior')
<circle cx="24" cy="9" r="3.75" fill="currentColor" stroke="none"/><path d="M24 15v12M24 27l9 6.5V42M24 27L12 42M8 18h32"/>
@elseif ($name == 'seated')
<circle cx="24" cy="11.5" r="3.75" fill="currentColor" stroke="none"/><path d="M24 17.5v13.5M8 40l16-7 16 7M22.5 20.5L16 28l-4 8M25.5 20.5L32 28l4 8"/>
@elseif ($name == 'rest')
<circle cx="39.5" cy="38.5" r="3.75" fill="currentColor" stroke="none"/><path d="M6 40.5h28M11 36.5l5 4"/>
@else
<circle cx="24" cy="8.5" r="3.75" fill="currentColor" stroke="none"/><path d="M24 15v13.5M24 28.5l-2.5 13.5M24 28.5l2.5 13.5M24 17l-4.5 10.5M24 17l4.5 10.5"/>
@endif
</svg>
