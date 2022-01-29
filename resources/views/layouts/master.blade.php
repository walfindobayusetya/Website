<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMP Negeri 6 Unggulan Sekayu</title>
    
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/Gambar/title.ico') }}" />

    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700" rel="stylesheet" type="text/css" />

    <!-- Style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('Landingpage/style.css') }}" />


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    

</head>
<body>
    
        @include('layouts.navbar')
        @yield('content')  

        {{-- {{ asset('Landingpage/') }} --}}

        <!-- Modernizr JS
		============================================ -->
    <script src="{{ asset('Landingpage/js/vendor/modernizr-2.8.3.min.js') }}"></script>
   
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
      <!-- jquery
		============================================ -->
    <script src="{{ asset('Landingpage/js/vendor/jquery-1.12.4.min.js') }}"></script>

    <!-- Popper JS
		============================================ -->
    <script src="{{ asset('Landingpage/js/popper.js') }}"></script>

    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset('Landingpage/js/bootstrap.min.js') }}"></script>

    <!-- bootstrap Toggle JS
		============================================ -->
    <script src="{{ asset('Landingpage/js/bootstrap-toggle.min.js') }}"></script>

    <!-- nivo slider js
		============================================ -->
    <script src="{{ asset('Landingpage/lib/nivo-slider/js/jquery.nivo.slider.js') }}"></script>
    <script src="{{ asset('Landingpage/lib/nivo-slider/home.js') }}"></script>

    <!-- wow JS
		============================================ -->
    <script src="{{ asset('Landingpage/js/wow.min.js') }}"></script>

    <!-- meanmenu JS
		============================================ -->
    <script src="{{ asset('Landingpage/js/jquery.meanmenu.js') }}"></script>

    <!-- Owl carousel JS
		============================================ -->
    <script src="{{ asset('Landingpage/js/owl.carousel.min.js') }}"></script>

    <!-- Countdown JS
		============================================ -->
    <script src="{{ asset('Landingpage/js/jquery.countdown.min.js') }}"></script>

    <!-- scrollUp JS
		============================================ -->
    <script src="{{ asset('Landingpage/js/jquery.scrollUp.min.js') }}"></script>

    <!-- Waypoints JS
		============================================ -->
    <script src="{{ asset('Landingpage/js/waypoints.min.js') }}"></script>

    <!-- Counterup JS
		============================================ -->
    <script src="{{ asset('Landingpage/js/jquery.counterup.min.js') }}"></script>

    <!-- Slick JS
		============================================ -->
    <script src="{{ asset('Landingpage/js/slick.min.js') }}"></script>

    <!-- Mix It Up JS
		============================================ -->
    <script src="{{ asset('Landingpage/js/jquery.mixitup.js') }}"></script>

    <!-- Venubox JS
		============================================ -->
    <script src="{{ asset('Landingpage/js/venobox.min.js') }}"></script>

    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('Landingpage/js/plugins.js') }}"></script>

    <!-- Google Map js
		============================================ -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU"></script>
    <script src="https://www.google.com/jsapi"></script>
    <script>
      function initialize() {
        var mapOptions = {
          zoom: 15,
          scrollwheel: false,
          center: new google.maps.LatLng(23.763494, 90.432226),
        };

        var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

        var marker = new google.maps.Marker({
          position: map.getCenter(),
          animation: google.maps.Animation.BOUNCE,
          icon: "img/map-marker.png",
          map: map,
        });
      }

      google.maps.event.addDomListener(window, "load", initialize);
    </script>

    <!-- main JS
		============================================ -->
    <script src="{{ asset('Landingpage/js/main.js') }}"></script>
</body>
</html>