

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<!-- For-Mobile-Apps -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Lucid Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->
<!-- Style --> <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<div class="container">
<h1>Please Log in to continue</h1>
	<div class="signin">
     	<form method="POST" action="{{route('login')}}">
		{{ csrf_field() }}
	      	<input type="text" name="login" class="user"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" />
	      	<input type="password" name="password" class="pass" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" />
	      	<label>
		  		<input type="checkbox" value="Remember-Me" /> Remember Me?
		  	</label>
          	<input type="submit" value="LOGIN" />
	 	</form>
	</div>
</div>

</body>
</html>