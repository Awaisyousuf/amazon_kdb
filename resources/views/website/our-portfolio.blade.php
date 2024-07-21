@extends('website.layout.master')
@section('content')
{{-- first banner --}}
<x-firstbanner-sec/>
{{-- banner --}}
<!-- Gallery Section -->
<x-portfolio-sec/>
<!-- Gallery Section -->


        {{-- about unique --}}
        <x-aboutunique-sec/>
<!--About Section-->
        <x-agency-sec/>
        {{-- contact section --}}
        <x-contact-form/>

        {{-- request quote section --}}
        <x-requestquote-sec/>


@endsection
