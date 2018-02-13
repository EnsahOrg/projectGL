@if (Session::has('success'))
	
	<div class="alert alert-success alert-dismissable col-md-6 col-md-offset-3" role="alert">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	<strong>Succes :</strong>{{Session::get('success')}}
	</div>
@endif

@if (count($errors) > 0)

	<div class="alert alert-danger alert-dismissable col-md-6 col-md-offset-3" role="alert">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
		<strong>Erreurs : </strong>
		<ul>
		@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
		</ul>
	</div>

@endif