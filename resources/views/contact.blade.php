@extends('layout.app')

@section('contact','active')

@section("content")
<!-- Start Page Banner -->
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>Contact Us</h2>

            <ul class="pages-list">
                <li><a href="/">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Contact Info Area -->
<div class="contact-info-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Contact Information</span>
            <h2>We Offer Creative Working Environments That Suit Your Business</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-contact-info">
                    <div class="image">
                        <img src="assets/images/contact-info/contact-info-1.png" alt="image">
                    </div>

                    <h3>Address</h3>
                    <p>503, Orion Towers, GS Rd, Christian Basti, Guwahati, Assam 781005</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-contact-info">
                    <div class="image">
                        <img src="assets/images/contact-info/contact-info-2.png" alt="image">
                    </div>

                    <h3>Phone</h3>
                    <p><a href="tel:+916001083238">+916001083238</a></p>

                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-contact-info">
                    <div class="image">
                        <img src="assets/images/contact-info/contact-info-3.png" alt="image">
                    </div>

                    <h3>Email</h3>
                    <p><a href="mailto:suryacoworking@gmail.com">suryacoworking@gmail.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Info Area -->
<div class="mapouter">
    <div class="gmap_canvas"><iframe width="100%" height="480" id="gmap_canvas" src="https://maps.google.com/maps?q=surya%20business%20center&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>
</div>
<!-- Start Contact Area -->
<div class="contact-area ptb-100">
    <div class="container">
        <div class="section-title">

            <h2>Get in Touch</h2>
        </div>

        <div class="contact-form">
            <form id="contactForm">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name*">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email*">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Subject">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="default-btn">Submit Now <i class='bx bx-send'></i><span></span></button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- End Contact Area -->
@endsection