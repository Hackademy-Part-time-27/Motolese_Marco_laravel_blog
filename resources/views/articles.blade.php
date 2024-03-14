<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=,initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<h1>Articoli</h1>


<div class="d-flex ms-4">
<a class="ms-3" href=" {{route('welcome')}}">home</a>
<a class="ms-3" class href=" {{route('contacts')}}">contact</a>
<a class="ms-3" href=" {{route('about-us')}}">about-us</a>
<a class="ms-3" href=" {{route('articles')}}">articles</a>
</div>






<div>
@if($articles)
        <ul>
            @foreach($articles as $id => $article)
            <li><a href="{{ route('article', $id)}}">{{ $article['title'] }}</a></li>
            @endforeach
        </ul>
        @else
        <p>Nessun articolo disponibile</p>
        @endif
      
</div>
</body>
</html>