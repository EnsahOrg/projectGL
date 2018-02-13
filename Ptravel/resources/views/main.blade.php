	<!DOCTYPE HTML>

<html>
		
	<head>
	@include('partials/_head')
	</head>

	@include('partials/_header')

	<body id="top">

	<div class="container">

		@include('partials/_messages')
		@yield('content')

	</div>
<!--
	<style>
.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: red;
    color: white;
    text-align: center;
}
</style>

	<div class="footer @include('partials/_footer')">
		-->
	</div> 
    @include('partials/_script')		

	</body>
</html>