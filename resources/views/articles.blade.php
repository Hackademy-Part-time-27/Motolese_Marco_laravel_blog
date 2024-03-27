<x-layout :title="'Articoli'">
    <h1>Articoli</h1>
    

    @if($articles)
        @foreach($articles as $index => $article)
            <x-card
                :category="$article['category']"
                :title="$article['title']"
                :description="$article['description']"
                :route="route('article',$index)"
                :index="$index" />
        @endforeach
    @else
        <p>Non ci sono articoli disponibili</p>
    @endif



</x-layout>
