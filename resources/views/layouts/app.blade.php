<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title_page')</title>

	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container py-3">


		@include('inc.header')
		@if(Request::is('/'))
			@include('inc.hello')
		@endif
		@include('inc.messages')
		<div class="row">
			<div class="col-8">
				@yield('content')
			</div>
			<div class="col-4">
				@include('inc.aside')
			</div>
		</div>

		@include('inc.footer')
	</div>
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>