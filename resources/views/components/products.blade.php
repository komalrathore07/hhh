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

@endsection
@section('content')
<style>

    .checked {
      color: orange;
    }
    .switch-box {
    display: none;
}
    </style>
    
    <div class="page-title-area" style="padding-top: 65px;">
            <div class="container">
                <div class="page-title-content" >
                    <h2>{{$scategory->subcat_name}}</h2>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>{{$scategory->subcat_name}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Start Products Area -->
        <section class="products-area products-collections-area pt-100 pb-70">
            <div class="container-fluid" style="">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <div class="woocommerce-widget-area">
                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title">Womens Categories</h3>

                                <div class="selected-filters-wrap-list">
                                    <ul>
                                        @php
                                $scategory = App\Models\Sub_cat::where('category_id','=','3')->get();
                                        @endphp
                                        @foreach ($scategory as $scategory_nav_item)
                                        <li><a href="{{url('/collection/'.$scategory_nav_item->subcat_slug)}}" > {{$scategory_nav_item->subcat_name}}</a></li>
                                  @endforeach
                                    </ul>

                                   
                                </div>
                            </div>
                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title">Mens Categories</h3>

                                <div class="selected-filters-wrap-list">
                                    <ul>
                                    @php
											  $scategory = App\Models\Sub_cat::where('category_id','=','1')->get();
											  @endphp
											  @foreach ($scategory as $scategory_nav_item)
											  <li><a href="{{url('/collection/'.$scategory_nav_item->subcat_slug)}}" > {{$scategory_nav_item->subcat_name}}</a></li>
										@endforeach
                                    </ul>

                                   
                                </div>
                            </div>

                           

                        </div>
                    </div>

                    <div class="col-lg-9 col-md-12">
                        
                            
                        <div id="products-collections-filter" class="row">
                        @foreach($products as $item)
                            <div class="col-sm-4 products-col-item">
                            
                                <div class="single-productsBox">
                                
                                    <div class="products-image">
                                        <a href="{{url('Shop/'.$item->url)}}">
                                            <img src="{{asset('Uploads/Products/'.$item->image1)}}" class="main-image" alt="image" style="height:450px ;">
                                            <img src="{{asset('Uploads/Products/'.$item->image2)}}" class="hover-image" alt="image">
                                        </a>
        
                                        <div class="products-button">
                                            <ul>
                                                <li>
                                                    <div class="wishlist-btn">
                                                        <a href="#">
                                                            <i class='bx bx-heart'></i>
                                                            <span class="tooltip-label">Add to Wishlist</span>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="compare-btn">
                                                        <a href="#">
                                                            <i class='bx bx-refresh'></i>
                                                            <span class="tooltip-label">Compare</span>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="quick-view-btn">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                            <i class='bx bx-search-alt'></i>
                                                            <span class="tooltip-label">Quick View</span>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
        
                                        <div class="new-tag">New!</div>
                                    </div>
        
                                    <div class="products-content">
                                   <a href="{{url('Shop/'.$item->url)}}"> <span class="category"> {{$item->sub_cat->subcat_name}}</span></a>
                                        <h3><a href="{{url('Shop/'.$item->url)}}">{{$item->name}}</a></h3>
                                        <div class="star-rating">
                                             @if($item->rating==1)
															<span class="fa fa-star checked"></span>
														    <span class="fa fa-star"></span>
															<span class="fa fa-star "></span>
															<span class="fa fa-star"></span>
														    <span class="fa fa-star"></span>
										               @elseif($item->rating==2)
															  <span class="fa fa-star checked"></span>
																  <span class="fa fa-star checked"></span>
																  <span class="fa fa-star "></span>
																  <span class="fa fa-star"></span>
																  <span class="fa fa-star"></span>
											          @elseif($item->rating==3)
														<span class="fa fa-star checked"></span>
														  <span class="fa fa-star checked"></span>
														  <span class="fa fa-star checked"></span>
														  <span class="fa fa-star"></span>
														  <span class="fa fa-star"></span>
													  
														@elseif($item->rating==4)
														<span class="fa fa-star checked"></span>
														  <span class="fa fa-star checked"></span>
														  <span class="fa fa-star checked"></span>
														  <span class="fa fa-star checked"></span>
														  <span class="fa fa-star"></span>
										  
														@else
														<span class="fa fa-star checked"></span>
														  <span class="fa fa-star checked"></span>
														  <span class="fa fa-star checked"></span>
														  <span class="fa fa-star checked"></span>
														  <span class="fa fa-star checked"></span>
														@endif
                                           
                                        </div>
                                        <div class="price">
                                          
                                            <span class="new-price">Price : ₹ {{$item->price}}</span>
                                          
                                        </div>
                                        <a href="/Shop/{{$item->url}}" class="btn  btn-primary    "> Shop Now</a>
                                        
                                    </div>
        
                                    <span class="products-discount">
                                        <span>
                                        {{$item->discount}}% off
                                        </span>
                                    </span>
                                </div>
                            </div>
                    
                            @endforeach
                            
                        </div>       
                      
</div>
                        <div class="pagination-area text-center">
                        
                        </div>
                    </div>
                </div>
            </div>
        </section>
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

