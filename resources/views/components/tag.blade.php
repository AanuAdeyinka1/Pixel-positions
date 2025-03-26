@props(['size'=>'base'])

@php
$classes="bg-white/10 hover:bg-white/25 rounded-xl transition-colors font-bold duration-300";
if($size === 'base'){
    $classes .= " px-5 py-1  text-sm";
}

if($size === 'small'){
    $classes .= " px-3 py-1  text-xs";
}

@endphp


<a  href="#" class="{{$classes}}"> {{$slot}} </a>
    
{{-- <a {{attributes(['class'=>'bg-white/10 py-1 hover:bg-white/25 px-2 rounded-xl text-xs transition-colors duration-300'])}}  href="#"> {{$slot}} </a>
--}}