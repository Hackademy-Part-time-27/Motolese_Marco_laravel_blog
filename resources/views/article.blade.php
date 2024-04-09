<x-layout>


        <h1 class="test">{{$article['title']}}</h1>

        <p>{{$article['description']}}</p>

@if($article->image)
<img class="img-fluid" src="{{Storage::url($article->image)}}" alt="{{$article['title']}}">
       @endif
</x-layout>