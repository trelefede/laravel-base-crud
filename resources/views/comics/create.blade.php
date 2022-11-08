<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Comic</title>
</head>

<body>
    <form method="POST" action="{{ route('comics.store') }}">
        @csrf
        <div>
            <label for="title">Titolo:</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="sale_date">Data uscita:</label>
            <input type="text" name="sale_date">
        </div>
        <div>
            <label for="thumb">Url immagine:</label>
            <input type="text" name="thumb">
        </div>
        <div>
            <label for="price">Prezzo:</label>
            <input type="number" name="price">
        </div>
        <div>
            <label for="series">Serie:</label>
            <input type="text" name="series">
        </div>
        <div>
            <label for="type">Tipo:</label>
            <input type="text" name="type">
        </div>
        <div>
            <label for="description">Descrizione:</label>
            <textarea name="description" cols="30" rows="10"></textarea>
        </div>
        <div>
            <input type="submit" value="Invia">
        </div>

    </form>
</body>

</html>
