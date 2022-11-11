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
            <input type="text" name="title" required maxlength="100">
        </div>
        <div>
            <label for="sale_date">Data uscita:</label>
            <input type="date" name="sale_date" required>
        </div>
        <div>
            <label for="thumb">Url immagine:</label>
            <input type="text" name="thumb" required maxlength="255">
        </div>
        <div>
            <label for="price">Prezzo:</label>
            <input type="number" name="price" required max="999999.99">
        </div>
        <div>
            <label for="series">Serie:</label>
            <input type="text" name="series" required maxlength="100">
        </div>
        <div>
            <label for="type">Tipo:</label>
            <input type="text" name="type" required maxlength="50">
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
