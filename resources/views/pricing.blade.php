@extends('layout.app')

@section('pricing','active')

@section("content")
<!-- Start Page Banner -->
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>Membership</h2>

            <ul class="pages-list">
                <li><a href="/">Home</a></li>
                <li>Membership</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Membership Area -->
<div class="membership-area-without-image pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Membership Options</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-membership-table">
                    <div class="membership-header">
                        <h3>Day Pass </h3>
                    </div>

                    <div class="price">₹500 <span>per seat/ per person</span></div>

                    <p>PAX: 1</p>
                    <p></p>

                    <!-- <p>This access pass provides
                        maximum flexibility and lots of benefits. Get a flexible desk in an open area with
                        Wi-Fi along with complimentary tea & coffee.</p> -->

                    <ul class="membership-features-list">
                        <li><i class="bx bx-check"></i>Flexible desk in an open area</li>
                        <li><i class="bx bx-check"></i> Complimentary high speed wifi</li>
                        <li><i class="bx bx-check"></i> Complimentary tea & coffee</li>
                    </ul>

                    <div class="membership-btn">
                        <a href="/book-tour" class="default-btn">Book A Tour <i class="bx bxs-chevron-right"></i><span></span></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-membership-table">
                    <div class="membership-header">
                        <h3>Dedicated Desk (<i class='bx bx-chair'></i></i>)</h3>
                    </div>

                    <div class="price">₹5000 <span>per seat/ per person/ per month</span></div>

                    <p>PAX: 1</p>
                    <p></p>

                    <!-- <p>Proin gravida nibh vel velit auctor aliquet here. Aenean sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum.</p> -->

                    <ul class="membership-features-list">
                        <li><i class="bx bx-check"></i> Dedicated desk in an open area</li>
                        <li><i class="bx bx-check"></i> Complimentary high speed wifi</li>
                        <li><i class="bx bx-check"></i>Complimentary tea & coffee</li>
                        <li><i class="bx bx-check"></i>Complimentary 1 hours meeting room
                            credits per month</li>
                        <li class="color-gray"><i class="bx bx-check"></i>Complimentary 20 pages B/W print
                            credits per month</li>
                    </ul>

                    <div class="membership-btn">
                        <a href="/book-tour" class="default-btn">Book A Tour <i class="bx bxs-chevron-right"></i><span></span></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-membership-table">
                    <div class="membership-header">
                        <h3>Dedicated Desk (<i class='bx bx-chair'></i></i> <i class='bx bx-chair'></i></i> <i class='bx bx-chair'></i></i> <i class='bx bx-chair'></i></i>)</h3>
                    </div>

                    <div class="price">₹2000 <span>per seat/ per person/ per month</span></div>

                    <p>PAX: 4</p>
                    <p></p>

                    <!-- <p>Proin gravida nibh vel velit auctor aliquet here. Aenean sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum.</p> -->

                    <ul class="membership-features-list">
                        <li><i class="bx bx-check"></i> Dedicated desk in an open area</li>
                        <li><i class="bx bx-check"></i> Complimentary high speed wifi</li>
                        <li><i class="bx bx-check"></i> Complimentary tea & coffee</li>
                        <li><i class="bx bx-check"></i> Complimentary 1 hours meeting room
                            credits per month</li>
                        <li><i class="bx bx-check"></i> Complimentary 20 pages B/W print
                            credits per month</li>
                    </ul>

                    <div class="membership-btn">
                        <a href="/book-tour" class="default-btn">Book A Tour <i class="bx bxs-chevron-right"></i><span></span></a>
                    </div>
                </div>
            </div>















            <div class="col-lg-4 col-md-6">
                <div class="single-membership-table">
                    <div class="membership-header">
                        <h3>Dedicated Desk (<i class='bx bx-chair'></i></i> <i class='bx bx-chair'></i></i> <i class='bx bx-chair'></i></i>)</h3>
                    </div>

                    <div class="price">₹2500 <span> per seat/ per person/ per month</span></div>

                    <p>PAX: 3</p>
                    <p></p>

                    <!-- <p>Proin gravida nibh vel velit auctor aliquet here. Aenean sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum.</p> -->

                    <ul class="membership-features-list">
                        <li><i class="bx bx-check"></i> Dedicated desk in an open area</li>
                        <li><i class="bx bx-check"></i> Complimentary high speed wifi</li>
                        <li><i class="bx bx-check"></i> Complimentary tea & coffee</li>
                        <li><i class="bx bx-check"></i> Complimentary 1 hours meeting room
                            credits per month</li>
                        <li><i class="bx bx-check"></i> Complimentary 20 pages B/W print
                            credits per month</li>
                    </ul>

                    <div class="membership-btn">
                        <a href="/book-tour" class="default-btn">Book A Tour <i class="bx bxs-chevron-right"></i><span></span></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-membership-table">
                    <div class="membership-header">
                        <h3>Private Cabin (<i class='bx bx-chair'></i></i> <i class='bx bx-chair'></i></i> <i class='bx bx-chair'></i></i> <i class='bx bx-chair'></i></i>)</h3>
                    </div>

                    <div class="price">₹8000 <span> per seat/ per person/ per month</span></div>

                    <p>PAX: 4</p>
                    <p></p>

                    <!-- <p>Proin gravida nibh vel velit auctor aliquet here. Aenean sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum.</p> -->

                    <ul class="membership-features-list">
                        <li><i class="bx bx-check"></i> Dedicated desk in a private cabin</li>
                        <li><i class="bx bx-check"></i> Exclusive display of comapany name gst
                            no.</li>
                        <li><i class="bx bx-check"></i> Complimentary high speed wifi</li>
                        <li><i class="bx bx-check"></i> Complimentary tea & coffees</li>
                        <li><i class="bx bx-check"></i> Complimentary 3 hours meeting room
                            credits per month</li>
                        <li><i class="bx bx-check"></i> Complimentary 20 pages B/W print
                            credits per month</li>
                        <li><i class="bx bx-check"></i> Locable Cabins and Storage Space, Pin Up
                            Board and White Board</li>
                    </ul>

                    <div class="membership-btn">
                        <a href="/book-tour" class="default-btn">Book A Tour <i class="bx bxs-chevron-right"></i><span></span></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-membership-table">
                    <div class="membership-header">
                        <h3>Private Cabin (<i class='bx bx-chair'></i></i> <i class='bx bx-chair'></i></i> <i class='bx bx-chair'></i></i> <i class='bx bx-chair'></i></i> <i class='bx bx-chair'></i></i> <i class='bx bx-chair'></i></i>)</h3>
                    </div>

                    <div class="price">₹10000 <span> per seat/ per person/ per month</span></div>

                    <p>PAX: 6</p>
                    <p></p>

                    <!-- <p>Proin gravida nibh vel velit auctor aliquet here. Aenean sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum.</p> -->

                    <ul class="membership-features-list">
                        <li><i class="bx bx-check"></i> Dedicated desk in a private cabin</li>
                        <li><i class="bx bx-check"></i> Exclusive display of comapany name gst
                            no.</li>
                        <li><i class="bx bx-check"></i> Complimentary high speed wifi</li>
                        <li><i class="bx bx-check"></i> Complimentary tea & coffees</li>
                        <li><i class="bx bx-check"></i> Complimentary 3 hours meeting room
                            credits per month</li>
                        <li><i class="bx bx-check"></i> Complimentary 20 pages B/W print
                            credits per month</li>
                        <li><i class="bx bx-check"></i> Locable Cabins and Storage Space, Pin Up
                            Board and White Board</li>
                        <li><i class="bx bx-check"></i> Spacious private cabin with ample table
                            seperation</li>
                    </ul>

                    <div class="membership-btn">
                        <a href="/book-tour" class="default-btn">Book A Tour <i class="bx bxs-chevron-right"></i><span></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-membership-table">
                    <div class="membership-header">
                        <h3>Virtual Office</h3>
                    </div>

                    <div class="price">₹30000 <span>per year</span> <br>
                        Or <br>
                        ₹17000 <span>for 6 Months</span></div>


                    <p></p>

                    <!-- <p>Proin gravida nibh vel velit auctor aliquet here. Aenean sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum.</p> -->

                    <ul class="membership-features-list">
                        <li><i class="bx bx-check"></i> Registered Office - Complete Documentation</li>
                        <li><i class="bx bx-check"></i> GST Registration- Complete Documentation</li>
                        <li><i class="bx bx-check"></i> Exclusive display of Company Name GST no.</li>
                        <li><i class="bx bx-check"></i> Mailing Address at prime location</li>
                        <li><i class="bx bx-check"></i> Mail Handling(15 Day Storage)</li>
                        <li><i class="bx bx-check"></i> Reception Facility</li>
                        <li><i class="bx bx-check"></i> Landline No. Facility</li>
                        <li><i class="bx bx-check"></i> Complimentary 1 hour meeting room credits</li>
                    </ul>

                    <div class="membership-btn">
                        <a href="/book-tour" class="default-btn">Book A Tour <i class="bx bxs-chevron-right"></i><span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Membership Area -->
@endsection