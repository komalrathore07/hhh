@extends('layout')
@section('title') Banarsi lehnga House collection - category @endsection
@section('keywords') Home,About,Contact,Car @endsection
@section('description') Write some descripton about the webpage @endsection
@section('style')
        <link rel="stylesheet" href="{{asset('header/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('header/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('header/css/boxicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('header/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('header/css/magnific-popup.min.css')}}">
        <link rel="stylesheet" href="{{asset('header/css/nice-select.min.css')}}">
        <link rel="stylesheet" href="{{asset('header/css/slick.min.css')}}">
        <link rel="stylesheet" href="{{asset('header/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('header/css/meanmenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('header/css/rangeSlider.min.css')}}">
        <link rel="stylesheet" href="{{asset('header/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('header/css/dark.css')}}">
        <link rel="stylesheet" href="{{asset('header/css/responsive.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- <link rel="icon" type="image/png" href="{{asset('header/img/favicon.png')}}"> -->
        <!-- <link href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css" rel="stylesheet"> -->

@endsection
@section('content')

        
      
      
        <!-- Start Page Title -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>About Us</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Start About Area -->
        <section class="about-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-image">
                            <img src="{{asset('header/img/about/img1.jpg')}}" class="shadow" alt="image">
                            <img src="{{asset('header/img/about/img2.jpg')}}" class="shadow" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="about-content">
                            <span class="sub-title">About Us</span>
                            <h2>Xton Trusted Online Shopping Site in the World</h2>
                            <h6>Xton.com offers you flexible and responsive shopping experience.</h6>
                            <p><strong>Xton</strong> is an eCommerce website which features millions of products, i.e. clothes, shoes, bags, electronic items and much more, with all at incredible prices.</p>
                            <p>One of the most popular on the web is shopping. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                            <div class="features-text">
                                <h5><i class='bx bx-planet'></i>Ships to more than 10 countries and regions</h5>
                                <p>We provide customers with a hassle-free and worry-free international shopping experience from buying to delivery.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="about-inner-area">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="about-text">
								<h3>Our Story</h3>
                                <p>One of the most popular on the web is shopping.</p>
                                
                                <ul class="features-list">
                                    <li><i class='bx bx-check'></i> People like Xton</li>
                                    <li><i class='bx bx-check'></i> World's finest Xton</li>
                                    <li><i class='bx bx-check'></i> The original Xton</li>
                                    <li><i class='bx bx-check'></i> We trust Xton</li>
                                </ul>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="about-text">
								<h3>Our Values</h3>
                                <p>The best of both worlds. Store and web.</p>
                                
                                <ul class="features-list">
                                    <li><i class='bx bx-check'></i> Always in style!</li>
                                    <li><i class='bx bx-check'></i> Discover your favorite shopping</li>
                                    <li><i class='bx bx-check'></i> Find yourself</li>
                                    <li><i class='bx bx-check'></i> Feel-good shopping</li>
                                </ul>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
							<div class="about-text">
								<h3>Our Promise</h3>
                                <p>Rediscover a great shopping tradition</p>
                                
                                <ul class="features-list">
                                    <li><i class='bx bx-check'></i> Get better shopping</li>
                                    <li><i class='bx bx-check'></i> Love shopping again</li>
                                    <li><i class='bx bx-check'></i> Online shopping.</li>
                                    <li><i class='bx bx-check'></i> Shopping for all seasons</li>
                                </ul>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!-- End About Area -->

        <!-- Start Offer Area -->
        <section class="offer-area bg-image1 ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="offer-content">
                            <span class="sub-title">Limited Time Offer!</span>
                            <h2>-40% OFF</h2>
                            <p>Get The Best Deals Now</p>
                            <a href="#" class="default-btn">Discover Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Offer Area -->

        <!-- Start Partner Area -->
        <div class="partner-area ptb-70">
            <div class="container">
                <div class="section-title">
                    <h2>Our Partners</h2>
                </div>
                
                <div class="partner-slides owl-carousel owl-theme">
                    <div class="partner-item">
                        <a href="#"><img src="{{asset('header/img/partner/partner1.png')}}" alt="image"></a>
                    </div>

                    <div class="partner-item">
                        <a href="#"><img src="{{asset('header/img/partner/partner2.png')}}" alt="image"></a>
                    </div>

                    <div class="partner-item">
                        <a href="#"><img src="{{asset('header/img/partner/partner3.png')}}" alt="image"></a>
                    </div>

                    <div class="partner-item">
                        <a href="#"><img src="{{asset('header/img/partner/partner4.png')}}" alt="image"></a>
                    </div>

                    <div class="partner-item">
                        <a href="#"><img src="{{asset('header/img/partner/partner5.png')}}" alt="image"></a>
                    </div>

                    <div class="partner-item">
                        <a href="#"><img src="{{asset('header/img/partner/partner6.png')}}" alt="image"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Partner Area -->

        <!-- Start Testimonials Area -->
        <section class="testimonials-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Testimonials</span>
                    <h2>What Clients Says About Us</h2>
                </div>

                <div class="testimonials-slides owl-carousel owl-theme">
                    <div class="single-testimonials-item">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                        <div class="info">
                            <img src="{{asset('header/img/user1.jpg')}}" class="shadow rounded-circle" alt="image">
                            <h3>John Smith</h3>
                            <span>Student</span>
                        </div>
                    </div>

                    <div class="single-testimonials-item">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                        <div class="info">
                            <img src="{{asset('header/img/user2.jpg')}}" class="shadow rounded-circle" alt="image">
                            <h3>Sarah Taylor</h3>
                            <span>Student</span>
                        </div>
                    </div>

                    <div class="single-testimonials-item">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                        <div class="info">
                            <img src="{{asset('header/img/user3.jpg')}}" class="shadow rounded-circle" alt="image">
                            <h3>David Warner</h3>
                            <span>Student</span>
                        </div>
                    </div>

                    <div class="single-testimonials-item">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                        <div class="info">
                            <img src="{{asset('header/img/user4.jpg')}}" class="shadow rounded-circle" alt="image">
                            <h3>James Anderson</h3>
                            <span>Student</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonials Area -->

        <!-- Start Facility Area -->
        <section class="facility-area pb-70">
            <div class="container">
                <div class="facility-slides owl-carousel owl-theme">
                    <div class="single-facility-box">
                        <div class="icon">
                        <i class="fa-solid fa-truck-droplet"></i>
                        </div>
                        <h3>Free Shipping Worldwide</h3>
                    </div>

                    <div class="single-facility-box">
                        <div class="icon">
                            <i class="flaticon-return"></i>
                        </div>
                        <h3>Easy Return Policy</h3>
                    </div>

                    <div class="single-facility-box">
                        <div class="icon">
                            <i class="flaticon-shuffle"></i>
                        </div>
                        <h3>7 Day Exchange Policy</h3>
                    </div>

                    <div class="single-facility-box">
                        <div class="icon">
                            <i class="flaticon-sale"></i>
                        </div>
                        <h3>Weekend Discount Coupon</h3>
                    </div>

                    <div class="single-facility-box">
                        <div class="icon">
                            <i class="flaticon-credit-card"></i>
                        </div>
                        <h3>Secure Payment Methods</h3>
                    </div>

                    <div class="single-facility-box">
                        <div class="icon">
                            <i class="flaticon-location"></i>
                        </div>
                        <h3>Track Your Package</h3>
                    </div>

                    <div class="single-facility-box">
                        <div class="icon">
                            <i class="flaticon-customer-service"></i>
                        </div>
                        <h3>24/7 Customer Support</h3>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Facility Area -->


        <!-- Start Sidebar Modal -->
       
        <!-- End Sidebar Modal -->

        <!-- Start QuickView Modal Area -->
     
        <!-- End QuickView Modal Area -->

        <!-- Start Shopping Cart Modal -->
      
        <!-- End Shopping Cart Modal -->

        <!-- Start Wishlist Modal -->
      
        <!-- End Wishlist Modal -->

        <!-- Start Size Guide Modal Area -->
        
        <!-- End Size Guide Modal Area -->

        <!-- Start Shipping Modal Area -->
       
        <!-- End Shipping Modal Area -->

        <!-- Start Products Filter Modal Area -->
        
        <!-- End Products Filter Modal Area -->

       

        @endsection
        @section('script')
