<!DOCTYPE html>
<html>

<head>
	<!-- Smartsupp Live Chat script -->
	<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=YeJ7noFxOXmy1ifQiYG7TAegMixXYrzqSPS6LjPJRdYNtvuHFeQR7BF72zIkGU4S0qZxZIxEawbpmXFcqJ9RCQ" charset="UTF-8"></script>
	<script type="text/javascript">
	var _smartsupp = _smartsupp || {};
	_smartsupp.key = 'f473a1cc9656f5cc5e5871e67d9fdf6f47a5621f';
	window.smartsupp || (function(d) {
		var s, c, o = smartsupp = function() {
			o._.push(arguments)
		};
		o._ = [];
		s = d.getElementsByTagName('script')[0];
		c = d.createElement('script');
		c.type = 'text/javascript';
		c.charset = 'utf-8';
		c.async = true;
		c.src = 'https://www.smartsuppchat.com/loader.js?';
		s.parentNode.insertBefore(c, s);
	})(document);
	</script>
	<!-- <link rel="manifest" href="manifest.json" /> -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>phemesafetrade.com</title>
	<meta name="designer" href="https://codemasterweb.com">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">


	<script type="text/javascript">
	//
	< ![CDATA[var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.trust-provider.com/" : "http://www.trustlogo.com/"); document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
			//]]>
	</script>
</head>

<body  @if (\Request::is('login','register','password/reset')) class="inner-page" @endif>
	
        @if (\Request::is('/'))  
        <header class="home main-header">
		<div class="image-layer" style="background-image:url({{asset('img/3.jpg')}});"></div>
		<div class="shape-1"></div>
		<div class="shape-2"></div>
        @endif
        @if (\Request::is('login','register','password/reset'))  
        <header class="home main-header">
            <div class="header-bg"></div>
        @endif
        
		<div class="container">
			<div class="row">
				<div class="top-header" style="padding-right:0; padding-left:0">
					<div class="col-md-2 col-sm-2 col-xs-2">
						<div class="logo">
							<a href="/"> <img src="{{asset('img/header-main.png')}}"> </a>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6">
						<ul class="navbar">
							<li> <a href="?a=profile">Company Profile</a> </li>
							<li> <a href="?a=support">Help Center</a> </li>
							<!--<li style="margin-right:0"><a href="">Demo Account</a></li>-->
						</ul>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4 text-right">
						
						@auth

  @else
  <div class="login-register">
							<div class="login"> <a href="/login">Login</a> </div>
							<div class="register"> <a href="/register">Register</a> </div>
						</div>
@endauth

						<div class="menu-icon">
							<svg viewBox="0 0 114.03 93">
								<g id="menuIcon" viewBox="0 0 114.03 93">
									<path d="M297.64,371.67h114m-114,39h114m-114,39h114" transform="translate(-297.64 -364.17)" fill="none" stroke-miterlimit="10" stroke-width="15"></path>
								</g>
							</svg>
						</div>
					</div>
				</div>
			</div>
            @if (\Request::is('/'))  
            <div class="home-intro" style="float:left"> <span class="welcome">Join in with the thrilling team of phemesafetrade.com</span>
				<h1 class="page-title" style="font-size: 24px">The way to the future of investing online with safety, security and satisfaction ensured.</h1>
				<p class="page-desc"> Investing online is now simple, comfortable and fun. With a team of experts, we ensure your safety sits on top of the priority list. We use highly proven, safe and modern strategies and methods, allowing investors to make money without any risk whatsoever. </p>
				<a style="width: initial;" class="btn btn--white btn--twoPart" href="?a=profile"> <span>How phemesafetrade.com can help?</span>
					<div>
						<svg id="arrow" viewBox="0 0 83.82 125.21">
							<g id="arrowRight" viewBox="0 0 83.82 125.21">
								<polyline points="10.61 10.61 62.61 62.61 10.61 114.61" fill="none" stroke="" stroke-miterlimit="10" stroke-width="30"></polyline>
							</g>
						</svg>
					</div>
				</a>
			</div>
			<div class="home-intro" style="float:right;text-align:right;margin-top: 225px;"> <img src="{{asset('img/bonus.png')}}" style="    width: 290px;
    position: absolute;
    top: -192px;right:-40px"> <span style="background:#FFAA17;padding:6px 30px" class="welcome">
            <b>$10 SIGNUP BONUS </b> For the first 10,000 INVESTORS <center>
              <br />
              <strong>
                <a href="?a=rules">
                  <span style="color: #ffffff;">Check terms and conditions here </a>
          </span> </strong>
				</center>
			</div>
		</div>
@endif
			
	</header>
    @yield('content')
	
	<script src="styles/js/jquery-3.2.1.min.js"></script>
	<script src="styles/js/general.js"></script>
	<script src="styles/js/svg4everybody.min.js"></script>
	<script src="styles/js/clipboard.min.js"></script>
	<script src="styles/js/TweenMax.min.js"></script>
	<script src="styles/js/ScrollMagic.min.js"></script>
	<script src="styles/js/animation.gsap.min.js"></script>
	<script src="styles/js/DrawSVGPlugin.min.js"></script>
	<script src="styles/js/services.js"></script>
	<script>
	svg4everybody();
	new Clipboard('.btn--outlineCopylink');
	</script>
	<style>
	@media only screen and (max-width: 500px) {
		.about-content .about-atributies .atributies-holder ul li {
			height: auto !important;
			padding: 10px 10px 10px 20px;
		}
	}
	</style>
</body>

</html>