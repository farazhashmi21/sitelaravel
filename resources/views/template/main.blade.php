<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>The Site</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			width: auto;
			height: 100%;
		}
	</style>
</head>
<body class="container">
	@yield('content')
	<div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
	Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
</div>
</body>
</html>