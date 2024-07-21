@extends('website.layout.master')
@section('content')
<!--About Section-->
<x-services-sec/>

<x-aboutus-sec/>

<!-- Gallery Section -->
<x-portfolio-sec/>

{{-- unique --}}
<x-aboutunique-sec/>
                                <!--Agency Section-->
<x-agency-sec/>
{{-- contact us --}}
<x-contact-form/>

                                <!-- Call To Section -->
<x-requestquote-sec/>
@endsection