<script>
   <script src=" {{asset('header/js/jquery.min.js')}}"></script>
        <script src=" {{asset('header/js/popper.min.js')}}"></script>
        <script src=" {{asset('header/js/bootstrap.bundle.min.js')}}"></script>
        <script src=" {{asset('header/js/owl.carousel.min.js')}}"></script>
        <script src=" {{asset('header/js/magnific-popup.min.js')}}"></script>
        <script src=" {{asset('header/js/parallax.min.js')}}"></script>
        <script src=" {{asset('header/js/rangeSlider.min.js')}}"></script>
        <script src=" {{asset('header/js/nice-select.min.js')}}"></script>
        <script src=" {{asset('header/js/meanmenu.min.js')}}"></script>
        <script src=" {{asset('header/js/isotope.pkgd.min.js')}}"></script>
        <script src=" {{asset('header/js/slick.min.js')}}"></script>
        <script src=" {{asset('header/js/sticky-sidebar.min.js')}}"></script>
        <script src=" {{asset('header/js/wow.min.js')}}"></script>
        <script src=" {{asset('header/js/form-validator.min.js')}}"></script>
        <script src=" {{asset('header/js/contact-form-script.js')}}"></script>
        <script src=" {{asset('header/js/ajaxchimp.min.js')}}"></script>
        <script src=" {{asset('header/js/main.js')}}"></script>
      
</script>

@endsection
