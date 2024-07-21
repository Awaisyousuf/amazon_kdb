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
<div class="row">
			<div class="col-md-8" style="text-align: left;margin: auto;">
               <h1>Get Your Book Heard</h1>
               <h3 style="color:white;">Publish Your Audio Book on Amazon</h3>
<p>Create your audio book with our professional voice actors and authors. Let your voice be heard. Put your words on the pages of an audiobook, get it published on Amazon, and you will be able to reach millions of listeners.</p>
			</div>
			<div class="col-md-4">
<div class="form-box" style="text-align: center;">
<h2 style="color:white;font-size:40px;">Let's Get Started</h2>
	<div class="default-form">
		<form method="post" action="" id="contact-form">
			<div class="row clearfix">
				<div class="form-group col-lg-12 col-md-12 col-sm-12">
					<div class="field-inner">
						<input type="text" name="full_name" value="" placeholder="Your Name" required="">
					</div>
				</div>
				<div class="form-group col-lg-6 col-md-6 col-sm-12">
					<div class="field-inner">
						<input type="email" name="email" value="" placeholder="Email Address"
							required="">
					</div>
				</div>
				<div class="form-group col-lg-6 col-md-6 col-sm-12">
					<div class="field-inner">
						<input type="text" name="telephone" value="" placeholder="Phone Number" required="">
					</div>
				</div>
				<div class="form-group col-lg-12 col-md-12 col-sm-12">
					<div class="field-inner">
						<textarea name="comments" placeholder="I am looking for ...." required=""></textarea>
					</div>
				</div>
				<div class="form-group col-lg-12 col-md-12 col-sm-12">
					<button class="theme-btn btn-style-one">
						<i class="btn-curve"></i>
						<span class="btn-title">Send message</span>
					</button>
				</div>
			</div>
		</form>
	</div>
</div>            </div>
			</div>
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
                        <img width="770" height="424" src="{{asset('')}}images/Audio-Book-Service/audiobook_01.jpg" class="attachment-linoor_service_details_770X424 size-linoor_service_details_770X424 wp-post-image" alt="" loading="lazy" />                    </div>
                    <div class="text-content">
                        <h3>Turn your words into an audiobook and reach a wider audience. </h3>
                        <p>Amazon's audiobook platform holds untapped potential. With our expert audiobook narration, you tap into a world of new possibilities. Elevate your story to new heights, captivating listeners with an unforgettable audio experience that sets you on the path to bestseller status. </p>
                        <p>At KDP Amazon Publishers, we cater to authors and publishers, understanding the unique needs of each. Whether you're an author seeking to enchant your readers with audio magic or a publisher aiming to expand your reach, our services cater to your specific aspirations. </p>
<div class="featured">
<div class="row clearfix">
<div class="image-col col-md-6 col-sm-12">
<div class="image"><img src="{{asset('')}}images/Audio-Book-Service/audiobook_02.webp" style="height:270px;" alt=""></div>
</div>
<div class="text-col col-md-6 col-sm-12">
<div class="inner">
<h4>Enlist in the Premier Audiobook Publishing Service</h4>
<p>Embarking on an audiobook journey? Don't tread alone. Let our legion of experts take the reins of narration and production, freeing you to immerse yourself in what truly counts – your content.</p>
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
<p>With unrivaled access to eminent voice talent, cutting-edge equipment, and impeccable editing tools, your narratives will metamorphose into living, breathing masterpieces.</p>
<h3>Experience Audiobook Excellence on Amazon </h3>
<p>Before your audiobook graces the digital shelves of Amazon, our diligent editor works their magic, polishing your Book to perfection. Every word, sentence, and paragraph receives meticulous attention, ensuring your audiobook emerges as a seamless masterpiece. </p>
<p class="last">We are your trusted companion in transforming your manuscript into an enchanting audiobook equipped with a comprehensive range of services to deliver a flawless final product. We are the key to turning your manuscript into an enchanting audiobook on Amazon. Our specialized services, including editing, narration, and production, are crafted to deliver unparalleled excellence, resonating with fiction and nonfiction genres. </p>
                    </div>
                </div>
            </div>

            <!--Sidebar Side-->
             <x-services-sidesection/>

        </div>
    </div>
</div>


{{-- portfolio section --}}
<section class="gallery-section similar-gallery" style="position: relative;padding: 40px;background: #ffffff url(public/images/background/pattern-2.png) left  repeat;">
    <div class="auto-container">
        <div class="sec-title centered">
            <h2>Portfolio<span class="dot">.</span></h2>
        </div>
        <div class="row clearfix">

            <!-- Gallery Item -->
            <div class="gallery-item col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <figure class="image"><img src="{{asset('images/audiobookimgs/threemuskits.jpeg')}}" style="height: 300px" alt=""></figure>

                </div>
                <div class="col-md-12 d-flex justify-content-center">
                    <audio controls class="mt-1">
                        <source src="{{asset('audio/The Three Musketeers by Alexandre Dumas, Marty Ross - Performance - Audible.com.mp3')}}" type="audio/ogg">


                      </audio>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="gallery-item col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <figure class="image"><img src="{{ asset('images/audiobookimgs/A-Tale-of-Two-Cities.jpg')}}" style="height: 300px" alt=""></figure>

                </div>
                <div class="col-md-12 d-flex justify-content-center">
                    <audio controls class="mt-1">
                        <source src="{{asset('audio/ATaleofTwoCitiesbyCharlesDickens.mp3')}}" type="audio/ogg">


                      </audio>
                </div>
            </div>

             <!-- Gallery Item -->
             <div class="gallery-item col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <figure class="image"><img src="{{asset('images/audiobookimgs/s-l1200.webp')}}" style="height: 300px" alt=""></figure>




                </div>
                <div class="col-md-12 d-flex justify-content-center">
                    <audio controls class="mt-1 " >
                        <source src="{{asset('audio/Doctor Thorne by Anthony Trollope - Audiobook - Audible.com.mp3')}}" type="audio/ogg">


                      </audio>
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



{{-- contact --}}
<x-contact-sec/>

{{-- unique --}}

                                <!--Agency Section-->

{{-- contact us --}}
<x-contact-form/>
@endsection
