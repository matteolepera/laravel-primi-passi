<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Laravel Page</title>
</head>

<body>
    <nav>
        <ul>
            <a href={{ route('products') }}>Prodotti</a>
            <a href={{ route('contacts') }}>Contattaci</a>
            <a href={{ route('about-us') }}>Chi siamo</a>
        </ul>
    </nav>
    <h1>Contattaci</h1>
    <div>
        <h3>Qui puoi contattatarci</h3>
        <p>{{$paragraph}}</p>
    </div>
    <a href={{ route('home') }}> Ritorna alla home</a>
</body>

</html>