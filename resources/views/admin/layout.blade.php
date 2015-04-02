<!DOCTYPE html>
<html lang="eng">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ADMIN | Abomat</title>

		<!-- Bootstrap CSS -->
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo asset('css/all.css'); ?>">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="navbar navbar-default">
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target=".navbar-responsive-collapse">
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>
		        <a class="navbar-brand" href="{{ action('Admin\DashboardController@index') }}">Abomat</a>
		    </div>
		    <div class="navbar-collapse collapse navbar-responsive-collapse">
		        <ul class="nav navbar-nav navbar-right">
		            <li><a href="{{ action('Admin\CategoryController@index') }}">Category</a></li>
		            <li><a href="{{ action('Admin\CompanyController@index') }}">Company</a></li>
		            <li><a href="{{ action('Admin\ContractController@index') }}">Contract</a></li>
		            <li><a href="{{ action('Admin\MemberController@index') }}">Member</a></li>
		            <li><a href="{{ action('Admin\ReportController@index') }}">Report</a></li>
		        </ul>
		    </div>
		</div>
		<div class="container">
            @yield('content')
        </div>

		<script src="<?php echo asset('js/all.js'); ?>"></script>
	</body>
</html>