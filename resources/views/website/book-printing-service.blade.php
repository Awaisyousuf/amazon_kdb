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
                                <h1 style="font-size:40px;">Book Printing Services <br><span style="font-size:24px;">with KDP Amazon Publishers</span></h1>
                                <p>KDP Amazon Publishers is a book printing service provider that allows authors to print their books on demand. We offer a variety of services including hardcover and paperback, full color, perfect binding, and many more.</p>
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
                        <img width="770" height="424" src="{{asset('')}}images/Book-Printing/book_printing_01.webp" class="attachment-linoor_service_details_770X424 size-linoor_service_details_770X424 wp-post-image" alt="" loading="lazy" />                    </div>
                    <div class="text-content">
                        <h3>We'll make your book a bestseller</h3>
                        <p>We're the book printing company that puts your book first. We offer a wide range of book printing services to meet your needs.
</p>
<div class="featured">
<div class="row clearfix">
<div class="image-col col-md-6 col-sm-12">
<div class="image"><img src="{{asset('')}}images/Book-Printing/book_printing_02.webp" alt=""></div>
</div>
<div class="text-col col-md-6 col-sm-12">
<div class="inner">
<h4>Book Printing Services: Our Expert Team at Your Service </h4>
<p>KDP Amazon Publishers stands as a trailblazing book printing service, honing the craft of producing high-quality books for over a decade.</p>
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
<p>Our secret to excellence lies in our exceptional team, unparalleled in the industry, propelling us to deliver services that rival the best in the business. From ebook production to print-on-demand and cutting-edge digital marketing to bespoke publishing packages, our offerings cater to every facet of your aspirations.</p>
<h3>Top-Quality Book Printing and Seamless Delivery</h3>
<p>Experience the pinnacle of book printing and delivery excellence with KDP Amazon Publishers. Our offering extends a realm of premium services at a reasonable price, redefining your publishing journey. We've been dedicated to crafting top-quality book printing and delivery experiences, setting new benchmarks in the industry. </p>
<p>Our specialization shines in producing high-quality paperbacks that cater to diverse readership levels, spanning from the enchanting world of children's tales to the polished narratives of professional authors. Every page is a canvas, meticulously crafted to resonate with hearts and minds, a testament to our commitment to excellence. </p>
<h4>Personalize Your Masterpiece: Binding, Paper & Page Count</h4>
<p>As you embark on the journey of book printing, KDP Amazon Publishers offers you the reins to personalize your masterpiece. Within your book printing order, you wield the power to choose binding styles, paper types, and page counts, each defining the essence of your creation. Binding styles vary in cost, and the number of pages you opt for can influence the overall price, allowing you to tailor your project to your aspirations.  </p>
<h4>Why Choose KDP Amazon Publishers for Your Book Printing?</h4>
<p>KDP Amazon Publishers is the vanguard of rapid book printing, a realm where speed harmonizes with precision. Our commitment to prompt fulfillment is unwavering, ensuring your book printing order is met with unparalleled efficiency. But our prowess extends beyond swiftness. At the heart of our acclaim lies the fusion of high-quality products, a customer-centric approach, and an extensive array of printing options and customizations. </p>
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
                    <figure class="image"><img src="{{asset('images/BookPublising/1984_thumb.jpg')}}" style="height: 300px" alt=""></figure>
                    <a href="{{asset('images/BookPublising/1984_thumb.jpg')}}" class="lightbox-image overlay-box"
                        data-fancybox="gallery"></a>
                       <div class="cap-box">
                        <div class="cap-inner">
                            <div class="cat"><span>1984</span></div>
                            <div class="title">
                                <h5><a href="#">George Orwell</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="gallery-item col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <figure class="image"><img src="{{asset('images/BookPublising/The Catcher in the Rye.jpg')}}" style="height: 300px" alt=""></figure>
                    <a href="{{asset('images/BookPublising/The Catcher in the Rye.jpg')}}" class="lightbox-image overlay-box"
                        data-fancybox="gallery"></a>
                        <div class="cap-box">
                        <div class="cap-inner">
                            <div class="cat"><span>The Catcher in the Rye</span></div>
                            <div class="title">
                                <h5><a href="#">J.D. Salinger</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="gallery-item col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <figure class="image"><img src="{{asset('images/BookPublising/The Great Gatsby.jpg')}}" style="height: 300px" alt=""></figure>
                    <a href="{{asset('images/BookPublising/The Great Gatsby.jpg')}}" class="lightbox-image overlay-box"
                        data-fancybox="gallery"></a>
                       <div class="cap-box">
                        <div class="cap-inner">
                            <div class="cat"><span>The Great Gatsby</span></div>
                            <div class="title">
                                <h5><a href="#">F. Scott Fitzgerald</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <!-- Gallery Item -->
             <div class="gallery-item col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <figure class="image"><img src="{{asset('images/BookPublising/The Da Vinci Code.jpg')}}" style="height: 300px" alt=""></figure>
                    <a href="{{asset('images/BookPublising/The Da Vinci Code.jpg')}}" class="lightbox-image overlay-box"
                        data-fancybox="gallery"></a>
                       <div class="cap-box">
                        <div class="cap-inner">
                            <div class="cat"><span>The Da Vinci Code</span></div>
                            <div class="title">
                                <h5><a href="#">Dan Brown</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <!-- Gallery Item -->
             <div class="gallery-item col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <figure class="image"><img src="{{asset('images/BookPublising/Pride and Prejudice.jpg')}}" alt="" style="height: 300px"></figure>
                    <a href="{{asset('images/BookPublising/Pride and Prejudice.jpg')}}" class="lightbox-image overlay-box"
                        data-fancybox="gallery"></a>
                       <div class="cap-box">
                        <div class="cap-inner">
                            <div class="cat"><span>Pride and Prejudice</span></div>
                            <div class="title">
                                <h5><a href="#">Jane Austen</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <!-- Gallery Item -->
             <div class="gallery-item col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <figure class="image"><img src="{{asset('images/BookPublising/Harry Potter and the Sorcerer Stone.jpg')}}" style="height: 300px" alt=""></figure>
                    <a href="{{asset('images/BookPublising/Harry Potter and the Sorcerer Stone.jpg')}}" class="lightbox-image overlay-box"
                        data-fancybox="gallery"></a>
                       <div class="cap-box">
                        <div class="cap-inner">
                            <div class="cat"><span>Harry Potter and the Sorcerer's Stone</span></div>
                            <div class="title">
                                <h5><a href="#">J.K. Rowling</a></h5>
                            </div>
                        </div>
                    </div>
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

<!-- Gallery Section -->


{{--  --}}

<x-contact-sec/>



{{-- contact us --}}
<x-contact-form/>
@endsection
