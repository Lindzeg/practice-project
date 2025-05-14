@props(['active'=> false, 'type'=>'a'])

<!--
    if active is set to true, give the conditional class of active, same goes voor setting the current page.
    Insert slot and attributes for dynamically adding html attributes and text
-->

<!--
    you can also switch a tag to $ type and give the prop :type to component x-nav-link and it will work too
--->

@if($type === 'a')
    <a @class([ 'active'=>$active ]) {{ $active ? 'aria-current="page"' :  '' }} {{ $attributes }} > {{ $slot }} </a>
@else
    <button @class([ 'active'=>$active ]) {{ $active ? 'aria-current="page"' :  '' }} {{ $attributes }} > {{ $slot }} </button>
@endif





