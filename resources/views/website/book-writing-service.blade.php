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
                                <h1 style="font-size:40px;">The only book writing and publishing agency <br><span style="font-size:24px;">with a decade-long track record of success</span></h1>
                                <p>With over 2,400 published books in our portfolio, <br>KDP Amazon Publishers is the best choice for your publishing project.</p>

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
                        <img width="770" height="424" src="{{asset('')}}images/book_write_publish_01.jpg" class="attachment-linoor_service_details_770X424 size-linoor_service_details_770X424 wp-post-image" alt="" loading="lazy" />                    </div>
                    <div class="text-content">
                        <h3>We can Write, Publish and Announce Your Book to the World!</h3>
                        <p>Our team of professionals love working with authors, publishers and self-publishers alike to bring their vision to life. We have had a decade of success with authors and publishers in the US who have trusted us with their most important projects. Our expertise is in producing high quality works that are designed to succeed in today's competitive publishing market.</p>
<div class="featured">
<div class="row clearfix">
<div class="image-col col-md-6 col-sm-12">
<div class="image"><img src="{{asset('')}}images/book_write_publish_02.jpg" alt=""></div>
</div>
<div class="text-col col-md-6 col-sm-12">
<div class="inner">
<h4>Book Writing & Publishing Services</h4>
<p>As professional team, we create content that has never been seen before – not just because it's technically brilliant but because it tells your story in a unique way.</p>
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
<p>We can help you bring your book from idea to finished product by helping you describe what you want it to be like, editing & proofreading your manuscript, formatting for print or eBook, design & layout, book cover design and more.</p>
<h3>It's Time to Share Your Incredible Story!</h3>
<h4>Expert Writers Produce Professional High-Quality Ebooks</h4>
<p>With the invention of ebooks and the digital age, consumers are able to access information on their terms. Nowadays, it's easier than ever to find professional high-quality ebooks. The only drawback is that it's difficult to find an expert writer who can create a book in a timely manner without sacrificing quality. This is where KDP Amazon Publishers comes in. KDP Amazon Publishers is a company that's dedicated to creating high quality ebooks, which are then sold on Amazon. Our agency is perfect for people who want their book to be professionally written and formatted by an expert author while they can take the time they need to edit the book. This ensures that their nascent business or idea will get published in a timely manner without compromising their quality. KDP Amazon Publishers is perfect for people who want to share their expertise with the world. With over a million titles available in Amazon, it's easy to find an audience that will appreciate and admire your work.</p>
                    </div>
                </div>
            </div>

            <!--Sidebar Side-->
             <x-services-sidesection/>

        </div>
    </div>
</div>
{{--  --}}

<!-- Gallery Section -->
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


{{--  --}}

<x-contact-sec/>



{{-- contact us --}}
<x-contact-form/>
@endsection


