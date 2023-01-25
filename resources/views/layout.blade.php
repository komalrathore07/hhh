<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
            <meta charset="utf-8">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>@yield('title')</title>
            <meta name="keywords" content="@yield('keywords')">
            <meta name="description" content="@yield('description')">
            <meta name="p:domain_verify" content="a54f44e1a87da8b6bd392c50c109ed20"/>
             <!-- Favicons -->
            <link href="{{asset('assets/img/Logo-Square.png')}}" rel="icon">
            <link href="{{asset('assets/img/Logo-Square.png')}}" rel="apple-touch-icon">
            <link href="{{asset('css/responsivecode.css')}}" rel="stylesheet"> 
             
            <!-- <link href="{{asset('css/main.css')}}" rel="stylesheet"> -->
             
            <link href="{{asset('css/richtext.min.css')}}" rel="stylesheet">
            <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
             
            <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

             <!-- Font Awesome -->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />

            <!-- Google Fonts Roboto -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
              
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
           
            <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
            <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet">
                
             <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
                
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
                       <!-- Font Awesome -->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
              <!--google fonts-->
             <link  href="https://fonts.googleapis.com/css2?family=ABeeZee&family=Acme&family=Balsamiq+Sans&family=Bowlby+One+SC&family=Fredoka+One&family=Josefin+Sans:wght@700&family=Lobster&display=swap" rel="stylesheet">
                  <!--google fonts closed-->
                  @yield('style')
                  <!--header -->

                                    <link rel="stylesheet" href="{{asset('header/css/bootstrap.css')}}" />
                    <link rel="stylesheet" href="{{asset('header/vendors/linericon/style.css')}}" />
                    <link rel="stylesheet" href="{{asset('header/css/font-awesome.min.css')}}" />
                    <link rel="stylesheet" href="{{asset('header/css/themify-icons.css')}}" />
                    <link rel="stylesheet" href="{{asset('header/css/flaticon.css')}}" />
                    <link rel="stylesheet" href="{{asset('header/vendors/owl-carousel/owl.carousel.min.css')}}" />
                    <link rel="stylesheet" href="{{asset('header/vendors/lightbox/simpleLightbox.css')}}" />
                    <link rel="stylesheet" href="{{asset('header/vendors/nice-select/css/nice-select.css')}}" />
                    <link rel="stylesheet" href="{{asset('header/vendors/animate-css/animate.css')}}" />
                    <link rel="stylesheet" href="{{asset('header/vendors/jquery-ui/jquery-ui.css')}}" />
                    <!-- main css -->
                    <link rel="stylesheet" href="{{asset('header/css/style.css')}}" />
                    <link rel="stylesheet" href="{{asset('header/css/responsive.css')}}" />
              
    </head>
    <body id="body" class="contentfont" style="background:#f2f2f2;">
     
   
    @include('Reusable_components.user.header')
    <br></br>
    <div class="container-fluid" style="">
        
     @yield('content')
</div>
     @include('Reusable_components.user.footer')
    <script src="{{asset('assets/js/main.js')}}">  </script>
    <script src="{{asset('js/main.js')}}">  </script>
    
    <script src="{{asset('js/cart.js')}}">  </script>
    
    <script src="{{asset('js/jquery.richtext.js')}}">  </script> 
    
    <script src="{{asset('js/jquery.richtext.min.js')}}">  </script> 
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
        <!--header  -->
        <script src="{{asset('header/js/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('header/js/popper.js')}}"></script>
  <script src="{{asset('header/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('header/js/stellar.js')}}"></script>
  <script src="{{asset('header/vendors/lightbox/simpleLightbox.min.js')}}"></script>
  <script src="{{asset('header/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
  <script src="{{asset('header/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('header/vendors/isotope/isotope-min.js')}}"></script>
  <script src="{{asset('header/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('header/js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{asset('header/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('header/vendors/counter-up/jquery.counterup.js')}}"></script>
  <script src="{{asset('header/js/mail-script.js')}}"></script>
  <script src="{{asset('header/js/theme.js')}}"></script>
  @yield('script')
</body>

  
    </body>
</html>
