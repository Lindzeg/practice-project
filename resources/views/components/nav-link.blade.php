@props(['active'=> false, 'type'=>'a'])

@if($type === 'a')
    <a @class([ 'active'=>$active ]) {{ $active ? 'aria-current="page"' :  '' }} {{ $attributes }} > {{ $slot }} </a>
@else
    <button @class([ 'active'=>$active ]) {{ $active ? 'aria-current="page"' :  '' }} {{ $attributes }} > {{ $slot }} </button>
@endif





