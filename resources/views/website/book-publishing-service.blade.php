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
               <h1>Partner With The Team </h1>
               <h3 style="color:white;">We're the publishing partner you can trust.</h3>
<p>We take care of the details, so you can focus on writing and ensure your book looks and feels professional. </p>
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
                        <img width="770" height="424" src="{{asset('')}}images/Book-Publishing/book_publish_01.jpg" class="attachment-linoor_service_details_770X424 size-linoor_service_details_770X424 wp-post-image" alt="" loading="lazy" />                    </div>
                    <div class="text-content">
                        <h3>Streamlined Excellence: The Ultimate Book Publishing Services </h3>
                        <p>At KDP Amazon Publishers, we unveil the pinnacle of book publishing processes meticulously tailored for authors. Our offering encompasses a powerhouse team of adept editors and meticulous proofreaders collaborating with you to refine your manuscript to perfection. Our in-house publishing experts take the reins, orchestrating the seamless publication of your Book.</p>
                        <p>Boasting a decade of prowess, our professionals, masters in their domains, guide you through the entire journey, ensuring your literary creation evolves from inception to an extraordinary finish.</p>
<div class="featured">
<div class="row clearfix">
<div class="image-col col-md-6 col-sm-12">
<div class="image"><img src="{{asset('')}}images/Book-Publishing/book_publish_02.jpg" alt=""></div>
</div>
<div class="text-col col-md-6 col-sm-12">
<div class="inner">
<h4>Connecting Authors with a Global Stage: Your Stories, Our Platform </h4>
<p>KDP Amazon Publishers is your gateway to a worldwide audience dedicated to catapulting your stories into the literary spotlight. </p>

</div>
</div>
</div>
</div>
<p>Our comprehensive publishing service transforms your creations into diverse formats, including ebooks, hard copies, and paperbacks. But we offer more than just publishing – we're your partners in success, offering a spectrum of services spanning editing, formatting, cover design, and marketing.</p>
<p>Navigating the complex landscape of publishing becomes effortless with KDP Amazon Publishers. Our seasoned team, well-versed in publishing and customer service, ensures your journey is smooth and fruitful. We simplify the process of multi-platform publishing, extending beyond Amazon and opening doors to various avenues for your work to shine. From editing that refines to formatting that enchants, from captivating cover designs to strategic book marketing, we craft a comprehensive package tailored to your aspirations. </p>
<h4>Print-On-Demand: Empower Your Publishing Journey</h4>
<p>As your literary dreams take flight, our service empowers you to publish and sell your books worldwide, eliminating the intricacies and uncertainties of inventory and fulfillment.

    Nestled in the heart of the US, KDP Amazon Publishers emerges as an independent publishing consultancy dedicated to sculpting success stories for authors and publishers alike. Our comprehensive services encompass editing, design, marketing, and distribution, serving as the cornerstone of your publishing ventures. </p>
<p class="last">The heartbeat of our triumph lies in self-publishing, where authors dare to dream beyond boundaries. With KDP Amazon Publisher by your side, hundreds of authors have shattered industry norms, igniting a new era of literary prominence. </p>
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
<section class="team-section no-padd-top " style="position: relative;padding: 40px;background: #ffffff url(public/images/background/pattern-2.png) left  repeat;">
    <div class="auto-container">
        <div class="sec-title centered">
            <h2>BOOK WRITING & PUBLISHING<span class="dot">.</span></h2>
        </div>
    </div>
    <div class="carousel-box">
        <div class="team-carousel owl-theme owl-carousel">
            <!--Team-->
            <div class="team-block">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="#"><img src="{{asset('images/BookPublising/1984_thumb.jpg')}}" style="height: 400px" alt=""></a>

                    </div>
                    <div class="lower-box">
                        <h5><a href="#">1984</a></h5>
                        <div class="designation">George Orwell</div>
                    </div>
                </div>
            </div>

            <!--Team-->
            <div class="team-block">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="#"><img src="{{asset('images/BookPublising/Harry Potter and the Sorcerer Stone.jpg')}}" style="height: 400px" alt=""></a>

                    </div>
                    <div class="lower-box">
                        <h5><a href="#">Harry Potter and the Sorcerer's Stone</a></h5>
                        <div class="designation">J.K. Rowling</div>
                    </div>
                </div>
            </div>

            <!--Team-->
            <div class="team-block">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="#"><img src="{{asset('images/BookPublising/Pride and Prejudice.jpg')}}" style="height: 400px" alt=""></a>

                    </div>

                    <div class="lower-box">
                        <h5><a href="#">Pride and Prejudice</a></h5>
                        <div class="designation">Jane Austen</div>
                    </div>
                </div>
            </div>


                 <!--Team-->
                 <div class="team-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="#"><img src="{{asset('images/BookPublising/The Catcher in the Rye.jpg')}}" style="height: 400px" alt=""></a>

                        </div>
                        <div class="lower-box">
                            <h5><a href="#">The Catcher in the Rye</a></h5>
                            <div class="designation">J.D. Salinger</div>
                        </div>
                    </div>
                </div>

                <!--Team-->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="#"><img src="{{asset('images/BookPublising/The Da Vinci Code.jpg')}}" style="height: 400px" alt=""></a>

                        </div>
                        <div class="lower-box">
                            <h5><a href="#">The Da Vinci Code</a></h5>
                            <div class="designation">Dan Brown</div>
                        </div>
                    </div>
                </div>

                <!--Team-->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="#"><img src="{{asset('images/BookPublising/The Great Gatsby.jpg')}}" style="height: 400px" alt=""></a>

                        </div>

                        <div class="lower-box">
                            <h5><a href="#">The Great Gatsby</a></h5>
                            <div class="designation">F. Scott Fitzgerald</div>
                        </div>
                    </div>
                </div>

                     <!--Team-->
            <div class="team-block">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="#"><img src="{{asset('images/BookPublising/The Hunger Games.jpg')}}" style="height: 400px" alt=""></a>

                    </div>
                    <div class="lower-box">
                        <h5><a href="#">The Hunger Games</a></h5>
                        <div class="designation">Suzanne Collins</div>
                    </div>
                </div>
            </div>

            <!--Team-->
            <div class="team-block">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="#"><img src="{{asset('images/BookPublising/The Lord of the Rings.jpg')}}" style="height: 400px" alt=""></a>

                    </div>
                    <div class="lower-box">
                        <h5><a href="#">The Lord of the Rings</a></h5>
                        <div class="designation">J.R.R. Tolkien</div>
                    </div>
                </div>
            </div>

            <!--Team-->
            <div class="team-block">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="#"><img src="{{asset('images/BookPublising/To Kill a Mockingbird.jpg')}}" style="height: 400px" alt=""></a>

                    </div>

                    <div class="lower-box">
                        <h5><a href="#">To Kill a Mockingbird</a></h5>
                        <div class="designation">Harper Lee</div>
                    </div>
                </div>
            </div>

















        </div>
    </div>
</section>

{{--  --}}

<x-contact-sec/>



{{-- contact us --}}
<x-contact-form/>
@endsection
