<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
</head>

<body>
    @foreach ($comics as $comic)
        <div>
            <a href="{{ route('comics.show', $comic->id) }}"> {{ $comic->title }} </a>
        </div>
    @endforeach
</body>

</html>
