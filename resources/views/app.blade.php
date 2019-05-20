<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="/favicon.ico">
	
	<title>Translator for Laravel by Flatorb</title>
	
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<!-- Custom styles for this template -->
	<link href="/vendor/flatorb/dashboard.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
	<a class="navbar-brand col-sm-3 col-md-2 col-xl-1 mr-0" href="#">Translator</a>
</nav>

<div class="container-fluid">
	<div class="row">
		<nav class="col-xl-1 col-md-2 d-none d-md-block bg-light sidebar">
			<div class="sidebar-sticky mt-5">
				<ul class="nav flex-column">
					<li class="nav-item">
						<a class="nav-link" href="{{ route('translator.index') }}">Translations</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('translator.import') }}">Import</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('translator.index') }}">Settings</a>
					</li>
				</ul>
				
				<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
					<span>Translate with</span>
				</h6>
				
				<ul class="nav flex-column">
					<li class="nav-item">
						<a class="nav-link" href="{{ route('translator.translate.all.google') }}">Google (all)</a>
					</li>
				</ul>
			</div>
		</nav>
		
		<main role="main" class="col-xl-11 col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
				<h1 class="h2">@yield('heading')</h1>
			</div>
			
			@yield('content')
		</main>
	</div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
