<section class="get-quote-three" id="contact-us">
    <div class="auto-container">
        <div class="sec-title centered">
            <h2>Let’s Communicate More for Further Discussion! <span class="dot">.</span></h2>
        </div>
        <div class="form-box">
            <div class="default-form">
                @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
                <form  action="{{ route('contact-mail') }}" method="post">
                    @csrf
                    <div class="row clearfix">
                        <div class="form-group col-lg-12 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <input type="text" name="name" value="" placeholder="Your Name" >
                            </div>
                            @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <input type="email" name="email" value="" placeholder="Email Address" >
                            </div>
                            @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <input type="text" name="phone" value="" placeholder="Phone Number" >
                            </div>
                            @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <div class="field-inner">
                                <textarea name="message" placeholder="Write Message"></textarea>
                            </div>
                            @error('message')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
                        </div>
                        <div type="submit" class="form-group col-lg-12 col-md-12 col-sm-12">
                            <button class="theme-btn btn-style-one">
<i class="btn-curve"></i>
<span class="btn-title">Send message</span>
</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
