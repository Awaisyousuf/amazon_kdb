   <!-- Banner Section -->
   <section class="banner-section banner-one">



    <div class="banner-carousel owl-theme owl-carousel">
        <!-- Slide Item -->
        <div class="slide-item">
            <div class="image-layer" style="background-image: url({{asset('')}}images/bg-img-01.jpg);"></div>
            <!--<div class="left-top-line"></div>-->
            <div class="right-bottom-curve"></div>
            <div class="right-top-curve"></div>
            <div class="auto-container">
                <div class="content-box">
                    <div class="content">
                        <div class="inner">
                            <div class="col-md-7 col-sm-12 float-left" style="float:left;">
                                <div class="sub-title">Welcome To KDP Amazon Publishers</div>
                                <h1 class="header-heading">The World is Waiting to Read <br>Your Manuscript</h1>
                                <span>We're passionate about publishing books, and we have the expertise to help you get your book into the hands of readers. Our every step of the way ensures that your book is published to the highest standards.</span>
                                <div class="link-box">
                                    <a class="theme-btn btn-sm btn-style-one" href="{{route('about-us')}}#about-us">
                                        <i class="btn-curve"></i>
                                        <span class="btn-title">Discover More</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-4 col-sm-12" style="float:right; margin-top:20px;">
                                <div class="form-box" style="text-align: center;">
                                    <h2 style="color:white;font-size:40px;">Let's Get Started</h2>
                                    <div class="default-form">
                                        <form method="post" action="{{route('contact-mail')}}" id="contact-form">
                                            <div class="row clearfix">
                                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                    <div class="field-inner">
                                                        <input type="text" name="name" value="" placeholder="Your Name" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                    <div class="field-inner">
                                                        <input type="email" name="email" value="" placeholder="Email Address" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                    <div class="field-inner">
                                                        <input type="text" name="phone" value="" placeholder="Phone Number" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                    <div class="field-inner">
                                                        <textarea name="message" placeholder="I am looking for ...." required=""></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                    <button type="submit" class="theme-btn btn-sn btn-style-one">
                    <i class="btn-curve"></i>
                    <span class="btn-title">Send message</span>
                </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide Item -->
        <div class="slide-item">
            <div class="image-layer" style="background-image: url({{asset('')}}images//bg-img-02.jpg);"></div>
            <!--<div class="left-top-line"></div>-->
            <div class="right-bottom-curve"></div>
            <div class="right-top-curve"></div>
             <div class="auto-container">
                <div class="content-box">
                    <div class="content">
                        <div class="inner">
                            <div class="col-md-7 col-sm-12 float-left" style="float:left;">
                                <div class="sub-title">Welcome To KDP Amazon Publishers</div>
                                <h1 class="header-heading">The World is Waiting to Read <br>Your Manuscript</h1>
                                <span>We're passionate about publishing books, and we have the expertise to help you get your book into the hands of readers. Our every step of the way ensures that your book is published to the highest standards.</span>
                                <div class="link-box">
                                    <a class="theme-btn btn-sm btn-style-one" href="{{route('about-us')}}#about-us">
                                        <i class="btn-curve"></i>
                                        <span class="btn-title">Discover More</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-4 col-sm-12" style="float:right; margin-top:20px;">
                                <div class="form-box" style="text-align: center;">
                                    <h2 style="color:white;font-size:40px;">Let's Get Started</h2>
                                    <div class="default-form">
                                        <form method="post" action="{{route('contact-mail')}}" id="contact-form">
                                            @csrf
                                            <div class="row clearfix">
                                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                    <div class="field-inner">
                                                        <input type="text" name="full_name" value="" placeholder="Your Name" required="Your Name required">
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                    <div class="field-inner">
                                                        <input type="email" name="email" value="" placeholder="Email Address" required="Email Address required">
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                    <div class="field-inner">
                                                        <input type="text" name="phone" value="" placeholder="Phone Number" required="Phone number required">
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                    <div class="field-inner">
                                                        <textarea name="message" placeholder="I am looking for ...." required="Type Message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                    <button type="submit" class="theme-btn btn-sn btn-style-one">
                    <i class="btn-curve"></i>
                    <span class="btn-title">Send message</span>
                </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--End Banner Section -->
