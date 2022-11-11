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
            <input type="text" name="title" value="{{ old('title', $comic->title) }}" required maxlength="100">
            @error('title')
                <span class="is-invalid">{{ __('Testo troppo lungo o assente') }}</span>
            @enderror
        </div>
        <div>
            <label for="sale_date">Data uscita:</label>
            <input type="date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}" required>
            @error('sale_date')
                <span class="is-invalid">{{ __('Data inserita non valida') }}</span>
            @enderror
        </div>
        <div>
            <label for="thumb">Url immagine:</label>
            <input type="text" name="thumb" value="{{ old('thumb', $comic->thumb) }}" required maxlength="255">
            @error('thumb')
                <span class="is-invalid">{{ __('Url non valido') }}</span>
            @enderror
        </div>
        <div>
            <label for="price">Prezzo:</label>
            <input type="number" name="price" value="{{ old('price', $comic->price) }}" required max="999999.99">
            @error('price')
                <span class="is-invalid">{{ __('Prezzo non valido') }}</span>
            @enderror
        </div>
        <div>
            <label for="series">Serie:</label>
            <input type="text" name="series" value="{{ old('series', $comic->series) }}" required maxlength="100">
            @error('series')
                <span class="is-invalid">{{ __('Testo inserito troppo lungo') }}</span>
            @enderror
        </div>
        <div>
            <label for="type">Tipo:</label>
            <input type="text" name="type" value="{{ old('type', $comic->type) }}" required maxlength="50">
            @error('type')
                <span class="is-invalid">{{ __('Testo troppo lungo') }}</span>
            @enderror
        </div>
        <div>
            <label for="description">Descrizione:</label>
            <textarea name="description" cols="30" rows="10"> {{ old('description', $comic->description) }} </textarea>
        </div>
        <div>
            <input type="submit" value="Invia">
        </div>

    </form>
</body>

</html>
