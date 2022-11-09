<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit comic</title>
</head>

<body>
    <form method="POST" action="{{ route('comics.update', $comic->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Titolo:</label>
            <input type="text" name="title" value="{{ $comic->title }}">
        </div>
        <div>
            <label for="sale_date">Data uscita:</label>
            <input type="text" name="sale_date" value="{{ $comic->sale_date }}">
        </div>
        <div>
            <label for="thumb">Url immagine:</label>
            <input type="text" name="thumb" value="{{ $comic->thumb }}">
        </div>
        <div>
            <label for="price">Prezzo:</label>
            <input type="number" name="price" value="{{ $comic->price }}">
        </div>
        <div>
            <label for="series">Serie:</label>
            <input type="text" name="series" value="{{ $comic->series }}">
        </div>
        <div>
            <label for="type">Tipo:</label>
            <input type="text" name="type" value="{{ $comic->type }}">
        </div>
        <div>
            <label for="description">Descrizione:</label>
            <textarea name="description" cols="30" rows="10" value="{{ $comic->description }}"></textarea>
        </div>
        <div>
            <input type="submit" value="Modifica">
        </div>

    </form>
</body>

</html>
