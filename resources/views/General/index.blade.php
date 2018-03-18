<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    	<meta name="viewport" content="width=device-width" />


		<link rel="shortcut icon" href="{{asset('/images/wasp.ico')}}" />
		

    	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>Blog | WASP</title>
		  <!-- Styles -->
     
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/toastr.min.css') }} ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- Bootstrap 4.0 and Paper kit CSS -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link href="{{asset('css/paper-kit.min.css')}}" rel="stylesheet" type="text/css">


		<!-- FontAweome CDN -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">



		<!-- Some Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Leckerli+One' rel='stylesheet' type='text/css'>

		<!-- jQuery UI CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset('js/jui/jquery-ui.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('js/jui/jquery-ui.min.css')}}">		

		<!--Our CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset('css/style.min.css')}}">
		<style type="text/css">
			.imgt{
				background-image: url("images/mainImage.png");
				    height: 520px;
				    background-repeat: no-repeat;
				    background-position: center;
				    width: 100%;
				    background-size: cover;
			}
		.spanis-1{
			 color: red;
		}
		.spanis-2{
			 color: green;
		}
		.spanis-3{
			 color: blue;
		}
		.spanis-4{
			 color: yellow;
		}
		</style>
	</head>

	<body>

	    <nav class="navbar navbar-expand-md fixed-top navbar-transparent" color-on-scroll="300">
	        <div class="container">
				<div class="navbar-translate">
					<a class="navbar-brand logo" href="{{route('welcome')}}">W A S P</a>
		            <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-bar"></span>
						<span class="navbar-toggler-bar"></span>
						<span class="navbar-toggler-bar"></span>
		            </button>
				</div>
		        <div class="collapse navbar-collapse" id="navbarToggler">
		            <ul class="navbar-nav ml-auto">
	                    <li class="nav-item">
	                        <a class="nav-link" rel="tooltip" title="Star on GitHub" data-placement="bottom" href="https://www.github.com/WASP" target="_blank">
	                            <i class="fab fa-github-alt"></i>
	                        </a>
	                    </li>
	                    <li class="nav-item">
		                    <a href="{{route('postall')}}" title="See all Posts" class="nav-link">
		                    	<i class="fa fa-rss"></i>
		                    </a>
		                </li>
		                <li class="nav-item">
		                	 @guest
		                    <a href="{{route('login')}}" title="Login" class="nav-link">
		                    	@else
		                    	<a href="{{route('home')}}" title="Login" class="nav-link">
		                    	@endguest
		                    	<i class="fa fa-user-circle"></i>
		                    </a>
		                </li>
		            </ul>
		        </div>
			</div>
	    </nav>

	    @yield('content')
		
    	
    		<div class="container-fluid subscribe">
    			<div class="container">
    				<div class="row">
    					<div class="col-lg-6 col-md-6 col-sm-12">
    						<h3 class="text-danger">
    							<i class="fa fa-rss"></i>&nbsp;
    							Subscribe to our RSS
    						</h3>
    						<br>
    						<div class="input-group">
            					<input type="text" class="boxee" placeholder="Enter Email" aria-describedby="basic-addon1">
        					</div>
    					</div>
    					<div class="col-lg-6 col-md-6 col-sm-12">
    						<blockquote class="blockquote">
    							<p>
    								By subscribing to our newsletter, you will get updates with all the WASP related news and also be able to get an early access on WASP Products. Just enter your email and leave the rest to us.
    							</p>
    							<footer class="blockquote-footer">
    							  	<cite title="Source Title">WASP Team</cite>
    							</footer>
    						</blockquote> 
    					</div>
    				</div>
    				<br><br><br>
    				<div class="text-center">
    					<div class="row">
    						<h6>&copy; 2018. All Rights Reserved | &nbsp;</h6>
    						<a href="{{route('contact')}}">CONTACT US</a>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>		
	</body>

	
	<!-- Core JS Files -->
		<script src="{{asset('js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('js/jquery-ui-1.12.1.custom.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('js/popper.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
	
	<!--Backup Scripts -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  	<!-- Bootstrap Scripts-->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" integrity="sha384-feJI7QwhOS+hwpX2zkaeJQjeiwlhOP+SdQDqhgvvo1DsjtiSQByFdThsxO669S2D" crossorigin="anonymous"></script>

	<!-- JQuery and Popper.js -->
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

  	<!-- jQuery and jQuery UI -->
		<script src="{{asset('js/jquery-3.2.1.js')}}" type="text/javascript"></script>
		<script src="{{asset('js/jquery-ui-1.12.1.custom.min.js')}}" type="text/javascript"></script>

	<!--  Paper Kit Initialization snd functons -->
		

	<!--  Plugins for Slider -->
		<script src="{{asset('js/nouislider.min.js')}}"></script>

	<!-- Switches -->
		<script src="{{asset('js/bootstrap-switch.min.js')}}"></script>

	<!-- Tooltip -->
		<script type="text/javascript">
			$('[data-toggle="tooltip"]').tooltip();
		</script>
		<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src=" {{asset('js/toastr.min.js')}} "></script>
    <script>
        @if(Session::has('success'))
            toastr.success("{{Session::get('success')}}")
        @elseif(Session::has('nope'))
            toastr.warning("{{Session::get('nope')}}")
        @endif

    </script>
    @yield('scripts')

</html>