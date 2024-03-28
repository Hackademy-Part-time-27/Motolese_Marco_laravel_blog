<x-layout :title="'Articoli'">
    <h1>Articoli</h1>
    

    @if($articles)
        @foreach($articles as $article)
            <x-card
                :category="$article->category"
                :title="$article->title"
                :description="$article->description"
                :body="$article->body"
                :route="route('article',$article)"


             />
        @endforeach
    @else
        <p>Non ci sono articoli disponibili</p>
    @endif



</x-layout>
