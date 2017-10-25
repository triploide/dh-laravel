<html>
    <head>
        <title>Agregar Pelicula</title>
    </head>
    <body>

        @if (count($errors))
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form id="agregarPelicula" name="agregarPelicula" method="POST" action="/practica/rutas/formulario">
            {{ csrf_field() }}
            <div>
                <label for="title">Titulo</label>
                <input type="text" value="{{ old('title') }}" name="title" id="title"/>
            </div>
            <div>
                <label for="rating">Rating</label>
                <input type="text"  value="{{ old('rating') }}" name="rating" id="rating"/>
            </div>
            <div>
                <label for="awards">Premios</label>
                <input type="text" value="{{ old('awards') }}"   name="awards" id="awards"/>
            </div>
            <div>
                <label for="length">Duracion</label>
                <input type="text" value="{{ old('length') }}"  name="length" id="length"/>
            </div>
            <div>
                <label>Fecha de Estreno</label>
                <input type="date" value="{{ old('release_date') }}" name="release_date">
            </div>
            <input type="submit" value="Agregar Pelicula" name="submit"/>
        </form>
    </body>
</html>
