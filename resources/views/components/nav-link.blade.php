@props(['active'=> false])
<!--if active is set to true, give the conditional class of active, same goes voor setting the current page.
    Insert slot and attributes for dynamically adding html attributes and text
-->
<a class="{{ $active ? 'active' : '' }}" {{ $active ? 'aria-current="page"' :  '' }} {{ $attributes }} > {{ $slot }} </a>


