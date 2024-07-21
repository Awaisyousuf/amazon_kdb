@extends('website.layout.master')
@section('content')

<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                                <h1 style="font-size:40px;">Bring your story to life with our   <br><span style="font-size:24px;">beautiful book illustrations</span></h1>
                                <p>We offer a wide range of book illustration services, from simple line drawings to complex full-color illustrations.</p>
                            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="service-details">
                    <div class="main-image image">
                        <img width="770" height="424" src="{{asset('')}}images/Book-Illustrations/book_ilustrator_01.jpg" class="attachment-linoor_service_details_770X424 size-linoor_service_details_770X424 wp-post-image" alt="" loading="lazy" />                    </div>
                    <div class="text-content">
                        <h3>Unleash Artistry with Our Elite Illustration Team</h3>
                        <p>KDP Amazon Publisher is a pioneer, offering unparalleled illustration services to discerning clients. Our prowess lies in assembling the crème de la crème of illustrators, a team that embodies excellence in every brushstroke. Illustration is not just a task; it's a symphony of creativity honed through years of dedication and experience. This art form demands recognition, and our commitment to our illustrators reflects in the exceptional standards they uphold.</p>
                        <p>Our legacy of illustration spans over a decade, a testament to our dedication and success. Our ranks reside illustrious artists who weave magic onto canvas, translating ideas into visual masterpieces. From children's books to magazines and captivating advertisements to imaginative projects, our illustrious illustrators lend their vision and craft to bring ideas to life. </p>
<div class="featured">
<div class="row clearfix">
<div class="image-col col-md-6 col-sm-12">
<div class="image"><img src="{{asset('')}}images/Book-Illustrations/book_ilustrator_02.jpg" alt=""></div>
</div>
<div class="text-col col-md-6 col-sm-12">
<div class="inner">
<h4>Affordable Book Illustration: Transparency and Excellence</h4>
<p>At KDP Amazon Publisher, simplicity and affordability converge to offer impeccable book illustration services. </p>

<!--<ul class="list-unstyled ml-0">-->
<!--<li>Research beyond the business plan</li>-->
<!--<li>Marketing options and rates</li>-->
<!--<li>The ability to turnaround consulting</li>-->
<!--<li>Customer engagement matters</li>-->
<!--</ul>-->
</div>
</div>
</div>
</div>
<p>We believe in clarity, so we offer a fixed price per illustration. With us, there are no hidden costs or unexpected twists – you'll clearly understand your investment upfront.</p>
<p>Our commitment to excellence goes beyond pricing. Each illustration job encompasses meticulous project management, ensuring a seamless experience from concept to completion. Your vision is our canvas; we work tirelessly to bring it to life with utmost precision. </p>
<h3>Ignite Imagination: Book Illustration with Instant Impact </h3>
<p>KDP Amazon Publisher is a dynamic force in publishing, crafting book illustrations and covers that reverberate immediately. Our artistic prowess transcends words, allowing authors to convey visual messages that leave an indelible mark. Through the hands of skilled artists, illustrations take form – from intricate drawings to evocative sketches – each stroke is a testament to creativity. </p>
<p>The realm of book covers is equally enchanting. Our designs dance between fiction and nonfiction, marrying text and art to create covers that allure and intrigue. Collaborating with authors and illustrators, KDP Amazon Publishers unveils the magic behind the creation of book covers, unraveling the intricacies of their craft. </p>
<p>Our prices are unmatched, yet our commitment to remarkable customer service truly sets us apart. Trust us to illuminate your narratives with illustrations that resonate, captivate, and instantly connect.  </p>
                    </div>
                </div>
            </div>

            <!--Sidebar Side-->
             <x-services-sidesection/>

        </div>
    </div>
</div>

