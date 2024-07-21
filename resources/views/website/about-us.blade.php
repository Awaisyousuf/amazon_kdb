@extends('website.layout.master')
@section('content')
        <!-- Banner Section -->
        <x-firstbanner-sec/>
        <!--Services Section-->
      <x-services-sec/>

            {{-- about us section --}}
            <x-aboutus-sec/>

        {{-- about unique --}}
        <x-aboutunique-sec/>
<!--About Section-->
        <x-agency-sec/>
        {{-- contact section --}}
        <x-contact-form/>

        {{-- request quote section --}}
        <x-requestquote-sec/>



@endsection
