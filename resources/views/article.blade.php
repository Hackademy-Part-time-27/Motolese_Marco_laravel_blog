<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


<div class="d-flex ms-4">
<a class="ms-3" href=" {{route('welcome')}}">home</a>
<a class="ms-3" class href=" {{route('contacts')}}">contact</a>
<a class="ms-3" href=" {{route('about-us')}}">about-us</a>
<a class="ms-3" href=" {{route('articles')}}">articles</a>
</div>











<h1 class="title mt-5 mb-5">{{ $article['title'] }} </h1>

<div>
<h2 class="mb-3"> {{ $article['category'] }} </h2>

<h3> {{ $article['description'] }} </h3>
</div>
<div>
  <button> <a href= "/articles">Torna agli articoli</a></button>
</div>