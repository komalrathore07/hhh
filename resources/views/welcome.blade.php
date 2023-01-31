@extends('layout')
@section('title') Banarsi lehnga House @endsection
@section('keywords') Home,About, @endsection
@section('description') Write some descripton about the webpage @endsection
@section('content')
<style>

    .checked {
      color: orange;
    }
   

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    #women{
 text-align:center;
 font-family:"roboto-slab";


     }
     @media (min-width: 768px){
     .images{
            margin-left:auto;
            justify-content:space-between;
     }
    }
    section {
padding: 10px 0 !important;

}
    
    </style> 

    
<div id="slide_show_in_desktop_mode">
  @include('components.desktopslideshow')
</div>
<div id="slide_show_in_mobile_mode">
  @include('components.mobileslideshow')
</div> 
<!-- About Starts Here -->
<script>
    $( document ).ready(function() {
  new WOW().init();
  $( ".wow" ).addClass( "fadeInLeft" );
});
</script>
 
      
    <div class="container">
      <!--Section: Content-->
      <div class="row" style="text-align:center;font-family:roboto-slab;">
      <div class="col-lg-12 col-md-12 ">
          <h3  style="font-family:roboto-slab;"><b>Women Wear</b></h3>
          <p style="font-size:17px;">At Banarsi lehnga, we design elegant, effortless pieces that suit every occasion. For our modern, global muse, we create timeless fas </p>
        </div>
</div>
      <section class="text-center">
       
      <div class="row">
          <div class="col-lg-12 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <a href="/collection/bridal-lehnga">
                <img src="images/1.jpg" class="img-fluid" /></a>
                <a href="/collection/bridal-lehnga">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              
               
                <a href="/collection/bridal-lehnga" class="btn btn-dark">Bridal Lehnga</a>
              
            </div>
          </div>

        
        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <a href="/collection/designer-gowns">
                <img src="images/11.png" class="img-fluid" /></a>
                <a href="/collection/designer-gowns">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              
               
                <a href="/collection/designer-gowns" class="btn btn-dark">DESIGNER GOWNS</a>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <a href="/collection/designer-saree">
                <img src="images/12.png" class="img-fluid" /></a>
                <a href="/collection/designer-saree">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
                <a href="/collection/designer-saree" class="btn btn-dark">DESIGNER SAREE</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <a href="/collection/indo-western">
                <img src="images/13.png" class="img-fluid" /></a>
                <a href="/collection/indo-western">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
             </div>
                <a href="/collection/indo-western" class="btn btn-dark">INDO WESTERN </a>
            </div>
          </div>
        </div>
<!-- Row 2nd -->
<div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <a href="/collection/anarkali-suits">
                <img src="images/14.png" class="img-fluid" /></a>
                <a href="/collection/anarkali-suits">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              
               
                <a href="/collection/anarkali-suits" class="btn btn-dark">Anarkali Suits</a>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <a href="/collection/salwar-suits">
                <img src="images/15.png" class="img-fluid" /></a>
                <a href="/collection/salwar-suits">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
                <a href="/collection/salwar-suits" class="btn btn-dark">Salwar Suits</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <a href="/collection/phulkari">
                <img src="images/16.png" class="img-fluid" /></a>
                <a href="/collection/phulkari">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
             </div>
                <a href="/collection/phulkari" class="btn btn-dark">Phulkari </a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <a href="/collection/bridal-jewellery">
                <img src="images/17.jpg" class="img-fluid" /></a>
                <a href="/collection/bridal-jewellery">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              
               
                <a href="/collection/bridal-jewellery" class="btn btn-dark">Bridal  jewellery</a>
              
            </div>
          </div>

          <div class="col-lg-6 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <a href="/collection/bridal-flower-jewellery">
                <img src="images/18.jpg" class="img-fluid" /></a>
                <a href="/collection/bridal-flower-jewellery">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
                <a href="/collection/bridal-flower-jewellery" class="btn btn-dark">Bridal Flower jewellery</a>
            </div>
          </div>

         
        
      </section>
      <!--Section: Content-->

      <!-- Pagination -->
    
    </div>
  
  <div class="container">
      <!--Section: Content-->
      <div class="row" style="text-align:center;font-family:roboto-slab;">
      <div class="col-lg-12 col-md-12 ">
          <h3  style="font-family:roboto-slab;"><b>Mens Wear</b></h3>
          <p style="font-size:17px;">At Banarsi lehnga, We design the classic traditional menswear staple is reinterpreted and designed by us for the stylish, global man </p>
        </div>
