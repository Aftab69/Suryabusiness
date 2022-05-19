@extends('layout.app')

@section("content")
<!-- Start Page Banner -->
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>Book a Tour</h2>

            <ul class="pages-list">
                <li><a href="home.html">Home</a></li>
                <li>Book Tour</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Events Booking Area -->
<div class="events-booking-area pt-100 pb-100">
    <div class="container">
        <div class="row align-items-center">


            <div class="col-md-12 col-sm-12">
                <div class="events-booking-form">
                    <div class="events-booking-title">
                        <span>Booking Table</span>
                        <h3>Fill Up the Frm and send Query We will Contact You</h3>
                    </div>

                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name*">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email*">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone Number">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Occupation/ Organization">
                        </div>

                        <div class="form-group">
                            <input type="date" class="form-control" placeholder="Your Visit. Your Preferred Date*">
                        </div>

                        <!-- <div class="form-group">
                            <input type="text" class="form-control" placeholder="Coupon Code">
                        </div> -->

                        <button type="submit" class="default-btn">Submit Now <i class='bx bx-send'></i> <span></span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Events Booking Area -->

@endsection