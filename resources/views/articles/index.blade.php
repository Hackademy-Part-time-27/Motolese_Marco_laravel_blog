<x-layout title="Articoli"> 
        <div class="row">
                <div class="col-md-6">
        <h1>Articoli</h1> 
        </div> 
        <div class="col-md-6 text-end">
                    <a href="{{ route('articles.create') }}" class="btn btn-success">Crea articolo</a>
                </div>
    </div>
 @if(session()->has('success'))
<div class="alert alert-success mx-4">
     {{session('success')}}
</div>
@endif


 <div class="mx-4">
        <table class="table table-bordered">
        
                <thead>
                        <tr>
                            <th>#</th>
                            <th>Titolo</th>
                            <th>Categoria</th>
                            <th>Visible</th>
                            <th></th>

                        </tr>
                        
                </thead>
<tbody>
    @foreach($articles as $article)
<tr>


<td>{{ $article->id }}</td>
<td>{{ $article->title }}</td>
@if(! $article->category_id)
<td></td>
@else
<td>{{ $article->category->id }}</td>
@endif
<td>

    @if($article->visible)
<span class="badge text bg-success">Si</span>
    @else
    <span class="badge text bg-danger">No</span>
    @endif
</td>
<td class="text-end">

    <a href="{{ route('articles.edit', $article) }}" class="btn btn-warning fw-bold me-4">MODIFICA</a>
    <form class="d-inline" action="{{ route('articles.destroy', $article) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger fw-bold">ELIMINA</button>
    </form>
 </td>
</tr>
    @endforeach
</tbody>

        </table> 
        </div>
</x-layout>