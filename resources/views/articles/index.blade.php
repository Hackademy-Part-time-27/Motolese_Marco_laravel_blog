<x-layout title="Articoli">
    <div class="row">
        <div class="col-md-6">
            <h1>Articoli</h1>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('articles.create') }}" class="btn btn-warning mt-5 fs-5 fw-bold">CREA ARTICOLO</a>
        </div>
    </div>

    <x-success />

    <div class="mt-5">
        <table class="table table-secondary table-striped mt-5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titolo</th>
                    <th>Categoria</th>
                    <th>Visibile</th>
                    <th class="text-end">AZIONI DISPONIBILI</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>
                        @foreach($article->categories as $category)
                        <span class="me-3">{{ $category->name }}</span>
                        @endforeach
                    </td>
                    <td>
                        @if($article->visible)
                        <span class="badge text-bg-success">Si</span>
                        @else
                        <span class="badge text-bg-danger">No</span>
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