<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ABOMAT | Kündigen jetzt ganz einfach!</title>

		<!-- Bootstrap CSS -->
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo asset('css/homepage.css'); ?>">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- ==================================================================================================== -->
		<!-- Navigation -->
		<!-- ==================================================================================================== -->
		<div class="navbar navbar-default">
			<div class="container">

			    <div class="navbar-header">
			        <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target=".navbar-responsive-collapse">
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			        </button>
			        <a class="navbar-brand" href="{{ action('Homepage\HomeController@index') }}">Abomat</a>
			    </div>

			    <div class="navbar-collapse collapse navbar-responsive-collapse">
			        <ul class="nav navbar-nav navbar-right">
			            <li><a href="{{ action('Homepage\NoticeController@index') }}">Jetzt kündigen!</a></li>
			            <li><a href="{{ action('Homepage\BlogController@index') }}">Blog</a></li>
			            <li><a href="{{ action('Homepage\HelpController@index') }}">Hilfe</a></li>
			            <li><a href="{{ action('Homepage\ContactController@index') }}">Kontakt</a></li>
			        </ul>
			    </div>

			</div>
		</div>

		<!-- ==================================================================================================== -->
		<!-- Content -->
		<!-- ==================================================================================================== -->
        @yield('content')

        <!-- ==================================================================================================== -->
		<!-- Footer -->
		<!-- ==================================================================================================== -->
		<div class="container-fluid footer">
			<div class="container">
				<div class="row footer-headlines">
					<div class="col-md-2">Apps</div>
					<div class="col-md-2">Abomat</div>
					<div class="col-md-2">Rechtliches</div>
					<div class="col-md-2">Infos</div>
					<div class="col-md-2">Bewertungen</div>
					<div class="col-md-2">Social Media</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<a href="#">IOS</a></br>
						<a href="#">Android</a></br>
						<a href="#">Windows</a></br>
						<a href="#">Blackberry</a>
					</div>
					<div class="col-md-2">
						<a href="#">Über uns</a></br>
						<a href="#">Media</a></br>
						<a href="#">Presse</a></br>
						<a href="#">Jobs</a>
					</div>
					<div class="col-md-2">
						<a href="#">Impressum</a></br>
						<a href="#">AGB</a></br>
						<a href="#">Datenschutz</a>
					</div>
					<div class="col-md-2">
						<a href="#">Statistiken</a></br>
						<a href="#">Glossar</a>
					</div>
					<div class="col-md-2">
						<a href="#">Kununu</a></br>
						<a href="#">check24</a></br>
						<a href="#">TÜV Rheinland</a>
					</div>
					<div class="col-md-2">
						<a href="#">Facebook</a></br>
						<a href="#">Twitter</a></br>
						<a href="#">Google+</a></br>
						<a href="#">Xing</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 copyright">&copy; 2015 - abomat.com</div>
				</div>
			</div>
		</div>

		<script src="<?php echo asset('js/all.js'); ?>"></script>
	</body>
</html>
