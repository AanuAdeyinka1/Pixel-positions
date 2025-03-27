@props(['employer','width'=>90])
<img class="rounded-xl" src=" https://picsum.photos/seed/{{rand(0,10000)}}/{{$width}} "  alt="placeholder" width{{$width}}>

{{-- OR THIS below --}}

{{-- <img src="{{asset($employer->logo)}}" alt="" class="rounded-xl"> --}}