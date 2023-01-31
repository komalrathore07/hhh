<style>

@media (min-width: 768px)
{
     #Gainaloe_Logo
    {
      width: 100%;
      align-content:left;
    }
}

#SearchIcon:hover
{
    cursor:pointer;
}
</style>
<script>
$(document).ready(function (){
        $('#SearchIcon').click(function (e)
        {
            var searchstring = $('.searchstring').val();
                // window.alert(searchstring);
                if(searchstring=='')
                {
                    window.location.replace("/");
                }

            });
});
</script>
<!-- ======= Header ======= -->
    <header id="header" class="z-depth-1"  style="position:fixed;top:0px;width:100%; font-family:roboto-slab;">
    <div class="container-fluid ">
  <div class="row" style="text-align:center;">
    <div class="col-sm-3 mx-auto" style="font-size: 18px; font-family:roboto-slab; font-weight: 500; letter-spacing: 0.2px;margin-left: 10px;">
     <i class="fa fa-phone mx-2"> </i> +91 99883 63656, +91 78890 76841
    </div>
    <div class="col-sm-3 mx-auto" style="font-size:18px; font-family:roboto-slab; font-weight: 500; letter-spacing: 0.2px; margin-left: 10px;">
    <i class="fa fa-envelope mx-2"> </i> Aggarwalsparsh3@gmail.com
    </div>
    <div class="col-sm-2">
      <div class="container-fluid mx-5 ">
    <nav class="nav-menu " style="margin-top:-15px;">
     <ul style="font-size:16px!important;margin-left: 39px;">

     @if (Route::has('login'))

@auth
@if(Auth::user()->role === 'admin')
  <li class="drop-down"><a href="#">  <i class="far fa-user-circle "></i>  My Account  <i class="fas fa-angle-down"></i></a>
       <ul>
            <li><a href="{{url('admin-dash')}}" ><i class="fas fa-tachometer-alt"></i>  Dashboard</a></li>
            <li><a href="{{url('admin-news-letter')}}"><i class="fas fa-headset"  ></i>NewsLetter</a></li>
            <li><a href="{{url('admin-all-users')}}" ><i class="fas fa-user"></i> All Users</a></li>
            <li><a href="{{url('admin-Orders')}}" > <i class="fas fa-table"></i> Orders</a></li>
            <li><a href="{{url('admin-Transactions')}}" ><i class="fas fa-receipt"></i>  Transactions</a></li>
             <a   href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">  <i class="fas fa-sign-in-alt"></i> {{ __('Logout') }}</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </li>
        </ul>
  </li>
  @else
  <li class="drop-down"><a href="#">  <i class="far fa-user-circle "></i>  My Account  <i class="fas fa-angle-down"></i></a>
       <ul>
            <li><a href="{{url('dashboard')}}" ><i class="fas fa-tachometer-alt"></i>  Dashboard</a></li>
            <li><a href="{{url('Help')}}"><i class="fas fa-headset"  ></i> Help</a></li>
            <li><a href="{{url('profile')}}" ><i class="fas fa-user"></i>  Profile</a></li>
            <li><a href="{{url('Orders')}}" > <i class="fas fa-table"></i> Orders</a></li>
            <li><a href="{{url('Payments')}}" ><i class="fas fa-receipt"></i>  Transactions</a></li>
             <a   href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">  <i class="fas fa-sign-in-alt"></i> {{ __('Logout') }}</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </li>
        </ul>
  </li>
  @endif
@else
<li> <a href="{{ route('login') }}">Login</a> </li>

    @if (Route::has('register'))
    <li> <a href="{{ route('register') }}">Register</a> </li>
    @endif
@endauth

@endif
</nav>
     </ul>
</div>
    </div>
   
</div>

        <div class="container-fluid d-flex"  style="margin-bottom: -35px;">

          <div id="Gainaloe_Logo" class="logo" >
            <!--  <h1 class="text-light"><a href="/">CompanYName</a></h1>  -->
            <a href="/" ><img src=" {{asset('assets/img/Logo (1).png')}}" alt=""  style="margin-top:-15px;height:70px;width:100px;" ></a>

          </div>
          <div class="col-lg-7"  style="max-width: 100%;" >

          <p class="mobile-nav-toggle"><i class="fas fa-bars"></i> </p>
          <nav class="nav-menu d-none d-lg-block contentfont" >

            <ul style="">

              <li class="active"><a href="/" >Home</a></li>

              <li class="drop-down"><a href="#"> Women <i class="fas fa-angle-down"></i></a>
       <ul>@php
       $scategory = App\Models\Sub_cat::where('category_id','=','3')->get();
              @endphp
              @foreach ($scategory as $scategory_nav_item)
              <li><a href="{{url('/collection/'.$scategory_nav_item->subcat_slug)}}" > {{$scategory_nav_item->subcat_name}}</a></li>
        @endforeach
</ul>



<li class="drop-down"><a href="#"> </i> Mens <i class="fas fa-angle-down"></i></a>
<ul>@php
              $scategory = App\Models\Sub_cat::where('category_id','=','1')->get();
              @endphp
              @foreach ($scategory as $scategory_nav_item)
              <li><a href="{{url('/collection/'.$scategory_nav_item->subcat_slug)}}" > {{$scategory_nav_item->subcat_name}}</a></li>
        @endforeach
</ul>

<li class="drop-down"><a href="#"> </i> Special Occasions <i class="fas fa-angle-down"></i></a>
<ul>@php
              $scategory = App\Models\Sub_cat::where('category_id','=','4')->get();
              @endphp
              @foreach ($scategory as $scategory_nav_item)
              <li><a href="{{url('/collection/'.$scategory_nav_item->subcat_slug)}}" >{{$scategory_nav_item->subcat_name}}</a></li>
        @endforeach
</ul>


       <li class="nav-item">
          <a class="nav-link" href="#">Customized Outfit </a>
        </li>
              <li><a href="/about">About</a></li>
              <li><a href="/#contact">Contact Us</a></li>

  <li><a href="{{url('cart')}}" style="margin-left:15px;">   <i class="fas fa-shopping-cart "></i>
              <span class="basket-item-count" style="margin-left:-4px;">
                <span class="badge badge-pill red"> {{ count((array) session('cart')) }}  </span>
                </span></a></li>


             </ul>

          </nav>

</div>
<!-- .nav-menu -->
<div class="col-md-2" style="margin-right: 60px;" >

          <div class="input-group md-form form-sm" style="width:100%;margin-top: 13px;padding-bottom: 13px;">
                <input class="form-control my-0 py-1 red-border searchstring" list="plists" name="plist" id="plist" type="text" placeholder="Search" aria-label="Search" >
                <datalist id="plists">
                    @php
                       $Products=App\Models\Products::where('status','=','1')->get();
                    @endphp
                        @foreach($Products as $item)
                                <option value="{{$item->url}}">{{$item->name}} </option>
                        @endforeach
                </datalist>
                
                <div class="input-group-append" id="SearchIcon">
                    <span class="input-group-text  lighten-3" id="basic-text1"><i class="fas fa-search text-grey"
                aria-hidden="true"    ></i></span>
                </div>
                </div>
            </div>



</div>
        </div>
      </header><!-- End Header -->
   <br><br><br>
