<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Document</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
</head>
<style>
	.btn-fix{
		position: fixed;
		left: 5px;
		bottom: 65px;
	}
</style>
<body>
	<div style="height: 600px;">
	    <div id="fm"></div>
	</div>
	<a href="/logout" class="btn-fix btn btn-dark">Logout <i class="fas fa-sign-out-alt"></i></a>
	<script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
</body>
</html>