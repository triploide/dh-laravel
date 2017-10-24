<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actores</title>
</head>
<body>
	@foreach ($actors as $actor)
		<p>{{ $actor->getNombreCompleto() }}</p>
	@endforeach
</body>
</html>