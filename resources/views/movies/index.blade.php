<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Películas</title>
</head>
<body>
	<h1>Películas</h1>

	@foreach ($movies as $movie)
		<p>{{ $movie->title }} - {{ $movie->genre->name }}</p>
	@endforeach
</body>
</html>