<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$nombre}}</title>
</head>
<body>

	@if ($condicion)
		<p>Dentro del if</p>
	@else
		<p>Dentro del else</p>
	@endif

	@for ($i = 1; $i <= 3; $i++)
		<p>{{ $i }}</p>
	@endfor

</body>
</html>