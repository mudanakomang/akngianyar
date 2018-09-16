<!--
Author: WebThemez
Author URL: http://webthemez.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>AKN Negeri Gianyar</title>
	<link rel="favicon" href="{{ asset('assets/images/favicon.png') }}">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css" media="screen') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel='stylesheet' id='camera-css'  href="{{ asset('css/camera.css') }}" type='text/css' media='all'>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="{{ asset('js/html5shiv.js')}}"></script>
	<script src="{{ asset('js/respond.min.js')}}"></script>
	<![endif]-->
	<style>
		#scroll {
			position:fixed;
			right:10px;
			bottom:10px;
			cursor:pointer;
			width:50px;
			height:50px;
			background-color:rgb(61, 132, 230);
			text-indent:-9999px;
			display:none;
			-webkit-border-radius:60px;
			-moz-border-radius:60px;
			border-radius:60px
		}
		#scroll span {
			position:absolute;
			top:50%;
			left:50%;
			margin-left:-8px;
			margin-top:-12px;
			height:0;
			width:0;
			border:8px solid transparent;
			border-bottom-color:#ffffff;
		}
		#scroll:hover {
			background-color:#e74c3c;
			opacity:1;filter:"alpha(opacity=100)";
			-ms-filter:"alpha(opacity=100)";
		}
	</style>
</head>
<body>
		<a href="#" id="scroll" style="display: none;"><span></span></a>
	<!-- Fixed navbar -->
	@include('layouts._navbar')
	<!-- /.navbar -->

	<!-- Header -->
	@yield('carousel')
	<!-- /Header -->

  @yield('content')
      
    	 
    @include('layouts._footer')
	<script type='text/javascript' src='{{ asset('js/jquery.min.js') }}'></script>
	<script type='text/javascript' src='{{ asset('js/fancybox/jquery.fancybox.pack.js')}}'></script>

	<script type='text/javascript' src='{{ asset('js/jquery.mobile.customized.min.js') }}'></script>
	<script type='text/javascript' src='{{ asset('js/jquery.easing.1.3.js') }}'></script>
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src=" {{ asset('js/modernizr-latest.js') }}"></script>

    <script type='text/javascript' src='{{ asset('js/camera.min.js') }}'></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/custom.js') }}"></script>
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_4').camera({
                transPeriod: 500,
                time: 3000,
				height: '600',
                loader: 'pie',
				pagination: true,
				thumbnails: false,
				hover: false,
                playPause: false,
                navigation: false,
				opacityOnGrid: false,
				imagePath: 'assets/images/'
			});

		});
	</script>
	<script>
        (function() {
            var nav = document.getElementById('navi'),
                anchor = nav.getElementsByTagName('a'),
                arr = window.location.pathname.split('/');
           		var i=arr.length-1;
           		var current=arr[i];
                console.log(current);

            for (var i = 0; i < anchor.length; i++) {
               var aa = anchor[i].href.split('/');
               var url=aa[aa.length-1];
                if(url === current) {
                    anchor[i].closest('li').className = "active";
                }
            }
        })();
        jQuery(document).ready(function(){
            jQuery(window).scroll(function(){
                if (jQuery(this).scrollTop() > 100) {
                    jQuery('#scroll').fadeIn();
                } else {
                    jQuery('#scroll').fadeOut();
                }
            });
            jQuery('#scroll').click(function(){
                jQuery("html, body").animate({ scrollTop: 0 }, 600);
                return false;
            });
        });
	</script>
    
</body>
</html>
