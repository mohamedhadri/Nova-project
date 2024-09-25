@props(['active' => false])

<a class="{{$active ? ' text-primary-light' : 'nav-link'}}" {{$attributes}}>{{$slot}}</a>