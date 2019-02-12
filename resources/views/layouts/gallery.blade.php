@extends('skeleton')

@section('css')
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
<link rel="stylesheet" href="css/linearicons.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" 
integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/nice-select.css">					
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/booking.css">
<link rel="stylesheet" href="css/loading.css">
@endsection
@section('title','Gallery')
@section('component')
@include('component.notloginnav')
<!-- Start banner Area -->
<section class="generic-banner relative">
        <img class="our-menu-back" src="http://bit.ly/1KnDNGG" alt="">						
        <div class="container">
            <div class="row height align-items-center justify-content-center">
                <div class="col-lg-10">
                    <div class="generic-banner-content" style="float:left;">
                        <h2 class="text-white" style="text-align:left;">Our Gallery</h2>
                        <p class="text-white" style="text-align:left;"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>		
<!-- End banner Area -->	

<!-- Start Gallery Area -->
<gallery class="container section-top-border" style="margin-left:20px;">  
    
    <section gallery-image ng-repeat="item in Data" >
        <h3 ng-hide="loading == true"><%item.Date%></h3>
        <div class="row gallery-item">
            <div class="col-md-4 " ng-repeat="i in item.Image" > 
                <a href="<%i.img_url%>" class="img-pop-up" >
                    <div class="single-gallery-image" style="background: url(<%i.img_url%>);"></div>
                </a>
            </div>
        </div>
    </section>
    <div class="Loading-content">
            @include('component.spinner')
    </div>
</gallery>

<!-- End Gallery Area -->


	


@include('component.footer')
@endsection









@section('javascript')
<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/vendor/bootstrap.min.js"></script>	
<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.52.0/mapbox-gl.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.5/angular.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.5/angular-messages.js"></script>		

<script src="js/easing.min.js"></script>			
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.min.js"></script>	
<script src="js/jquery.magnific-popup.min.js"></script>	
<script src="js/owl.carousel.min.js"></script>			
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.nice-select.min.js"></script>			
<script src="js/app.js"></script>
<script src="js/directive/gallery.directive.js"></script>
@endsection