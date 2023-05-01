@extends('layout.app')

@section('workspaces','active')

@section("content")
<!-- Start Page Banner -->
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>Workspaces</h2>

            <ul class="pages-list">
                <li><a href="/">Home</a></li>
                <li>Workspaces</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Coworking Space Area -->
<div class="coworking-space-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Coworking Space</span>
            <h2>Our Modern Office Spaces Are Simply Stunning & Comfortable</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-coworking-space">
                    <div class="image">
                        <a href="javascript:void(0)"><img src="assets/images/surya/selected/daypass.jpeg" alt="image"></a>

                        <div class="number">01</div>
                        <div style="width:100px;height:50px;right:5px;left:unset;top:5px;bottom:unset;font-size:15px;line-height:20px;display:flex;justify-content:center;align-items:center" class="number">Sold Out !</div>
                        <div class="hover-number">01</div>
                    </div>

                    <div class="content">
                        <h3>
                            <a href="/pricing">Day Pass
                            </a>
                        </h3>
                    </div>
                    <div class="hover-content">
                        <h3>
                            <a href="/pricing">Flexible desk in an open area
                            </a>
                        </h3>
                        <h3>
                            <a href="/pricing">Complimentary high speed wifi</a>
                        </h3>

                    </div>


                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-coworking-space">
                    <div class="image">
                        <a href="/pricing"><img src="assets/images/surya/selected/dedicateddesk.jpeg" alt="image"></a>

                        <div class="number">02</div>
                        <div class="hover-number">02</div>
                    </div>

                    <div class="content">
                        <h3>
                            <a href="/pricing">Dedicated Desk</a>
                        </h3>

                    </div>

                    <div class="hover-content">
                        <h3>
                            <a href="/pricing">Dedicated desk in an open area</a>
                        </h3>
                        <h3>
                            <a href="/pricing">Complimentary high speed wifi</a>
                        </h3>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-coworking-space">
                    <div class="image">
                        <a href="/pricing"><img src="assets/images/surya/selected/privateoffice.jpeg" alt="image"></a>

                        <div class="number">03</div>
                        <div class="hover-number">03</div>
                    </div>

                    <div class="content">
                        <h3>
                            <a href="/pricing">Private Office</a>
                        </h3>
                    </div>

                    <div class="hover-content">
                        <h3>
                            <a href="/pricing">Dedicated desk in a private office</a>
                        </h3>
                        <h3>
                            <a href="/pricing">Exclusive display of comapany name gst no.</a>
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-coworking-space">
                    <div class="image">
                        <a href="/pricing"><img src="assets/images/surya/selected/conference.jpeg" alt="image"></a>

                        <div class="number">04</div>
                        <div class="hover-number">04</div>
                    </div>

                    <div class="content">
                        <h3>
                            <a href="/pricing">Conference Room</a>
                        </h3>
                    </div>

                    <div class="hover-content">
                        <h3>
                            <a href="/pricing">Ergonomic seating & design (6-12pax)
                            </a>
                        </h3>
                        <h3>
                            <a href="/pricing">65 inch LED Smart TV</a>
                        </h3>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-coworking-space">
                    <div class="image">
                        <a href="/pricing"><img src="assets/images/surya/selected/customspace.jpeg" alt="image"></a>

                        <div class="number">05</div>
                        <div class="hover-number">05</div>
                    </div>

                    <div class="content">
                        <h3>
                            <a href="/pricing">Private Cabin</a>
                        </h3>
                    </div>

                    <div class="hover-content">
                        <h3>
                            <a href="/pricing">Dedicated desk in a private cabin
                            </a>
                        </h3>
                        <h3>
                            <a href="/pricing">Exclusive display of comapany name gst no.</a>
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-coworking-space">
                    <div class="image">
                        <a href="/pricing"><img src="assets/images/surya/selected/virtualoffice.jpeg" alt="image"></a>

                        <div class="number">06</div>
                        <div class="hover-number">06</div>
                    </div>

                    <div class="content">
                        <h3>
                            <a href="/pricing">Virtual Office</a>
                        </h3>

                    </div>

                    <div class="hover-content">
                        <h3>
                            <a href="/pricing">Exclusive display of Company Name and GST no.</a>
                        </h3>
                        <h3>
                            <a href="/pricing">Mailing Address at prime location</a>
                        </h3>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Coworking Space Area -->

<!-- Start Work Area -->
<!-- <div class="work-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="work-image two"></div>
            </div>

            <div class="col-lg-6">
                <div class="work-content-item">
                    <div class="content-box">
                        <b>Give a Boost On Your Work</b>
                        <h3>Team or Individuals Sustainable Coworking in Your Town</h3>
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>

                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-4">
                                <div class="work-fun-fact">
                                    <h4>
                                        <span class="odometer" data-count="3500">00</span>
                                        <span class="sign-icon">m2</span>
                                    </h4>
                                    <p>Coworking Space</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4">
                                <div class="work-fun-fact">
                                    <h4>
                                        <span class="odometer" data-count="1890">00</span>
                                        <span class="sign-icon">People</span>
                                    </h4>
                                    <p>Office Amount</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4">
                                <div class="work-fun-fact">
                                    <h4>
                                        <span class="odometer" data-count="426">00</span>
                                        <span class="sign-icon">+</span>
                                    </h4>
                                    <p>Available Space Now</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- End Work Area -->
@endsection