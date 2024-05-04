<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="canonical" href="https://essayhelp.com/">
	<link rel="icon" href="{{ asset('images/sop-craft-icon.png')}}" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:wght@100..900&display=swap" rel="stylesheet">
	<!-- Bootstrap core CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<!-- Slick Slider style -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Bootstrap Datepicker CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css" integrity="sha512-34s5cpvaNG3BknEWSuOncX28vz97bRI59UnVtEEpFX536A7BtZSJHsDyFoCl8S7Dt2TPzcrCEoHBGeM4SUBDBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Custom style -->
	<link rel="stylesheet" href="{{ asset('css/style.css')}}" />
	<!-- Polyfill.io will load polyfills your browser needs -->
	<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
	<title>Welcome to SOP Craft</title></head>

<body class="d-flex flex-column h-100">
	<header class="sticky-top border-bottom">
	  <!-- Fixed navbar fixed-top class bg-light-->
	  <nav class="navbar navbar-expand-lg navbar-light bg-white">
	    <div class="container">
	      <a class="navbar-brand" href="{{route('home')}}">
	        <picture>
	          <source srcset="{{ asset('images/sop-craft-logo.png')}}" type="image/png">
	          <source srcset="{{ asset('images/sop-craft-logo.webp')}}" type="image/webp">
	          <img src="{{ asset('images/sop-craft-logo.svg')}}" alt="Essay Help" title="Essay Help">
	        </picture>
	      </a>
	      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
	        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	      <div class="collapse navbar-collapse" id="navbarText">
	        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
				<x-menu/>
				<li class="nav-item">
					<a class="nav-link" href="javascript:void(0)">My Assignment</a>
				</li>
	          	<x-login_logout_menu/>          
	        </ul> 
			<x-order_now/>
	      </div>
	    </div>
	  </nav>  
	</header>
	