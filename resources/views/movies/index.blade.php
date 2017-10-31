<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Películas</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Películas</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				@foreach ($movies as $movie)
					<p>{{ $movie->title }} - {{ $movie->genre->name }}</p>
				@endforeach
			</div>
		</div>
	</div>
</body>
</html>