</div>
      <section class="text-center">
       
      <div class="row">
          <div class="col-lg-12 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <a href="/collection/mens-sherwani">
                <img src="images/21.jpg" class="img-fluid" /></a>
                <a href="/collection/mens-sherwani">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              
               
                <a href="/collection/mens-sherwani" class="btn btn-dark">MENS SHERWANI</a>
              
            </div>
          </div>

        
        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <a href="/collection/coat-pant">
                <img src="images/22.png" class="img-fluid" /></a>
                <a href="/collection/coat-pant">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              
               
                <a href="/collection/coat-pant" class="btn btn-dark">COAT PANT</a>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <a href="/collection/jodhpuri-suits">
                <img src="images/23.png" class="img-fluid" /></a>
                <a href="/collection/jodhpuri-suits">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
                <a href="/collection/jodhpuri-suits" class="btn btn-dark">JODHPURI SUITS</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <a href="/collection/kurta-pajama">
                <img src="images/24.png" class="img-fluid" /></a>
                <a href="/collection/kurta-pajama">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
             </div>
                <a href="/collection/kurta-pajama" class="btn btn-dark">KURTA PAJAMA </a>
            </div>
          </div>
        </div>
<!-- Row 2nd -->
<div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <a href="/collection/jacket-kurta">
                <img src="images/25.png" class="img-fluid" /></a>
                <a href="/collection/jacket-kurta">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              
               
                <a href="/collection/jacket-kurta" class="btn btn-dark"> JACKET KURTA </a>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <a href="/collection/indo-western-mens">
                <img src="images/26.png" class="img-fluid" /></a>
                <a href="/collection/indo-western-mens">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
                <a href="/collection/indo-western-mens" class="btn btn-dark">INDO WESTERN</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <a href="/collection/basket-suits">
                <img src="images/27.png" class="img-fluid" /></a>
                <a href="/collection/basket-suits">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
             </div>
                <a href="/collection/basket-suits" class="btn btn-dark">BASKET SUIT </a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <a href="/collection/mens-jewellery">
                <img src="images/28.jpg" class="img-fluid" /></a>
                <a href="/collection/mens-jewellery">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              
               
                <a href="/collection/mens-jewellery" class="btn btn-dark">MENS JEWELLERY</a>
              
            </div>
          </div>

          <div class="col-lg-6 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <a href="/collection/mens-footwear">
                <img src="images/29.jpg" class="img-fluid" /></a>
                <a href="/collection/mens-footwear">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
                <a href="/collection/mens-footwear" class="btn btn-dark">MENS FOOTWEAR</a>
            </div>
          </div>

         
        
      </section>
      <!--Section: Content-->

      <!-- Pagination -->
    
    </div>
    <div class="container">
      <!--Section: Content-->
      <div class="row" style="text-align:center;font-family:roboto-slab;">
      <div class="col-lg-12 col-md-12 ">
          <h3  style="font-family:roboto-slab;"><b>WEDDING ESSENTIALS</b></h3>
          <p style="font-size:17px;">At Banarsi lehnga, We design the classic Customised Ring Platter for Engagement Ceremony with hanging acrylic couple names </p>
        </div>
</div>
      <section class="text-center">
       
      <div class="row">
          <div class="col-lg-12 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <a href="/collection/maeyan-thali">
                <img src="images/31.jpg" class="img-fluid" /></a>
                <a href="/collection/maeyan-thali">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              
               
                <a href="/collection/maeyan-thali" class="btn btn-dark">MAEYAN THALI</a>
              
            </div>
          </div>

        
        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <a href="/collection/jai-mala">
                <img src="images/32.jpg" class="img-fluid" /></a>
                <a href="/collection/jai-mala">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              
               
                <a href="/collection/jai-mala" class="btn btn-dark">JAI MALA</a>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <a href="/collection/engagement-ring-tray">
                <img src="images/33.jpg" class="img-fluid" /></a>
                <a href="/collection/engagement-ring-tray">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
                <a href="/collection/engagement-ring-tray" class="btn btn-dark">ENGAGEMENT RING TRAY</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <a href="/collection/sagun-box">
                <img src="images/34.jpg" class="img-fluid" /></a>
                <a href="/collection/sagun-box">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
             </div>
                <a href="/collection/sagun-box" class="btn btn-dark">SAGUN BOX  </a>
            </div>
          </div>
        </div>
<!-- Row 2nd -->


<!--Row 3rd -->

<!-- About completed Here -->
</div>
</div>
<div class="row" >
  <p>&nbsp;</p>
</div>
<!-- Products Ends Here --> 

