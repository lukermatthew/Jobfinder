<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	

    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
	
	<!-- Favicon -->   
	<link href="{{ asset('fooblog/img/favicon.ico') }}" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('foodblog/css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('foodblog/css/font-awesome.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('foodblog/css/owl.carousel.css') }}"/>
	<link rel="stylesheet" href="{{ asset('foodblog/css/animate.css') }}"/>
	<link rel="stylesheet" href="{{ asset('foodblog/css/style.css') }}"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    @stack('css')

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

@include('layouts.home.partial.header')

	
    <section class="content">
    @yield('content')
</section>




@include('layouts.home.partial.footer')




	<!--====== Javascripts & Jquery ======-->
	<script src="{{ asset('foodblog/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('foodblog/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('foodblog/js/main.js') }}"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
       

{!! Toastr::message() !!}
<script>
@if($errors->any())
	@foreach($errors->all() as $error)
		  toastr.error('{{ $error }}','Error',{
			  closeButton:true,
			  progressBar:true,
		   });
	@endforeach
@endif
</script>
 @stack('js')

</body>
</html>