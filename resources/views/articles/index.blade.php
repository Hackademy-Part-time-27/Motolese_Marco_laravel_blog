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
<td>{{ $article->category }}</td>
<td>
    @if($article->visible)
<span class="badge text bg-success">Si</span>
    @else
    <span class="badge text bg-danger">No</span>
    @endif
</td>
<td></td>
</tr>
    @endforeach
</tbody>

        </table> 
        </div>
</x-layout>