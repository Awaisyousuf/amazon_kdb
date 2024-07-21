@extends('website.layout.master')
@section('content')

<x-firstbanner-sec/>

  <!--Why Us Section-->
  <section class="testimonials-five" id="testimonials">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>My testimonials <span class="dot">.</span></h2>
        </div><!-- /.sec-title -->
        <div class="testimonials-carousel-two owl-theme owl-carousel testimonials-five__carousel">
            <div class="item">
                <div class="testimonials-five-card">
                    <div class="video-one">
                        <div class="auto-container">
                            <div class="video-one__image">
                                <img src="{{asset('')}}images/update-26-02-2021/resources/video-2-1.jpg"
                                    alt="">
                                <div class="vid-link">
                                    <a href="https://www.youtube.com/watch?v=y2Eqx6ys1hQ" class="lightbox-image">
                                        <div class="icon"><span class="flaticon-play-button-1"></span><i class="ripple"></i></div>
                                    </a>
                                </div>
                            </div><!-- /.video-one__image -->
                            <div class="video-one__content">
                                <div class="row align-items-center">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="sec-title">
                                             <div class="sec-title">
                                            <h2 clas="text-warning">Gensen<span class="dot">.</span></h2>
                                        </div>


                                    </div>
                                    <div class="block-text">
                                        Tincidunt elit magnis nulla facilisis sagittis maecenas. Sapien nunced amet ultrices,
                                        dolores sit ipsum velit purus aliquet. </div><!-- /.block-text -->
                                </div><!-- /.col-md-12 -->
                                    <!-- /.col-md-12 col-lg-4 -->
                                </div><!-- /.row -->
                            </div><!-- /.video-one__content -->
                        </div><!-- /.auto-container -->
                    </div>
                </div><!-- /.testimonials-five-card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="testimonials-five-card">
                    <div class="video-one">
                        <div class="auto-container">
                            <div class="video-one__image">
                                <img src="{{asset('')}}images/update-26-02-2021/resources/video-2-1.jpg"
                                    alt="Linoor is trusted by millions of customers">
                                <div class="vid-link">
                                    <a href="https://www.youtube.com/watch?v=y2Eqx6ys1hQ" class="lightbox-image">
                                        <div class="icon"><span class="flaticon-play-button-1"></span><i class="ripple"></i></div>
                                    </a>
                                </div>
                            </div><!-- /.video-one__image -->
                            <div class="video-one__content">
                                <div class="row align-items-center">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="sec-title">
                                             <div class="sec-title">
                                            <h2 clas="text-warning">Gensen<span class="dot">.</span></h2>
                                        </div>


                                    </div>
                                    <div class="block-text">
                                        Tincidunt elit magnis nulla facilisis sagittis maecenas. Sapien nunced amet ultrices,
                                        dolores sit ipsum velit purus aliquet. </div><!-- /.block-text -->
                                </div><!-- /.col-md-12 -->
                                    <!-- /.col-md-12 col-lg-4 -->
                                </div>
                            </div><!-- /.video-one__content -->
                        </div><!-- /.auto-container -->
                    </div><!-- /.testimonials-five-card__designation -->
                </div><!-- /.testimonials-five-card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="testimonials-five-card">
                    <div class="video-one">
                        <div class="auto-container">
                            <div class="video-one__image">
                                <img src="{{asset('')}}images/update-26-02-2021/resources/video-2-1.jpg"
                                    alt="Linoor is trusted by millions of customers">
                                <div class="vid-link">
                                    <a href="https://www.youtube.com/watch?v=y2Eqx6ys1hQ" class="lightbox-image">
                                        <div class="icon"><span class="flaticon-play-button-1"></span><i class="ripple"></i></div>
                                    </a>
                                </div>
                            </div><!-- /.video-one__image -->
                            <div class="video-one__content">
                                <div class="row align-items-center">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="sec-title">
                                             <div class="sec-title">
                                            <h2 clas="text-warning">Gensen<span class="dot">.</span></h2>
                                        </div>


                                    </div>
                                    <div class="block-text">
                                        Tincidunt elit magnis nulla facilisis sagittis maecenas. Sapien nunced amet ultrices,
                                        dolores sit ipsum velit purus aliquet. </div><!-- /.block-text -->
                                </div><!-- /.col-md-12 -->
                                    <!-- /.col-md-12 col-lg-4 -->
                                </div><!-- /.row -->
                            </div><!-- /.video-one__content -->
                        </div><!-- /.auto-container -->
                    </div>
                </div><!-- /.testimonials-five-card -->
            </div><!-- /.item -->
        </div><!-- /.testimonials-carousel-two owl-theme owl-carousel -->
    </div><!-- /.auto-container -->
</section>
<!--End Banner Section -->
{{-- testimonial --}}

<x-testimonial-sec/>
{{-- testimonials --}}

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
