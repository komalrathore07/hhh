@extends('layout')
@section('title') Banarsi lehnga House @endsection
@section('keywords') Home,About,Contact,Car @endsection
@section('description') Write some descripton about the webpage @endsection
@section('content')
 

<div class="page-title-area" style="">
            <div class="container">
                <div class="page-title-content" >
                <h5 class="my-3">  <a href="/" class="black-text">Home /</a> <strong class="black-text"> <a href="{{url('dashboard')}}" class="black-text" >Dashboard </a> </strong> </h5>
            
                    <ul style="color:white;font-size:20px;margin-left:20px;text-align:right;">
                    <li><a href="{{url('profile')}}" > <i class="fas fa-user"></i>   Profile</a></li>
                    <li> <a href="{{url('Orders')}}"> <i class="fas fa-table"></i>  Orders</a></li>
                    <li>  <a href="{{url('Payments')}}"> <i class="fas fa-receipt"></i>  Payments</a></li>
                    <li>  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="fas fa-sign-in-alt"></i> {{ __('Logout') }}</a>
                    <li> <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form></li>
                    </ul>
                </div>
            </div>
        </div> 
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   <!-- Payments Section Starts Here-->
   <section id="mytransactionsindesktopmode">

    @include('components.user.mytransactionsindesktopmode')
</section>
 <section id="mytransactionsinmobilemode">

    @include('components.user.mytransactionsinmobilemode')
  </section>

<!-- Payments Section Ends Here-->

    
@endsection