<!-- ======= Contact Section Starts Here ======= --> 
 
  <section id="contact" class="contact" style="background:white;">
          <div class="container ">

            <div class="section-title">
            
              <h2>Contact</h2>
              <p style=" font-family: 'Balsamiq Sans', cursive;">  </p>
            </div>

            <div class="row wow animated zoomIn slow">

              <div class="col-lg-5 d-flex align-items-stretch">
                <div align="left" class="info">
                  <div class="address" >
                  <i class="fas fa-map-marker-alt"></i>
                    <h4>Location:</h4>
                    <p>  New B.O.: 224, Brand Rath Road, Rainak Bazar, Opp. Naaz Complex, Jalandhar City</p>
                  </div>

                  <div class="email">
                  <i class="fas fa-envelope"></i>
                    <h4>Email:</h4>
                    <p> Aggarwalsparsh@gmail.com </p>
                  </div>

                  <div class="phone">
                  <i class="fas fa-phone"></i>
                    <h4>Call:</h4>
                    <p>+91 99883 63656<br>
                    +91 78890 76841

                  </div>

                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1703.9394222612386!2d75.57559176347655!3d31.334718899999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5a610ff0c90b%3A0x54a6e79764fe9d7c!2sBanarsi%20Lehnga%20House!5e0!3m2!1sen!2sin!4v1675059260586!5m2!1sen!2sin" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

              </div>

              <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="send-email" method="post" role="form" class="php-email-form">
                    @csrf
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="name">Your Name</label>
                      <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                      <div class="validate"></div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="name">Your Email</label>
                      <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                      <div class="validate"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="name">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group">
                    <label for="name">Message</label>
                    <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                    <div class="validate"></div>
                  </div>
                 
                  <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
              </div>

            </div>

          </div>
  </section>
 
<!-- ======= Contact Section Ends Here ======= --> 
<p align="center" class="py-2"><br>
   <button class="btn btn-dark" data-toggle="modal" data-target="#modalSocial" >Subscribe to Our News Letter</button>
   </p>
   

<!--Modal: modalSocial-->
<div class="modal fade" id="modalSocial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">

    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header  darken-3 white-text" style="background-color:#40BFD6;">
        <h4 class="title"><i class="fas fa-users"></i> Subscribe to Our Newsletter</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
      </div>

      <!--Body-->
      <div class="modal-body mb-0 text-center">
            <form method="POST" action="subscribe-news-letter">
                @csrf
                <input type="text" class="form-control"  name="name" placeholder="Your Name" required><br>
                <input type="email"  class="form-control"  name="email" placeholder="Your Email Id" required>
                <button class="btn" style="background-color:#40BFD6;">Submit</button>
            </form>
      </div>

    </div>
    <!--/.Content-->

  </div>
</div>
<!--Modal: modalSocial-->
  
  
   @if (session('status'))

        <script>
            $(document).ready(function () {

        $('#centralModalSuccess').modal('show');

        });
        </script>
@endif


@if($errors->any())

        <script>
            $(document).ready(function () {

        $('#centralModaldanger').modal('show');

        });
        </script>
@endif



 <!-- Central Modal Medium Success -->
 <div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-notify modal-success" role="document">
     <!--Content-->
     <div class="modal-content">
       <!--Header-->
       <div class="modal-header">
         <p class="heading lead"> Success</p>

         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="white-text">&times;</span>
         </button>
       </div>

       <!--Body-->
       <div class="modal-body">
         <div class="text-center">
           <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
           <p>{{session('status')}} </p>
         </div>
       </div>

       <!--Footer-->
       <div class="modal-footer justify-content-center">
         
         <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">Close</a>
       </div>
     </div>
     <!--/.Content-->
   </div>
 </div>
 <!-- Central Modal Medium Success-->
 
 <!-- Central Modal Medium Danger -->
 <div class="modal fade" id="centralModaldanger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-notify modal-danger" role="document">
     <!--Content-->
     <div class="modal-content">
       <!--Header-->
       <div class="modal-header">
         <p class="heading lead"> Form Not Submitted </p>

         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="white-text">&times;</span>
         </button>
       </div>

       <!--Body-->
       <div class="modal-body">
         <div class="text-center">
             
           <i class="fas fa-exclamation fa-4x mb-3 animated rotateIn"></i>
           <p>@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif </p>
         </div>
       </div>

       <!--Footer-->
       <div class="modal-footer justify-content-center">
         
         <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Close</a>
       </div>
     </div>
     <!--/.Content-->
   </div>
 </div>
 <!-- Central Modal Medium Danger-->
 
@endsection
  