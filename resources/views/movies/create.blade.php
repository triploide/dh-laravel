<html>
    <head>
        <title>Agregar Pelicula</title>
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <style type="text/css">
            div {margin-top: 20px}
            body {padding: 20px}
        </style>
    </head>
    <body>

        @if (count($errors))
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form id="agregarPelicula" name="agregarPelicula" method="POST" action="/movies" enctype="multipart/form-data">
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
                <label for="length">Duración</label>
                <input type="text" value="{{ old('length') }}"  name="length" id="length"/>
            </div>
            <div>
                <label for="poster">Poster</label>
                <input type="file" value=""  name="poster" id="poster" multiple />
            </div>
            <div>
                <label for="length">Género</label>
                <select name="genre_id">
                    @foreach (\App\Genre::all() as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                    @endforeach
                </select>
                
            </div>
            <div>
                <label>Fecha de Estreno</label>
                <input type="date" value="{{ old('release_date') }}" name="release_date">
            </div>
            <input type="submit" value="Agregar Pelicula" name="submit"/>
        </form>
    </body>
</html>