{{--  --}}

 <!-- Similar Section -->
 <section class="gallery-section similar-gallery" style="position: relative;padding: 40px;background: #ffffff url(public/images/background/pattern-2.png) left  repeat;">
    <div class="auto-container">
        <div class="sec-title centered">
            <h2>Portfolio<span class="dot">.</span></h2>
        </div>
        <div class="row clearfix">
            <!-- Gallery Item -->
            <div class="gallery-item col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <figure class="image"><img src="{{asset('images/Book-Illustrations/book_illustration_01.webp')}}" style="height: 300px" alt=""></figure>
                    <a href="{{asset('images/Book-Illustrations/book_illustration_01.webp')}}" class="lightbox-image overlay-box"
                        data-fancybox="gallery"></a>
                              {{-- <div class="cap-box">
                        <div class="cap-inner">
                            <div class="cat"><span>Graphic</span></div>
                            <div class="title">
                                <h5><a href="#">Fimlor Experience</a></h5>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="gallery-item col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <figure class="image"><img src="{{asset('images/Book-Illustrations/book_illustration_02.png')}}" style="height: 300px" alt=""></figure>
                    <a href="{{asset('images/Book-Illustrations/book_illustration_02.png')}}" class="lightbox-image overlay-box"
                        data-fancybox="gallery"></a>
                               {{-- <div class="cap-box">
                        <div class="cap-inner">
                            <div class="cat"><span>Graphic</span></div>
                            <div class="title">
                                <h5><a href="#">Fimlor Experience</a></h5>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="gallery-item col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <figure class="image"><img src="{{asset('images/Book-Illustrations/book_illustration_03.png')}}" style="height: 300px" alt=""></figure>
                    <a href="{{asset('images/Book-Illustrations/book_illustration_03.png')}}" class="lightbox-image overlay-box"
                        data-fancybox="gallery"></a>
                              {{-- <div class="cap-box">
                        <div class="cap-inner">
                            <div class="cat"><span>Graphic</span></div>
                            <div class="title">
                                <h5><a href="#">Fimlor Experience</a></h5>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
             <!-- Gallery Item -->
             <div class="gallery-item col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <figure class="image"><img src="{{asset('images/Book-Illustrations/book_illustration_05.jpg')}}" style="height: 300px" alt=""></figure>
                    <a href="{{asset('images/Book-Illustrations/book_illustration_05.jpg')}}" class="lightbox-image overlay-box"
                        data-fancybox="gallery"></a>
                              {{-- <div class="cap-box">
                        <div class="cap-inner">
                            <div class="cat"><span>Graphic</span></div>
                            <div class="title">
                                <h5><a href="#">Fimlor Experience</a></h5>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
             <!-- Gallery Item -->
             <div class="gallery-item col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <figure class="image"><img src="{{asset('images/Book-Illustrations/book_illustration_04.png')}}" alt="" style="height: 300px"></figure>
                    <a href="{{asset('images/Book-Illustrations/book_illustration_04.png')}}" class="lightbox-image overlay-box"
                        data-fancybox="gallery"></a>
                              {{-- <div class="cap-box">
                        <div class="cap-inner">
                            <div class="cat"><span>Graphic</span></div>
                            <div class="title">
                                <h5><a href="#">Fimlor Experience</a></h5>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
             <!-- Gallery Item -->
             <div class="gallery-item col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <figure class="image"><img src="{{asset('images/Book-Illustrations/book_illustration_06.jpg')}}" style="height: 300px" alt=""></figure>
                    <a href="{{asset('images/Book-Illustrations/book_illustration_06.jpg')}}" class="lightbox-image overlay-box"
                        data-fancybox="gallery"></a>
                              {{-- <div class="cap-box">
                        <div class="cap-inner">
                            <div class="cat"><span>Graphic</span></div>
                            <div class="title">
                                <h5><a href="#">Fimlor Experience</a></h5>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>

        </div>
        <div class="more-box">
            <a class="theme-btn btn-style-one" href="{{route('our-portfolio')}}#portfolio">
                <i class="btn-curve"></i>
                <span class="btn-title">Load more work</span>
            </a>
        </div>
    </div>
</section>

{{--  --}}

<x-contact-sec/>



{{-- contact us --}}
<x-contact-form/>
@endsection
