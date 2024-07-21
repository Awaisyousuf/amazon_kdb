@extends('website.layout.master')
@section('content')




<x-firstbanner-sec/>

<!--End Banner Section -->
<!--Services Section-->
<x-services-sec/>

{{-- new  --}}

<!--About Section-->
<x-aboutus-sec/>

<!-- Features Section -->
<section class="features-section jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%">
    <!-- <div class="image-layer" style="background-image: url(images/background/image-3.jpg);"></div> -->
    <img src="{{asset('images/background/image-3.jpg')}}" class="jarallax-img" alt="">
    <div class="auto-container">
        <div class="sec-title centered">
            <h2 class="text-white">What we’re offering<span class="dot">.</span></h2>
        </div>
        <div class="services">
            <div class="row clearfix">
                <!--Service Block-->
                <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="flaticon-design-tools"></span></div>
                        <h5><a href="#">LATEST <br>TECHNOLOGY</a></h5>
                        {{-- <div class="text">Lorem ipsum is are many variations of pass of majority.</div> --}}
                        <div class="link-box"></div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="flaticon-idea"></span></div>
                        <h5><a href="#">AMAZING <br>SUPPORT</a></h5>
                        {{-- <div class="text">Lorem ipsum is are many variations of pass of majority.</div> --}}
                        <div class="link-box"></div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="flaticon-clock"></span></div>
                        <h5><a href="#"> Quick <br>Services</a></h5>
                        {{-- <div class="text">Lorem ipsum is are many variations of pass of majority.</div> --}}
                        <div class="link-box"></div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="bottom-curve"></div>
                        <div class="icon-box"><span class="flaticon-monitor"></span></div>
                        <h5><a href="#">Quality <br>Product</a></h5>
                        {{-- <div class="text">Lorem ipsum is are many variations of pass of majority.</div> --}}
                        <div class="link-box"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End Funfacts Section -->
     <!-- Features Section -->


<!-- Gallery Section -->
<x-portfolio-sec/>







<section class="testimonials-section" id="testimonials">
    <div class="auto-container">
        <div class="sec-title">
            <h2>Customer feedbacks<span class="dot">.</span></h2>
        </div>
        <div class="carousel-box">
            <div class="testimonials-carousel owl-theme owl-carousel">
                <div class="testi-block">
                    <div class="inner">
                        <div class="icon"><span>“</span></div>
                        <div class="info">
                            <div class="image"><a href="#"><img src="{{asset('')}}images/resource/author-1.jpg"
                                        alt=""></a></div>
                            <div class="name">Shirley Smith</div>
                            <div class="designation">Director</div>
                        </div>
                        <div class="text">There are many variations of passages of lorem ipsum available but the
                            majority have suffered alteration in some form, by injected humour, or randomised
                            words which don't look even slightly believable.</div>
                    </div>
                </div>
                <div class="testi-block">
                    <div class="inner">
                        <div class="icon"><span>“</span></div>
                        <div class="info">
                            <div class="image"><a href="#"><img src="{{asset('')}}images/resource/author-2.jpg"
                                        alt=""></a></div>
                            <div class="name">Mike hardson</div>
                            <div class="designation">Director</div>
                        </div>
                        <div class="text">There are many variations of passages of lorem ipsum available but the
                            majority have suffered alteration in some form, by injected humour, or randomised
                            words which don't look even slightly believable.</div>
                    </div>
                </div>
                <div class="testi-block">
                    <div class="inner">
                        <div class="icon"><span>“</span></div>
                        <div class="info">
                            <div class="image"><a href="#"><img src="{{asset('')}}images/resource/author-3.jpg"
                                        alt=""></a></div>
                            <div class="name">Sarah albert</div>
                            <div class="designation">Director</div>
                        </div>
                        <div class="text">There are many variations of passages of lorem ipsum available but the
                            majority have suffered alteration in some form, by injected humour, or randomised
                            words which don't look even slightly believable.</div>
                    </div>
                </div>
                <div class="testi-block">
                    <div class="inner">
                        <div class="icon"><span>“</span></div>
                        <div class="info">
                            <div class="image"><a href="#"><img src="{{asset('')}}images/resource/author-1.jpg"
                                        alt=""></a></div>
                            <div class="name">Shirley Smith</div>
                            <div class="designation">Director</div>
                        </div>
                        <div class="text">There are many variations of passages of lorem ipsum available but the
                            majority have suffered alteration in some form, by injected humour, or randomised
                            words which don't look even slightly believable.</div>
                    </div>
                </div>
                <div class="testi-block">
                    <div class="inner">
                        <div class="icon"><span>“</span></div>
                        <div class="info">
                            <div class="image"><a href="#"><img src="{{asset('')}}images/resource/author-2.jpg"
                                        alt=""></a></div>
                            <div class="name">Mike hardson</div>
                            <div class="designation">Director</div>
                        </div>
                        <div class="text">There are many variations of passages of lorem ipsum available but the
                            majority have suffered alteration in some form, by injected humour, or randomised
                            words which don't look even slightly believable.</div>
                    </div>
                </div>
                <div class="testi-block">
                    <div class="inner">
                        <div class="icon"><span>“</span></div>
                        <div class="info">
                            <div class="image"><a href="#"><img src="{{asset('')}}images/resource/author-3.jpg"
                                        alt=""></a></div>
                            <div class="name">Sarah albert</div>
                            <div class="designation">Director</div>
                        </div>
                        <div class="text">There are many variations of passages of lorem ipsum available but the
                            majority have suffered alteration in some form, by injected humour, or randomised
                            words which don't look even slightly believable.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- unique --}}
<x-aboutunique-sec/>
{{-- testimonilas --}}

 <!--Agency Section-->
<x-agency-sec/>
{{-- contact us --}}
<x-contact-form/>

                                <!-- Call To Section -->
<x-requestquote-sec/>
@endsection




